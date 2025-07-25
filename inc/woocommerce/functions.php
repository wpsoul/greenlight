<?php
/**
 * GreenLight: Woocommerce
 *
 * @since GreenLight 1.0
 */

add_theme_support( 'woocommerce');

//////////////////////////////////////////////////////////////////
// WooCommerce Assets
//////////////////////////////////////////////////////////////////

add_action('init', 'greenlight_theme_register_woo_assets');
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_action('wp_enqueue_scripts', 'greenlight_woo_enqueue', 11);
add_action( 'enqueue_block_assets', 'gs_load_custom_style_on_woocommerce_product_edit' );

function greenlight_theme_register_woo_assets(){

    wp_register_style('woocommerce-general', GREENLIGHT_THEME_DIR . '/assets/woocommerce/css/woocommerce.css', array(), GREENLIGHT_THEME_VERSION);
    wp_style_add_data( 'woocommerce-general', 'rtl', 'replace' );

    wp_register_style('woocommerce-smallscreen', GREENLIGHT_THEME_DIR . '/assets/woocommerce/css/woocommerce-smallscreen.css', array('woocommerce-general'), GREENLIGHT_THEME_VERSION, 'only screen and (max-width: ' . apply_filters( 'woocommerce_style_smallscreen_breakpoint', '768px' ) . ')');
    wp_style_add_data( 'woocommerce-layout', 'rtl', 'replace' );

	wp_register_style('greenlight-woo-single', GREENLIGHT_THEME_DIR . '/assets/woocommerce/css/woosingle.css', array('woocommerce-general'), GREENLIGHT_THEME_VERSION);
    wp_style_add_data( 'greenlight-woo-single', 'rtl', 'replace' );

	
    wp_register_style('greenlight-woo-comments', GREENLIGHT_THEME_DIR . '/assets/woocommerce/css/woocomments.css', array('woocommerce-general'), GREENLIGHT_THEME_VERSION);

	wp_register_style('greenlight-woo-singlefix', GREENLIGHT_THEME_DIR . '/assets/woocommerce/css/woosinglefix.css', array('woocommerce-general'), GREENLIGHT_THEME_VERSION);

}

if (!function_exists('greenlight_woo_enqueue')){
    function greenlight_woo_enqueue() {   

        wp_enqueue_style( 'woocommerce-general');
		if(is_singular('product')){
			wp_enqueue_style('greenlight-woo-single');
		} 

        wp_enqueue_style( 'woocommerce-smallscreen');
    } 
}

function gs_load_custom_style_on_woocommerce_product_edit() {
	if(is_admin()){
		wp_enqueue_style( 'greenlight-woo-singlefix' );
	}
}


