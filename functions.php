<?php

/*********************
    共通処理
 *********************/

/**
 * クエリ文字列(タイムスタンプ)
 * @return string $strTimeStamp
 */
function strTimeStamp()
{
    return '?' . '2026073001';
}

/**
 * XSS対策
 * @return string $str
 */
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}


/*********************
    基本設定
 *********************/

//アイキャッチ画像
add_theme_support('post-thumbnails', array('post'));

/**
 * サイトのタイトル設定
 */
add_theme_support('title-tag');

/**
 * 文字数を超える場合、省略文字を設定
 */
function char_ellipsis($text, $limit = 30)
{
    if (mb_strlen($text) > $limit) {
        $title = mb_substr($text, 0, $limit);
        $text = $title . "...";
    }
    return $text;
}

/**
 *  画像設定
 */
function get_thumb_img_eyecatch($size = 'full', $alt = null, $p_id = null)
{

    $p_id = ($p_id) ? $p_id : get_the_ID();
    $thumb_id = get_post_thumbnail_id($p_id);
    $thumb_img = wp_get_attachment_image_src($thumb_id, $size);
    $thumb_src = $thumb_img[0];
    $alt = ($alt) ? $alt : get_the_title($p_id);

    return '<img src="' . $thumb_src . strTimeStamp() . '" alt="' . $alt . '" loading="lazy">';
}

/**
 *  パンクズ設定
 */

require get_template_directory() . '/inc/breadcrumb.php';

// CSS読み込み
function load_css()
{
    if (is_page_template('page-general.php')) {
        wp_enqueue_style(
            'page-general',
            get_template_directory_uri() . '/assets/css/style_general.css',
            array(),
            filemtime(__dir__ . '/assets/css/style_general.css')
        );
    }
}
add_action('wp_enqueue_scripts', 'load_css');

/*********************
    カスタム投稿タイプ
 *********************/
/**
 * アーカイブページを適用
 */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'information';
        $args['label'] = 'お知らせ';
        $args['menu_icon'] = 'dashicons-admin-post';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * カスタム投稿タイプ（case）
 */
function cpt_register_case()
{
    $labels = [
        "singular_name" => "case",
        "edit_item" => "case",
    ];
    $args = [
        "label" => "症例写真",
        "labels" => $labels,
        "menu_icon" => 'dashicons-admin-post',
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => ["slug" => "case", "with_front" => true],
        "query_var" => true,
        "menu_position" => 6,
        "supports" => ["title", "editor", "thumbnail", 'author'],
    ];
    register_post_type("case", $args);
}
add_action('init', 'cpt_register_case');

/**
 * カスタム投稿タイプ（qa）
 */
function cpt_register_qa()
{
    $labels = [
        "singular_name" => "qa",
        "edit_item" => "qa",
    ];
    $args = [
        "label" => "Q&A",
        "labels" => $labels,
        "menu_icon" => 'dashicons-admin-post',
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => ["slug" => "qa", "with_front" => true],
        "query_var" => true,
        "menu_position" => 6,
        "supports" => ["title", "editor", "thumbnail", 'author'],
    ];
    register_post_type("qa", $args);
}
add_action('init', 'cpt_register_qa');


/*********************
OGPタグ/Twitterカード設定を出力
 *********************/
function my_meta_ogp()
{
    // if (is_front_page() || is_home() || is_singular()) {
    global $post;
    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';

    if (is_single() && is_singular('post')) { //記事ページ
        setup_postdata($post);
        $ogp_title = $post->post_title;
        $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
        $ogp_url = get_permalink();
        wp_reset_postdata();
    } else { //トップページ
        $ogp_title = get_bloginfo('name');
        $ogp_descr = get_bloginfo('description');
        $ogp_url = home_url();
    }

    //og:type
    $ogp_type = (is_single() && is_singular('post')) ? 'article' : 'website';

    //og:image
    if (is_single() && is_singular('post') && has_post_thumbnail()) {
        $thumb_id = get_post_thumbnail_id();
        $ogp_img = wp_get_attachment_image_src($thumb_id, 'full')[0];
    } else {
        $ogp_img = get_template_directory_uri() . '/assets/img/img_ogp.webp' . strTimeStamp();
    }

    //出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '" />' . "\n";
    $insert .= '<meta property="og:description" content="' . esc_attr($ogp_descr) . '" />' . "\n";
    $insert .= '<meta property="og:type" content="' . $ogp_type . '" />' . "\n";
    $insert .= '<meta property="og:url" content="' . esc_url($ogp_url) . '" />' . "\n";
    $insert .= '<meta property="og:image" content="' . esc_url($ogp_img) . '" />' . "\n";
    $insert .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    $insert .= '<meta name="twitter:site" content="" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    //facebookのapp_id（設定する場合）
    $insert .= '<meta property="fb:app_id" content="">' . "\n";
    //app_idを設定しない場合ここまで消す

    echo $insert;
    // }
} //END my_meta_ogp

add_action('wp_head', 'my_meta_ogp'); //headにOGPを出力

/*********************
カスタムタクソノミー （カテゴリー・タグ）設定
 *********************/

/**
 * カスタムタクソノミーの設定を追加
 */
