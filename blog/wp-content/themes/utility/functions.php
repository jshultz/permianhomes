<?php
  require_once(TEMPLATEPATH . '/config_variables.php');
  require_once(UT_ADMIN_PANEL . 'adminpanel.php');

  if ( ! isset( $content_width ) ) $content_width = 590;

  add_action( 'after_setup_theme', 'utility_custom_theme_settings' );

	/**
	* Sets up theme defaults and registers support for various WordPress features.
  */
  function utility_custom_theme_settings() {

    load_theme_textdomain( 'utility', get_template_directory() . '/languages' );

    add_editor_style();

    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );

    register_nav_menus(
			array(
				'header-menu' => __('Header Menu','utility'),
			)
		);

    add_theme_support( 'custom-background', array(
      'default-color' => '757575',
    ) );

    $custom_header_support = array(
        'default-image' => '%s' . UT_HEADER_IMAGES_PATH . 'logo.jpg',
        'width' => HEADER_IMAGE_WIDTH,
        'height' => HEADER_IMAGE_HEIGHT,
        'header-text' => false,
        'admin-head-callback' => 'utility_admin_header_style',
    );

    add_theme_support( 'custom-header', $custom_header_support );
    if ( ! function_exists( 'get_custom_header' ) ) {
      // This is all for compatibility with versions of WordPress prior to 3.4.

      // Your changeable header business starts here
  	  if ( ! defined( 'HEADER_TEXTCOLOR' ) )
  		define( 'HEADER_TEXTCOLOR', '' );

      if ( ! defined( 'NO_HEADER_TEXT' ) )
  		define( 'NO_HEADER_TEXT', true );

      if ( ! defined( 'HEADER_IMAGE' ) )
  		define( 'HEADER_IMAGE', '%s' . UT_HEADER_IMAGES_PATH . 'logo.jpg' );

      add_custom_image_header( '', $custom_header_support['admin-head-callback'] );

      add_custom_background();

    }

    // Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
    register_default_headers( array(
        'utility' => array(
            'url' => '%s' . UT_HEADER_IMAGES_PATH . 'logo.jpg',
            'thumbnail_url' => '%s' . UT_HEADER_IMAGES_PATH . 'logo.jpg',
            'description' => __('utility Logo','utility')
        ),
     ) );
	}

	/**
	* Styles the header image displayed on the Appearance > Header admin panel.
  */
	function utility_admin_header_style() { ?>
		<style type="text/css">
			#headimg {
				border-bottom: 1px solid #000;
				border-top: 4px solid #000;
				min-height:61px !important;
			}
		</style> <?php
	}

  add_action( 'widgets_init', 'utility_custom_theme_widgets' );

  /**
	* Register widgetized area for right hand side sidebar
  */
  function utility_custom_theme_widgets() {
    register_sidebar( array(
                      'name'=> __('Sidebar Widget 1','utility'),
                      'id'=>'widget_1',
                      'description' =>  __('The primary widget area that comes after two sections in RHS.','utility'),
                      'before_widget' => '<div id="%1$s"  class="prnt_cont %2$s">',
                      'after_widget' => '</div></div>',
                      'before_title' => '<h1>',
                      'after_title' => '</h1><div class="subcontainer">',
                    ) );

    register_sidebar( array(
                      'name'=> __('Sidebar Widget 2','utility'),
                      'id'=>'widget_2',
                      'description' =>  __('The secondary widget area that comes after four sections.','utility'),
                      'before_widget' => '<div id="%1$s"  class="prnt_cont %2$s">',
                      'after_widget' => '</div></div>',
                      'before_title' => '<h1>',
                      'after_title' => '</h1><div class="subcontainer">',
                    ) );

   register_sidebar( array(
                      'name'=>__('Sidebar Widget 3','utility'),
                      'id'=>'widget_3',
                      'description' => __('The third widget area that comes at the end of sidebar.','utility'),
                      'before_widget' => '<div id="%1$s"  class="prnt_cont %2$s">',
                      'after_widget' => '</div></div>',
                      'before_title' => '<h1>',
                      'after_title' => '</h1><div class="subcontainer">',
                    ));
  }



	add_filter('the_excerpt', 'utility_strip_all_tags');
	/**
	* Removes all html tags from the text
  */
  function utility_strip_all_tags($excerpt) {
    return strip_tags(strip_shortcodes($excerpt), '<a>');
  }

  add_filter('excerpt_length', 'utility_new_excerpt_length');
	/**
	*  Sets the post excerpt length.
  */
  function utility_new_excerpt_length($length) {
    if (is_archive() || is_search()) {
      return 30;
    } else {
      return 20;
    }
  }


  add_filter( 'widget_title', 'utility_add_default_text');
  /**
	* Adds a default title in widgets if user hasn't added any title
  */
  function utility_add_default_text ($title) {
    if (empty($title)) {
      return 'TITLE';
    } else {
      return $title;
    }
  }

	/**
	* Displays images' thumbnails all over the site.
  */
  function utility_show_thumb ($width, $height, $def_img = NULL, $show_only_path = NULL) {
    global $wpdb, $post, $wp_version, $blog_id;
    if(has_post_thumbnail()) {//This section is for featured image
      if ($show_only_path) {
        $image_arr = array();
        $image_arr = wp_get_attachment_image_src( get_post_thumbnail_id(), array($width,$height), false );
        echo $image_arr[0];
      } else { ?>
        <a href="<?php echo get_permalink($post); ?>"> <?php
          the_post_thumbnail( array($width, $height) ); ?>
        </a> <?php
      }
    } else {
      $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
       if ( $images ) {
         $image = array_shift( $images );
         $image_img_tag = wp_get_attachment_image( $image->ID, array($width, $height) );
         if ($show_only_path) {
           $image_arr = array();
           $image_arr = wp_get_attachment_image_src( $image->ID, array($width,$height), false );
           echo $image_arr[0];
         } else { ?>
           <a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a> <?php
         }
       } elseif(isset($show_only_path) && isset($def_img)) {
         echo UT_DEFAULT_IMAGES_PATH . $def_img;
         return;
       } elseif (isset($def_img)) { ?>
         <a href="<?php echo get_permalink($post); ?>"><img width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="<?php echo UT_DEFAULT_IMAGES_PATH . $def_img;?>" alt="Default utility Image" /></a><?php
       } else {
        return false;
       }
    }
  }

	/**
	* Trims words length
  */
  function utility_trim_words($string, $word_limit, $tags_to_exclude = NULL) {
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit) {
      array_pop($words);
      return implode(' ', $words) . '...';
    } else {
      return $string;
    }
  }

	/**
	* Displays tags on archive, category, author, tags pages
  */
  function utility_display_tags() {
    $tags_list = get_the_tag_list( '', ', ', '' );
    if ($tags_list) { ?>
      <div class="article_page_tags"><b>TAGS:</b> <?php
        echo $tags_list; ?>
      </div> <?php
    }
  }

	/**
	* Displays Breadcrumbs on all pages
  */
  function utility_breadcrumbs() {
		wp_reset_query();

		$delimiter = '&raquo;';
		$name = __('Home', 'utility'); //text for the 'Home' link
		$currentBefore = '<span class="current">';
		$currentAfter = '</span>';

		if ( !is_home() && !is_front_page() || is_paged() ) {

			echo '<div id="crumbs">';

			global $post;
			$home = UT_HOME;
			echo '<a href="' . $home . '">' . $name . '</a> ' . $delimiter . ' ';

			if ( is_category() ) {
				global $wp_query;
				$cat_obj = $wp_query->get_queried_object();
				$thisCat = $cat_obj->term_id;
				$thisCat = get_category($thisCat);
				$parentCat = get_category($thisCat->parent);
				if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
				echo $currentBefore;
				single_cat_title();
				echo   $currentAfter;

			} elseif ( is_day() ) {
				echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
				echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
				echo $currentBefore . get_the_time('d') . $currentAfter;

			} elseif ( is_month() ) {
				echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
				echo $currentBefore . get_the_time('F') . $currentAfter;

			} elseif ( is_year() ) {
				echo $currentBefore . get_the_time('Y') . $currentAfter;

			} elseif ( is_single() && !is_attachment() ) {
				$cat = get_the_category(); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $currentBefore;
				the_title();
				echo $currentAfter;

			} elseif ( is_attachment() ) {
				$parent = get_post($post->post_parent);
				$cat = get_the_category($parent->ID); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
				echo $currentBefore;
				the_title();
				echo $currentAfter;

			} elseif ( is_page() && !$post->post_parent ) {
				echo $currentBefore;
				the_title();
				echo $currentAfter;

			} elseif ( is_page() && $post->post_parent ) {
				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
					$parent_id  = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
				echo $currentBefore;
				the_title();
				echo $currentAfter;

			} elseif ( is_search() ) {
				echo $currentBefore . __('Search results for &#39;', 'utility') . get_search_query() . '&#39;' . $currentAfter;

			} elseif ( is_tag() ) {
				echo $currentBefore . '&#39;';
				single_tag_title();
				echo '&#39;' . $currentAfter;

			} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata($author);
				echo $currentBefore . __('Articles posted by', 'utility') . ' ' . $userdata->display_name . $currentAfter;

			} elseif ( is_404() ) {
				echo $currentBefore . __('Error 404', 'utility') . $currentAfter;
			}

			if ( get_query_var('paged') ) {
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
				echo __('Page','utility') . ' ' . get_query_var('paged');
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
			}

			echo '</div>';

		}
	}

	/**
	* Used as a callback by wp_nav_menu() for displaying the categories list in the menu.
  */
	function utility_custom_header_menu() { ?>
		<ul> <?php
			wp_list_categories('orderby=name&order=ASC&number=9&title_li='); ?>
		</ul> <?php
	}

	/**
	* Displays post meta data
  */
	function utility_posted_on_details() { ?>
		<div class="c_link">
			<span class="w100 fleft pad_bottom20"><?php
        _e('Posted On ','utility');
        echo esc_attr( get_the_date() ) . ' ';
        echo __('by', 'utility') . ' ';
        the_author_posts_link() ?>
      </span>
		</div>  <?php
	}

	/**
	* Used as a callback by wp_list_comments() for displaying the comments.
  */
	function utility_custom_comments( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) {
			case '' :	?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
					<div id="comment-<?php comment_ID(); ?>" class="comment-body">
						<div class="comment-author vcard">
							<?php echo get_avatar( $comment, 40 ); ?>
							<?php printf( __('%s <span class="says">says:</span>','utility'), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
						</div><!-- .comment-author .vcard --> <?php
						if ( $comment->comment_approved == '0' ) { ?>
							<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','utility'); ?></em>
							<br /> <?php
						} ?>

						<div class="comment-meta commentmetadata">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"> <?php
								printf( '%1$s at %2$s', get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __('(Edit)','utility'), ' ' );  ?>
						</div>

						<div class="comment-body"><?php comment_text(); ?></div>

						<?php if (comments_open()) { ?>
						<div class="reply">
							<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</div> <?php } ?><!-- .reply -->
					</div>
				</li><!-- #comment-##  --> <?php
			break;
			case 'pingback'  :
			case 'trackback' :  ?>
				<li class="post pingback">
					<p><?php _e('Pingback:','utility'); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'utility'), ' ' ); ?></p>
				</li> <?php
				break;
		}
	}

	if (!is_admin()) {
		add_action( 'wp_print_scripts', 'utility_custom_theme_scripts', 100 );
	}
	/**
	* enqueues scipts
  */
  function utility_custom_theme_scripts() {
   global $UT_custom_theme_option;
     wp_enqueue_script( 'jquery');
     if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_news_ticker_section"]  || empty($UT_custom_theme_option)) {
    wp_enqueue_script( 'jquery.ticker.min', UT_JS_PATH . 'utility_jquery.ticker.js' );
   }
     if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_sidebar_cat1_section"]  || empty($UT_custom_theme_option)) {
    wp_enqueue_script( 'fadeslideshow', UT_JS_PATH . 'utility_fadeslideshow.js' );
   } ?>
     <script type="text/javascript">
       var UT_IMAGES_PATH = "<?php echo UT_IMAGES_PATH; ?>";
     </script> <?php
   if ( is_singular() && get_option( 'thread_comments' ) ) {
     wp_enqueue_script('comment-reply');
   }

  }

  /**
	 * Adding JS
  */
  add_action('wp_head', 'utility_myheader');

  function utility_myheader() {
   global $UT_custom_theme_option;
   if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_news_ticker_section"]  || empty($UT_custom_theme_option)) { ?>
					<script type="text/javascript">
						jQuery(function () {
							jQuery('#js-news').ticker({speed: 0.10 });
						});
					</script> <?php
				}
  }

 /**
	 * enqueues styles
  */
  if (!is_admin()) {
   add_action('wp_print_styles', 'utility_print_styles');
  }

  function utility_print_styles() {
   global $UT_custom_theme_option;
   wp_register_style('utility_commonstylesheet',  UT_CSS_PATH . 'utility_common.css');
   wp_enqueue_style('utility_commonstylesheet');
   if ($UT_custom_theme_option[UT_THEME_SHORT_NAME . "_news_ticker_section"]  || empty($UT_custom_theme_option)) {
			  wp_register_style('utility_tickerstyle',  UT_CSS_PATH . 'utility_ticker-style.css');
     wp_enqueue_style('utility_tickerstyle');
	 }

  }

	/**
	* Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and post link.
  */
	function utility_excerpt_more( $more ) {
		return ' &hellip;' . '<a href="'. get_permalink() . '">' . __('Continue reading <span class="meta-nav">&rarr;</span>','utility') . '</a>';
	}
	add_filter( 'excerpt_more', 'utility_excerpt_more' );
?>