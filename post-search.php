<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TPUMarker</title>
    <link rel='dns-prefetch' href='//s.w.org'>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/search.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
    <div class="contents">
        <?php get_sidebar(); ?>

        <div class="topics">
            <div class="serch-area">
            </div>

        </div>
        <ul class="topic-contents">
            <?php
            if(have_posts()):
                while (have_posts()):
                    the_post();
            ?>
                <li class="topic-content">
                    <div class="topic-data">
                        <?php
                        if (has_post_thumbnail()):
                        ?>
                        <?php the_post_thumbnail(array(100, 100)); ?>
                        <?php
                        else:
                        ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnails/empty.png" alt="" class="post-thumbnail">
                        <?php endif; ?>
                        <div class="post-title"><?php the_title(); ?></div>
                        <div class="post-excerpt"><?php the_content('More ...'); ?></div>
                        <div class="post-date"><?php echo get_the_date(); ?></div>
                    </div>
                    <a href="<?php the_permalink() ?>" class="post-link"></a>
                    <ul class="post-categories">
                        <li class="post-category">
                            <?php the_category(' '); ?>
                        </li>
                    </ul>
                </li>
                <?php
                    endwhile;
                else:
                ?>
                <p class="no-content">記事はありません！</p>
            <?php endif; ?>
        </ul>

        <?php
            wpbeginner_numeric_posts_nav();
        ?>
    </div>
    <?php get_footer(); ?>
 </body>
</html>
