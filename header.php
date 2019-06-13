<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1280">
    <title>TPUmarker</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://tpumarker.net/wp-content/themes/tpumarker-update-ver1/assets/img/design/MarkerLogo.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    </head>
<body>
    <div class="header">
        <div class="header-logo">
            <a href="http://tpumarker.net/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/design/MarkerLogo.png" alt="">
            </a>
        </div>
        <script>
            $(function(){
                $(' .header-list-item a').each(function(){
                    var $url = $(this).attr('href');
                    var $location = location.href;
                    if($location == $url) {
                        $(this).addClass('current');
                    } else {
                        $(this).removeClass('current');
                    }
                });
            });
        </script>

        <div class="header-list">
        <?php if ( is_single() ) : ?>
　　　　　   <!-- 個別ページの場合の処理 -->
            <?php  echo '<div class="header-list-item"><a class="single" href="">記事ページ</a></div>' ?>
            <?php endif; ?>
            <?php if( is_category() ): ?>
            <?php  echo '<div class="header-list-item"><a class="single" href="">カテゴリ別</a></div>' ?>
            <?php endif; ?>
            <div class="header-list-item"><a href="http://tpumarker.net/">ホーム</a></div>
            <div class="header-list-item"><a href="http://tpumarker.net/categories/">カテゴリ</a></div>
            <div class="header-list-item"><a href="http://tpumarker.net/%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E5%8B%9F%E9%9B%86/">記者募集</a></div>
            <div class="header-list-item"><a href="http://tpumarker.net/tpumarker%E3%81%A8%E3%81%AF%EF%BC%9F/">TPUmarkerとは?</a></div>
        </div>
    </div>