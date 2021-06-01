<?php
require_once(__DIR__ . "/classes/bootstrap_5_wp_nav_menu_walker.php");

function akTheme_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'akTheme_theme_support');

function akTheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('akThemeStyle', get_template_directory_uri() . "/style.css", array('akThemeBS'), $version, 'all');
    wp_enqueue_style('akThemeBS', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_enqueue_style('akThemeFA', "//use.fontawesome.com/releases/v5.0.7/css/all.css", array(), "1", "all");
    wp_enqueue_style('akThemeFonts', "https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap", array(), "1", "all");
}

add_action('wp_enqueue_scripts', 'akTheme_register_styles');

function akTheme_register_scripts()
{

    wp_enqueue_script('akTheme-js', get_template_directory_uri() . "/assets/js/main.js", array('akTheme-bsjs'), '1.0', true);
    wp_enqueue_script('akTheme-bsjs', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'akTheme_register_scripts');

add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));

function akTheme_menus()
{

    $locations = array(
        'primary' => "Główne menu",
        'footer' => "Menu w stopce"
    );

    register_nav_menus($locations);
}

add_action('init', 'akTheme_menus');

function akTheme_widgetsInit()
{
    register_sidebar(array(
        'name' => 'Kontakt stopka',
        'id' => 'footer-contact-1'
    ));
    register_sidebar(array(
        'name' => 'Formularz stopka',
        'id' => 'footer-form-2'
    ));
    register_sidebar(array(
        'name' => 'Menu stopka',
        'id' => 'footer-menu-3'
    ));
}

add_action('widgets_init', 'akTheme_widgetsInit');



function akTheme_event_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Wydarzenia',
            'singular_name' => 'Wydarzenie',
            'add_new' => 'Dodaj nowe wydarzenie',
            'add_new_item' => 'Dodaj nowe wydarzenie',
            'edit_item' => 'Edytuj wydarzenie',
            'new_item' => 'Nowe wydarzenie',
            'all_items' => 'Wszystkie wydarzenia',
            'view_item' => 'Zobacz wydarzenie',
            'search_items' => 'Szukaj wydarzenia',
            'not_found' => 'Nie znaleziono wydarzenia',
            'menu_name' => 'Wydarzenia'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'),
        'rewrite' => array('slug' => 'wydarzenia'),
    );
    register_post_type('wydarzenie', $args);
}
add_action('init', 'akTheme_event_type');

function my_pre_get_posts($query)
{
    // validate
    if (is_admin()) {
        return $query;
    }
    $today = date("Ymd");
    $args = array(
        'relation' => 'AND',
        'event_start_date' => array(
            'key' => 'data_rozpoczecia',
            'compare' => 'EXISTS',
        ),
        'event_start_time' => array(
            'key' => 'godzina_rozpoczecia',
            'compare' => 'EXISTS',
        )
    );
    if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive('wydarzenie')) {
        $query->set('meta_query', $args);
        $query->set('posts_per_page', 9);
        $query->set(
            'orderby',
            array(
                'event_start_date' => 'DESC',
                'event_start_time' => 'ASC'
            )
        );
    }

    // always return
    return $query;
}

add_action('pre_get_posts', 'my_pre_get_posts');
