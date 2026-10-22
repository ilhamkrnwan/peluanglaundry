<?php
/**
 * Peluang Laundry functions and definitions
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

define('PELUANGLAUNDRY_VERSION', '1.1.0');
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
    add_image_size('peluanglaundry-portrait', 900, 1125, true);
    add_image_size('peluanglaundry-square', 800, 800, true);

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

/**
 * The logo renders at 44px tall, so the full-size file is already small
 * enough. Some installs are missing intermediate logo sizes, which leaves
 * mobile browsers requesting a srcset candidate that returns 404.
 */
function peluanglaundry_logo_srcset($sources, $size_array, $image_src, $image_meta, $attachment_id) {
    if ((int) get_theme_mod('custom_logo') === (int) $attachment_id) {
        return false;
    }
    return $sources;
}
add_filter('wp_calculate_image_srcset', 'peluanglaundry_logo_srcset', 10, 5);

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
require_once PELUANGLAUNDRY_DIR . '/inc/image-slots.php';
require_once PELUANGLAUNDRY_DIR . '/inc/customizer.php';
require_once PELUANGLAUNDRY_DIR . '/inc/seo-geo.php';

/**
 * Warm up the Google Fonts connection before the stylesheet request.
 */
function peluanglaundry_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'peluanglaundry_resource_hints', 10, 2);

/**
 * Enrich sub-menu dropdown items with cute icons and subtitles
 */
function peluanglaundry_dropdown_menu_enhancer($item_output, $item, $depth, $args) {
    if ($depth === 1) {
        $meta = array(
            'determat'            => array('icon' => '💧', 'desc' => 'Bahan konsentrat deterjen hemat ongkir 80%'),
            'bibit parfum'        => array('icon' => '🌸', 'desc' => 'Parfum tahan 30 hari standar IFRA & Halal'),
            'agen resmi'          => array('icon' => '🏆', 'desc' => 'Peluang eksklusif 1 agen resmi per kota'),
            'reseller'            => array('icon' => '🏷️', 'desc' => 'Jual sabun curah dengan merek Anda sendiri'),
            'training'            => array('icon' => '🧪', 'desc' => 'Pelatihan racik formulasi chemical laundry'),
            'pembuatan chemical'  => array('icon' => '🧪', 'desc' => 'Pelatihan racik formulasi chemical laundry'),
            'sop & manajemen'     => array('icon' => '📋', 'desc' => 'Standard operasional & sistem kasir laundry'),
            'manajemen laundry'   => array('icon' => '📋', 'desc' => 'Standard operasional & sistem kasir laundry'),
        );

        $clean_title = strtolower(html_entity_decode(trim($item->title)));
        $info = array('icon' => '✨', 'desc' => 'Layanan & produk chemical resmi Orchid Brand');

        foreach ($meta as $key => $val) {
            if (strpos($clean_title, $key) !== false) {
                $info = $val;
                break;
            }
        }

        $icon = $info['icon'];
        $desc = $info['desc'];

        $enhanced = '<span class="pl-dropdown-item-wrap">';
        $enhanced .= '<span class="pl-dropdown-icon">' . $icon . '</span>';
        $enhanced .= '<span class="pl-dropdown-text">';
        $enhanced .= '<span class="pl-dropdown-title">' . esc_html($item->title) . '</span>';
        $enhanced .= '<span class="pl-dropdown-desc">' . esc_html($desc) . '</span>';
        $enhanced .= '</span>';
        $enhanced .= '<span class="pl-dropdown-arrow">&rarr;</span>';
        $enhanced .= '</span>';

        $item_output = preg_replace('/(<a[^>]*>)(.*?)(<\/a>)/is', '$1' . $enhanced . '$3', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'peluanglaundry_dropdown_menu_enhancer', 10, 4);

