<form method="get" action="<?php bloginfo( 'url' ); ?>" >
    <?php 
        $args = array(
            'echo'=>1,
            'show_option_none' => 'カテゴリーを選択',
            'option_none_value' => '',
            'show_count' => 0,
            'hide_empty' => 0,
            'orderby' => 'id',
            'order' => 'asc',
        );
        wp_dropdown_categories($args);
    ?>
    <input type="text" name="s" id="s" placeholder="キーワードで検索" style="display: none;" />    
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>検索する</button>
</form>