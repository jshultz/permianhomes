<?php
  $cat_id = '';
  $cat_name = '';
  $cat_link = '';
  global $UT_custom_theme_option;

  if ( is_array($UT_custom_theme_option) ) {
		$cat_id = $UT_custom_theme_option[UT_THEME_SHORT_NAME . '_news_ticker'];
		$num_cat_post = $UT_custom_theme_option[UT_THEME_SHORT_NAME .'_news_ticker_numposts'];
		if($num_cat_post == '' || $num_cat_post == 0) {
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
  if ($the_query->have_posts()) { ?>
     <div id="ticker-wrapper" class="no-js">
       <b class="news1"> 
         <a href="<?php echo $cat_link; ?>"><?php
          if (strlen($cat_name) > 10) {
            echo substr($cat_name, 0, 10) . '..';
          } else {
            echo $cat_name;
          } ?>
          </a>
          <em>&#187;</em>  </b>
       <ul id="js-news" class="js-hidden"> <?php
         while ($the_query->have_posts()) {
           $the_query->the_post();?>
           <li class="news-item"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li><?php
         } ?>
       </ul>
     </div> <?php
  }
?>