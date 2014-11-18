<?php
  $cat_id = '';
  $cat_link = '';
  $cat_name = '';
  global $UT_custom_theme_option;
  if ( is_array($UT_custom_theme_option) ) {
		$cat_id = $UT_custom_theme_option[UT_THEME_SHORT_NAME . '_sidebar_cat1'];
		$num_cat_post = $UT_custom_theme_option[UT_THEME_SHORT_NAME .'_sidebar_cat1_numposts'];
		if($num_cat_post == '' || $num_cat_post == 0){
			$num_cat_post = UT_DEFAULT_NUM_POSTS;
		}
	} else { //If no value is set from the backend
		$num_cat_post = UT_DEFAULT_NUM_POSTS;
	}
  if ($cat_id) {
    $cat_name = get_cat_name( $cat_id );
    $cat_link = get_category_link( $cat_id );
  }
  $args = array( 'cat' => $cat_id,
                'orderby'=>'ID',
                'order' => 'DESC',
                'posts_per_page' => $num_cat_post,
                'ignore_sticky_posts' => 1
               );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) {
    $MAX_NO_OF_ITEMS_IN_CAROUSEL = 10;
    $count = 1; ?>
    <script type="text/javascript" >
      var mygallery=new fadeSlideShow({
        wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
        dimensions: [302, 201], //width/height of gallery in pixels. Should reflect dimensions of largest image
        imagearray: [ <?php
          while ($the_query->have_posts()) : $the_query->the_post();
            if($count < $num_cat_post && $count != $MAX_NO_OF_ITEMS_IN_CAROUSEL) { ?>
              ["<?php addslashes(utility_show_thumb('301', '201', 'crosual_default-image.png' ,'1')); ?>", "<?php the_permalink(); ?>", "", "<?php echo get_the_title();?>"], <?php
            } else { ?>
              ["<?php addslashes(utility_show_thumb('301', '201', 'crosual_default-image.png','1')); ?>", "<?php the_permalink(); ?>", "", "<?php echo get_the_title();?>"]//--no trailing comma after very last image element!
              <?php break;
            }
            $count++;
          endwhile; ?>
        ],
        displaymode: {type:'auto', pause:3000, cycles:0, wraparound:true},
        persist: false, //remember last viewed slide and recall within same session?
        fadeduration: 500, //transition duration (milliseconds)
        descreveal: "peekaboo",
      });
    </script> <?php
  } ?>
  <div class="mt0 prnt_cont">
    <div class="star_pic">
      <div id="fadeshow1"></div>
    </div>
  </div>