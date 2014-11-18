<?php
  global $wpdb, $blog_id, $post, $UT_custom_theme_option;
  define('UT_ABSOLUTE_TEMPLATE_PATH', get_template_directory_uri() . '/'); //It is absolute path
  define('UT_DESIGN_PATH', UT_ABSOLUTE_TEMPLATE_PATH . 'design/');
  define('UT_CURRENT_THEME_PATH', UT_DESIGN_PATH . 'beta/');
  define('UT_JS_PATH', UT_CURRENT_THEME_PATH . 'js/');
  define('UT_CSS_PATH', UT_CURRENT_THEME_PATH . 'css/');
  define('UT_IMAGES_PATH', UT_CURRENT_THEME_PATH . 'images/');
  define('UT_DEFAULT_IMAGES_PATH', UT_IMAGES_PATH . 'default_images/');
  define('UT_MODULES', get_template_directory() . '/modules/');
  define('UT_ADMIN_PANEL', get_template_directory() . '/adminpanel/');
  define('UT_ABSOLUTE_ADMIN_PANEL_PATH', UT_ABSOLUTE_TEMPLATE_PATH . 'adminpanel/');
  define('UT_ADMIN_PANEL_STATIC_DATA', UT_ABSOLUTE_ADMIN_PANEL_PATH . 'static/');
  define('UT_ADMIN_PANEL_JS_PATH', UT_ADMIN_PANEL_STATIC_DATA . 'js/');
  define('UT_ADMIN_PANEL_CSS_PATH', UT_ADMIN_PANEL_STATIC_DATA . 'css/');
  define('UT_ADMIN_PANEL_IMAGES_PATH', UT_ADMIN_PANEL_STATIC_DATA . 'images/');
  define('UT_HEADER_IMAGES_PATH', '/design/beta/images/headers/');

  define( 'HEADER_IMAGE_WIDTH', 144 );
	define( 'HEADER_IMAGE_HEIGHT', 61 );

  define('UT_DEFAULT_NUM_POSTS', 5);

  define('UT_HOME', home_url( '/' ));
  define('UT_THEME_SHORT_NAME','ut');
  define('UT_THEME_NAME','Utility Theme');

  $UT_custom_theme_option = get_option('UT_customize_theme_options');
?>