<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TPUmarker</title>
        <meta name="TPUmarker" content="">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/PostedList.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sidebar.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css" type="text/css" />
    </head>
    <body>
    <?php get_sidebar(); ?>
      <div class="container">
      <div class="posts">
        <?php
        if(have_posts()):
          while (have_posts()):
            the_post();
             ?>
        <div class="single-post">
          <div class="single-post-header">
            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="single-post-meta">
              <?php echo get_the_date(); ?>【<?php the_category(','); ?>】
            </div>
          </div>
          <div class="single-post-conternt">
            <?php the_content(); ?>
          </div>
        </div>
      </div><!-- /posts -->
      <div class="navigation ">
        <div class="prev" ><?php previous_post_link(); ?></div>
        <div class="next"><?php next_post_link(); ?></div>
      </div>
      <?php
      endwhile;
      else:
     ?>
     <p>記事はありません！</p>
   <?php endif; ?>

      
    </div><!-- /main -->
  <?php //get_footer(); ?>
