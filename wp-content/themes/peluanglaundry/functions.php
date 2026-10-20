<?php
/**
 * Peluang Laundry functions and definitions
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

define('PELUANGLAUNDRY_VERSION', '1.0.0');
define('PELUANGLAUNDRY_DIR', get_template_directory());
define('PELUANGLAUNDRY_URI', get_template_directory_uri());

function peluanglaundry_setup() {
    load_theme_textdomain('peluanglaundry', PELUANGLAUNDRY_DIR . '/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    set_post_thumbnail_size(800, 450, true);
    add_image_size('peluanglaundry-card', 600, 360, true);
    add_image_size('peluanglaundry-hero', 1200, 600, true);

    register_nav_menus(array(
        'primary' => __('Menu Utama Header', 'peluanglaundry'),
        'footer'  => __('Menu Navigasi Footer', 'peluanglaundry'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'peluanglaundry_setup');

function peluanglaundry_scripts() {
    // Enqueue Google Fonts: Plus Jakarta Sans
    wp_enqueue_style(
        'peluanglaundry-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'peluanglaundry-main',
        PELUANGLAUNDRY_URI . '/assets/css/main.css',
        array('peluanglaundry-fonts'),
        time()
    );

    wp_enqueue_style('peluanglaundry-root', get_stylesheet_uri(), array('peluanglaundry-main'), time());

    wp_enqueue_script(
        'peluanglaundry-main-js',
        PELUANGLAUNDRY_URI . '/assets/js/main.js',
        array(),
        time(),
        true
    );

    wp_localize_script('peluanglaundry-main-js', 'peluanglaundryData', array(
        'siteUrl' => home_url('/'),
        'waNumber' => get_theme_mod('peluanglaundry_wa_number', '6282215840088'),
    ));
}
add_action('wp_enqueue_scripts', 'peluanglaundry_scripts');

require_once PELUANGLAUNDRY_DIR . '/inc/icons.php';
require_once PELUANGLAUNDRY_DIR . '/inc/template-tags.php';
require_once PELUANGLAUNDRY_DIR . '/inc/customizer.php';
