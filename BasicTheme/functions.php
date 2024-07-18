<?php

// Додавання підтримки логотипу
add_theme_support('custom-logo');

// Додавання підтримки меню
add_theme_support('menus');

// Реєстрація меню
function basictheme_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'basictheme_register_menus');

// Підключення стилів і скриптів
function basictheme_enqueue_styles() {
    wp_enqueue_style('basictheme-style', get_stylesheet_uri());

    wp_enqueue_style( 'basictheme-main-style',  get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'basictheme-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

}
add_action('wp_enqueue_scripts', 'basictheme_enqueue_styles');

// Додавання підтримки віджетів
function basictheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'basictheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'basictheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'basictheme_widgets_init');

// Виведення блоку інформації для всіх користувачів, окрім адміністраторів
function basictheme_info_block() {
    if (!current_user_can('administrator')) {
        echo '<div class="info-block">Це інформаційний блок для всіх користувачів, окрім адміністраторів.</div>';
    }
}
//add_action('wp_home', 'basictheme_info_block');
?>
