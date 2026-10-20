<?php
/**
 * Custom template tags for PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

function peluanglaundry_get_wa_link($text = '') {
    $wa_number = get_theme_mod('peluanglaundry_wa_number', '6282215840088');
    $clean_number = preg_replace('/[^0-9]/', '', $wa_number);
    if (substr($clean_number, 0, 1) === '0') {
        $clean_number = '62' . substr($clean_number, 1);
    }
    
    if (empty($text)) {
        $text = 'Halo Admin Peluang Usaha Laundry, saya ingin konsultasi paket usaha dan produk chemical Orchid Brand.';
    }
    
    // Decode HTML entities (e.g. &#8211; to en-dash)
    $clean_text = html_entity_decode(wp_strip_all_tags($text), ENT_QUOTES, 'UTF-8');
    
    return 'https://wa.me/' . $clean_number . '?text=' . rawurlencode($clean_text);
}

/**
 * Estimated reading time in minutes
 */
function peluanglaundry_reading_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    return max(1, $reading_time) . ' mnt baca';
}

/**
 * Smart thumbnail resolver: checks local attachment, remote live proxy, or local theme asset
 */
function peluanglaundry_get_card_thumbnail_url($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    
    // Default fallback local image array
    $local_fallbacks = array(
        $theme_uri . '/assets/img/determat.jpg',
        $theme_uri . '/assets/img/paket-usaha-laundry.jpg',
        $theme_uri . '/assets/img/bisnis-laundry-eco-green.jpg',
    );
    $fallback_index = abs(intval($post_id)) % count($local_fallbacks);
    $default_fallback = $local_fallbacks[$fallback_index];

    if (has_post_thumbnail($post_id)) {
        $thumb_id = get_post_thumbnail_id($post_id);
        $img_data = wp_get_attachment_image_src($thumb_id, 'large');
        if (!empty($img_data[0])) {
            $url = $img_data[0];
            $upload_dir = wp_upload_dir();
            $base_url = $upload_dir['baseurl'];
            $base_dir = $upload_dir['basedir'];

            // Check if local file exists
            if (strpos($url, $base_url) === 0) {
                $relative_path = substr($url, strlen($base_url));
                $local_file = $base_dir . $relative_path;
                if (file_exists($local_file)) {
                    return $url;
                }
                // File does not exist locally; proxy to live production domain
                $live_url = str_replace($base_url, 'https://peluangusahalaundry.com/wp-content/uploads', $url);
                return $live_url;
            }
            return $url;
        }
    }

    return $default_fallback;
}

function peluanglaundry_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date('j F Y'))
    );

    echo '<span class="posted-on">' . peluanglaundry_get_icon('calendar', 'pl-meta-icon', 15) . ' ' . $time_string . '</span>';
}

function peluanglaundry_posted_by() {
    echo '<span class="byline">' . peluanglaundry_get_icon('users', 'pl-meta-icon', 15) . ' ' . esc_html(get_the_author()) . '</span>';
}

function peluanglaundry_breadcrumbs() {
    if (is_front_page()) {
        return;
    }

    echo '<nav class="pl-breadcrumbs" aria-label="Breadcrumb">';
    echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
    echo '<span class="pl-bc-sep">/</span>';

    if (is_category() || is_single()) {
        $categories = get_the_category();
        if (!empty($categories)) {
            echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
            if (is_single()) {
                echo '<span class="pl-bc-sep">/</span>';
                echo '<span class="pl-bc-current">' . esc_html(wp_trim_words(get_the_title(), 6)) . '</span>';
            }
        }
    } elseif (is_page()) {
        echo '<span class="pl-bc-current">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_search()) {
        echo '<span class="pl-bc-current">Hasil Pencarian: "' . esc_html(get_search_query()) . '"</span>';
    } elseif (is_404()) {
        echo '<span class="pl-bc-current">Halaman Tidak Ditemukan</span>';
    }

    echo '</nav>';
}
