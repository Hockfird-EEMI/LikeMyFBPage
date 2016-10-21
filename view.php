<div>
<h2><?php _e( "Like My FB Page // Settings", "likemyfbpage" )?></h2>
<form method="post" action="options.php">
    <?php
		settings_fields('lmfp-settings');
		do_settings_sections('lmfp-settings');
	?>

	
			<strong><?php _e( "The URL of your Facebook page", "likemyfbpage" )?></strong><br>
			<input type="text" size="50" id="lmfp_page" name="lmfp_page" value="<?php echo esc_attr( get_option('lmfp_page') ); ?>" />
			<br><br>

			<strong><?php _e( "Show the Timeline", "likemyfbpage" )?> </strong>
			<input type="checkbox" name="lmfp_timeline" value="true" checked="checked" <?php echo ( get_option('lmfp_timeline') == true ) ?> />
			<br><br>

			<strong><?php _e( "Show the events", "likemyfbpage" )?></strong>
			<input type="checkbox" name="lmfp_events" value="true" checked="checked" <?php echo ( get_option('lmfp_events') == true ) ?> />
			<br><br>
			

    <?php submit_button("Click here to save !"); ?>
</form>
</div>