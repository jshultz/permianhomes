<?php
 if (have_posts()) {
   $row_count = 1;
   while (have_posts()) : the_post();
     if ($row_count % 2 == 0) {
       $style= 'style="float:right;"';
     } else {
       $style = '';
     } ?>
     <div <?php echo $style; ?> class="content">
       <p class="ta1">
         <?php utility_show_thumb('110','110', 'default.png'); ?>
       </p>
       <p class="ta2">
         <b>
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         </b> <?php
         $tags_list = get_the_tag_list( '', ' | ', '' );
         if ($tags_list) { ?>
           <em class="tags">TAGS: <?php
             echo $tags_list; ?>
           </em> <?php
         }
        the_excerpt(); ?>
       </p>
     </div> <?php
     $row_count++;
   endwhile;
   if (  $wp_query->max_num_pages > 1 ) { ?>
     <div id="nav-below" class="navigation">
       <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts','utility' ) ); ?></div>
       <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>','utility' ) ); ?></div>
     </div> <?php
   }
 } else {
    _e( 'No Post Found','utility' );
 } ?>