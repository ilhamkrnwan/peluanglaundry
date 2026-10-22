<?php
/**
 * SEO & Geo-Targeting Module
 * Optimizes local search visibility, OpenGraph, Geo meta tags, and Schema.org JSON-LD
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Generate accurate meta description based on current page
 */
function peluanglaundry_get_meta_description() {
    if (is_front_page()) {
        return 'Pusat Paket Usaha Laundry Kiloan Siap Buka & Produsen Konsentrat Chemical Laundry Ramah Lingkungan (Orchid Brand). Pabrik Sleman, Yogyakarta - Kirim Seluruh Indonesia.';
    }

    if (is_single() || is_page()) {
        global $post;
        if (!empty($post->post_excerpt)) {
            return wp_strip_all_tags($post->post_excerpt);
        }

        $slug = get_post_field('post_name', $post->ID);
        $custom_desc = array(
            'pewangi-laundry-tahan-lama-murah' => 'Bibit parfum dan pewangi laundry kiloan tahan lama hingga 30 hari. Standar IFRA & 100% Halal dengan FIXAMAX™ pengikat aroma eksklusif dari pabrik Orchid Brand Yogyakarta.',
            'paket-usaha-laundry-kiloan-murah' => 'Paket usaha laundry kiloan siap buka 100% tanpa royalti fee. Mesin komersial bergaransi resmi, chemical deterjen hemat ongkir, dan pelatihan SOP operasional lengkap.',
            'paket-usaha-laundry-kiloan'       => 'Paket usaha laundry kiloan siap buka tanpa royalti fee dengan peralatan komersial dan chemical laundry hemat ongkir langsung dari pabrik Yogyakarta.',
            'determat'                         => 'DETERMAT: Konsentrat deterjen matic rendah busa ramah lingkungan. 1 kg konsentrat jadi 20 liter sabun cair, hemat ongkir logistik seluruh Indonesia hingga 80%.',
            'paket-bahan-deterjen-cair-matic-determat' => 'Paket konsentrat bahan deterjen cair matic DETERMAT turunan kelapa sawit ramah lingkungan hemat ongkir seluruh Indonesia.',
            'agen-resmi-orchid-brand'          => 'Peluang kemitraan distributor dan agen resmi chemical laundry Orchid Brand 1 kota 1 agen eksklusif. Margin tebal langsung dari pabrik PT Indotech Berkah Abadi.',
            'reseller'                         => 'Peluang reseller sabun dan chemical laundry curah dengan merek Anda sendiri (maklon private label). Modal terjangkau dan formula teruji.',
            'depo-isi-ulang-sabaun'            => 'Peluang usaha depo isi ulang sabun deterjen dan pewangi laundry curah. Suplai bahan hemat ongkir dari pabrik Orchid Brand Sleman Yogyakarta.',
            'pelatihan-pembuatan-chemical'     => 'Kursus dan pelatihan privat pembuatan chemical laundry dan pembersih rumah tangga bersertifikat di Yogyakarta oleh formulator ahli.',
            'pelatihan-pembuatan-chemical-laundry' => 'Kursus privat bersertifikat pembuatan deterjen laundry, pelicin setrika, dan sabun rumah tangga di Yogyakarta langsung dengan formulator.',
            'pelatihan-manajemen-operasional-laundry' => 'Pelatihan SOP manajemen operasional laundry kiloan profesional: alur kerja higienis, sistem kasir, dan penanganan komplain pelanggan.',
            'produk-chemical-laundry'          => 'Katalog lengkap chemical laundry ramah lingkungan Orchid Brand: deterjen matic konsentrat, softener, sour, dan parfum laundry grade A+.',
            'distributor-pewangi-laundry'      => 'Peluang distributor & grosir pewangi laundry kiloan tahan lama harga pabrik. Suplai langsung dari produsen PT Indotech Berkah Abadi Sleman, Yogyakarta.',
            'about-us'                         => 'Profil PT Indotech Berkah Abadi, produsen chemical laundry Orchid Brand Green Cleaning di Sleman, Yogyakarta sejak 2012.',
            'contact-us'                       => 'Hubungi layanan konsultasi paket usaha laundry dan pemesanan chemical PT Indotech Berkah Abadi Sleman, Yogyakarta via WhatsApp dan Telepon.',
            'pesan'                            => 'Panduan cara pemesanan paket usaha laundry kiloan, konsentrat deterjen DETERMAT, dan bibit parfum Orchid Brand secara mudah, aman, dan bergaransi.',
            'blog'                             => 'Pusat artikel edukasi, tips sukses bisnis laundry kiloan, teknik mencuci profesional, dan formulasi chemical dari praktisi Orchid Brand Yogyakarta.',
        );

        if (isset($custom_desc[$slug])) {
            return $custom_desc[$slug];
        }

        $content = wp_strip_all_tags($post->post_content);
        $content = preg_replace('/\s+/', ' ', $content);
        return wp_trim_words($content, 25, '...');
    }

    if (is_category()) {
        $cat_desc = category_description();
        if (!empty($cat_desc)) {
            return wp_strip_all_tags($cat_desc);
        }
        return 'Kumpulan artikel dan panduan sukses seputar ' . single_cat_title('', false) . ' dari PT Indotech Berkah Abadi.';
    }

    if (is_archive()) {
        return 'Arsip panduan dan edukasi bisnis laundry kiloan dari praktisi industri Orchid Brand Yogyakarta.';
    }

    return get_bloginfo('description');
}

