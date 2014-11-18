<?php
  $cat_id = '';
  $cat_link = '';
  $cat_name = '';
  global $UT_custom_theme_option;
  if ( is_array($UT_custom_theme_option) ) {
		$cat_id = $UT_custom_theme_option[UT_THEME_SHORT_NAME . '_sidebar_cat5'];
		$num_cat_post = $UT_custom_theme_option[UT_THEME_SHORT_NAME .'_sidebar_cat5_numposts'];
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
  if ($the_query->have_posts()) {  ?>
    <div class="prnt_cont">
      <h1> <?php
				if ($cat_id) { ?>
					<a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a><?php
				} else {
                    _e('Recent Posts','utility');
				} ?>
			</h1>
      <div class="subcontainer"> <?php
        while ($the_query->have_posts()) :
          $the_query->the_post(); ?>
          <span class="thumb">
            <?php utility_show_thumb('110','110', 'default.png'); ?>
          </span>
          <?php
        endwhile;
        wp_reset_query();?>
      </div>
    </div> <?php
  }
?>