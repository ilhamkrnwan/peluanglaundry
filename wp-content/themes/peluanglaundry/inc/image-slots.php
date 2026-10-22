<?php
/**
 * Image slots for PeluangLaundry.
 *
 * Every photo placement in the theme is registered here. Each slot has a
 * sensible default from /assets/img, a recommended aspect ratio, honest alt
 * text, and an override in Appearance → Customize → Slot Foto.
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Central registry of image slots.
 *
 * Keys are stable. Do not rename them without migrating the matching
 * theme_mod (peluanglaundry_img_{key}).
 *
 * @return array<string, array<string, mixed>>
 */
function peluanglaundry_image_slots_registry() {
    $img = PELUANGLAUNDRY_URI . '/assets/img/';

    return array(
        /* ---------------------------------------------------------------
         * Beranda
         * ------------------------------------------------------------- */
        'home_hero_main' => array(
            'label'   => 'Beranda — Foto hero utama',
            'file'    => 'outlet-laundry-mitra.jpg',
            'alt'     => 'Interior outlet laundry modern dengan deretan mesin cuci komersial, meja setrika uap, dan area layanan pelanggan.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto landscape interior outlet. Letakkan subjek utama di tengah-kanan.',
        ),
        'home_hero_inset' => array(
            'label'   => 'Beranda — Foto hero kecil (laboratorium)',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Analis laboratorium Orchid Brand menguji formula deterjen cair di dalam lab R&D.',
            'ratio'   => '1 / 1',
            'width'   => 800,
            'height'  => 800,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto persegi untuk kartu kecil yang menumpuk di sudut foto utama.',
        ),
        'home_about_main' => array(
            'label'   => 'Beranda — Foto sekilas perusahaan',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Laboratorium riset dan pengendalian mutu chemical laundry PT Indotech Berkah Abadi.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto fasilitas produksi atau laboratorium. Wajah/subjek sebaiknya di sisi kanan.',
        ),
        'home_about_inset' => array(
            'label'   => 'Beranda — Foto sekilas perusahaan (kecil)',
            'file'    => 'depo-isi-ulang-sabun.jpg',
            'alt'     => 'Depo isi ulang sabun curah dengan botol kaca dan dispenser larutan pembersih.',
            'ratio'   => '1 / 1',
            'width'   => 800,
            'height'  => 800,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto persegi pendukung: depo, kemasan, atau detail fasilitas.',
        ),
        'home_advantage' => array(
            'label'   => 'Beranda — Foto keunggulan kompetitif',
            'file'    => 'outlet-laundry-mitra.jpg',
            'alt'     => 'Suasana outlet laundry mitra dengan mesin cuci front load dan area pelanggan yang tertata.',
            'ratio'   => '4 / 5',
            'width'   => 1000,
            'height'  => 1250,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto portrait. Akan tampil tinggi di samping daftar keunggulan.',
        ),
        'home_spotlight' => array(
            'label'   => 'Beranda — Foto produk DETERMAT',
            'file'    => 'determat.jpg',
            'alt'     => 'Kemasan DETERMAT, konsentrat deterjen cair rendah busa Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 1000,
            'height'  => 750,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto produk utama. Gunakan latar bersih dan kemasan terlihat jelas.',
        ),
        'home_product_determat' => array(
            'label'   => 'Beranda — Produk: DETERMAT',
            'file'    => 'determat.jpg',
            'alt'     => 'Kemasan DETERMAT deterjen matic rendah busa.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Ganti dengan foto produk DETERMAT versi terbaru.',
        ),
        'home_product_parfum' => array(
            'label'   => 'Beranda — Produk: Parfum Laundry',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Botol-botol sampel parfum dan bahan kimia di meja laboratorium Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Idealnya foto botol parfum. Default memakai detail botol di laboratorium.',
        ),
        'home_product_softener' => array(
            'label'   => 'Beranda — Produk: Softener & Pelicin',
            'file'    => 'paket-usaha-laundry.jpg',
            'alt'     => 'Botol softener dan deterjen Orchid Brand di samping mesin cuci.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> '20% 40%',
            'section' => 'home',
            'note'    => 'Ganti dengan foto softener. Default memakai crop botol dari foto paket usaha.',
        ),
        'home_product_oxy' => array(
            'label'   => 'Beranda — Produk: Oxy Bleach & Anti Noda',
            'file'    => 'paket-usaha-laundry.jpg',
            'alt'     => 'Kemasan bubuk pembersih dan botol chemical laundry Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> '10% 80%',
            'section' => 'home',
            'note'    => 'Ganti dengan foto kemasan Oxy Bleach. Default memakai crop kemasan bubuk.',
        ),
        'home_product_dish' => array(
            'label'   => 'Beranda — Produk: Sabun Cuci Piring',
            'file'    => 'depo-isi-ulang-sabun.jpg',
            'alt'     => 'Dispenser sabun curah di depo isi ulang, termasuk larutan pembersih berwarna hijau.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Ganti dengan foto kemasan sabun cuci piring.',
        ),
        'home_product_alkali' => array(
            'label'   => 'Beranda — Produk: Alkalite & Emulsifier',
            'file'    => 'mesin-laundry-komersial.jpg',
            'alt'     => 'Mesin cuci komersial dan boiler setrika uap untuk kebutuhan laundry industri.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Ganti dengan foto produk heavy duty atau linen hotel.',
        ),
        'home_package_starter' => array(
            'label'   => 'Beranda — Paket Mandiri',
            'file'    => 'paket-usaha-laundry.jpg',
            'alt'     => 'Perlengkapan paket usaha laundry: botol chemical, mesin cuci, dan perlengkapan kebersihan.',
            'ratio'   => '16 / 10',
            'width'   => 1000,
            'height'  => 625,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto paket perlengkapan untuk paket pemula.',
        ),
        'home_package_complete' => array(
            'label'   => 'Beranda — Paket Komplit Komersial',
            'file'    => 'mesin-laundry-komersial.jpg',
            'alt'     => 'Mesin cuci front load, pengering gas, dan setrika uap untuk paket laundry komersial.',
            'ratio'   => '16 / 10',
            'width'   => 1000,
            'height'  => 625,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto showroom atau instalasi mesin komersial.',
        ),
        'home_package_agent' => array(
            'label'   => 'Beranda — Paket Master Agen & Depo',
            'file'    => 'depo-isi-ulang-sabun.jpg',
            'alt'     => 'Depo isi ulang sabun curah dengan rak jerigen dan dispenser.',
            'ratio'   => '16 / 10',
            'width'   => 1000,
            'height'  => 625,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto depo atau rak pasokan chemical.',
        ),
        'home_roi' => array(
            'label'   => 'Beranda — Foto panel simulasi biaya',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Pengujian formula chemical di laboratorium Orchid Brand.',
            'ratio'   => '4 / 5',
            'width'   => 900,
            'height'  => 1125,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto portrait pendukung panel gelap. Pilih gambar dengan area gelap yang cukup.',
        ),
        'home_testimonial' => array(
            'label'   => 'Beranda — Foto testimoni mitra',
            'file'    => 'outlet-laundry-mitra.jpg',
            'alt'     => 'Outlet laundry mitra dengan area layanan dan mesin cuci yang siap beroperasi.',
            'ratio'   => '4 / 5',
            'width'   => 900,
            'height'  => 1125,
            'position'=> '30% center',
            'section' => 'home',
            'note'    => 'Foto portrait mitra atau outlet. Bisa juga foto owner mitra.',
        ),
        'home_faq' => array(
            'label'   => 'Beranda — Foto pendamping FAQ',
            'file'    => 'paket-usaha-laundry.jpg',
            'alt'     => 'Perlengkapan dan bahan chemical dalam paket usaha laundry Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 900,
            'height'  => 675,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto pendukung blok FAQ. Boleh foto tim, kemasan, atau outlet.',
        ),
        'home_cta_bg' => array(
            'label'   => 'Beranda — Latar CTA penutup',
            'file'    => 'mesin-laundry-komersial.jpg',
            'alt'     => '',
            'ratio'   => '16 / 7',
            'width'   => 1600,
            'height'  => 700,
            'position'=> 'center',
            'section' => 'home',
            'note'    => 'Foto lebar untuk latar CTA. Akan diberi overlay hijau gelap.',
        ),

        /* ---------------------------------------------------------------
         * Tentang Kami
         * ------------------------------------------------------------- */
        'about_hero' => array(
            'label'   => 'Tentang Kami — Foto hero',
            'file'    => 'outlet-laundry-mitra.jpg',
            'alt'     => 'Outlet laundry modern dan area layanan mitra Orchid Brand.',
            'ratio'   => '16 / 9',
            'width'   => 1600,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'about',
            'note'    => 'Foto lebar kantor, pabrik, atau outlet percontohan.',
        ),
        'about_facility_lab' => array(
            'label'   => 'Tentang Kami — Fasilitas laboratorium',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Laboratorium R&D chemical PT Indotech Berkah Abadi.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'about',
            'note'    => 'Foto laboratorium dan tim QC.',
        ),
        'about_facility_showroom' => array(
            'label'   => 'Tentang Kami — Fasilitas showroom',
            'file'    => 'mesin-laundry-komersial.jpg',
            'alt'     => 'Showroom mesin cuci komersial dan boiler setrika uap.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'about',
            'note'    => 'Foto showroom hardware laundry.',
        ),
        'about_facility_outlet' => array(
            'label'   => 'Tentang Kami — Fasilitas outlet pelatihan',
            'file'    => 'outlet-laundry-mitra.jpg',
            'alt'     => 'Outlet percontohan dan pusat pelatihan SOP mitra.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'about',
            'note'    => 'Foto outlet percontohan atau sesi pelatihan.',
        ),

        /* ---------------------------------------------------------------
         * Katalog produk
         * ------------------------------------------------------------- */
        'catalog_product_determat_matic' => array(
            'label'   => 'Katalog — DETERMAT Matic',
            'file'    => 'determat.jpg',
            'alt'     => 'DETERMAT Matic Low Suds 1 kg.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> 'center',
            'section' => 'catalog',
            'note'    => 'Foto produk resmi DETERMAT Matic.',
        ),
        'catalog_product_determat_extra' => array(
            'label'   => 'Katalog — DETERMAT Extra Busa',
            'file'    => 'determat.jpg',
            'alt'     => 'DETERMAT Extra Busa 1 kg.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> '70% center',
            'section' => 'catalog',
            'note'    => 'Foto produk DETERMAT Extra Busa. Default memakai crop berbeda.',
        ),
        'catalog_product_parfum' => array(
            'label'   => 'Katalog — Bibit Parfum',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Botol sampel bibit parfum laundry di laboratorium.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> 'center 70%',
            'section' => 'catalog',
            'note'    => 'Foto botol parfum varian aroma.',
        ),
        'catalog_product_softener' => array(
            'label'   => 'Katalog — Softener',
            'file'    => 'paket-usaha-laundry.jpg',
            'alt'     => 'Botol softener dan deterjen Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> '20% 40%',
            'section' => 'catalog',
            'note'    => 'Foto kemasan softener.',
        ),
        'catalog_product_setrika' => array(
            'label'   => 'Katalog — Pelicin Setrika',
            'file'    => 'depo-isi-ulang-sabun.jpg',
            'alt'     => 'Jerigen dan botol cairan pembersih di depo isi ulang.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> '30% center',
            'section' => 'catalog',
            'note'    => 'Foto kemasan pelicin setrika.',
        ),
        'catalog_product_oxy' => array(
            'label'   => 'Katalog — Oxy Bleach',
            'file'    => 'paket-usaha-laundry.jpg',
            'alt'     => 'Kemasan bubuk pembersih dan botol chemical laundry.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> '10% 80%',
            'section' => 'catalog',
            'note'    => 'Foto kemasan Oxy Bleach.',
        ),
        'catalog_product_rust' => array(
            'label'   => 'Katalog — Rust Remover',
            'file'    => 'determat.jpg',
            'alt'     => 'Kemasan produk chemical laundry Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> '80% center',
            'section' => 'catalog',
            'note'    => 'Foto botol Rust Remover.',
        ),
        'catalog_product_alkali' => array(
            'label'   => 'Katalog — Alkali Booster',
            'file'    => 'mesin-laundry-komersial.jpg',
            'alt'     => 'Mesin cuci komersial untuk laundry linen dan industri.',
            'ratio'   => '4 / 3',
            'width'   => 800,
            'height'  => 600,
            'position'=> 'center',
            'section' => 'catalog',
            'note'    => 'Foto kemasan Alkali Booster atau linen hotel.',
        ),

        /* ---------------------------------------------------------------
         * Kemitraan & chemical
         * ------------------------------------------------------------- */
        'partner_outlet' => array(
            'label'   => 'Kemitraan — Outlet mitra',
            'file'    => 'outlet-laundry-mitra.jpg',
            'alt'     => 'Outlet laundry kiloan mitra Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'partner',
            'note'    => 'Foto outlet mitra aktif.',
        ),
        'partner_depo' => array(
            'label'   => 'Kemitraan — Depo sabun',
            'file'    => 'depo-isi-ulang-sabun.jpg',
            'alt'     => 'Depo pengisian sabun curah mandiri.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'partner',
            'note'    => 'Foto depo isi ulang mitra.',
        ),
        'partner_machine' => array(
            'label'   => 'Kemitraan — Instalasi mesin',
            'file'    => 'mesin-laundry-komersial.jpg',
            'alt'     => 'Instalasi mesin komersial dan boiler setrika uap.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'partner',
            'note'    => 'Foto instalasi mesin mitra.',
        ),
        'partner_lab' => array(
            'label'   => 'Kemitraan — Laboratorium',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Laboratorium uji mutu kimia PT Indotech Berkah Abadi.',
            'ratio'   => '4 / 3',
            'width'   => 1200,
            'height'  => 900,
            'position'=> 'center',
            'section' => 'partner',
            'note'    => 'Foto laboratorium atau QC.',
        ),
        'chemical_determat' => array(
            'label'   => 'Depo Chemical — DETERMAT',
            'file'    => 'determat.jpg',
            'alt'     => 'DETERMAT konsentrat deterjen matic.',
            'ratio'   => '4 / 3',
            'width'   => 1000,
            'height'  => 750,
            'position'=> 'center',
            'section' => 'partner',
            'note'    => 'Foto produk DETERMAT.',
        ),
        'chemical_parfum' => array(
            'label'   => 'Depo Chemical — Parfum',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Bibit parfum laundry Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 1000,
            'height'  => 750,
            'position'=> 'center 70%',
            'section' => 'partner',
            'note'    => 'Foto botol parfum.',
        ),
        'chemical_softener' => array(
            'label'   => 'Depo Chemical — Softener',
            'file'    => 'depo-isi-ulang-sabun.jpg',
            'alt'     => 'Softener dan pelicin setrika Orchid Brand.',
            'ratio'   => '4 / 3',
            'width'   => 1000,
            'height'  => 750,
            'position'=> 'center',
            'section' => 'partner',
            'note'    => 'Foto kemasan softener.',
        ),
        'chemical_spotting' => array(
            'label'   => 'Depo Chemical — Spotting agent',
            'file'    => 'laboratorium-chemical-orchid.jpg',
            'alt'     => 'Spotting agent pembersih noda khusus di laboratorium.',
            'ratio'   => '4 / 3',
            'width'   => 1000,
            'height'  => 750,
            'position'=> 'center',
            'section' => 'partner',
            'note'    => 'Foto spotting agent atau uji noda.',
        ),
    );
}

