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

/**
 * Shorten page/post title for breadcrumbs so it stays clean and concise
 */
function peluanglaundry_shorten_breadcrumb_title($title, $post_id = 0) {
    if (empty($title)) {
        return '';
    }

    // Curated concise names for primary hub pages
    if ($post_id) {
        $slug = get_post_field('post_name', $post_id);
        $known_slugs = array(
            'paket-usaha-laundry-kiloan-murah'        => 'Paket Usaha',
            'pewangi-laundry-tahan-lama-murah'        => 'Pewangi Laundry',
            'determat'                                => 'DETERMAT',
            'agen-resmi-orchid-brand'                 => 'Keagenan Resmi',
            'reseller'                                => 'Reseller Curah',
            'pelatihan-pembuatan-chemical'            => 'Training Chemical',
            'pelatihan-manajemen-operasional-laundry' => 'SOP & Manajemen',
            'about-us'                                => 'Tentang Kami',
            'tentang-kami'                            => 'Tentang Kami',
            'contact-us'                              => 'Kontak',
            'kontak'                                  => 'Kontak',
        );
        if (isset($known_slugs[$slug])) {
            return $known_slugs[$slug];
        }
    }

    $title = html_entity_decode($title, ENT_QUOTES, 'UTF-8');
    // Strip SEO suffixes like " - Slogan", " | Brand", " – Subtitle"
    $parts = preg_split('/\s+(?:[-–—|•]|\()\s*/u', $title);
    $short = !empty($parts[0]) ? trim($parts[0]) : $title;

    if (mb_strlen($short) > 24) {
        $short = wp_trim_words($short, 3, '...');
    }

    return $short;
}

function peluanglaundry_breadcrumbs() {
    if (is_front_page()) {
        return;
    }

    $blog_page_id = (int) get_option('page_for_posts');
    $blog_url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog/');
    $blog_name = $blog_page_id ? get_the_title($blog_page_id) : 'Blog';
    $site_url = home_url('/');

    $items = array();
    $items[] = array('name' => 'Home', 'url' => $site_url);

    if (is_home()) {
        $items[] = array('name' => $blog_name, 'url' => '');
    } elseif (is_category()) {
        $items[] = array('name' => $blog_name, 'url' => $blog_url);
        $items[] = array('name' => single_cat_title('', false), 'url' => '');
    } elseif (is_single()) {
        $items[] = array('name' => $blog_name, 'url' => $blog_url);
        $categories = get_the_category();
        if (!empty($categories)) {
            $items[] = array('name' => $categories[0]->name, 'url' => get_category_link($categories[0]->term_id));
        }
        $items[] = array('name' => peluanglaundry_shorten_breadcrumb_title(get_the_title(), get_the_ID()), 'url' => '');
    } elseif (is_page()) {
        $items[] = array('name' => peluanglaundry_shorten_breadcrumb_title(get_the_title(), get_the_ID()), 'url' => '');
    } elseif (is_search()) {
        $items[] = array('name' => 'Hasil: "' . wp_trim_words(get_search_query(), 3, '...') . '"', 'url' => '');
    } elseif (is_404()) {
        $items[] = array('name' => '404', 'url' => '');
    }

    echo '<nav class="pl-breadcrumbs" aria-label="Breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
    $total = count($items);
    foreach ($items as $idx => $item) {
        $pos = $idx + 1;
        $is_last = ($pos === $total);
        echo '<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        if (!$is_last && !empty($item['url'])) {
            echo '<a itemprop="item" href="' . esc_url($item['url']) . '"><span itemprop="name">' . esc_html($item['name']) . '</span></a>';
            echo '<meta itemprop="position" content="' . $pos . '">';
            echo '</span>';
            echo '<span class="pl-bc-sep" aria-hidden="true">/</span>';
        } else {
            echo '<span class="pl-bc-current" itemprop="name">' . esc_html($item['name']) . '</span>';
            echo '<meta itemprop="position" content="' . $pos . '">';
            echo '</span>';
        }
    }
    echo '</nav>';
}

/**
 * Social Share Buttons (Lightweight, No external JS)
 */
