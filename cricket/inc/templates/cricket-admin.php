<h1>Cricket Sidebar Option</h1>
<?php settings_errors(); ?>
<?php 
	
	$picture = esc_attr( get_option( 'profile_picture' ) );
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr( get_option( 'user_description' ) );
	
?>
<div class="cricket-sidebar-preview">
	<div class="cricket-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
		</div>
		<h1 class="cricket-username"><?php print $fullName; ?></h1>
		<h2 class="cricket-description"><?php print $description; ?></h2>
		<div class="icons-wrapper">
			
		</div>
	</div>
</div>

<form id="submitForm" method="post" action="options.php" class="cricket-general-form">
	<?php settings_fields( 'cricket-settings-group' ); ?>
	<?php do_settings_sections( 'nccs_cricket' ); ?>
	<?php submit_button( 'Save Changes', 'primary', 'btnSubmit' ); ?>
</form>