<?php 

/*

@package crickettheme
  ===============	
 	ADMIN ENQUEUE FUNCTIONS
  ===============

*/
function cricket_load_admin_scripts( $hook ){

	if( 'toplevel_page_ncss_cricket' != $hook ){ return; }
	wp_register_style( 'cricket_admin', get_template_directory_uri() . '/css/cricket.admin.css', array(), '1.0.0','all' );
	wp_enqueue_style('cricket_admin');

	wp_register_script( 'cricket-admin-script', get_template_directory_uri() . '/js/cricket.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script('cricket-admin-script');
	
	wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'cricket_load_admin_scripts');
