<?php
  if ( !is_admin() ) { // Load only if we are viewing an admin page
    return false;
  }

  $categories = get_categories('orderby=name&pad_counts=1');
  $wp_cats = array();
  $total_no_of_categories = array();
  $wp_cats[0] = array('option_name' => __('Choose a category', 'utility'));
  $total_no_of_categories[0] = array('option_name' => __('Select', 'utility'));

  foreach ($categories as $category_list ) {
    $wp_cats[$category_list->cat_ID] = array('option_name' => $category_list->cat_name, 'parent' => $category_list->parent, 'count' => $category_list->count);
  }

  for ($count = 1;$count <= 10;$count++) {
    $total_no_of_categories[$count] = array('option_name' => $count);
  }

  $global_options_array = array (
                            array (
                                "type" => "title"
                            ),
                            array (
                                "name" => __("Header", 'utility'),
                                "type" => "section"
                            ),
                            array ( "type" => "open"),

                            array (
                                "name" => __("Display News Ticker section", 'utility'),
                                "desc" => __("Uncheck it if you don't want to display this section on site.", 'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_news_ticker_section",
                                "type" => "checkbox"
                            ),
                            array (
                                "name" => __("News Ticker Category", 'utility'),
                                "desc" => __("Choose a category for news ticker section which is coming below the menu.", 'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_news_ticker",
                                "type" => "select",
                                "options" => $wp_cats,
                                "std" => ""
                            ),
                            array (
                                "name" => __("Total Number of Posts", 'utility'),
                                "desc" => __("Choose number of posts to be shown in ticker (max 10).", 'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_news_ticker_numposts",
                                "type" => "select",
                                "options" => $total_no_of_categories,
                                "std" => ""
                            ),

                            array ( "type" => "close"),

                            array (
                                "name" => __("Sidebar", 'utility'),
                                "type" => "section"
                            ),
                            array ( "type" => "open"),


                            array (
                                "name" => __("Display carousel section",'utility'),
                                "desc" => __("Uncheck it if you don't want to display carousel section on site.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat1_section",
                                "type" => "checkbox"
                            ),
                            array (
                                "name" => __("Category for Window 1",'utility'),
                                "desc" => __("Choose a category for the default carousel in the sidebar.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat1",
                                "type" => "select",
                                "options" => $wp_cats,
                                "std" => __("Choose a category",'utility')
                            ),
                            array (
                                "name" => __("Number of Posts",'utility'),
                                "desc" => __("No. of posts to be shown in Window 1.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat1_numposts",
                                "type" => "select",
                                "options" => $total_no_of_categories,
                                "std" => ""
                            ),

                            array (
                                "name" => __("Display sidebar second window section",'utility'),
                                "desc" => __("Uncheck it if you don't want to display this section on site.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat2_section",
                                "type" => "checkbox"
                            ),
                            array (
                                "name" => __("Category for Window 2",'utility'),
                                "desc" => __("Choose a category for the second window that appears with 1 featured article.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat2",
                                "type" => "select",
                                "options" => $wp_cats,
                                "std" => __("Choose a category",'utility')
                            ),
                            array (
                                "name" => __("Number of Posts",'utility'),
                                "desc" => __("No. of posts to be shown in Window 2.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat2_numposts",
                                "type" => "select",
                                "options" => $total_no_of_categories,
                                "std" => ""
                            ),
														array (
                                "name" => __("Display sidebar third window section",'utility'),
                                "desc" => __("Uncheck it if you don't want to display this section on site.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat3_section",
                                "type" => "checkbox"
                            ),
                            array (
                                "name" => __("Category for Window 3",'utility'),
                                "desc" => __("Choose a category for the third window that shows post titles list.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat3",
                                "type" => "select",
                                "options" => $wp_cats,
                                "std" => __("Choose a category",'utility')
                            ),
                            array (
                                "name" => __("Number of Posts",'utility'),
                                "desc" => __("No. of posts to be shown in Window 3.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat3_numposts",
                                "type" => "select",
                                "options" => $total_no_of_categories,
                                "std" => ""
                            ),
                            array (
                                "name" => __("Display sidebar fourth window section",'utility'),
                                "desc" => __("Uncheck it if you don't want to display this section on site.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat4_section",
                                "type" => "checkbox"
                            ),
                            array (
                                "name" => __("Category for Window 4",'utility'),
                                "desc" => __("Choose a category for the fourth window that shows pics on the left.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat4",
                                "type" => "select",
                                "options" => $wp_cats,
                                "std" => __("Choose a category",'utility')
                            ),
                            array (
                                "name" => __("Number of Posts",'utility'),
                                "desc" => __("No. of posts to be shown in Window 4.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat4_numposts",
                                "type" => "select",
                                "options" => $total_no_of_categories,
                                "std" => ""
                            ),
                            array (
                                "name" => __("Display sidebar fifth window section",'utility'),
                                "desc" => __("Uncheck it if you don't want to display this section on site.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat5_section",
                                "type" => "checkbox"
                            ),
                            array (
                                "name" => __("Category for Window 5",'utility'),
                                "desc" => __("Choose a category for the fifth window that shows only pics.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat5",
                                "type" => "select",
                                "options" => $wp_cats,
                                "std" => __("Choose a category",'utility')
                            ),
                            array (
                                "name" => __("Number of Posts",'utility'),
                                "desc" => __("No. of posts to be shown in Window 5.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat5_numposts",
                                "type" => "select",
                                "options" => $total_no_of_categories,
                                "std" => ""
                            ),
                            array (
                                "name" => __("Display sidebar sixth window section",'utility'),
                                "desc" => __("Uncheck it if you don't want to display this section on site.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat6_section",
                                "type" => "checkbox"
                            ),
                            array (
                                "name" => __("Category for Window 6",'utility'),
                                "desc" => __("Choose a category for the sixth window that shows images on the right.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat6",
                                "type" => "select",
                                "options" => $wp_cats,
                                "std" => __("Choose a category",'utility')
                            ),
                            array (
                                "name" => __("Number of Posts",'utility'),
                                "desc" => __("No. of posts to be shown in Window 6.",'utility'),
                                "id" => UT_THEME_SHORT_NAME . "_sidebar_cat6_numposts",
                                "type" => "select",
                                "options" => $total_no_of_categories,
                                "std" => ""
                            ),
                            array ( "type" => "close"),

                        );

  add_action('admin_init', 'utility_mytheme_add_init');

  function utility_mytheme_add_init() {

    register_setting( 'UT_customize_theme_options', 'UT_customize_theme_options', 'utility_customize_theme_options_validate' );
    add_settings_section('customize_theme_main', '', 'utility_customize_theme_section_text', 'customize_theme');
    add_settings_field('customize_theme_text_string', __('Select option', 'utility'), 'utility_customize_theme_setting_string', 'customize_theme', 'customize_theme_main');
    wp_enqueue_style("adminpanel", UT_ADMIN_PANEL_CSS_PATH . 'adminpanel.css', false, "1.0", "all");
    wp_enqueue_script("adminpanel", UT_ADMIN_PANEL_JS_PATH. 'adminpanel.js', false, "1.0");

  }

  function utility_customize_theme_section_text() {
   echo '<b>'._e('Theme Customization','utility').'</b>';
  }


  add_action('admin_menu', 'utility_mytheme_add_admin');

  function utility_mytheme_add_admin() {
    add_theme_page(UT_THEME_NAME, UT_THEME_NAME, 'edit_theme_options', 'customize_theme', 'utility_mytheme_admin');
  }


  function utility_mytheme_admin() {
   ?>

    <div class="wrap rm_wrap">
      <h2><?php echo UT_THEME_NAME; ?> Settings</h2>
      <div class="rm_opts">
        <form action="options.php" method="post"> <?php
          settings_fields ( 'UT_customize_theme_options' );
          do_settings_sections('customize_theme'); ?>
          <input name="Submit" class="button-primary" type="submit" value="Save Changes" />
          <input name="Submit" class="button-primary" type="submit" value="Reset" />
        </form>
      </div>
        </div> <?php
    }

    function utility_customize_theme_setting_string () {
        global $global_options_array;
    $section_count = 0;
    $option_count = 0;
        $select_options = get_option('UT_customize_theme_options');
        static $display_div = 1;
        foreach ($global_options_array as $value) {
            $option_count = 0;
            $display_style = '';
            switch ( $value['type'] ) {
                case "open":
                    break;
                case "close": ?>
                    </div>
                </div>
                    <br /> <?php
                break;
                case "title": ?>
                    <p><?php _e('To easily customize the, ','utility');?> <?php echo UT_THEME_NAME;?><?php _e('you can use the menu below.','utility');?></p> <?php
                break;
                case 'text':
                    if ($display_div) {
                        $display_style = '';
                    } else {
                        $display_style = 'style="display:none;"';
                    } ?>
                    <div <?php echo $display_style; ?> id="<?php echo $value['id']; ?>_row" class="rm_input rm_text">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        <input name="UT_customize_theme_options[<?php echo $value['id']; ?>]" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( $select_options[$value['id']] != "") { echo stripslashes($select_options[$value['id']] ); } else { echo $value['std']; } ?>" />
                        <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
                    </div> <?php
                break;
                case 'textarea':
                    if ($display_div) {
                        $display_style = '';
                    } else {
                        $display_style = 'style="display:none;"';
                    } ?>
                    <div <?php echo $display_style; ?> id="<?php echo $value['id']; ?>_row" class="rm_input rm_textarea">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        <textarea name="UT_customize_theme_options[<?php echo $value['id']; ?>]" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( $select_options[$value['id']] != "") { echo esc_textarea($select_options[$value['id']]); } else { echo $value['std']; } ?></textarea>
                        <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
                    </div> <?php
                break;
                case 'select':
                    if ($display_div) {
                        $display_style = '';
                    } else {
                        $display_style = 'style="display:none;"';
                    } ?>
                    <div <?php echo $display_style; ?> id="<?php echo $value['id']; ?>_row" class="rm_input rm_select">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        <select name="UT_customize_theme_options[<?php echo $value['id']; ?>]" id="<?php echo $value['id']; ?>"> <?php
                            $space_seprator = '';
                            foreach ($value['options'] as $key => $option) {
                                if (isset($option['parent']) && $option['parent'] > 0) {
                                    $space_seprator = '&nbsp;&nbsp;';
                                } else {
                                    $space_seprator = NULL;
                                }
        if (isset($option['count'])) {
                                    $counter = ' (' . $option['count'] . ')';
                                } else {
                                    $counter = NULL;
                                }?>
                            <option value="<?php echo $key; ?>" <?php if (isset($select_options[$value['id']]) && $select_options[$value['id']] == $key) { echo 'selected="selected"'; } ?>> <?php echo $space_seprator . $option['option_name'] . $counter; ?></option> <?php } ?>
                        </select>
                        <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
                    </div> <?php
                break;
                case "checkbox":?>
                    <div id="<?php echo $value['id']; ?>_row" class="rm_input rm_checkbox">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label> <?php
                        if ( $select_options[$value['id']] || !is_array($select_options) ) {
                            $checked = "checked=\"checked\"";
                            $display_div = 1;
                        } else {
                            $checked = "";
                            $display_div = 0;
                        } ?>
                    <input type="checkbox" class="disable_section" name="UT_customize_theme_options[<?php echo $value['id']; ?>]" id="<?php echo $value['id']; ?>" value="1" <?php echo $checked; ?> />
                        <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
                    </div> <?php
                break;
                case "section":
                    $section_count ++; ?>
                    <div class="rm_section"><!-- Closing of tag has been done in loop -->
                        <div class="rm_title">
                            <h3>
                                <img src="<?php echo UT_ADMIN_PANEL_IMAGES_PATH . 'trans.png'; ?>" class="inactive" alt="">
                                <?php echo $value['name']; ?>
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="rm_options"><!-- Closing of tag has been done in loop --> <?php
                break;
            }
            if (isset($value['id'])) {
                $option_count++;
            }
        }
    }

    function utility_customize_theme_options_validate ($input) {
        global $global_options_array, $wp_cats;
        $post_type = $_POST['Submit'];
        if ($post_type == 'Save Changes') {
            $select_options = get_option('customize_theme_options');
            foreach ($global_options_array as $value) {
                $option_count = 0;
                switch ( $value['type'] ) {
                    case 'text':
                    case 'textarea':
                        $input[$value['id']] = wp_filter_post_kses(stripslashes($input[$value['id']]) );
                    break;
                    case 'select':
       $prev = $select_options[$value['id']];
       if ( strrchr($value['id'], '_') == '_numposts') {
        if ( !empty($input[$value['id']]) && (!absint($input[$value['id']]) ||  $input[$value['id']] > 10) ) {
         $input[$value['id']] = UT_DEFAULT_NUM_POSTS;
        }
       } else {
        if ( !utility_array_key_exists_r( $input[$value['id']], $wp_cats ) ) {// We verify if the given value exists in the categories array
         $input[$value['id']] = $prev;
        }
       }
     break;
                    case "checkbox":
                         $input[$value['id']] = ( $input[$value['id']] == 1 ? 1 : 0 );
                    break;
                }
            }
        } elseif ($post_type == 'Reset') {
            delete_option('UT_customize_theme_options');
            wp_redirect( 'themes.php?page=customize_theme'); exit;
        }
    return $input;
    }

    function utility_array_key_exists_r ($needle, $haystack) {
   $result = array_key_exists($needle, $haystack);
   if ($result) return $result;
    foreach ($haystack as $v) {
     if (is_array($v)) {
       $result = utility_array_key_exists_r($needle, $v);
     }
     if ($result) return $result;
    }
   return $result;
 }
?>