<?php
  get_template_part('config_variables.php');?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title> <?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );// Add the blog name.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) ) {
				echo " | $site_description";
			}
			if ( $paged >= 2 || $page >= 2 ) {
				echo ' | ' . sprintf( ( 'Page %s'), max( $paged, $page ) );
			}	?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> <?php    
    wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> <!--Body tag will close in footer.php-->
    <div class="container">
      <div class="header">
        <div class="head_link">
          <p class="fleft"><span><a href="<?php echo UT_HOME; ?>"><?php _e('Home','utility');?></a></span></p>
          <p class="fright m15"><?php echo date ("F j, Y"); ?></p>
        </div>
        <div class="logo_cont"> <?php
          if ( get_header_image() ) { ?>
           <div class="fleft logo">
            <a href="<?php echo UT_HOME; ?>">
             <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="Logo" />
            </a>
           </div><?php
          } else { ?>
           <div id="site-title">
            <span>
             <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </span>
           </div> <?php
          } ?>
          <div id="site-description">
            <?php bloginfo( 'description' ); ?>
          </div>
        </div>
        <div class="nav"> <?php        
         wp_nav_menu( array( 'container' => '', 'theme_location' => 'header-menu', 'fallback_cb' => 'utility_custom_header_menu' ) );
         get_search_form(); ?>
		    </div> <?php 
      global $UT_custom_theme_option;
      if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_news_ticker_section"]  || empty($UT_custom_theme_option)) {
        require_once UT_MODULES . 'news_ticker.php';
       } ?>
      </div>