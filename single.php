<?php get_header(); ?>
<?php wp_head()?>
    <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
    <div class="contents">
        <?php //get_sidebar(); ?>
        <div class="article-contents">
            <div class="article-content">
                <?php
                if(have_posts()):
                    while (have_posts()):
                        the_post();
                ?>
                        <div class="title-area">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <div class="article-thumb">
                            <?php
                            if (has_post_thumbnail()):
                            ?>
                                
                            <?php the_post_thumbnail(); ?>
                            <?php
                            else:
                            ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnails/empty.png" alt="" class="no-image">
                            <?php endif; ?>
                            </div>
                        </div>
                        <div class="content">
                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>
                            <div class="post-data">
                                    <span>投稿者 :  <?php the_author_nickname(); ?></span>
                                    <span>投稿日 :  <?php echo get_the_date('Y.m.d'); ?> </span>
                                    <span>カテゴリ :  <?php the_category(','); ?></span>
                                    <span>アクセス :  <?php if(function_exists('the_views')) { the_views(); } ?></span>
                                    <a href="#">記事一覧に戻る</a>
                                </div>
                            <div class="navigation ">
                                <div class="prev" ><?php next_post_link('%link','<i class="fa fa-chevron-circle-left"></i> %title'); ?></div>
                                <div class="next"><?php previous_post_link('%link','%title <i class="fa fa-chevron-circle-right"></i>'); ?></div>
                            </div>
                            <?php comments_template(); ?>
                        </div>
                <?php
                    endwhile;
                else:
                ?>
                    <p>記事はありません！</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>
</html>
