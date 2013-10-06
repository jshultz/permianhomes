<div class="right_Main"> <?php   
  global $UT_custom_theme_option;
  $show_thumb_pos = '';
  if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_sidebar_cat1_section"]  || empty($UT_custom_theme_option)) {
    include_once UT_MODULES . 'rhs_carousel.php';
  }
  if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_sidebar_cat2_section"] || empty($UT_custom_theme_option) ) {
    include_once UT_MODULES . 'rhs_category_posts_display_layout.php';
  }
  if ( is_active_sidebar( 'widget_1' ) ) {
    dynamic_sidebar( 'widget_1' );
  }
  if ( $UT_custom_theme_option[UT_THEME_SHORT_NAME . "_sidebar_cat3_section"] || empty($UT_custom_theme_option) ) {
    include_once UT_MODULES . 'rhs_category_posts_title_display.php';
  }
  if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_sidebar_cat4_section"] || empty($UT_custom_theme_option) ) {
    include UT_MODULES . 'rhs_category_posts_title_excerpt_display.php';
  }
  if ( is_active_sidebar( 'widget_2' ) ) {
    dynamic_sidebar( 'widget_2' );
  }
  if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_sidebar_cat5_section"] || empty($UT_custom_theme_option) ) {
    include_once UT_MODULES . 'rhs_category_posts_thumb_layout.php';
  }
  $show_thumb_pos = 'right';
  if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_sidebar_cat6_section"] || empty($UT_custom_theme_option) ) {
    include UT_MODULES . 'rhs_category_posts_title_excerpt_display.php';
  }
  //if (get_option(UT_THEME_SHORT_NAME . "_sidebar_cat1_section")) {
    include_once UT_MODULES . 'rhs_tagcloud.php';
  //}
  if ( is_active_sidebar( 'widget_3' ) ) {
    dynamic_sidebar( 'widget_3' );
  }?>
</div>