<?php
/**
 * Product Card Component
 * Usage:
 * set_query_var('product_data', [...]);
 * get_template_part('template-parts/cards/product', 'card');
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

$product = get_query_var('product_data', array());

$default_img = get_template_directory_uri() . '/assets/img/determat.jpg';
$title = !empty($product['title']) ? $product['title'] : 'DETERMAT Paket Bahan Sabun Cair';
$tag = !empty($product['tag']) ? $product['tag'] : 'Produk Unggulan';
$img = !empty($product['img']) ? $product['img'] : $default_img;
$desc = !empty($product['desc']) ? $product['desc'] : 'Formula konsentrat 1 kg menghasilkan 20 liter sabun cair berkualitas tinggi, rendah busa, aman untuk mesin cuci.';
$rating = !empty($product['rating']) ? $product['rating'] : '4.9/5 (1.500+ Ulasan)';
$price = !empty($product['price']) ? $product['price'] : 'Rp 95.000';
$unit = !empty($product['unit']) ? $product['unit'] : '/ paket 1 kg (jadi 20 L)';
$wa_text = !empty($product['wa_text']) ? $product['wa_text'] : 'Halo Admin Orchid Brand, saya tertarik memesan produk ' . $title;
$wa_url = peluanglaundry_get_wa_link($wa_text);
$toped_url = !empty($product['toped_url']) ? $product['toped_url'] : get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat');
$shopee_url = !empty($product['shopee_url']) ? $product['shopee_url'] : get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755');
?>

<div class="pl-prod-card">
  <div class="pl-prod-card-thumb">
    <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy" class="pl-prod-img">
    <span class="pl-prod-badge"><?php echo esc_html($tag); ?></span>
  </div>

  <div class="pl-prod-card-body">
    <div class="pl-prod-rating">
      <?php for ($i = 0; $i < 5; $i++) : ?>
        <?php peluanglaundry_icon('star', '', 14); ?>
      <?php endfor; ?>
      <span><?php echo esc_html($rating); ?></span>
    </div>

    <h3 class="pl-prod-title"><?php echo esc_html($title); ?></h3>
    <p class="pl-prod-desc"><?php echo esc_html($desc); ?></p>

    <div class="pl-prod-price-wrap">
      <span class="pl-prod-price"><?php echo esc_html($price); ?></span>
      <span class="pl-prod-unit"><?php echo esc_html($unit); ?></span>
    </div>

    <div class="pl-prod-actions">
      <a href="<?php echo esc_url($wa_url); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-wa-sm">
        <?php peluanglaundry_icon('whatsapp', '', 15); ?>
        <span>Pesan via WhatsApp</span>
      </a>
      <div class="pl-prod-marketplaces">
        <a href="<?php echo esc_url($toped_url); ?>" target="_blank" rel="noopener" class="pl-mp-icon-link pl-mp-toped" title="Beli di Tokopedia">
          <?php peluanglaundry_icon('shopping-cart', '', 14); ?> Toped
        </a>
        <a href="<?php echo esc_url($shopee_url); ?>" target="_blank" rel="noopener" class="pl-mp-icon-link pl-mp-shopee" title="Beli di Shopee">
          <?php peluanglaundry_icon('shopping-bag', '', 14); ?> Shopee
        </a>
      </div>
    </div>
  </div>
</div>
