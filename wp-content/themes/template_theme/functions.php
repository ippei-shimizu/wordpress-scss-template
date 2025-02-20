<?php
// グローバルメニューを有効化
function mytheme_register_menus()
{
    register_nav_menus(
        array(
            'global_menu' => 'グローバルメニュー'
        )
    );
}
add_action('after_setup_theme', 'mytheme_register_menus');

// スタイルシートの読み込み
function mytheme_enqueue_styles()
{
    // 全ページ共通スタイル
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/main.css',
        array(),
        filemtime(get_template_directory() . '/css/main.css')
    );

    // トップページstyle読み込み
    if (is_front_page()) {
        wp_enqueue_style(
            'home-style',
            get_template_directory_uri() . '/css/home.css',
            array('main-style'),
            filemtime(get_template_directory() . '/css/home.css')
        );
    }

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
