<?php
function breadcrumb() {
	$home = '<li><a href="'.get_bloginfo('url').'" >TOP</a></li>';
	global $post;
    echo '<ul>';
    if ( is_front_page() ) {
        // トップページの場合
    }
    else if ( is_category() ) {
		// カテゴリページの場合
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0){
            $cat = get_category( $cat_id );
            $cat_link = get_category_link( $cat_id );
            array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
            $cat_id = $cat->parent;
        }
		echo $home;

        foreach($cat_list as $value){
            echo $value;
        }
        the_archive_title('<li>', '</li>');
    }
	 else if ( get_post_type() === 'case' ) {
	echo $home;
	echo '<li><a href="/case" >症例写真</a></li>';
    }
	else if ( is_archive() ) {
	// 月別アーカイブ・タグページの場合
	echo $home;
	
    the_archive_title('<li>', '</li>');
    }
    else if ( is_single() ) {
	// 投稿ページの場合
	echo $home;
    $cat = get_the_category();
        if( isset($cat[0]->cat_ID) ) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while ($cat_id != 0){
            $cat = get_category( $cat_id );
            $cat_link = get_category_link( $cat_id );
            array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
            $cat_id = $cat->parent;
        }
        foreach($cat_list as $value){
            echo $value;
        }
        the_title('<li>', '</li>');
    }
    else if( is_page() ) {
    // 固定ページの場合
        echo $home;
        $category = get_the_category();
		if( $post -> post_parent != 0 ){ // 投稿の親ページがあるかどうかを判別
			$ancestors = array_reverse( $post->ancestors ); // 投稿の祖先ページの ID を配列として取得
			$menu = '<li><a href="/menu">MENU</a></li>';
			$title_header = '';
			foreach($ancestors as $ancestor){ // 配列を一覧として表示
		  		if(get_the_title($ancestor) == "使用機器"){
					$title_header = "使用機器 − ";
				}
				if(get_the_title($ancestor) == "お悩み"){
					$title_header = "悩み − ";
				}
				if(get_the_title($ancestor) == "施術内容"){
					$title_header = "";
				}
			}
		}
		echo $menu;
		echo '<li class="current">'.$title_header.wp_trim_words( get_the_title(), 24, '...' ).'</li>';
		  echo '</ul>';
    }
    else if( is_search() ) {
    // 検索ページの場合
    echo $home;
    echo '<li>「'.get_search_query().'」の検索結果</li>';
    }
    else if( is_404() ) {
    // 404ページの場合
    echo $home;
    echo '<li>ページが見つかりません</li>';
    }
    echo "</ul>";
}
 
// アーカイブの余計なタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_month() ) {
        $title = single_month_title( '', false );
    }
    return $title;
});