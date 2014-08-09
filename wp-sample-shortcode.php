<?php
/**
 * Plugin Name: Sample Shortcode
 * Plugin URI: 
 * Description: Usage example: [sample_shortcode input_1='Windows XP' input_2='Windows 7' input_3='Windows 8'] 
 * Version: 1.0
 * Author: Haris Ainur Rozak
 * Author URI: https://github.com/harisrozak
 */

add_shortcode('sample_shortcode', 'sample_shortcode_print');

function sample_shortcode_print($attr)
{
	$input_1 = isset($attr['input_1']) ? $attr['input_1'] : "<i>empty</i>";
	$input_2 = isset($attr['input_2']) ? $attr['input_2'] : "<i>empty</i>";
	$input_3 = isset($attr['input_3']) ? $attr['input_3'] : "<i>empty</i>";

	$shortcode  = "<p>";
	$shortcode .= "1st shortcode: $input_1 <br>";
	$shortcode .= "2nd shortcode: $input_2 <br>";
	$shortcode .= "3rd shortcode: $input_3 <br>";
	$shortcode .= "</p>";

	/**
	 * To use it in php file (e.g. theme) use do_shortcode
	 * Usage example: echo do_shortcode("[sample_shortcode input_1='Windows XP']");
	 */

	return $shortcode;
}