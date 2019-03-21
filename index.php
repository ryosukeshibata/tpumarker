<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TPUmarker</title>
        <meta name="TPUmarker" content="">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" type="text/css" />
    </head>
    <body>
        <?php get_sidebar(); ?>
        <div class="main">
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
        <div class="contents">
            <?php get_sidebar(); ?>
                    ?>
                <div class="post">
                    
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
                <?php
                endwhile;
                else:
            ?>
                <p>記事はありません！</p>
            <?php endif; ?>
            </div><!-- /main -->
            <?php 
                wpbeginner_numeric_posts_nav();
            ?>
            <?//php get_footer(); ?> 
        </div>
        <?php get_footer(); ?>
    </body>
</html>
