<?php
//アイキャッチ画像の有効化
 
add_theme_support('post-thumbnails');

if ( function_exists('register_sidebar') ){
 
register_sidebar(array(
 
 'name' => 'サイドバー',
 
 'id' => 'sidebar',
 
 'description' => 'ウィジェットの説明',
 
 'before_widget' => '<div>',
 
 'after_widget' => '</div>',
 
 'before_title' => '<h3>',
 
 'after_title' => '</h3>'
 
 ));
}
?>
