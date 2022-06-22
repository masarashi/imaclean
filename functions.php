<?php

/**
 * css の読み込み
 */
function add_stylesheet()
{
    wp_register_style('reset', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', false);
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array('reset'), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

/**
 * javascript の読み込み
 */
function load_js()
{
    //管理画面を除外
    if (!is_admin()) {
        //事前に読み込まれるjQueryを解除
        wp_deregister_script('jquery');
        //Google CDNのjQueryを出力
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), NULL, true);
        //自作スクリプトや、jQueryのライブラリも同様に読み込みます。
        wp_enqueue_script('script-name', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    }
}
add_action('init', 'load_js');

/**
 * <title> タグを出力する
 * タイトル - サイト名
 */
add_theme_support('title-tag');

/**
 * タイトルの区切り文字を変更
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}

/**
 * タイトルのカスタマイズ
 */
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title)
{
    if (is_home()) {
        unset($title['tagline']); // description を出力しない
        // $title['title'] = 'I.M.Aクリーン産業 | さいたま市・東京近郊で内装解体・不用品・産業廃棄物運搬・ゴミ回収なら'; // テキストを変更
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
function my_pre_get_posts($query)
{
    // 管理画面、メインクエリ以外には設定しない
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    // トップページの場合に設定する
    if ($query->is_home()) {
        // 表示件数
        $query->set('posts_per_page', 3,);
        // 表示カテゴリの絞り込み
        $query->set('category_name', '');
        return 'post_date desc';
    }
}

// ページごとの description 設定
function get_description()
{
    if (is_home()) {
        $description = get_bloginfo('description');
    } elseif (is_page('aboutus')) {
        $description = "I.M.Aクリーン産業の企業情報";
    } elseif (is_page('service')) {
        $description = "I.M.Aクリーン産業のサービス";
    } elseif (is_page('news')) {
        $description = "I.M.Aクリーン産業からのお知らせ";
    } elseif (is_page('contact')) {
        $description = "I.M.Aクリーン産業へのお問い合わせ";
    } elseif (is_single()) {
        $post = get_queried_object();
        $description = strip_tags($post->post_content);
        $description = str_replace("\n", "", $description);
        $description = str_replace("\r", "", $description);
    } else {
        $description = get_bloginfo('description');
    }
    $description = mb_substr($description, 0, 160);
    return $description;
}

function display_description()
{
    echo get_description();
}