/**
 * Resolve one image slot into render data.
 *
 * @param string $key  Slot key.
 * @param array  $args Optional overrides.
 * @return array<string, mixed>|null
 */
function peluanglaundry_get_image_slot($key, $args = array()) {
    $slots = peluanglaundry_image_slots_registry();
    if (!isset($slots[$key])) {
        return null;
    }

    $slot = $slots[$key];
    $override = get_theme_mod('peluanglaundry_img_' . $key);

    $url = $override ? $override : PELUANGLAUNDRY_URI . '/assets/img/' . $slot['file'];
    $url = apply_filters('peluanglaundry_image_slot_url', $url, $key, $args);

    $data = array(
        'key'       => $key,
        'url'       => $url,
        'is_custom' => (bool) $override,
        'alt'       => isset($args['alt']) ? $args['alt'] : $slot['alt'],
        'ratio'     => isset($args['ratio']) ? $args['ratio'] : $slot['ratio'],
        'width'     => isset($args['width']) ? absint($args['width']) : absint($slot['width']),
        'height'    => isset($args['height']) ? absint($args['height']) : absint($slot['height']),
        'position'  => isset($args['position']) ? $args['position'] : $slot['position'],
        'label'     => $slot['label'],
        'note'      => $slot['note'],
    );

    return $data;
}

