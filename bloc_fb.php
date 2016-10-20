<div data-remodal-id="fb-messenger">
	<div class="fb-page" data-tabs="messages
		<?php if (get_option('lmfp_timeline') == true) { ?>, timeline<?php } ?>
		<?php if (get_option('lmfp_events') == true) { ?> , events<?php } ?>" 
		data-href="<?php echo esc_attr( get_option('lmfp_page') ); ?>" 
		data-width="310" data-height="330" 
		data-href="<?php echo esc_attr( get_option('lmfp_page') ); ?>" 
		data-small-header="true"  data-hide-cover="false" data-show-facepile="true" 
		data-adapt-container-width="true" style="z-index: 1000; top: 0; position: absolute; right: 0; margin: 100px 30px;">
	</div>
</div>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php if (get_option('fb_messenger_lang')==''){ echo "en_US"; }else{ echo esc_attr( get_option('fb_messenger_lang') ); } ?>/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