function peluanglaundry_share_buttons($title = '', $url = '') {
    if (empty($url)) {
        $url = get_permalink();
    }
    if (empty($title)) {
        $title = get_the_title();
    }

    $encoded_url = rawurlencode($url);
    $encoded_title = rawurlencode(html_entity_decode(wp_strip_all_tags($title), ENT_QUOTES, 'UTF-8'));

    $wa_url = 'https://api.whatsapp.com/send?text=' . $encoded_title . '%20' . $encoded_url;
    $fb_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $encoded_url;
    $tw_url = 'https://twitter.com/intent/tweet?text=' . $encoded_title . '&url=' . $encoded_url;
    $tg_url = 'https://t.me/share/url?url=' . $encoded_url . '&text=' . $encoded_title;

    echo '<div class="pl-share-bar">';
    echo '<div class="pl-share-title">' . peluanglaundry_get_icon('share-2', 'pl-icon-inline', 16) . ' <span>Bagikan Panduan:</span></div>';
    echo '<div class="pl-share-buttons">';
    echo '<a href="' . esc_url($wa_url) . '" target="_blank" rel="noopener" class="pl-share-btn pl-share-wa" aria-label="Bagikan ke WhatsApp">' . peluanglaundry_get_icon('whatsapp', '', 15) . ' <span>WhatsApp</span></a>';
    echo '<a href="' . esc_url($fb_url) . '" target="_blank" rel="noopener" class="pl-share-btn pl-share-fb" aria-label="Bagikan ke Facebook">' . peluanglaundry_get_icon('facebook', '', 15) . ' <span>Facebook</span></a>';
    echo '<a href="' . esc_url($tw_url) . '" target="_blank" rel="noopener" class="pl-share-btn pl-share-tw" aria-label="Bagikan ke Twitter / X">' . peluanglaundry_get_icon('twitter', '', 15) . ' <span>Twitter (X)</span></a>';
    echo '<a href="' . esc_url($tg_url) . '" target="_blank" rel="noopener" class="pl-share-btn pl-share-tg" aria-label="Bagikan ke Telegram">' . peluanglaundry_get_icon('telegram', '', 15) . ' <span>Telegram</span></a>';
    echo '<button type="button" class="pl-share-btn pl-share-copy" data-url="' . esc_url($url) . '" onclick="navigator.clipboard.writeText(this.dataset.url); alert(\'Tautan artikel berhasil disalin!\');" aria-label="Salin Tautan">' . peluanglaundry_get_icon('link', '', 15) . ' <span>Salin Link</span></button>';
    echo '</div>';
    echo '</div>';
}

/**
 * Retrieve the Table of Contents items generated for the current single post.
 *
 * The items are produced by the `the_content` filter below, so they are only
 * available after the post content has been rendered (sidebar is printed after
 * the main column on the single post template).
 *
 * @return array List of arrays: level, id, title.
 */
function peluanglaundry_get_toc_items() {
    if (empty($GLOBALS['peluanglaundry_toc_items']) || !is_array($GLOBALS['peluanglaundry_toc_items'])) {
        return array();
    }
    return $GLOBALS['peluanglaundry_toc_items'];
}

/**
 * Render the Table of Contents as a navigation list (used by the sidebar panel).
 *
 * @param string $class Extra class for the <ol> wrapper.
 */
function peluanglaundry_render_toc_nav($class = 'pl-toc-list') {
    $items = peluanglaundry_get_toc_items();
    if (empty($items)) {
        return;
    }

    echo '<ol class="' . esc_attr($class) . '" aria-label="Daftar Isi Artikel">';
    foreach ($items as $item) {
        $indent_class = ($item['level'] == '3') ? ' pl-toc-h3' : ' pl-toc-h2';
        echo '<li class="pl-toc-item' . $indent_class . '">';
        echo '<a href="#' . esc_attr($item['id']) . '" data-pl-toc-link="' . esc_attr($item['id']) . '">' . esc_html($item['title']) . '</a>';
        echo '</li>';
    }
    echo '</ol>';
}

/**
 * Automatically generates Table of Contents (TOC) and injects IDs into headings for single posts
 */
function peluanglaundry_the_content_with_toc($content) {
    if (!is_single() || !in_the_loop() || !is_main_query()) {
        return $content;
    }

    // Match all H2 and H3 tags
    preg_match_all('/<h([2-3])([^>]*)>(.*?)<\/h\1>/i', $content, $matches, PREG_SET_ORDER);
    if (count($matches) < 2) {
        return $content;
    }

    $toc_items = array();
    $index = 1;

    foreach ($matches as $match) {
        $level = $match[1];
        $attrs = $match[2];
        $title_raw = $match[3];
        $title_text = wp_strip_all_tags($title_raw);
        $slug = 'section-' . $index . '-' . sanitize_title($title_text);

        // Replace original heading with ID
        $new_heading = sprintf('<h%1$s%2$s id="%3$s">%4$s</h%1$s>', $level, $attrs, esc_attr($slug), $title_raw);
        $pos = strpos($content, $match[0]);
        if ($pos !== false) {
            $content = substr_replace($content, $new_heading, $pos, strlen($match[0]));
        }

        $toc_items[] = array(
            'level' => $level,
            'id'    => $slug,
            'title' => $title_text,
        );
        $index++;
    }

    // Store the items so the sidebar panel can reuse the very same list.
    $GLOBALS['peluanglaundry_toc_items'] = $toc_items;

    // Build TOC HTML box
    $toc_html = '<div class="pl-toc-box">';
    $toc_html .= '<div class="pl-toc-header">';
    $toc_html .= peluanglaundry_get_icon('list', 'pl-icon-inline', 18);
    $toc_html .= '<span>Daftar Isi Artikel</span>';
    $toc_html .= '</div>';
    $toc_html .= '<ol class="pl-toc-list">';
    foreach ($toc_items as $item) {
        $indent_class = ($item['level'] == '3') ? ' pl-toc-h3' : ' pl-toc-h2';
        $toc_html .= '<li class="pl-toc-item' . $indent_class . '"><a href="#' . esc_attr($item['id']) . '">' . esc_html($item['title']) . '</a></li>';
    }
    $toc_html .= '</ol>';
    $toc_html .= '</div>';

    // Insert TOC before the first H2 tag
    $first_h2_pos = strpos($content, '<h2');
    if ($first_h2_pos !== false) {
        $content = substr_replace($content, $toc_html, $first_h2_pos, 0);
    } else {
        $content = $toc_html . $content;
    }

    return $content;
}
add_filter('the_content', 'peluanglaundry_the_content_with_toc', 20);

