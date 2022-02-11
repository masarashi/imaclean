<?php

/**
 * <title> タグを出力する
 */
add_theme_support('title-tag');

/**
 * タイトルの区切り文字を変更
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

/**
 * タイトルのカスタマイズ
 */
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title){
    if (is_home()) {
        unset($title['tabline']); // タグラインを削除
        $title['title'] = 'さいたま市・東京近郊で内装解体・不用品・産業廃棄物運搬・ゴミ回収なら'; // テキストを変更
    }
    return $title;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * トップページの投稿表示件数
 */
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query){
    // 管理画面、メインクエリ以外には設定しない
    if(is_admin() || !$query->is_main_query()){
        return;
    }
    // トップページの場合に設定する
    if ($query->is_home()) {
        // 表示件数
        $query->set('posts_per_page', 3,);
        // 表示カテゴリの絞り込み
        $query->set('category_name', 'news');
        return;
    }
}

/**
 * css の読み込み
 */
function custom_enqueue() {
    wp_enqueue_style('reset_style', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('my_style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'custom_enqueue');
