<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TPUMarker</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page-post.min.css">
    </head>
    <body>
        <div class="contents">
            <?php get_sidebar(); ?>
            <div class="main-contents">
                <div class="main-content">
                    <?php
                    if(have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>
                            <div class="title-area">
                                <h2 class="title"><?php the_title(); ?></h2>
                                <div class="post-data">
                                    <span>投稿者 : <?php the_author_nickname(); ?></span>
                                    <span>投稿日 : <?php echo get_the_date(); ?> 【<?php the_category(','); ?>】</span>
                                    <span>アクセス数 : <?php if(function_exists('the_views')) { the_views(); } ?></span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="post-content">
                                    <?php the_content(); ?>
                                    <a href="#">記事一覧に戻る</a>
                                </div>
                                <div class="navigation ">
                                    <div class="prev" ><?php previous_post_link('%link','<i class="fa fa-chevron-circle-left"></i> %title'); ?></div>
                                    <div class="next"><?php next_post_link('%link','%title <i class="fa fa-chevron-circle-right"></i>'); ?></div>
                                </div>
                                <div class="comment-data">
                                    <h3>この記事へのコメント</h3>
                                    <p>まだコメントはありません</p>
                                </div>
                                <div class="comment-area">
                                    <p>* メールアドレスは公開されませんのでご安心ください。</p>
                                    <p>* 名前とメールアドレスは必ずご記入をお願いします。</p>
                                    <form action="#" method="post">
                                        <div class="name">
                                            <span>Name</span>
                                            <input type="text" name="name" value="">
                                        </div>
                                        <div class="email">
                                            <span>メールアドレス</span>
                                            <input type="text" name="email" value="">
                                        </div>
                                        <div class="comment">
                                            <span>コメント</span>
                                            <textarea name="comment" rows="4" cols="40"></textarea>
                                        </div>
                                        <div class="submit">
                                            <p>内容に問題なければ、下記の「コメントを送信する」ボタンを押してください。</p>
                                            <input class="input-submit" type="submit" name="submit" value="コメントを送信">
                                        </div>
                                    </form>
                                </div>
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