//Helpers
function greenlight_get_ratings_counts( $product ) {
    global $wpdb;
    
    $counts     = array();
    $raw_counts = $wpdb->get_results( $wpdb->prepare("
            SELECT meta_value, COUNT( * ) as meta_value_count FROM $wpdb->commentmeta
            LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
            WHERE meta_key = 'rating'
            AND comment_post_ID = %d
            AND comment_approved = '1'
            AND meta_value > 0
            GROUP BY meta_value
        ", $product->get_id() ) );
    
    foreach ( $raw_counts as $count ) {
        $counts[ $count->meta_value ] = $count->meta_value_count;
    }
    
    return $counts;
}	

function gl_woo_rating_icons_html($rating, $count){
	$html = '';
	if($rating > 0){
		$rating = round($rating, 2);
		for ($i = 1; $i <= 5; $i++){
	    	if ($i <= $rating){
	    		$active = ' active';
	    	}else{
	    		$half = $i - 0.5;
	    		if($half <= $rating){
		    		$active = ' halfactive';		    			
	    		}else{
	    			$active ='';
	    		}
	    	}
	        $html .= '<span class="frwoostar frwoostar'.$i.$active.'">&#9733;</span>';
		}
	}
	return $html;
}


// pros and cons in comment form
add_filter('woocommerce_product_review_comment_form_args', 'greenlight_add_woo_pros_cons_form_fields');
function greenlight_add_woo_pros_cons_form_fields($comment_form){
	if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
 		global $product;
 		$productid = $product->get_id();
		$userid = get_current_user_id();
		$commented = get_user_meta($userid, '_added_woo_pros_cons', true);
		if(empty($commented) || !is_array($commented)){
			$flagged = false;
		}elseif(in_array($productid, $commented)){
			$flagged = true;
		}else{
			$flagged = false;
		}

		if(!$flagged){
			$comment_form['comment_field'] .= '<div class="woo_pros_cons_form"><style>.woo_pros_cons_form{display:flex; width:100%; column-gap:20px;}.woo_pros_cons_form > div{width:50%}@media (max-width:500px){.woo_pros_cons_form > div{width:100%}.woo_pros_cons_form{flex-wrap:wrap}}</style><div class="comment-form-comment gs-one-half"><textarea id="pos_comment" name="pos_comment" rows="6" placeholder="'.esc_html__('PROS:', 'greenlight').'"></textarea></div><div class="comment-form-comment gs-one-half"><textarea id="neg_comment" name="neg_comment" rows="6" placeholder="'.esc_html__('CONS:', 'greenlight').'"></textarea></div></div>';
		}
	}
	return $comment_form;
}

// Save Negative, positive
function greenlight_add_neg_comment( $comment_id ){
	if ( isset($_POST['comment_post_ID']) && (!empty( $_POST['neg_comment']) || !empty($_POST['pos_comment'])) && 'product' === get_post_type( absint( $_POST['comment_post_ID'] ) ) ) {
		if(!empty($_POST['neg_comment'])){
			add_comment_meta( $comment_id, 'neg_comment', sanitize_textarea_field( $_POST['neg_comment'] ), true );
		}
		if(!empty($_POST['pos_comment'])){
			add_comment_meta( $comment_id, 'pos_comment', sanitize_textarea_field( $_POST['pos_comment'] ), true );
		}
		$comment = get_comment( $comment_id );
		$userid = $comment->user_id;
		$postid = $comment->comment_post_ID;
		$commented = get_user_meta($userid, '_added_woo_pros_cons', true);
		if(empty($commented) || !is_array($commented)){
			$commented = array();
		}
		$commented[] = $postid;
		add_user_meta($userid, '_added_woo_pros_cons', $commented, true);	
	}
}
add_action( 'comment_post', 'greenlight_add_neg_comment' );

// pros and cons in comment text
function greenlight_wc_comment_neg_get( $comment ) {
	$out = '';
	$pros_review = get_comment_meta( $comment->comment_ID, 'pos_comment', true );
	$cons_review = get_comment_meta( $comment->comment_ID, 'neg_comment', true );
	if($pros_review || $cons_review){$out .='<div class="woo-pros-cons-comm"><style>.woo-pros-cons-comm > div.gs-one-half{flex:50%}@media (min-width:500px){.woo-pros-cons-comm{display:flex; column-gap:20px}}:</style>';}
	$classcol = (!empty($cons_review) && !empty($pros_review)) ? 'gs-one-half ' : '';
	if(isset($pros_review) && $pros_review != '') {
		$pros_reviews = explode(PHP_EOL, $pros_review);
		$proscomment = '';
		foreach ($pros_reviews as $pros) {
			$proscomment .='<span class="pros_comment_item" style="display:block; margin-bottom:5px">'.$pros.'</span>';
		}
		$out .='<div class="'.$classcol.'woo_comment_text_pros" style="background-color: #eaf9e8; padding:20px; line-height:20px; font-size:90%; margin-top:15px"><span style="display:block; margin-bottom:10px; font-weight:bold">'.__('+ PROS:', 'greenlight').' </span><span> '.$proscomment.'</span></div>';
	};
	if(isset($cons_review) && $pros_review != '') {
		$cons_reviews = explode(PHP_EOL, $cons_review);
		$conscomment = '';
		foreach ($cons_reviews as $cons) {
			$conscomment .='<span class="cons_comment_item" style="display:block; margin-bottom:5px">'.$cons.'</span>';
		}
		$out .='<div class="'.$classcol.'woo_comment_text_cons" style="background-color:#fff4f4; padding:20px; line-height:20px; font-size:90%; margin-top:15px"><span style="display:block; margin-bottom:10px; font-weight:bold">'.__('- CONS:', 'greenlight').' </span><span> '.$conscomment.'</span></div>';
	};	
	if($pros_review || $cons_review){$out .= '</div>';}
	return $out;
}
function greenlight_wc_comment_neg( $comment ) {
	echo greenlight_wc_comment_neg_get($comment);
}
add_action( 'woocommerce_review_comment_text', 'greenlight_wc_comment_neg', 12 );

add_action( 'add_meta_boxes', 'greenlight_add_pros_meta_to_panel', 35 );

function greenlight_add_pros_meta_to_panel(){
    add_meta_box( 'greenlight_woo_pros_section_edit_comment', esc_html__( "Pros and Cons", "greenlight" ), 'greenlight_woo_cm_edit_pros_cons', 'comment', 'normal' );
}
//Render pros, cons in Comment Edit screen
function greenlight_woo_cm_edit_pros_cons($comment){
	if ( !isset( $comment->comment_ID ) ) return;
 	if ( !isset( $comment->comment_post_ID ) ) return;
	$post_id = $comment->comment_post_ID;
	$post_type = get_post_type( $post_id );
	if($post_type !=='product') return;
	$pos_comment = get_comment_meta( $comment->comment_ID, 'pos_comment', true );
	$neg_comment = get_comment_meta( $comment->comment_ID, 'neg_comment', true );
	$prosconsRow ='';	
	if( !empty($pos_comment) || !empty($neg_comment) ) {
		$prosconsRow .= '<tr><td colspan="2"><label for="pos_comment">';
		$prosconsRow .= esc_html__('+ PROS:', 'greenlight');
		$prosconsRow .= '</label><br /><textarea id="pos_comment" name="pos_comment" rows="5" cols="50">';
		$prosconsRow .= esc_attr( $pos_comment );
		$prosconsRow .= '</textarea></td><td colspan="2"><label for="neg_comment">';
		$prosconsRow .= esc_html__('- CONS:', 'greenlight');
		$prosconsRow .= '</label><br /><textarea id="neg_comment" name="neg_comment" rows="5" cols="50">';
		$prosconsRow .= esc_attr( $neg_comment );
		$prosconsRow .= '</textarea></td></tr>';
	}	
	if($prosconsRow){
		echo '<fieldset>',
		'<table class="form-table editcomment">',
			'<tbody>',
				$prosconsRow,
			'</tbody></table><br>',
		'</fieldset>';
	}

}

//Save pros cons values from Comment editor
function greenlight_wc_neg_comment_save( $data ) {
	if ( ! isset($_POST['neg_comment'], $_POST['pos_comment'] ) )
		return $data;
		
	if(!empty($_POST['neg_comment'])){
		update_comment_meta( $data['comment_ID'], 'neg_comment', sanitize_textarea_field( $_POST['neg_comment'] ) );
	}
	if(!empty($_POST['pos_comment'])){
		update_comment_meta( $data['comment_ID'], 'pos_comment', sanitize_textarea_field( $_POST['pos_comment'] ) );
	}	
	return $data;
}
add_filter( 'wp_update_comment_data', 'greenlight_wc_neg_comment_save', 1 );

//Add custom column for Products
function greenlight_woo_rev_comment_columns( $columns )
{
	$columns['greenlight_woo_user_review_column'] = esc_html__( 'Product Review', 'greenlight' );
	return $columns;
}
add_filter( 'manage_edit-comments_columns', 'greenlight_woo_rev_comment_columns' );

function greenlight_woo_rev_comment_column( $column, $comment_ID )
{
	if ( 'greenlight_woo_user_review_column' == $column ) {
		
	$pos_comment = get_comment_meta($comment_ID, 'pos_comment', true);
	$neg_comment = get_comment_meta($comment_ID, 'neg_comment', true);
	if(isset($pos_comment) && $pos_comment != '') {
		echo ''.__('+ PROS:', 'greenlight').' '.$pos_comment.'<br />';
	};
	if(isset($neg_comment) && $neg_comment != '') {
		echo ''.__('- CONS:', 'greenlight').' '.$neg_comment.'<br /><br />';
	};				
	echo '<br /></p>';
	}
}
add_filter( 'manage_comments_custom_column', 'greenlight_woo_rev_comment_column', 10, 2 );

add_filter( 'woocommerce_breadcrumb_defaults', 'greenlight_change_breadcrumb_delimiter' );
function greenlight_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '<span class="delimiter"> - </span>';
	return $defaults;
}