/**
 * Output Geo-Targeting, OpenGraph & Search Meta Tags
 */
function peluanglaundry_output_geo_meta_tags() {
    $desc = esc_attr(peluanglaundry_get_meta_description());
    $title = wp_get_document_title();
    $current_url = esc_url(home_url(add_query_arg(array(), $GLOBALS['wp']->request)));
    if (empty($current_url) || is_front_page()) {
        $current_url = esc_url(home_url('/'));
    } else {
        $current_url = trailingslashit($current_url);
    }

    $default_image = get_template_directory_uri() . '/assets/img/laboratorium-chemical-orchid.jpg';
    $image_url = $default_image;
    if (is_singular() && has_post_thumbnail()) {
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'peluanglaundry-hero');
        if (!empty($thumb[0])) {
            $image_url = $thumb[0];
        }
    }
    ?>
  <!-- Geo-Targeting Meta Tags (Local SEO Yogyakarta & Indonesia) -->
  <meta name="geo.region" content="ID-YO">
  <meta name="geo.placename" content="Sleman, D.I. Yogyakarta, Indonesia">
  <meta name="geo.position" content="-7.718842;110.378912">
  <meta name="ICBM" content="-7.718842, 110.378912">
  <meta name="geo.country" content="ID">
  <meta name="coverage" content="Indonesia">
  <meta name="distribution" content="Global">
  <meta name="rating" content="General">

  <!-- OpenGraph Semantic Business & Location Data -->
  <meta property="og:locale" content="id_ID">
  <meta property="og:site_name" content="Peluang Usaha Laundry &mdash; PT Indotech Berkah Abadi">
  <meta property="og:title" content="<?php echo esc_attr($title); ?>">
  <meta property="og:description" content="<?php echo $desc; ?>">
  <meta property="og:url" content="<?php echo $current_url; ?>">
  <meta property="og:type" content="<?php echo is_singular('post') ? 'article' : 'website'; ?>">
  <meta property="og:image" content="<?php echo esc_url($image_url); ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="business:contact_data:street_address" content="Jl. Tentara Pelajar Palagan Km. 9, Kamdanen, Sariharjo">
  <meta property="business:contact_data:locality" content="Ngaglik, Sleman">
  <meta property="business:contact_data:region" content="D.I. Yogyakarta">
  <meta property="business:contact_data:postal_code" content="55581">
  <meta property="business:contact_data:country_name" content="Indonesia">
  <meta property="business:contact_data:phone_number" content="+628112900668">
  <meta property="business:contact_data:website" content="<?php echo esc_url(home_url('/')); ?>">
  <meta property="place:location:latitude" content="-7.718842">
  <meta property="place:location:longitude" content="110.378912">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
  <meta name="twitter:description" content="<?php echo $desc; ?>">
  <meta name="twitter:image" content="<?php echo esc_url($image_url); ?>">

  <!-- Search Meta Fallbacks -->
  <?php if (!is_front_page()) : ?>
  <meta name="description" content="<?php echo $desc; ?>">
  <link rel="canonical" href="<?php echo $current_url; ?>">
  <?php endif; ?>
    <?php
}
add_action('wp_head', 'peluanglaundry_output_geo_meta_tags', 1);

/**
 * Output Schema.org JSON-LD (Linked Graph: LocalBusiness, Organization, WebSite, WebPage, Breadcrumbs, Product/Service)
 */
