<?php
/*
Plugin Name: Read more with Bouncy
Plugin URI: https://bouncy.fi
Description: Include read more button using a shortcode. Use [readmorec readmorecontent="uniqueid"] with closing tag [/readmorec] to wrap hidden text and add button with [readmoreb readmore="uniqueid" label="Read more" translatedlabel="Read less"] to show hidden text.
Version: 1.0
Author: Bouncy Oy
License: GPLv2
*/

//Add localization
load_plugin_textdomain( 'bouncy_readmore', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
//[readmoreb]
function readmore_bouncy_button( $atts = [], $content = null, $tag = '' ){
	$atts = array_change_key_case( (array) $atts, CASE_LOWER );
	// override default attributes with user attributes
	$bouncy_atts = shortcode_atts(
		array(
			'readmore' => '1',
			'label' => 'Read more',
			'translatedlabel' => 'Read less',
		), $atts, $tag
	);
	$heitto = "'";
	$content = 	'<button data-morebtn="'.$bouncy_atts['readmore'].'" translated-label="'.$bouncy_atts['translatedlabel'].'" label="'.$bouncy_atts['label'].'" onclick="bouncyReadMore('.$heitto.$bouncy_atts['readmore'].$heitto.')" class="readmore-btn">' . $bouncy_atts['label'] . '</button>';
	return $content;
}
add_shortcode( 'readmoreb', 'readmore_bouncy_button' );
//[readmorecontent]
function readmore_bouncy_content( $atts = [], $content = null, $tag = '' ) {

	$atts = array_change_key_case( (array) $atts, CASE_LOWER );
	// override default attributes with user attributes
	$bouncy_atts = shortcode_atts(
		array(
			'readmorecontent' => '1',
		), $atts, $tag
	);

	$p = '<span data-more="'.$bouncy_atts['readmorecontent'].'" style="display:none">' . $content . '</span>';
    // always return
    return $p;
}
add_shortcode( 'readmorec', 'readmore_bouncy_content' );
// register jquery initialization
add_action('init', 'bouncy_register_script');
function bouncy_register_script(){
	wp_register_script( 'custom_jquery', plugins_url('/js/readmore.js', __FILE__), array('jquery'), '2.5.1' );
}

// use the registered jquery
add_action('wp_enqueue_scripts', 'bouncy_enqueue_style');
function bouncy_enqueue_style(){
	wp_enqueue_script('custom_jquery');
}
?>