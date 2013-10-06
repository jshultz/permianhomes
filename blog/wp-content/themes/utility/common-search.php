<?php
 if (have_posts()) {
   while (have_posts()) : the_post(); ?>
     <div class="content">
       <p class="tm2 search">
         <b>
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         </b>
         <?php the_excerpt(); ?>
       </p>
     </div> <?php
   endwhile;
   if (  $wp_query->max_num_pages > 1 ) { ?>
     <div id="nav-below" class="navigation">
       <div class="nav-previous"><?php next_posts_link( __('<span class="meta-nav">&larr;</span> Older posts','utility') ); ?></div>
       <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>','utility' ) ); ?></div>
     </div> <?php
   }
 } else {
    _e('Sorry, but nothing matched your search criteria', 'utility');
 } ?>