<div id="fbMsg">
	<img data-remodal-target="fb-messenger" src="<?php echo $fb_messenger_upload_image; ?>">
</div>


<div class="remodal" data-remodal-id="fb-messenger">
	<div class="fb-page" data-tabs="messages
		<?php if (get_option('fb_messenger_timeline_tab') == true) { ?>, timeline<?php } ?>
		<?php if (get_option('fb_messenger_events_tab') == true) { ?> , events<?php } ?>" 
		data-href="<?php echo esc_attr( get_option('fb_messenger_page') ); ?>" 
		data-width="310" data-height="330" 
		data-href="<?php echo esc_attr( get_option('fb_messenger_page') ); ?>" 
		data-small-header="true"  data-hide-cover="false" data-show-facepile="true" 
		data-adapt-container-width="true">
		<div class="fb-xfbml-parse-ignore">
			<blockquote>Loading...</blockquote>
		</div>
	</div>
	<?php if (get_option('fb_messenger_powered_by') == true) { ?> <div style="font-size:x-small;"><a href="https://www.brontobytes.com/blog/facebook-messenger-free-wordpress-plugin/">Facebook Messenger for Wordpress</a></div> <?php } ?>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php if (get_option('fb_messenger_lang')==''){ echo "en_US"; }else{ echo esc_attr( get_option('fb_messenger_lang') ); } ?>/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End FB Messenger -->