/**
 * Render one image slot.
 *
 * Usage:
 *   peluanglaundry_image_slot('home_hero_main', array('eager' => true));
 *
 * @param string $key  Slot key.
 * @param array  $args {
 *     @type string $class      Extra wrapper class.
 *     @type string $ratio      CSS aspect-ratio, e.g. "16 / 9".
 *     @type string $alt        Override alt text.
 *     @type string $caption    Optional figcaption.
 *     @type bool   $eager      Load eagerly and set high fetch priority.
 *     @type bool   $decorative Empty alt and hidden from assistive tech.
 *     @type string $position   CSS object-position.
 *     @type string $sizes      Responsive sizes attribute.
 * }
 * @return void
 */
function peluanglaundry_image_slot($key, $args = array()) {
    $slot = peluanglaundry_get_image_slot($key, $args);
    if (!$slot) {
        return;
    }

    $decorative = !empty($args['decorative']);
    $eager      = !empty($args['eager']);
    $class      = isset($args['class']) ? ' ' . $args['class'] : '';
    $caption    = isset($args['caption']) ? $args['caption'] : '';
    $sizes      = isset($args['sizes']) ? $args['sizes'] : '(max-width: 768px) 100vw, 50vw';

    if (empty($slot['url'])) {
        if (current_user_can('edit_theme_options')) {
            echo '<div class="pl-media pl-media-empty' . esc_attr($class) . '" style="aspect-ratio:' . esc_attr($slot['ratio']) . ';">';
            echo '<span>' . esc_html($slot['label']) . '</span>';
            echo '<small>Tambahkan foto di Customizer · ' . esc_html($slot['ratio']) . '</small>';
            echo '</div>';
        }
        return;
    }

    $style = 'aspect-ratio:' . $slot['ratio'] . ';';
    if (!empty($slot['position'])) {
        $style .= '--media-pos:' . $slot['position'] . ';';
    }

    $img_attr = array(
        'class'    => 'pl-media-img' . ($decorative ? '' : ' pl-zoomable'),
        'alt'      => $decorative ? '' : $slot['alt'],
        'loading'  => $eager ? 'eager' : 'lazy',
        'decoding' => 'async',
        'width'    => $slot['width'],
        'height'   => $slot['height'],
        'sizes'    => $sizes,
        'style'    => 'object-position:' . $slot['position'] . ';',
    );

    if ($eager) {
        $img_attr['fetchpriority'] = 'high';
    }
    if ($decorative) {
        $img_attr['aria-hidden'] = 'true';
    }

    echo '<figure class="pl-media' . esc_attr($class) . '" style="' . esc_attr($style) . '">';

    $attachment_id = attachment_url_to_postid($slot['url']);
    if ($attachment_id) {
        echo wp_get_attachment_image($attachment_id, isset($args['size']) ? $args['size'] : 'large', false, $img_attr);
    } else {
        echo '<img src="' . esc_url($slot['url']) . '" ';
        foreach ($img_attr as $name => $value) {
            echo esc_attr($name) . '="' . esc_attr($value) . '" ';
        }
        echo '>';
    }

    if (!empty($caption)) {
        echo '<figcaption class="pl-media-caption">' . esc_html($caption) . '</figcaption>';
    }

    echo '</figure>';
}

