<?php
/**
 * This file adds functions to the GreenLight theme for WordPress.
 *
 * @package GreenLight
 * @author  Wpsoul
 * @license GNU General Public License v2 or later
 * @link    https://greenlightbuilder.pro/
 */

if ( !defined( 'GREENLIGHT_THEME_VERSION' ) ) {
	define('GREENLIGHT_THEME_VERSION', '1.9');
}
if ( !defined( 'GREENLIGHT_THEME_DIR' ) ) {
	define('GREENLIGHT_THEME_DIR', get_template_directory_uri());
}
if ( !defined( 'GREENLIGHT_THEME_PATH' ) ) {
	define('GREENLIGHT_THEME_PATH', get_template_directory());
}
add_filter( 'should_load_separate_core_block_assets', '__return_true' );


//////////////////////////////////////////////////////////////////
// Register assets
//////////////////////////////////////////////////////////////////

add_action('init', 'greenlight_theme_register_assets');
function greenlight_theme_register_assets(){

	//Main styles
	wp_register_style( 'greenlight-style', GREENLIGHT_THEME_DIR . '/assets/style.min.css', array(), GREENLIGHT_THEME_VERSION );


	//Core styles - All moved to theme.json as inline styles

	register_block_style(
        'core/group',
        array(
            'name'  => 'no-margin',
            'label' => __('No margin', 'greenlight'),
            'inline_style' => '.wp-block-group.is-style-no-margin {margin-top:0;margin-bottom:0;}',
        )
    );

	register_block_style(
        'core/list',
        array(
            'name'  => 'nounderline',
            'label' => __('Unstyled view', 'greenlight'),
            'inline_style' => 'ul.is-style-nounderline {margin:0; padding:0;list-style:none}ul.is-style-nounderline a{text-decoration:none}ul.is-style-nounderline li{list-style:none}',
        )
    );

}


//////////////////////////////////////////////////////////////////
// Register theme support functions
//////////////////////////////////////////////////////////////////

add_action( 'after_setup_theme', 'greenlight_theme_setuphooks' );
if ( ! function_exists( 'greenlight_theme_setuphooks' ) ) {
	function greenlight_theme_setuphooks() {

		// Make theme available for translation.
		load_theme_textdomain( 'greenlight', GREENLIGHT_THEME_PATH . '/languages' );

		add_theme_support('editor-color-palette', array());

		//responsive iframes
		add_theme_support( 'responsive-embeds' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./assets/editor.css'
			)
		);

		//WP supports
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
			]
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		//Core block styles moved to theme.json as inline styles

	}
}


//////////////////////////////////////////////////////////////////
//Assets Render
//////////////////////////////////////////////////////////////////

// Frontend assets
add_action( 'wp_enqueue_scripts', 'greenlight_theme_enqueue_style_sheet' );
function greenlight_theme_enqueue_style_sheet() {

	//global styles
	wp_enqueue_style( 'greenlight-style');

}


//////////////////////////////////////////////////////////////////
//Includes
//////////////////////////////////////////////////////////////////

// Include block patterns.
require GREENLIGHT_THEME_PATH . '/inc/block-patterns.php';

// Include GitHub Theme Updater
require GREENLIGHT_THEME_PATH . '/inc/github-updater-config.php';

// Include Woocommerce
if (class_exists('Woocommerce')) {
require GREENLIGHT_THEME_PATH . '/inc/woocommerce/functions.php';
}


//////////////////////////////////////////////////////////////////
// Filters
//////////////////////////////////////////////////////////////////

//Default blank template
add_filter( 'block_editor_settings_all', function( $settings ) {
    $settings['defaultBlockTemplate'] = '
	<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header", "theme":"greenlight"} /-->
	<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"site-content"} -->
<main class="wp-block-group site-content" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0;padding-bottom:50px;padding-left:0">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-content {"align":"full","layout":{"inherit":true}} /-->
	</main>
	<!-- /wp:group -->
	<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer is-style-no-margin", "theme":"greenlight"} /-->
';
	return $settings;
});

function greenlight_display_performance_statistics() {
    global $wpdb;

    // Get memory usage
    $memory_usage = size_format(memory_get_usage());

    // Get peak memory usage
    $peak_memory_usage = size_format(memory_get_peak_usage());

    // Get number of database queries
    $db_queries = get_num_queries();

    // Get page load time
    $load_time = timer_stop();

    // Build the output
    $output = "<div class='performance-stats'>";
    $output .= "<p><strong>Database Queries:</strong> $db_queries</p>";
    $output .= "<p><strong>Memory Usage:</strong> $memory_usage</p>";
    $output .= "<p><strong>Peak Memory Usage:</strong> $peak_memory_usage</p>";
    $output .= "<p><strong>Page Load Time:</strong> {$load_time} seconds</p>";
    $output .= "</div>";

    echo $output;
}

// Hook to display stats at the bottom of the page
//add_action('wp_footer', 'greenlight_display_performance_statistics');

//Remove core colors and gradients
function remove_all_gradients_and_colors() {
    // Remove color palette
    add_theme_support('editor-color-palette', array());
    
    // Remove gradient palette
    add_theme_support('editor-gradient-presets', array());
    
    // Filter out default gradients from theme.json
    add_filter('wp_theme_json_data_default', function($theme_json) {
        $data = $theme_json->get_data();
        
        // Remove default color palette
        if (isset($data['settings']['color']['palette']['default'])) {
            $data['settings']['color']['palette']['default'] = array();
        }
        
        // Remove default gradient palette
        if (isset($data['settings']['color']['gradients']['default'])) {
            $data['settings']['color']['gradients']['default'] = array();
        }
        
        // Disable all color and gradient features
        $data['settings']['color']['defaultPalette'] = false;
        $data['settings']['color']['defaultGradients'] = false;
        $data['settings']['color']['custom'] = false;
        $data['settings']['color']['customGradient'] = false;
        
        return new WP_Theme_JSON_Data($data, 'default');
    });
}
add_action('after_setup_theme', 'remove_all_gradients_and_colors');

//Function to detect if GL or GS plugin is active
function is_glgs_active() {
    return defined('GL_PLUGIN_VERSION') || defined('GREENSHIFT_DIR_URL');
}