<?php
function add_theme_menu_item() {
	add_menu_page("Theme Options", "Theme Options", "manage_options", "theme-options", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page(){
    ?>
        <div class="wrap">
	        <h1>Theme options</h1>
	        <form method="post" action="options.php">
	            <?php
	                settings_fields("section");
                    do_settings_sections("theme-options");      
                    submit_button(); 
                ?>          
            </form>
		</div>
    <?php
}

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?= get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?= get_option('facebook_url'); ?>" />
    <?php
}

function display_share_element() {
    ?>
        <textarea name="share_us" id="share_us" cols="50" rows="10" value="<?= get_option('share_us') ?>"><?= get_option('share_us') ?></textarea>
    <?php
}

function logo_display()
{
	?>
        <input type="file" name="logo" /> 
        <?php echo get_option('logo'); ?>
   <?php
}

function handle_logo_upload()
{
	$keys = array_keys($_FILES);
    $i = 0;
 
    foreach ($_FILES as $image) {
        // if a files was upload
        if ($image['size']) {
            // if it is an image
            if (preg_match('/(jpg|jpeg|png|gif|svg)$/', $image['type'])) {
                $override = array('test_form' => false);
                $file = wp_handle_upload($image, $override);
 
                $plugin_options[$keys[$i]] = $file['url'];
            } else {
                $options = get_option('logo');
                $plugin_options[$keys[$i]] = $options[$logo];
                wp_die('No image was uploaded.');
            }
      }
 
      // else, retain the image that's already on file.
      else {
         $options = get_option('logo');
         $plugin_options[$keys[$i]] = $options[$keys[$i]];
      }
      $i++;
   }
 
   return $plugin_options; 
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
    
    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");  
    add_settings_field("share_us", "Share us Message", "display_share_element", "theme-options", "section");

	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "share_us");
    register_setting("section", "logo", "handle_logo_upload");
}

add_action("admin_init", "display_theme_panel_fields");

