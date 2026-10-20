<?php
/**
 * Template Name: Katalog Produk Chemical & Bibit Parfum
 * Description: Template katalog lengkap formulasi chemical laundry, konsentrat deterjen, dan bibit parfum Orchid Brand.
 *
 * @package PeluangLaundry
 */

get_header();

$catalog_products = array(
    array(
        'title'      => 'DETERMAT Matic Low Suds 1 Kg',
        'tag'        => 'Paling Laris',
        'img'        => get_template_directory_uri() . '/assets/img/determat.jpg',
        'desc'       => 'Paket bahan deterjen cair konsentrat ramah lingkungan. Diolah jadi 15 - 20 Liter deterjen cair matic busa rendah untuk mesin cuci.',
        'rating'     => '4.9/5 (2.400+ Ulasan)',
        'price'      => 'Rp 95.000',
        'unit'       => '/ paket 1 kg (jadi 20 L)',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan DETERMAT Matic Low Suds 1 Kg.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat',
        'shopee_url' => 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755',
    ),
    array(
        'title'      => 'DETERMAT Extra Busa 1 Kg',
        'tag'        => 'Busa Melimpah',
        'img'        => get_template_directory_uri() . '/assets/img/determat.jpg',
        'desc'       => 'Formula konsentrat dengan busa ekstra tebal khusus mesin cuci Top Load dan pencucian manual. Daya angkat kotoran cepat.',
        'rating'     => '4.8/5 (950+ Ulasan)',
        'price'      => 'Rp 95.000',
        'unit'       => '/ paket 1 kg (jadi 20 L)',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan DETERMAT Extra Busa 1 Kg.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat',
        'shopee_url' => 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755',
    ),
    array(
        'title'      => 'Bibit Parfum Laundry Orchid Grade A+',
        'tag'        => 'Tahan 30 Hari',
        'img'        => get_template_directory_uri() . '/assets/img/bisnis-laundry-eco-green.jpg',
        'desc'       => 'Bibit parfum murni tanpa campuran air. Varian populer: Sakura, Akasia, Snappy, Ocean Fresh, Downy Red, Molto Blue.',
        'rating'     => '4.9/5 (1.800+ Ulasan)',
        'price'      => 'Rp 145.000',
        'unit'       => '/ botol 1 Liter murni',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan Bibit Parfum Laundry Grade A+.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat',
        'shopee_url' => 'https://shopee.co.id',
    ),
    array(
        'title'      => 'Konsentrat Softener Orchid Brand',
        'tag'        => 'Pelembut Serat',
        'img'        => get_template_directory_uri() . '/assets/img/determat.jpg',
        'desc'       => 'Formula pelembut serat kain pakaian dengan ekstrak wangi mewah, anti-bakteri, dan memudahkan proses penyetrikaan.',
        'rating'     => '4.8/5 (720+ Ulasan)',
        'price'      => 'Rp 85.000',
        'unit'       => '/ jerigen 5 Liter',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan Softener Orchid Brand.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat',
        'shopee_url' => 'https://shopee.co.id',
    ),
    array(
        'title'      => 'Pelicin & Pengharum Setrika Orchid',
        'tag'        => 'Anti Kerut',
        'img'        => get_template_directory_uri() . '/assets/img/determat.jpg',
        'desc'       => 'Cairan semprot setrika licin seketika, tidak meninggalkan noda kuning pada baju putih, dan harum tahan lama.',
        'rating'     => '4.8/5 (640+ Ulasan)',
        'price'      => 'Rp 65.000',
        'unit'       => '/ jerigen 5 Liter',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan Pelicin Setrika Orchid.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat',
        'shopee_url' => 'https://shopee.co.id',
    ),
    array(
        'title'      => 'Oxy Bleach Serbuk (Color Safe)',
        'tag'        => 'Anti Noda Warna',
        'img'        => get_template_directory_uri() . '/assets/img/determat.jpg',
        'desc'       => 'Pencerah pakaian berwarna dan pengangkat noda getah, kecap, serta jamur tanpa merusak warna asli pakaian.',
        'rating'     => '4.9/5 (1.100+ Ulasan)',
        'price'      => 'Rp 45.000',
        'unit'       => '/ pack 1 Kg',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan Oxy Bleach Serbuk.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat',
        'shopee_url' => 'https://shopee.co.id',
    ),
    array(
        'title'      => 'Rust Remover (Penghilang Karat Kain)',
        'tag'        => 'Spesialis Noda',
        'img'        => get_template_directory_uri() . '/assets/img/determat.jpg',
        'desc'       => 'Cairan khusus yang ampuh melarutkan noda karat air sumur atau logam pada pakaian putih maupun berwarna dalam hitungan detik.',
        'rating'     => '4.9/5 (820+ Ulasan)',
        'price'      => 'Rp 55.000',
        'unit'       => '/ botol 500 ml',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan Rust Remover Penghilang Karat.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat',
        'shopee_url' => 'https://shopee.co.id',
    ),
    array(
        'title'      => 'Alkali Booster Pengangkat Lemak',
        'tag'        => 'Heavy Duty',
        'img'        => get_template_directory_uri() . '/assets/img/determat.jpg',
        'desc'       => 'Booster pencucian untuk laundry linen hotel, restoran, bengkel, dan pakaian berlemak/berminyak tinggi.',
        'rating'     => '4.7/5 (410+ Ulasan)',
        'price'      => 'Rp 75.000',
        'unit'       => '/ jerigen 5 Liter',
        'wa_text'    => 'Halo Admin Orchid Brand, saya mau pesan Alkali Booster.',
        'toped_url'  => 'https://www.tokopedia.com/kuekurmacoklat',
        'shopee_url' => 'https://shopee.co.id',
    ),
);
?>

