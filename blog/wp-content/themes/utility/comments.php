<?php
	$class_name = '';
	if (comments_open()) {
		$class_name = 'class="k_main"';
	}
 if ( post_password_required() ) { ?>
   <div <?php echo $class_name; ?> id="comments">
    <p class="nocomments">
      <?php _e( 'This post is password protected. Enter the password to view comments.' ,'utility'); ?>
    </p>
   </div> <?php
   return;
 } ?>
 <div <?php echo $class_name; ?> id="comments"> <?php
   if ( have_comments() ) { ?>
    <h3 id="comments-title"> <?php
      printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number() ), number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' ); ?>
    </h3> <?php
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
      <div class="navigation">
        <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments','utility') ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>','utility' ) ); ?></div>
      </div> <?php
    } ?>

    <ol class="commentlist">
      <?php wp_list_comments( array( 'callback' => 'utility_custom_comments' ));?>
    </ol> <?php

    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // Are there comments to navigate through? ?>
      <div class="navigation">
        <div class="nav-previous"><?php previous_comments_link( __('<span class="meta-nav">&larr;</span> Older Comments','utility') ); ?></div>
        <div class="nav-next"><?php next_comments_link( __('Newer Comments <span class="meta-nav">&rarr;</span>','utility') ); ?></div>
      </div> <?php
    }
  } else { // this is displayed if there are no comments so far
    if ( !comments_open() ) { ?>
      <p class="nocomments"><?php _e('Comments are closed.', 'utility'); ?></p> <?php
    }
  }
  comment_form(); ?>
</div>