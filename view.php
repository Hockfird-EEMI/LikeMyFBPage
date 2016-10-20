<div>
<h2>Like My FB Page // Settings</h2>
<form method="post" action="options.php">
    <?php
		settings_fields('lmfp-settings');
		do_settings_sections('lmfp-settings');
		wp_nonce_field( 'delete-comment_'.$lmfp_page);
	?>

	
			<strong>L'url de votre page FB</strong><br>
			<input type="text" size="50" id="lmfp_page" name="lmfp_page" value="<?php echo esc_attr( get_option('lmfp_page') ); ?>" />
			<br><br>

			<strong>Show the Timeline</strong>
			<input type="checkbox" name="lmfp_timeline" value="true" checked="checked" <?php echo ( get_option('lmfp_timeline') == true ) ?> />
			<br><br>

			<strong>Show the events</strong>
			<input type="checkbox" name="lmfp_events" value="true" checked="checked" <?php echo ( get_option('lmfp_events') == true ) ?> />
			<br><br>
			

    <?php submit_button("Click here to save !"); ?>
</form>
</div>