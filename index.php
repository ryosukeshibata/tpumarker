<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>TPUmarker</title>
    <meta name="TPUmarker" content="">
    <link rel="stylesheet"  href="./assets/css/PostedList.css">
    <link rel="stylesheet"  href="./style.css">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/PostedList.css" type="text/css" />
</head>
    <body>
    <?php// get_header(); ?>
    <div id="main"class="container">
        <?php
        if(have_posts()):
            while (have_posts()):
                the_post();
            ?>
        <div class="post">
            
            <div class="post-image"><a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail(array(100, 100)); ?>
            <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100">
            <?php endif; ?>
            </a></div>
            <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="post-meta">
                <div class="category"><?php the_category(','); ?></div>
                <div class="data-time"><?php echo get_the_date(); ?></div>
            </div>
        </div>
        <?php
        endwhile;
        else:
    ?>
        <p>記事はありません！</p>
    <?php endif; ?>
        <div class="navigation">
            <div class="prev" ><?php previous_posts_link(); ?></div>
            <div class="next"><?php next_posts_link(); ?></div>
        </div>
        <?php //get_sidebar(); ?>
    </div><!-- /main -->
    <?//php get_footer(); ?> 
    </body>
</html>