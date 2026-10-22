<?php
/**
 * Landing Page - Benefits Grid Component (10 Keunggulan Formula & Kemitraan)
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

$benefits = array(
    array(
        'icon'  => 'package',
        'title' => 'Formula Konsentrat Cerdas',
        'desc'  => 'Cukup 1 kg paket bahan deterjen diolah mudah menggunakan air bersih biasa, langsung menjadi 15 hingga 20 liter sabun cair kental wangi.',
    ),
    array(
        'icon'  => 'truck',
        'title' => 'Hemat Ongkir Hingga 85%',
        'desc'  => 'Tidak perlu membayar ongkos kirim berat puluhan liter air. Cocok untuk pengusaha laundry di luar pulau Jawa dan wilayah pelosok.',
    ),
    array(
        'icon'  => 'leaf',
        'title' => 'Ramah Lingkungan (Green Cleaning)',
        'desc'  => 'Bahan aktif surfaktan nabati turunan kelapa sawit yang mudah terurai hayati (biodegradable) dan aman bagi tanah & air resapan.',
    ),
    array(
        'icon'  => 'shield-check',
        'title' => 'Low Suds (Busa Rendah)',
        'desc'  => 'Khusus didesain melindungi mesin cuci komersial & rumah tangga agar bearing tidak jebol dan modul elektronik bebas korslet.',
    ),
    array(
        'icon'  => 'sparkles',
        'title' => 'Formula Anti-Apek & Bakterisida',
        'desc'  => 'Pakaian tetap harum segar dan higienis meskipun dijemur dalam ruangan saat musim hujan berkat formula antibakteri aktif.',
    ),
    array(
        'icon'  => 'trending-up',
        'title' => '100% Bebas Royalti',
        'desc'  => 'Seluruh profit operasional laundry Anda adalah hak penuh Anda. Tidak ada franchise fee bulanan atau pungutan seumur hidup.',
    ),
    array(
        'icon'  => 'building',
        'title' => 'Badan Usaha Resmi (PT)',
        'desc'  => 'Diproduksi dan didistribusikan langsung oleh PT Indotech Berkah Abadi dengan legalitas izin usaha resmi dan NPWP terdaftar.',
    ),
    array(
        'icon'  => 'graduation',
        'title' => 'Bimbingan Formulator Ahli',
        'desc'  => 'Disediakan video panduan pembuatan, SOP pencucian pakaian noda berat, dan konsultasi teknis langsung via WhatsApp.',
    ),
    array(
        'icon'  => 'award',
        'title' => 'Aroma Tahan Lama Grade A+',
        'desc'  => 'Bibit parfum laundry kualitas premium dengan teknologi fiksatif khusus agar aroma menempel awet di serat kain hingga 30 hari.',
    ),
    array(
        'icon'  => 'check-circle',
        'title' => 'Jangkauan Ekspedisi Nasional',
        'desc'  => 'Bekerjasama dengan puluhan kargo darat, laut, dan udara untuk memastikan paket chemical Anda sampai dengan aman dan cepat.',
    ),
);
?>

<div class="pl-benefits-wrap">
  <div class="pl-benefits-header">
    <h2 class="pl-benefits-title">10 Alasan Memilih Formula Chemical Orchid Brand</h2>
    <p class="pl-benefits-subtitle">
      Kombinasi sains formulasi deterjen modern dan model kemitraan yang transparan untuk mendongkrak margin profit bisnis Anda.
    </p>
  </div>

  <div class="pl-benefits-grid">
    <?php foreach ($benefits as $index => $item) : ?>
      <div class="pl-benefit-card">
        <div class="pl-benefit-top">
          <div class="pl-benefit-icon-wrap">
            <?php peluanglaundry_icon($item['icon'], 'pl-benefit-icon', 22); ?>
          </div>
          <span class="pl-benefit-num">#<?php echo esc_html($index + 1); ?></span>
        </div>
        <h3 class="pl-benefit-name"><?php echo esc_html($item['title']); ?></h3>
        <p class="pl-benefit-desc"><?php echo esc_html($item['desc']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</div>
