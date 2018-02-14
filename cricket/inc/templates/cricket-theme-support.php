<h1>Cricket Theme Option</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="cricket-general-form">
	<?php settings_fields( 'cricket-theme-support' ); ?>
	<?php do_settings_sections( 'ncss_cricket_theme' ); ?>
	<?php submit_button(); ?>
</form>