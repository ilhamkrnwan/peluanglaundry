<?php
/**
 * Landing Page - Order Box Component
 * High conversion call-to-action block for WhatsApp & Marketplaces
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

$box_title = get_query_var('order_box_title', 'Siap Meningkatkan Kualitas dan Efisiensi Laundry Anda?');
$box_subtitle = get_query_var('order_box_subtitle', 'Pesan paket bahan deterjen DETERMAT atau konsultasikan kebutuhan paket usaha laundry Anda sekarang juga bersama konsultan Orchid Brand.');
$wa_msg = get_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya tertarik memesan paket bahan deterjen DETERMAT / konsultasi kemitraan laundry.');
$wa_url = peluanglaundry_get_wa_link($wa_msg);
$toped_url = get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat');
$shopee_url = get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755');
?>

<div class="pl-order-box-wrap">
  <div class="pl-order-box">
    <div class="pl-order-badge">
      <span>LAYANAN PEMESANAN RESMI</span>
    </div>

    <h2 class="pl-order-title"><?php echo esc_html($box_title); ?></h2>
    <p class="pl-order-desc"><?php echo esc_html($box_subtitle); ?></p>

    <!-- Marketplace & WhatsApp Grid -->
    <div class="pl-order-channels">
      <!-- WhatsApp Direct -->
      <a href="<?php echo esc_url($wa_url); ?>" target="_blank" rel="noopener" class="pl-order-channel-btn pl-channel-wa">
        <div class="pl-channel-icon">
          <?php peluanglaundry_icon('whatsapp', '', 28); ?>
        </div>
        <div class="pl-channel-info">
          <span class="pl-channel-sub">RESPON CEPAT (FAST TRACK)</span>
          <strong class="pl-channel-main">Chat WhatsApp Sales</strong>
        </div>
      </a>

      <!-- Tokopedia Official -->
      <a href="<?php echo esc_url($toped_url); ?>" target="_blank" rel="noopener" class="pl-order-channel-btn pl-channel-toped">
        <div class="pl-channel-icon">
          <?php peluanglaundry_icon('shopping-cart', '', 26); ?>
        </div>
        <div class="pl-channel-info">
          <span class="pl-channel-sub">GRATIS ONGKIR &amp; CICILAN</span>
          <strong class="pl-channel-main">Beli di Tokopedia</strong>
        </div>
      </a>

      <!-- Shopee Official -->
      <a href="<?php echo esc_url($shopee_url); ?>" target="_blank" rel="noopener" class="pl-order-channel-btn pl-channel-shopee">
        <div class="pl-channel-icon">
          <?php peluanglaundry_icon('shopping-bag', '', 26); ?>
        </div>
        <div class="pl-channel-info">
          <span class="pl-channel-sub">PROMO CASHBACK &amp; VOUCHER</span>
          <strong class="pl-channel-main">Beli di Shopee</strong>
        </div>
      </a>
    </div>

    <!-- Assurance Badges -->
    <div class="pl-order-assurances">
      <div class="pl-assurance-item">
        <?php peluanglaundry_icon('shield-check', 'pl-assurance-icon', 18); ?>
        <span>100% Produk Original PT Indotech</span>
      </div>
      <div class="pl-assurance-item">
        <?php peluanglaundry_icon('truck', 'pl-assurance-icon', 18); ?>
        <span>Pengiriman Ekspedisi Cepat se-Indonesia</span>
      </div>
      <div class="pl-assurance-item">
        <?php peluanglaundry_icon('chat', 'pl-assurance-icon', 18); ?>
        <span>Gratis Konsultasi Racik &amp; SOP Laundry</span>
      </div>
    </div>
  </div>
</div>
