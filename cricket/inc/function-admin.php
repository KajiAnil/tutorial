<?php

/*
	
@package crickettheme
	
	========================
		ADMIN PAGE
	========================
*/

function cricket_add_admin_page() {
	
	//Generate Cricket Admin Page
	add_menu_page( 'Cricket Theme Options', 'Cricket (NCCS)', 'manage_options', 'nccs_cricket', 'cricket_theme_create_page', get_template_directory_uri() . '/images/cricket-icon.png', 110 );
	
	//Generate Cricket Admin Sub Pages
	add_submenu_page( 'nccs_cricket', 'Cricket Sidebar Options', 'Sidebar', 'manage_options', 'nccs_cricket', 'cricket_theme_create_page' );
	add_submenu_page( 'nccs_cricket', 'Cricket Theme Options', 'Theme Options', 'manage_options', 'nccs_cricket_theme', 'cricket_theme_support_page' );
	add_submenu_page( 'nccs_cricket', 'Cricket CSS Options', 'Custom CSS', 'manage_options', 'nccs_cricket_css', 'cricket_theme_settings_page');
	
}
add_action( 'admin_menu', 'cricket_add_admin_page' );

//Activate custom settings
add_action( 'admin_init', 'cricket_custom_settings' );

function cricket_custom_settings() {
	//Sidebar Options
	register_setting( 'cricket-settings-group', 'profile_picture' );
	register_setting( 'cricket-settings-group', 'first_name' );
	register_setting( 'cricket-settings-group', 'last_name' );
	register_setting( 'cricket-settings-group', 'user_description' );
	register_setting( 'cricket-settings-group', 'twitter_handler', 'cricket_sanitize_twitter_handler' );
	register_setting( 'cricket-settings-group', 'facebook_handler' );
	register_setting( 'cricket-settings-group', 'gplus_handler' );
	
	add_settings_section( 'cricket-sidebar-options', 'Sidebar Option', 'cricket_sidebar_options', 'nccs_cricket');
	
	add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'cricket_sidebar_profile', 'nccs_cricket', 'cricket-sidebar-options');
	add_settings_field( 'sidebar-name', 'Full Name', 'cricket_sidebar_name', 'nccs_cricket', 'cricket-sidebar-options');
	add_settings_field( 'sidebar-description', 'Description', 'cricket_sidebar_description', 'nccs_cricket', 'cricket-sidebar-options');
	add_settings_field( 'sidebar-twitter', 'Twitter handler', 'cricket_sidebar_twitter', 'nccs_cricket', 'cricket-sidebar-options');
	add_settings_field( 'sidebar-facebook', 'Facebook handler', 'cricket_sidebar_facebook', 'nccs_cricket', 'cricket-sidebar-options');
	add_settings_field( 'sidebar-gplus', 'Google+ handler', 'cricket_sidebar_gplus', 'nccs_cricket', 'cricket-sidebar-options');
	
	//Theme Support Options
	register_setting( 'cricket-theme-support', 'post_formats' );
	register_setting( 'cricket-theme-support', 'custom_header' );
	register_setting( 'cricket-theme-support', 'custom_background' );
	
	add_settings_section( 'cricket-theme-options', 'Theme Options', 'cricket_theme_options', 'nccs_cricket_theme' );
	
	add_settings_field( 'post-formats', 'Post Formats', 'cricket_post_formats', 'nccs_cricket_theme', 'cricket-theme-options' );
	add_settings_field( 'custom-header', 'Custom Header', 'cricket_custom_header', 'nccs_cricket_theme', 'cricket-theme-options' );
	add_settings_field( 'custom-background', 'Custom Background', 'cricket_custom_background', 'nccs_cricket_theme', 'cricket-theme-options' );
}


function cricket_theme_options() {
	echo 'Activate and Deactivate specific Theme Support Options';
}

function cricket_post_formats() {
	$options = get_option( 'post_formats' );
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
	}
	echo $output;
}

function cricket_custom_header() {
	$options = get_option( 'custom_header' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' /> Activate the Custom Header</label>';
}

function cricket_custom_background() {
	$options = get_option( 'custom_background' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' /> Activate the Custom Background</label>';
}

// Sidebar Options Functions
function cricket_sidebar_options() {
	echo 'Customize your Sidebar Information';
}

function cricket_sidebar_profile() {
	$picture = esc_attr( get_option( 'profile_picture' ) );
	if( empty($picture) ){
		echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="" />';
	} else {
		echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" /> <input type="button" class="button button-secondary" value="Remove" id="remove-picture">';
	}
	
}
function cricket_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}
function cricket_sidebar_description() {
	$description = esc_attr( get_option( 'user_description' ) );
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description" /><p class="description">Write something smart.</p>';
}
function cricket_sidebar_twitter() {
	$twitter = esc_attr( get_option( 'twitter_handler' ) );
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" /><p class="description">Input your Twitter username without the @ character.</p>';
}
function cricket_sidebar_facebook() {
	$facebook = esc_attr( get_option( 'facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" />';
}
function cricket_sidebar_gplus() {
	$gplus = esc_attr( get_option( 'gplus_handler' ) );
	echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler" />';
}

//Sanitization settings
function cricket_sanitize_twitter_handler( $input ){
	$output = sanitize_text_field( $input );
	$output = str_replace('@', '', $output);
	return $output;
}

//Template submenu functions
function cricket_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/cricket-admin.php' );
}

function cricket_theme_support_page() {
	require_once( get_template_directory() . '/inc/templates/cricket-theme-support.php' );
}

function cricket_theme_settings_page() {
	
	echo '<h1>Cricket Custom CSS</h1>';
	
}