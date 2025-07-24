<?php
/**
 * Greenlight: Block Patterns
 *
 * @since Greenlight 0.8.0
 */

/**
 * Registers block patterns, categories, and type.
 *
 * @since Greenlight 0.8.0
 */
function greenlight_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		// phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category_type
		register_block_pattern_category_type( 'greenlight', array( 'label' => __( 'GreenLight Theme', 'greenlight' ) ) );
	}

	$block_pattern_categories = array(
		'greenlight-general' => array(
			'label'         => __( 'Greenlight General', 'greenlight' ),
			'categoryTypes' => array( 'greenlight' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Greenlight 0.8.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'greenlight_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		// phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		register_block_pattern_category( $name, $properties );
	}

}
add_action( 'init', 'greenlight_register_block_patterns', 9 );