<!-- Catalog Hero -->
<section class="pl-page-hero">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill">
        <?php peluanglaundry_icon('flask', 'pl-icon-inline', 14); ?>
        <span>KATALOG RESMI CHEMICAL &amp; BIBIT PARFUM</span>
      </div>
      <h1 class="pl-page-title">
        Chemical &amp; Bibit Deterjen Berkualitas Pabrik
      </h1>
      <p class="pl-page-subtitle">
        Formulasi konsentrat hemat ongkir, aman untuk semua jenis mesin cuci, dan ramah lingkungan langsung dari pabrik PT Indotech Berkah Abadi.
      </p>
    </div>
  </div>
</section>

<!-- Product Catalog Grid -->
<section class="pl-section" id="katalog-produk">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">PRODUK UNGGULAN</span>
      <h2 class="pl-section-title">Daftar Produk Chemical &amp; Bibit Parfum</h2>
      <p class="pl-section-desc">Tersedia dalam kemasan grosir, paket konsentrat hemat ongkir, dan jerigen siap pakai.</p>
    </div>

    <div class="pl-grid-3">
      <?php
      foreach ($catalog_products as $prod) :
          set_query_var('product_data', $prod);
          get_template_part('template-parts/cards/product', 'card');
      endforeach;
      ?>
    </div>
  </div>
</section>

<!-- Hero Comparison -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php get_template_part('template-parts/landing/hero', 'comparison'); ?>
  </div>
</section>

<!-- 10 Keunggulan Grid -->
<section class="pl-section">
  <div class="pl-container">
    <?php get_template_part('template-parts/landing/benefits', 'grid'); ?>
  </div>
</section>

<!-- Reusable Order Box -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php
    set_query_var('order_box_title', 'Pesan Produk Chemical Orchid Brand Sekarang');
    set_query_var('order_box_subtitle', 'Tersedia harga khusus grosir untuk reseller, distributor wilayah, dan jaringan mitra laundry di seluruh Indonesia.');
    set_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya ingin memesan produk chemical / menjadi distributor resmi di kota saya.');
    get_template_part('template-parts/landing/order', 'box');
    ?>
  </div>
</section>

<?php get_footer(); ?>
