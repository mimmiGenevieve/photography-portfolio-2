<?php

// add custom logo
 function themename_custom_logo_setup() {
    $defaults = array(
       // 'height'      => 92,
        'width'       => 225,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// add menu
function register_my_menus() {
register_nav_menus(
			array(
        'primary' => __( 'Main menu', 'hannakero' )
			)
        );
      }
add_action( 'init', 'register_my_menus' );


// Custom settings for social media links
function custom_settings_add_menu() {
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
  }
  add_action( 'admin_menu', 'custom_settings_add_menu' );

  // Create Custom Global Settings
function custom_settings_page() { ?>
    <div class="wrap">
      <h1>Custom Settings</h1>
      <form method="post" action="options.php">
         <?php
             settings_fields( 'section' );
             do_settings_sections( 'theme-options' );      
             submit_button(); 
         ?>          
      </form>
    </div>
  <?php }

function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

  // Facebook
function setting_vsco() { ?>
  <input type="text" name="vsco" id="vsco" value="<?php echo get_option( 'vsco' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
  add_settings_field( 'vsco', 'Vsco URL', 'setting_vsco', 'theme-options', 'section' );

  register_setting('section', 'instagram');
  register_setting('section', 'vsco');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

//add feautured image on posts
add_theme_support( 'post-thumbnails' );

//add another feautured image (if needed)
if (class_exists('MultiPostThumbnails')) {
new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'post'
 ) );
}

// remove default gallery styling
add_filter( 'use_default_gallery_style', '__return_false' );

// remove automatic tags to img
add_filter( 'get_image_tag_class', '__return_empty_string' );