/**
 * Wraps legacy content tables in a scroll container so wide tables cannot
 * widen the page on mobile.
 */
function peluanglaundry_wrap_content_tables($content) {
    if (!is_singular() || !in_the_loop() || !is_main_query()) {
        return $content;
    }

    return preg_replace_callback(
        '/<table\b[^>]*>.*?<\/table>/is',
        function ($matches) {
            return '<div class="pl-table-scroll">' . $matches[0] . '</div>';
        },
        $content
    );
}
add_filter('the_content', 'peluanglaundry_wrap_content_tables', 15);

/**
 * Automatically groups consecutive content images (<figure> or <p><img></p>) into an interactive
 * swipeable carousel slider.
 */
function peluanglaundry_render_content_carousel($items) {
    $count = count($items);
    if ($count < 2) {
        return implode("\n", $items);
    }

    $out = '<div class="pl-content-carousel" data-carousel="true">';
    $out .= '<div class="pl-carousel-badge"><span class="pl-carousel-counter">1 / ' . $count . '</span></div>';
    $out .= '<div class="pl-carousel-viewport">';
    $out .= '<div class="pl-carousel-track">';
    foreach ($items as $idx => $item) {
        $out .= '<div class="pl-carousel-slide" data-slide-index="' . $idx . '">';
        $out .= $item;
        $out .= '</div>';
    }
    $out .= '</div></div>';
    $out .= '<div class="pl-carousel-controls">';
    $out .= '<button type="button" class="pl-carousel-btn pl-carousel-prev" aria-label="Gambar Sebelumnya"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg></button>';
    $out .= '<div class="pl-carousel-dots">';
    for ($i = 0; $i < $count; $i++) {
        $active = ($i === 0) ? ' is-active' : '';
        $out .= '<button type="button" class="pl-carousel-dot' . $active . '" data-target-index="' . $i . '" aria-label="Slide ' . ($i + 1) . '"></button>';
    }
    $out .= '</div>';
    $out .= '<button type="button" class="pl-carousel-btn pl-carousel-next" aria-label="Gambar Selanjutnya"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg></button>';
    $out .= '</div></div>';

    return $out;
}

function peluanglaundry_convert_content_images_to_carousel($content) {
    if (!is_singular() || !in_the_loop() || !is_main_query()) {
        return $content;
    }

    // 1. Group consecutive <figure> tags (including any orphaned previous/next texts)
    $fig_pattern = '/(?:<figure\b[^>]*>.*?<\/figure>\s*){2,}(?:\s*(?:Sebelumnya|Selanjutnya)\s*)*/is';
    $content = preg_replace_callback($fig_pattern, function($matches) {
        $block = $matches[0];
        preg_match_all('/<figure\b[^>]*>.*?<\/figure>/is', $block, $fig_matches);
        $items = $fig_matches[0];
        if (count($items) < 2) {
            return $block;
        }
        return peluanglaundry_render_content_carousel($items);
    }, $content);

    // 2. Group consecutive <p><img...></p> tags
    $p_pattern = '/(?:<p\b[^>]*>\s*<img\b[^>]*>\s*<\/p>\s*){2,}/is';
    $content = preg_replace_callback($p_pattern, function($matches) {
        $block = $matches[0];
        preg_match_all('/<img\b[^>]*>/is', $block, $img_matches);
        if (count($img_matches[0]) < 2) {
            return $block;
        }
        $items = array_map(function($img) {
            return '<figure>' . $img . '</figure>';
        }, $img_matches[0]);
        return peluanglaundry_render_content_carousel($items);
    }, $content);

    // 3. Clean up any remaining orphaned "Sebelumnya" / "Selanjutnya" text left from old Elementor carousels
    $content = preg_replace('/<(?:p|div)\b[^>]*>\s*(?:Sebelumnya|Selanjutnya)\s*<\/(?:p|div)>/i', '', $content);
    $content = preg_replace('/(?:\r?\n|\r)\s*(?:Sebelumnya|Selanjutnya)\s*(?:\r?\n|\r)/i', "\n", $content);

    return $content;
}
add_filter('the_content', 'peluanglaundry_convert_content_images_to_carousel', 18);


