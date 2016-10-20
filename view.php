<div>
<h2>Like My FB Page // Settings</h2>
<form method="post" action="options.php">
    <?php
		settings_fields( 'fb-messenger-settings' );
		do_settings_sections( 'fb-messenger-settings' );
	?>

	


			<strong>L'url de votre page FB</strong><br>
			<input type="text" size="50" name="lmfp_page" value="<?php echo esc_attr( get_option('lmfp_page') ); ?>" />
			<br><br>

			<strong>Show the Timeline</strong>
			<input type="checkbox" name="lmfp_timeline" value="true" <?php echo ( get_option('lmfp_timeline') == true ) ? ' checked="checked" />' : ' />'; ?>
			<br><br>

			<strong>Show the events</strong>
			<input type="checkbox" name="lmfp_events" value="true" <?php echo ( get_option('lmfp_events') == true ) ? ' checked="checked" />' : ' />'; ?>
			<br><br>
			

    <?php submit_button("Click here to save !"); ?>
</form>
</div>