/**
 * Register Customizer controls for every image slot.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 * @return void
 */
function peluanglaundry_customize_register_image_slots($wp_customize) {
    $sections = array(
        'peluanglaundry_images_home'    => __('Slot Foto — Beranda', 'peluanglaundry'),
        'peluanglaundry_images_about'   => __('Slot Foto — Tentang Kami', 'peluanglaundry'),
        'peluanglaundry_images_catalog' => __('Slot Foto — Katalog Produk', 'peluanglaundry'),
        'peluanglaundry_images_partner' => __('Slot Foto — Kemitraan & Chemical', 'peluanglaundry'),
    );

    foreach ($sections as $id => $title) {
        $wp_customize->add_section($id, array(
            'title'       => $title,
            'priority'    => 32,
            'description' => __('Semua slot sudah memakai foto default. Unggah foto baru untuk menggantinya. Rasio yang disarankan tertera di tiap slot.', 'peluanglaundry'),
        ));
    }

    foreach (peluanglaundry_image_slots_registry() as $key => $slot) {
        $setting_id = 'peluanglaundry_img_' . $key;
        $section    = 'peluanglaundry_images_' . $slot['section'];

        $wp_customize->add_setting($setting_id, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting_id, array(
            'label'       => $slot['label'],
            'description' => sprintf(
                /* translators: 1: recommended size, 2: editor note */
                __('Ukuran disarankan: %1$s. %2$s', 'peluanglaundry'),
                $slot['width'] . ' × ' . $slot['height'] . ' px (' . $slot['ratio'] . ')',
                $slot['note']
            ),
            'section'     => $section,
        )));
    }
}
add_action('customize_register', 'peluanglaundry_customize_register_image_slots');