function add_taxonomy()
{
    //悩みカテゴリー
    register_taxonomy(
        'cat_trouble',
        'case',
        array(
            'label' => '悩み',
            'singular_label' => '悩み',
            'labels' => array(
                'all_items' => '悩み一覧',
                'add_new_item' => '悩みを追加'
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'hierarchical' => true
        )
    );

    //施術内容カテゴリー
    register_taxonomy(
        'cat_treatment',
        'case',
        array(
            'label' => '施術内容',
            'singular_label' => '施術内容',
            'labels' => array(
                'all_items' => '施術内容一覧',
                'add_new_item' => '施術内容を追加'
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'hierarchical' => true
        )
    );

    //機器カテゴリー
    register_taxonomy(
        'cat_machine',
        'case',
        array(
            'label' => '機器',
            'singular_label' => '機器',
            'labels' => array(
                'all_items' => '機器一覧',
                'add_new_item' => '機器を追加'
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'hierarchical' => true
        )
    );

    //Q&Aカテゴリー
    register_taxonomy(
        'cat_qa',
        'qa',
        array(
            'label' => 'カテゴリー',
            'singular_label' => 'カテゴリー',
            'labels' => array(
                'all_items' => 'カテゴリー一覧',
                'add_new_item' => 'カテゴリーを追加'
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'hierarchical' => true
        )
    );
}
add_action('init', 'add_taxonomy');

function change_posts_per_page($query)
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ($query->is_post_type_archive('case')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '6'); //表示件数を指定
    } else if ($query->is_archive()) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '6'); //表示件数を指定
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

/**
 * 記事のスラッグを自動で設定
 * （スラッグのURLは自由に編集できるようにしておきたい）
 * （初回の記事の保存時だけ、スラッグを記事のIDに指定したい）
 * （記事の編集・更新時はスラッグに何も処理をしない）
 */
function slug_auto_setting($slug, $post_ID, $post_status, $post_type)
{
    // 記事IDからを記事情報を取得
    $post = get_post($post_ID);

    // 初回の記事保存時にのみ、記事のSlugを記事IDに設定
    if (($post_type == 'post' && $post->post_date_gmt == '0000-00-00 00:00:00') ||
        ($post_type == 'case' && $post->post_date_gmt == '0000-00-00 00:00:00') ||
        ($post_type == 'qa' && $post->post_date_gmt == '0000-00-00 00:00:00')
    ) {
        $slug = $post_ID;
        return $slug;
    }

    return $slug;
}
add_filter('wp_unique_post_slug', 'slug_auto_setting', 10, 4);

/**
 * 曜日を返却する
 *
 * @param [type] $dayNum
 * @return void
 */
function getJpDayWeek($dayNum)
{
    //配列を使用し、要素順に(日:0〜土:6)を設定する
    $week = [
        'Sun', //0
        'Mon', //1
        'Tue', //2
        'Wed', //3
        'Thu', //4
        'Fri', //5
        'Sat', //6
    ];

    //日本語で曜日を出力
    return $week[$dayNum];
}

/**
 * searchタイプの追加
 */
add_filter('template_include', 'custom_search_template');
function custom_search_template($template)
{
    if (is_search()) {
        $post_types = get_query_var('post_type');
        foreach ((array) $post_types as $post_type)
            $templates[] = "search-{$post_type}.php";
        $templates[] = 'search.php';
        $template = get_query_template('search', $templates);
    }
    return $template;
}

/**
 * 遷移させないsingleページが指定された場合、各々にリダイレクト
 */
add_action('get_header', 'specific_url_redirect');
function specific_url_redirect()
{
    if (is_singular() && get_post_type() == 'qa') {
        wp_redirect(bloginfo('url') . '/qa', 301);
        exit;
    }
}


/**
 * カスタム投稿タイプ「症例写真」でカテゴリ未選択時にデフォルト を設定
 *
 * @param [type] $post_ID
 * @return void
 */
function add_defaultcategory_automatically_case($post_ID)
{
    global $wpdb;
    // 設定されているカスタム分類のタームを取得
    $curTerm = wp_get_object_terms($post_ID, 'cat_trouble');

    // 既存のターム指定数が 0（つまり未設定）であれば、「skin」を指定
    if (0 == count($curTerm)) {
        // notice のターム ID
        $defaultTerm = array(4);
        wp_set_object_terms($post_ID, $defaultTerm, 'cat_trouble');
    }
}
// case を作成する際に指定
add_action('publish_case', 'add_defaultcategory_automatically_case');

/**
 * カスタム投稿タイプ「Q&A」でカテゴリ未選択時にデフォルト を設定
 *
 * @param [type] $post_ID
 * @return void
 */
function add_defaultcategory_automatically_qa($post_ID)
{
    global $wpdb;
    // 設定されているカスタム分類のタームを取得
    $curTerm = wp_get_object_terms($post_ID, 'cat_qa');

    // 既存のターム指定数が 0（つまり未設定）であれば、「treatment」を指定
    if (0 == count($curTerm)) {
        // notice のターム ID
        $defaultTerm = array(11);
        wp_set_object_terms($post_ID, $defaultTerm, 'cat_qa');
    }
}
// qa を作成する際に指定
add_action('publish_qa', 'add_defaultcategory_automatically_qa');

/**
 * デフォルトで「テキストとしてペースト」ON
 */
function my_tinymce_paste_as_text($init)
{
    $init['paste_as_text'] = true;
    return $init;
}
add_filter('tiny_mce_before_init', 'my_tinymce_paste_as_text');

/**
 * リダイレクト
 */

function custom_page_redirects() {

    $request = strtok($_SERVER['REQUEST_URI'], '?');

    // 既に新URLなら何もしない
    if ($request === '/menu/acne/') {
        return;
    }

    $redirects = [
        '/menu/trouble/skin/' => '/menu/skin/',
        '/menu/trouble/acne/' => '/menu/acne/',
    ];

    if (isset($redirects[$request])) {
        wp_redirect(home_url($redirects[$request]), 301);
        exit;
    }

}
add_action('template_redirect', 'custom_page_redirects');