<?php
  if (have_posts()) {
    while (have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('k_main'); ?>> <?php
        if ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) ) { ?>
          <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> <?php
          utility_posted_on_details();
          if ( post_password_required() ) {
            the_content();
          } else {
            $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
            if ( $images ) {
              $total_images = count( $images );
              $image = array_shift( $images );
              $image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );?>
              <div class="gallery-thumb">
                <a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
              </div><!-- .gallery-thumb -->
              <p class="fleft">
                <em>
                 <?php _e('This gallery contains','utility')?> <a href="<?php echo get_permalink(); ?>"><?php echo number_format_i18n( $total_images ); ?> <?php echo _n('image','images',$total_images,'utility') ?> .</a>
                </em>
              </p> <?php
            }
            the_excerpt();
          }
        } elseif ( ( function_exists( 'get_post_format' ) && 'aside' == get_post_format( $post->ID ) )  ) {
          utility_posted_on_details(); ?>
          <div class="description">
            <?php the_content( __('Read More <span class="meta-nav">&rarr;</span>','utility') ); ?>
          </div>
          <div class="entry-utility">
            <span class="comments-link"><?php comments_popup_link( __('Leave a comment','utility') , __('1 Comment','utility'), __('% Comments','utility') ); ?></span> <?php
            edit_post_link( __('Edit','utility'), __('<span class="meta-sep">|</span> <span class="edit-link">','utility'), '</span>' ); ?>
          </div> <?php
        } else { ?>
          <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> <?php
          utility_posted_on_details(); ?>
          <div class="description">
            <?php the_content( __('Read More <span class="meta-nav">&rarr;</span>','utility') ); ?>
          </div>
          <div class="c_link">
            <?php wp_link_pages( array( 'before' => __('<div class="page-link"> Pages:','utility'), 'after' => '</div>' ) ); ?>
          </div>
          <div class="entry-utility">	<?php
            if ( count( get_the_category() ) ) { ?>
             <span class="cat-links">
              <?php printf( __('<span class="%1$s">Posted in </span> %2$s','utility'), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
             </span>
             <span class="meta-sep">|</span> <?php
            }
            $tags_list = get_the_tag_list( '', ', ' );
            if ( $tags_list ) { ?>
              <span class="tag-links">
               <?php printf( __('<span class="%1$s">Tagged</span> %2$s','utility'), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
              </span>
              <span class="meta-sep">|</span> <?php
            } ?>
            <span class="comments-link"><?php comments_popup_link( __('Leave a comment','utility') , __('1 Comment','utility'), __('% Comments','utility') ); ?></span> <?php
            edit_post_link( __('Edit','utility'), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
          </div> <?php
        } ?>
      </div> <?php
    endwhile;
    if (  $wp_query->max_num_pages > 1 ) { ?>
      <div id="nav-below" class="navigation">
        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts','utility' ) ); ?></div>
        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>','utility' ) ); ?></div>
      </div> <?php
    }
  } else {
     _e('No Post Found','utility');
  }
?>