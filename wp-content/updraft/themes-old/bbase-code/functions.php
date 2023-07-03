<?php
/**
 * BBase Code functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BBase_Code
 */

foreach (glob(get_stylesheet_directory()."/inc/*.php") as $filepath){
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating %s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
