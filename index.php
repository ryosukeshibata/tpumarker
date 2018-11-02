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
        <div class="topic-container">
        <?php
            $example_posts = get_posts('cat="ほげ"post_type=post&posts_per_page=3');  
            ?>
        <?php
        foreach ( $example_posts as $post ):
            setup_postdata($post);?>
            <div class="topic-post">
                <div class="pick-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/new.png" width="70" height="70"></div>
                <div class="post-image"><a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(array(100, 100)); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.png" width="100" height="100">
                <?php endif; ?>
                </a></div>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="post-meta">
                    <div class="category"><?php the_category(' '); ?></div>
                    <div class="data-time"><?php echo get_the_date(); ?></div>
                </div>
            </div>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
        <div class="container">
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
                    <div class="category"><?php the_category(' '); ?></div>
                    <div class="data-time"><?php echo get_the_date(); ?></div>
                </div>
            </div>
            <?php
            endwhile;
            else:
        ?>
            <p>記事はありません！</p>
        <?php endif; ?>
            
            <?php //get_sidebar(); ?>
        </div><!-- /main -->
        <?php the_posts_pagination(array(
            'prev_text' => '◀',
            'mid_size'  => 10,
            'next_text' => '▶',
            )); 
        ?>
        <?//php get_footer(); ?> 
    </body>
</html>