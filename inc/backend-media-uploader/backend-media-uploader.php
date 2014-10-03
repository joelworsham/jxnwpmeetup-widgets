<?php

// Necessary scripts
function backend_media_uploader_scripts(){
	wp_enqueue_style( 'backend-media-uploader', plugins_url( '/css/backend-media-uploader.css', __FILE__ ) );
	wp_enqueue_script('backend-media-uploader', plugins_url('/js/backend-media-uploader.js', __FILE__), array('jquery'));
}
add_action('admin_enqueue_scripts', 'backend_media_uploader_scripts');

// Main function
if (!function_exists('backend_media_uploader')){
	function backend_media_uploader($meta_name, $meta_value, $button_name = 'Choose/Upload an Image'){
		wp_enqueue_media();
		$image = wp_get_attachment_image_src($meta_value, 'thumb'); ?>
		<div class="backend-media-upload">
			<img class="bmu-preview" src="<?php echo $image[0]; ?>" />
			<div style="clear:both;"></div>
			<input type="hidden" class="bmu-media" name="<?php echo $meta_name; ?>" id="<?php echo $meta_name; ?>" value="<?php echo $meta_value; ?>" />
			<input type="button" class="bmu-button button" value="<?php echo $button_name; ?>" onclick="backend_media_uploader(this)" /><br/>
		</div>
	<?php }
}