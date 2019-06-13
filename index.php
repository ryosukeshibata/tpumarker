<?php get_header(); ?>
<?php wp_head()?>
    <div class="contents">
        <div class="contents-header">
            <h1 class="contents-title">記事一覧</h1>
        </div>
        <div class="topic">
            <div class="topic-list">
                <?php
                if(have_posts()):
                    while (have_posts()):
                        the_post();
                ?>
                <section class="topic-section">
                    <div class="card">
                        <div class="card-thumb">
                            <a href="<?php the_permalink() ?>" class="card-link">
                            <?php
                            if (has_post_thumbnail()):
                            ?>        
                            <?php the_post_thumbnail(); ?>
                            <?php
                            else:
                            ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnails/empty.png" alt="" class="no-image">
                                <?php endif; ?>
                                </a>
                            </div>
                            <h2 class="card-title">
                                <a href="<?php the_permalink() ?>" class="card-link"><?php the_title(); ?></a>
                            </h2>
                            <div class="card-date"><?php echo get_the_date('Y.m.d'); ?></div>
                            <a href="<?php the_permalink() ?>" class="card-link"></a>
                            <div class="card-category">
                                <?php the_category(' ');?>
                                <script>
                                $(function(){
                                    //タグの数が３つを超えると非表示にする
                                    //card-categoryの要素毎に処理する
                                    $(".card-category").each(function () {
                                        var num = $(this).find('a').length;
                                        if(num>3){
                                            var i;
                                            for(i=3;i<=num;i++){
                                                $(this).find('a').eq(i).css('display','none');
                                            }
                                        }
                                    }); 
                                });
                                </script>
                            </div>
                        </div>
                    </section>
                <?php
                    endwhile;
                else:
                ?>
                    <p class="no-content">記事はありません！</p>
                <?php endif; ?>
            </div>
            <?php
                wpbeginner_numeric_posts_nav();
            ?>
        </div>
    </div>
    <?php get_footer(); ?>
</body>
</html>
