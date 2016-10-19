<div class="wrap">
<h2>FB Messenger Settings</h2>
<p>This plugin allows your visitors to easily contact with your business using Facebook Messenger.</p>
<form method="post" action="options.php">
    <?php
		settings_fields( 'fb-messenger-settings' );
		do_settings_sections( 'fb-messenger-settings' );
	?>

	


			<strong>L'url de votre page FB</strong><br>
			<input type="text" size="50" name="fb_messenger_page" value="<?php echo esc_attr( get_option('fb_messenger_page') ); ?>" />
			<br><br>

			<strong>Afficher la Timeline</strong>
			<input type="checkbox" name="fb_messenger_timeline_tab" value="true" <?php echo ( get_option('fb_messenger_timeline_tab') == true ) ? ' checked="checked" />' : ' />'; ?>
			<br><br>

			<strong>Afficher vos évènements</strong>
			<input type="checkbox" name="fb_messenger_events_tab" value="true" <?php echo ( get_option('fb_messenger_events_tab') == true ) ? ' checked="checked" />' : ' />'; ?>
			<br><br>
			

    <?php submit_button("Click here to save !"); ?>
</form>
</div>