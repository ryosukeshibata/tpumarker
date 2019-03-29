<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.min.css" type="text/css" />
</head>
<body>
    <div class="contents">
        <?php get_sidebar(); ?>
        <div class="topics">
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
                                    <?php the_post_thumbnail(array(280, 186)); ?>
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
    </div>
    <?php get_footer(); ?>
</body>
</html>
