<?php
/*
Template Name:categories
*/
?>
<?php get_header(); ?>
<?php wp_head()?>
    <div class="contents">
        <div class="contents-header">
            <h1 class="contents-title">カテゴリ一覧</h1>
        </div>
        <div class="topic">
            <div class="topic-list">
<?php $categories = get_categories('parent=0'); ?>
<?php foreach($categories as $category) : ?>
    <!-- カテゴリー名: <?php //echo $category->name; ?> -->
    <!-- スラッグ: <?php //echo $category->slug; ?> -->
    <!-- ID: <?php //echo $category->term_id; ?> -->
    <!-- 投稿数: <?php //echo $category->count; ?> -->
    <!-- 親カテゴリーID: <?php //echo $category->parent; ?> -->

                <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                'posts_per_page' => 1,
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => $category->slug,
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <section class="topic-section">
                    <div class="card cate-card">
                        <div class="card-thumb">
                            <a href="http://tpumarker.net/category/<?php echo $category->name; ?>" class="card-link">
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
                            <h2 class="card-cate-title">
                                <a href="http://tpumarker.net/category/<?php echo $category->name; ?>">
                                <?php echo $category->name; ?> (<?php echo $category->count; ?>)
                                </a>
                            </h2>
                        </div>
                    </section>
                <?php
                    endwhile; 
                    endif; 
                endforeach;
                    ?>
                
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>
</html>