function peluanglaundry_output_seo_geo_schema() {
    $site_url = esc_url(home_url('/'));
    $current_url = esc_url(home_url(add_query_arg(array(), $GLOBALS['wp']->request)));
    if (empty($current_url) || is_front_page()) {
        $current_url = $site_url;
    } else {
        $current_url = trailingslashit($current_url);
    }

    $logo_url = esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png');
    $lab_image_url = esc_url(get_template_directory_uri() . '/assets/img/laboratorium-chemical-orchid.jpg');
    $desc = peluanglaundry_get_meta_description();
    $page_title = wp_get_document_title();

    // 1. Organization & LocalBusiness
    $organization = array(
        '@type'                    => array('LocalBusiness', 'WholesaleStore', 'Manufacturer'),
        '@id'                      => $site_url . '#organization',
        'name'                     => 'PT Indotech Berkah Abadi',
        'alternateName'            => 'Orchid Brand Green Cleaning & Perfumery',
        'legalName'                => 'PT Indotech Berkah Abadi',
        'url'                      => $site_url,
        'logo'                     => $logo_url,
        'image'                    => $lab_image_url,
        'description'              => 'Produsen konsentrat deterjen laundry ramah lingkungan (DETERMAT), bibit parfum laundry tahan lama, dan penyedia paket usaha laundry kiloan siap buka terpercaya di Indonesia sejak 2012.',
        'telephone'                => '+62-811-2900-668',
        'email'                    => 'mkt.orchid@gmail.com',
        'currenciesAccepted'       => 'IDR',
        'paymentAccepted'          => 'Cash, Bank Transfer, QRIS',
        'priceRange'               => 'Rp 15.000 - Rp 45.000.000',
        'address'                  => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Jl. Tentara Pelajar Palagan Km. 9, Kamdanen, Sariharjo',
            'addressLocality' => 'Ngaglik, Sleman',
            'addressRegion'   => 'D.I. Yogyakarta',
            'postalCode'      => '55581',
            'addressCountry'  => 'ID',
        ),
        'geo'                      => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => -7.718842,
            'longitude' => 110.378912,
        ),
        'hasMap'                   => 'https://maps.google.com/?q=-7.718842,110.378912',
        'openingHoursSpecification' => array(
            array(
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
                'opens'     => '08:00',
                'closes'    => '16:30',
            ),
        ),
        'areaServed'               => array(
            array('@type' => 'Country', 'name' => 'Indonesia'),
            array('@type' => 'AdministrativeArea', 'name' => 'D.I. Yogyakarta'),
            array('@type' => 'AdministrativeArea', 'name' => 'Jawa Tengah'),
            array('@type' => 'AdministrativeArea', 'name' => 'Jawa Timur'),
            array('@type' => 'AdministrativeArea', 'name' => 'Jawa Barat'),
            array('@type' => 'AdministrativeArea', 'name' => 'DKI Jakarta'),
            array('@type' => 'AdministrativeArea', 'name' => 'Banten'),
            array('@type' => 'AdministrativeArea', 'name' => 'Sumatera'),
            array('@type' => 'AdministrativeArea', 'name' => 'Kalimantan'),
            array('@type' => 'AdministrativeArea', 'name' => 'Sulawesi'),
            array('@type' => 'AdministrativeArea', 'name' => 'Bali'),
            array('@type' => 'AdministrativeArea', 'name' => 'Papua'),
        ),
        'sameAs'                   => array(
            'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat',
            'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755',
        ),
    );

    // 2. WebSite Entity
    $website = array(
        '@type'           => 'WebSite',
        '@id'             => $site_url . '#website',
        'url'             => $site_url,
        'name'            => 'Peluang Usaha Laundry',
        'publisher'       => array('@id' => $site_url . '#organization'),
        'inLanguage'      => 'id-ID',
        'potentialAction' => array(
            '@type'       => 'SearchAction',
            'target'      => $site_url . '?s={search_term_string}',
            'query-input' => 'required name=search_term_string',
        ),
    );

    // 3. WebPage Entity
    $webpage_type = 'WebPage';
    if (is_page('about-us')) {
        $webpage_type = 'AboutPage';
    } elseif (is_page('contact-us')) {
        $webpage_type = 'ContactPage';
    } elseif (is_front_page()) {
        $webpage_type = 'WebPage';
    }

    $webpage = array(
        '@type'           => $webpage_type,
        '@id'             => $current_url . '#webpage',
        'url'             => $current_url,
        'name'            => $page_title,
        'description'     => $desc,
        'inLanguage'      => 'id-ID',
        'isPartOf'        => array('@id' => $site_url . '#website'),
        'about'           => array('@id' => $site_url . '#organization'),
        'spatialCoverage' => array(
            '@type'    => 'Place',
            'name'     => 'Indonesia (Pabrik & Gudang Sleman, D.I. Yogyakarta)',
            'geo'      => array(
                '@type'     => 'GeoCoordinates',
                'latitude'  => -7.718842,
                'longitude' => 110.378912,
            ),
            'address'  => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Jl. Tentara Pelajar Palagan Km. 9, Kamdanen, Sariharjo',
                'addressLocality' => 'Ngaglik, Sleman',
                'addressRegion'   => 'D.I. Yogyakarta',
                'postalCode'      => '55581',
                'addressCountry'  => 'ID',
            ),
        ),
    );

    // 4. BreadcrumbList Entity
    $breadcrumb_items = array();
    $pos = 1;
    $breadcrumb_items[] = array(
        '@type'    => 'ListItem',
        'position' => $pos++,
        'name'     => 'Home',
        'item'     => $site_url,
    );

    if (is_singular('post')) {
        $cats = get_the_category();
        if (!empty($cats[0])) {
            $breadcrumb_items[] = array(
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => $cats[0]->name,
                'item'     => esc_url(get_category_link($cats[0]->term_id)),
            );
        }
        $breadcrumb_items[] = array(
            '@type'    => 'ListItem',
            'position' => $pos++,
            'name'     => get_the_title(),
            'item'     => $current_url,
        );
    } elseif (is_page() && !is_front_page()) {
        $breadcrumb_items[] = array(
            '@type'    => 'ListItem',
            'position' => $pos++,
            'name'     => peluanglaundry_shorten_breadcrumb_title(get_the_title(), get_the_ID()),
            'item'     => $current_url,
        );
    } elseif (is_category()) {
        $breadcrumb_items[] = array(
            '@type'    => 'ListItem',
            'position' => $pos++,
            'name'     => single_cat_title('', false),
            'item'     => $current_url,
        );
    }

    $breadcrumbs = array(
        '@type'           => 'BreadcrumbList',
        '@id'             => $current_url . '#breadcrumb',
        'itemListElement' => $breadcrumb_items,
    );

    $graph = array($organization, $website, $webpage, $breadcrumbs);

    // 5. Special Page Entities
    if (is_page('pewangi-laundry-tahan-lama-murah')) {
        $product = array(
            '@type'           => 'Product',
            '@id'             => $current_url . '#product',
            'name'            => 'Pewangi Laundry Tahan Lama & Bibit Parfum Orchid Brand',
            'description'     => 'Bibit parfum dan pewangi laundry standar mutu IFRA & Halal dengan bahan pengikat aroma FIXAMAX™ yang tahan hingga 30 hari dalam kantong packing pakaian.',
            'image'           => $lab_image_url,
            'brand'           => array('@type' => 'Brand', 'name' => 'Orchid Brand'),
            'manufacturer'    => array('@id' => $site_url . '#organization'),
            'category'        => 'Chemical Laundry & Perfumery',
            'offers'          => array(
                array(
                    '@type'         => 'Offer',
                    'name'          => 'Methanol Base Siap Pakai - Grade Standar',
                    'price'         => '125000',
                    'priceCurrency' => 'IDR',
                    'availability'  => 'https://schema.org/InStock',
                    'priceValidUntil' => '2027-12-31',
                    'seller'        => array('@id' => $site_url . '#organization'),
                    'areaServed'    => 'ID',
                ),
                array(
                    '@type'         => 'Offer',
                    'name'          => 'Methanol Base Siap Pakai - Grade Ultra+ Concentrate',
                    'price'         => '275000',
                    'priceCurrency' => 'IDR',
                    'availability'  => 'https://schema.org/InStock',
                    'priceValidUntil' => '2027-12-31',
                    'seller'        => array('@id' => $site_url . '#organization'),
                    'areaServed'    => 'ID',
                ),
                array(
                    '@type'         => 'Offer',
                    'name'          => 'Water Base Konsentrat Air - Grade Prime Standar',
                    'price'         => '150000',
                    'priceCurrency' => 'IDR',
                    'availability'  => 'https://schema.org/InStock',
                    'priceValidUntil' => '2027-12-31',
                    'seller'        => array('@id' => $site_url . '#organization'),
                    'areaServed'    => 'ID',
                ),
                array(
                    '@type'         => 'Offer',
                    'name'          => 'Water Base Konsentrat Air - Grade Prime Plus+',
                    'price'         => '225000',
                    'priceCurrency' => 'IDR',
                    'availability'  => 'https://schema.org/InStock',
                    'priceValidUntil' => '2027-12-31',
                    'seller'        => array('@id' => $site_url . '#organization'),
                    'areaServed'    => 'ID',
                ),
            ),
            'aggregateRating' => array(
                '@type'       => 'AggregateRating',
                'ratingValue' => '4.9',
                'reviewCount' => '420',
            ),
        );
        $graph[] = $product;
    } elseif (is_page('paket-usaha-laundry-kiloan-murah')) {
        $service = array(
            '@type'           => 'Service',
            '@id'             => $current_url . '#service',
            'name'            => 'Paket Usaha Laundry Kiloan Siap Buka Tanpa Royalti Fee',
            'description'     => 'Kemitraan pendirian usaha laundry kiloan profesional sistem jual putus: mesin cuci dan pengering komersial bergaransi, suplai bahan chemical hemat ongkir, dan SOP bimbingan operasional.',
            'provider'        => array('@id' => $site_url . '#organization'),
            'areaServed'      => array('@type' => 'Country', 'name' => 'Indonesia'),
            'hasOfferCatalog' => array(
                '@type'         => 'OfferCatalog',
                'name'          => 'Pilihan Paket Usaha Laundry',
                'itemListElement' => array(
                    array(
                        '@type'         => 'Offer',
                        'name'          => 'Paket Perintis Kiloan Rumahan',
                        'price'         => '14500000',
                        'priceCurrency' => 'IDR',
                        'availability'  => 'https://schema.org/InStock',
                    ),
                    array(
                        '@type'         => 'Offer',
                        'name'          => 'Paket Sukses Komersial (Best Seller)',
                        'price'         => '28500000',
                        'priceCurrency' => 'IDR',
                        'availability'  => 'https://schema.org/InStock',
                    ),
                    array(
                        '@type'         => 'Offer',
                        'name'          => 'Paket Komplit Dua Mesin Front Load',
                        'price'         => '45000000',
                        'priceCurrency' => 'IDR',
                        'availability'  => 'https://schema.org/InStock',
                    ),
                ),
            ),
        );
        $graph[] = $service;
    } elseif (is_page('determat') || is_page('jual-paket-bahan-deterjen-cair-matic-ramah-lingkungan-determat')) {
        $product = array(
            '@type'           => 'Product',
            '@id'             => $current_url . '#determat',
            'name'            => 'DETERMAT Paket Bahan Deterjen Cair Matic Rendah Busa',
            'description'     => 'Konsentrat deterjen laundry ramah lingkungan turunan kelapa sawit. 1 paket 1 kg menghasilkan 20 liter sabun cair, aman untuk mesin front load dan hemat ongkir 80%.',
            'image'           => esc_url(get_template_directory_uri() . '/assets/img/determat.jpg'),
            'brand'           => array('@type' => 'Brand', 'name' => 'Orchid Brand'),
            'manufacturer'    => array('@id' => $site_url . '#organization'),
            'offers'          => array(
                '@type'         => 'Offer',
                'price'         => '45000',
                'priceCurrency' => 'IDR',
                'availability'  => 'https://schema.org/InStock',
                'seller'        => array('@id' => $site_url . '#organization'),
            ),
            'aggregateRating' => array(
                '@type'       => 'AggregateRating',
                'ratingValue' => '4.9',
                'reviewCount' => '1800',
            ),
        );
        $graph[] = $product;
    } elseif (is_page('pelatihan-pembuatan-chemical') || is_page('pelatihan-pembuatan-chemical-laundry')) {
        $course = array(
            '@type'             => 'Course',
            '@id'               => $current_url . '#course',
            'name'              => 'Kursus & Pelatihan Pembuatan Chemical Laundry dan Rumah Tangga',
            'description'       => 'Pelatihan privat formulasi chemical laundry ramah lingkungan (deterjen matic, softener, pelicin setrika, pembersih noda) bersertifikat di Sleman Yogyakarta.',
            'provider'          => array('@id' => $site_url . '#organization'),
            'courseCode'        => 'CHEM-ORCHID-01',
            'hasCourseInstance' => array(
                '@type'          => 'CourseInstance',
                'courseMode'     => 'Onsite & Offline Workshop',
                'courseWorkload' => 'PT6H',
                'location'       => array(
                    '@type'   => 'Place',
                    'name'    => 'Pusat Riset & Pelatihan PT Indotech Berkah Abadi',
                    'address' => array(
                        '@type'           => 'PostalAddress',
                        'streetAddress'   => 'Jl. Tentara Pelajar Palagan Km. 9, Kamdanen, Sariharjo',
                        'addressLocality' => 'Sleman',
                        'addressRegion'   => 'D.I. Yogyakarta',
                        'addressCountry'  => 'ID',
                    ),
                ),
            ),
        );
        $graph[] = $course;
    } elseif (is_page('pelatihan-manajemen-operasional-laundry')) {
        $course = array(
            '@type'             => 'Course',
            '@id'               => $current_url . '#course-mgmt',
            'name'              => 'Pelatihan SOP Manajemen & Operasional Laundry Kiloan Profesional',
            'description'       => 'Bimbingan manajemen operasional laundry kiloan: penataan alur kerja higienis, sistem kasir POS, rekrutmen karyawan, dan strategi penanganan komplain pelanggan.',
            'provider'          => array('@id' => $site_url . '#organization'),
            'courseCode'        => 'MGMT-LAUNDRY-02',
            'hasCourseInstance' => array(
                '@type'      => 'CourseInstance',
                'courseMode' => 'Onsite & Consultation',
                'location'   => array(
                    '@type' => 'Place',
                    'name'  => 'PT Indotech Berkah Abadi Sleman Yogyakarta',
                ),
            ),
        );
        $graph[] = $course;
    } elseif (is_page('depo-isi-ulang-sabaun')) {
        $service = array(
            '@type'       => 'Service',
            '@id'         => $current_url . '#service-depo',
            'name'        => 'Kemitraan Depo Isi Ulang Sabun & Chemical Laundry Curah',
            'description' => 'Peluang usaha depo isi ulang deterjen matic, softener, dan pewangi laundry curah berkualitas pabrik. Suplai bahan hemat ongkir dari Sleman Yogyakarta ke seluruh kota.',
            'provider'    => array('@id' => $site_url . '#organization'),
            'areaServed'  => array('@type' => 'Country', 'name' => 'Indonesia'),
        );
        $graph[] = $service;
    } elseif (is_page('agen-resmi-orchid-brand')) {
        $service = array(
            '@type'       => 'Service',
            '@id'         => $current_url . '#service-agent',
            'name'        => 'Peluang Distributor & Keagenan Resmi Chemical Laundry Orchid Brand',
            'description' => 'Hak keagenan eksklusif 1 agen 1 kota untuk distribusi bahan chemical deterjen dan bibit parfum laundry ramah lingkungan dengan proteksi wilayah dan margin maksimal.',
            'provider'    => array('@id' => $site_url . '#organization'),
            'areaServed'  => array('@type' => 'Country', 'name' => 'Indonesia'),
        );
        $graph[] = $service;
    } elseif (is_page('reseller')) {
        $service = array(
            '@type'       => 'Service',
            '@id'         => $current_url . '#service-reseller',
            'name'        => 'Peluang Reseller Sabun Curah & Maklon Chemical Laundry Private Label',
            'description' => 'Layanan maklon dan reseller chemical laundry curah dengan merek Anda sendiri. Formula teruji, legalitas izin edar terjamin, dan modal awal fleksibel.',
            'provider'    => array('@id' => $site_url . '#organization'),
            'areaServed'  => array('@type' => 'Country', 'name' => 'Indonesia'),
        );
        $graph[] = $service;
    } elseif (is_singular('post')) {
        global $post;
        $article = array(
            '@type'            => 'Article',
            '@id'              => $current_url . '#article',
            'headline'         => get_the_title(),
            'description'      => $desc,
            'datePublished'    => get_the_date(DATE_W3C),
            'dateModified'     => get_the_modified_date(DATE_W3C),
            'mainEntityOfPage' => $current_url,
            'author'           => array(
                '@type' => 'Organization',
                'name'  => 'PT Indotech Berkah Abadi',
                'url'   => $site_url,
            ),
            'publisher'        => array('@id' => $site_url . '#organization'),
        );
        if (has_post_thumbnail()) {
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            if (!empty($thumb[0])) {
                $article['image'] = $thumb[0];
            }
        }
        $graph[] = $article;
    }

    // FAQ schema per page
    $faq_entities = array();

    if (is_front_page()) {
        $faq_entities = array(
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah kemitraan laundry ini ada royalti fee atau bagi hasil?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Tidak ada. Seluruh paket usaha laundry Orchid Brand adalah sistem beli putus tanpa royalti fee bulanan, tanpa franchise fee tahunan, dan tanpa bagi hasil. 100% omset dan laba bersih adalah milik Anda sepenuhnya.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana jika saya masih pemula dan belum punya pengalaman laundry?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Didampingi dari nol sampai bisa. Anda mendapatkan bimbingan komprehensif mulai dari konsultasi pemilihan lokasi/ruko, tata letak instalasi mesin, Standar Operasional Prosedur (SOP) pencucian dan setrika uap, hingga training aplikasi kasir POS laundry agar pembukuan rapi dan anti-bocor.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana cara mengolah paket bahan konsentrat DETERMAT?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Sangat mudah dan cepat. Cukup siapkan wadah atau drum dan air bersih sesuai takaran di buku panduan. Masukkan serbuk konsentrat DETERMAT, aduk rata selama 5–10 menit, dan 20 liter deterjen cair matic kental berkualitas tinggi langsung siap digunakan untuk mencuci.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana garansi unit mesin dan penanganan kendala teknis?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Semua mesin bergaransi resmi. Kami menyediakan panduan teknisi via video call untuk instalasi awal maupun troubleshooting darurat. Didukung ketersediaan suku cadang (sparepart) original yang lengkap di gudang pusat kami di Sleman, Yogyakarta.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah melayani pengiriman paket usaha ke luar pulau Jawa?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Ya, menjangkau seluruh Indonesia. Kami bekerja sama dengan puluhan ekspedisi kargo terpercaya via darat, laut, dan udara. Pengiriman mesin dilapisi proteksi peti kayu kokoh sehingga aman sampai tujuan dengan tarif ongkir yang tetap hemat.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana cara memesan paket usaha atau menjadi agen chemical?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Tekan tombol WhatsApp resmi di website ini untuk terhubung langsung dengan konsultan kami. Kami siap menghitung estimasi kebutuhan modal, mengirimkan proposal rincian paket, dan mendampingi hingga outlet Anda siap buka.',
                ),
            ),
        );
    } elseif (is_page('paket-usaha-laundry-kiloan-murah') || is_page_template('page-templates/template-package-bo.php')) {
        $faq_entities = array(
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah benar-benar tidak ada royalty fee atau bagi hasil bulanan?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Ya, 100% benar. Kemitraan usaha laundry Orchid Brand menggunakan sistem beli putus murni. Anda tidak dibebani potongan royalti fee bulanan, iuran wajib kemitraan, maupun franchise fee tahunan. Seluruh omset dan keuntungan usaha adalah hak penuh milik Anda.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Berapa ukuran tempat atau ruko minimal yang dibutuhkan?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Untuk Paket Perintis Kiloan, ruangan berukuran minimal 3x3 meter sudah cukup. Sedangkan untuk Paket Komersial dan Koin (Laundromat), direkomendasikan ruangan minimal 3x5 meter hingga 4x6 meter agar alur kerja pemisahan pakaian kotor, area cuci, setrika uap, meja kasir, dan rak penyimpanan bersih tertata rapi dan leluasa.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana jika mesin cuci atau dryer mengalami kendala operasional?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Semua unit mesin baru bergaransi resmi. Kami menyediakan panduan teknisi via video call untuk penanganan darurat (troubleshooting) secara cepat. Gudang pusat kami di Sleman, Yogyakarta juga memiliki ketersediaan suku cadang (sparepart) original yang siap dikirimkan kapan pun dibutuhkan.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah suplai deterjen dan pewanginya wajib selalu membeli dari sini?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Sebagai mitra resmi, Anda mendapatkan hak istimewa harga pabrik tangan pertama (grosir) untuk serbuk konsentrat deterjen DETERMAT dan bibit parfum Orchid Brand seumur hidup. HPP chemical cuci Anda menjadi sangat hemat (mulai Rp 500-an per kg pakaian), sehingga keuntungan margin Anda jauh lebih tebal dibanding membeli sabun biasa di pasaran luar.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah sudah termasuk pelatihan karyawan dan modul SOP operasional?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Sudah lengkap. Paket usaha sudah mencakup buku panduan Standar Operasional Prosedur (SOP) siap pakai, teknik spotting pembersihan noda membandel (darah, karat, tinta), takaran chemical yang presisi, cara setrika uap cepat dan licin, serta bimbingan penggunaan aplikasi kasir laundry.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana prosedur pengiriman dan keamanan mesin ke luar pulau Jawa?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Seluruh unit mesin yang dikirimkan ke luar kota dan luar pulau Jawa dilapisi proteksi bubble wrap tebal dan peti kayu (palet) standar kargo agar aman dari benturan selama di perjalanan. Kami bekerja sama dengan puluhan ekspedisi kargo resmi untuk mendapatkan ongkos kirim paling ekonomis.',
                ),
            ),
        );
    } elseif (is_page('pewangi-laundry-tahan-lama-murah')) {
        $faq_entities = array(
            array(
                '@type'          => 'Question',
                'name'           => 'Berapa lama aroma parfum laundry Orchid Brand bisa bertahan di pakaian?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Dengan formulasi fiksatif (pengikat aroma) standar industri, aroma Orchid Brand mampu bertahan hingga 14–30 hari di dalam plastik packing laundry yang tertutup rapat, dan tetap harum segar saat pakaian disimpan di lemari pelanggan.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apa perbedaan pewangi Solvent Base (Siap Pakai) dan Water Base (Bisa Diencerkan)?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Solvent Base (Siap Pakai) berbasis pelarut khusus yang cepat mengering tanpa meninggalkan kelembapan pada serat kain, disemprotkan langsung sebelum pakaian dimasukkan plastik packing. Sedangkan Water Base adalah konsentrat ekonomis yang bisa dicampur air bersih untuk digunakan saat menyetrika.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah formula parfum Orchid Brand meninggalkan noda atau bercak di pakaian putih?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => '100% Bebas Noda (Anti-Spotting). Formula parfum Orchid Brand menggunakan bibit murni berkualitas tinggi yang larut sempurna tanpa residu minyak kotor. Dijamin aman untuk pakaian putih, jas formal, kain sutra, sprei hotel, hingga pakaian bayi.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Berapa minimal order dan bagaimana pengiriman ke luar kota / luar pulau?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Kami melayani pembelian fleksibel mulai dari eceran 1 jerigen (5 liter) hingga kebutuhan grosir puluhan drum. Pengiriman ke seluruh Indonesia didukung jaringan ekspedisi kargo darat, laut, dan udara dengan tarif ongkir paling bersahabat.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana cara menjadi agen atau distributor bibit parfum di kota saya?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Hubungi tim pemasaran resmi kami via WhatsApp. Kami menyediakan paket perintis agen depo chemical dengan harga pabrik tangan pertama, proteksi radius wilayah distribusi, serta materi promosi lengkap.',
                ),
            ),
        );
    } elseif (is_page('depo-sabun-curah') || is_page_template('page-templates/template-chemical-depo.php')) {
        $faq_entities = array(
            array(
                '@type'          => 'Question',
                'name'           => 'Berapa modal awal untuk membuka usaha Depo Isi Ulang Sabun Curah?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Sangat terjangkau. Paket perintis depo sabun curah dapat dimulai dengan modal di bawah Rp 5 juta. Paket sudah mencakup drum dispenser kran khusus, spanduk promosi, jerigen display, serta suplai konsentrat DETERMAT, softener, dan sabun cuci piring siap larut.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Berapa liter deterjen cair yang dihasilkan dari 1 paket konsentrat DETERMAT?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Setiap 1 paket serbuk konsentrat DETERMAT diformulasikan untuk dilarutkan dengan air bersih hingga menghasilkan 20 liter deterjen cair matic kental berkualitas prima. Hal ini menekan biaya pokok produksi (HPP) sabun hingga di kisaran Rp 1.500 – Rp 2.000-an per liter.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah formula sabun DETERMAT ramah lingkungan dan aman bagi mesin cuci?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => '100% Aman & Ramah Lingkungan. Formula DETERMAT dirancang dengan teknologi rendah busa (low-suds) standar mesin cuci komersial front loading dan top loading, bebas zat klorin keras, tidak menimbulkan kerak pada tabung mesin cuci, serta limbah cucian mudah terurai secara alami (biodegradable).',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah agen mendapatkan proteksi radius wilayah pemasaran?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Ya. Kami menerapkan zonasi wilayah untuk menjaga kenyamanan setiap agen resmi Orchid Brand di tingkat kelurahan/kecamatan, sehingga Anda leluasa mengembangkan basis pelanggan tanpa khawatir kanibalisasi pasar.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Mengapa pengiriman konsentrat serbuk jauh lebih hemat ongkir ke luar pulau?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Karena Anda hanya mengirim bahan aktif konsentrat padat (bobot ~1 kg untuk 20 liter sabun jadi), Anda tidak perlu membayar ongkir mahal untuk air. Pelarutan air dilakukan di lokasi outlet Anda menggunakan sumber air bersih lokal, menghemat biaya logistik kargo hingga 90%.',
                ),
            ),
        );
    } elseif (is_page('kemitraan') || is_page_template('page-templates/template-partners.php')) {
        $faq_entities = array(
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah ada royalti fee bulanan atau bagi hasil keuntungan?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Sama sekali tidak ada (0% Royalti). Sistem kemitraan Orchid Brand adalah jual putus resmi. Seluruh omset harian dan profit bulanan adalah milik Anda 100% tanpa ada potongan fee atau bagi hasil apa pun ke pihak pusat seumur hidup.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Apakah calon mitra pemula tanpa pengalaman bisa menjalankan bisnis ini?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Tentu saja bisa. Lebih dari 70% mitra kami memulai dari nol. Kami memberikan pelatihan intensif mulai dari teknik pemilahan pakaian, takaran deterjen presisi, cara setrika uap cepat dan rapi, hingga pengoperasian software kasir POS laundry agar bisnis berjalan terstruktur.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Bagaimana dukungan promosi dan marketing saat pembukaan outlet?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Setiap paket sudah dilengkapi desain materi promosi siap pakai (spanduk outdoor, banner kasir, brosur promo diskon kiloan), serta panduan strategi marketing lokal dan pendaftaran lokasi bisnis di Google Maps untuk menarik pelanggan sekitar dengan cepat.',
                ),
            ),
            array(
                '@type'          => 'Question',
                'name'           => 'Berapa lama estimasi persiapan hingga outlet laundry siap beroperasi?',
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => 'Rata-rata membutuhkan waktu 7 hingga 14 hari kerja sejak penetapan paket, meliputi persiapan unit mesin, pengiriman ekspedisi berpeti kayu, penyesuaian instalasi pipa air/listrik di ruko, serta sesi pelatihan SOP karyawan.',
                ),
            ),
        );
    }

    if (!empty($faq_entities)) {
        $faq_id = is_front_page() ? $site_url . '#faq' : (is_singular() ? get_permalink() . '#faq' : $site_url . '#faq');
        $faq = array(
            '@type'      => 'FAQPage',
            '@id'        => $faq_id,
            'mainEntity' => $faq_entities,
        );
        $graph[] = $faq;
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@graph'   => $graph,
    );

    echo "\n<!-- Schema.org JSON-LD (SEO Geo, LocalBusiness & Site Structure) -->\n";
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "</script>\n";
}
add_action('wp_head', 'peluanglaundry_output_seo_geo_schema', 2);
