<?php
/**
 * Template Name: Paket Kemitraan Usaha Laundry (BO Tanpa Royalti)
 * Description: Template landing page khusus penawaran kemitraan buka usaha laundry kiloan siap pakai tanpa royalti.
 *
 * @package PeluangLaundry
 */

get_header();
?>

<!-- Package Hero -->
<section class="pl-page-hero">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill">
        <?php peluanglaundry_icon('package', 'pl-icon-inline', 14); ?>
        <span>KEMITRAAN USAHA LAUNDRY 100% TANPA ROYALTI</span>
      </div>
      <h1 class="pl-page-title">
        Paket Usaha Laundry Kiloan Lengkap Siap Buka
      </h1>
      <p class="pl-page-subtitle">
        Solusi pendirian bisnis laundry menguntungkan dengan sistem beli putus: mesin bergaransi resmi, suplai chemical langsung dari produsen, dan pelatihan SOP operasional lengkap.
      </p>

      <div class="pl-hero-actions" style="justify-content:center; margin-top:24px;">
        <a href="#pilihan-paket" class="pl-btn pl-btn-primary">
          <?php peluanglaundry_icon('package', '', 18); ?>
          <span>Pilih Paket Usaha</span>
        </a>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya tertarik konsultasi paket buka usaha laundry kiloan.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Konsultasi Syarat &amp; Lokasi</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Value Highlights Bar -->
<section class="pl-section pl-section-light" style="padding:32px 0;">
  <div class="pl-container">
    <div class="pl-stats-bar">
      <div class="pl-stat-item">
        <div class="pl-stat-num">0%</div>
        <div class="pl-stat-label">Royalty Fee Seumur Hidup</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">100%</div>
        <div class="pl-stat-label">Keuntungan Milik Anda Penuh</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">1.200+</div>
        <div class="pl-stat-label">Mitra Tersebar di Indonesia</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">4-6 Bln</div>
        <div class="pl-stat-label">Estimasi Balik Modal (ROI)</div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Packages Section -->
<section class="pl-section" id="pilihan-paket">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">PILIHAN INVESTASI</span>
      <h2 class="pl-section-title">Pilihan Paket Kemitraan Laundry Kiloan</h2>
      <p class="pl-section-desc">Pilih paket yang paling pas dengan budget, luas tempat usaha, dan target pasar di lokasi Anda.</p>
    </div>

    <div class="pl-pricing-grid">
      <!-- Tier 1: Paket Pemula / Perintis -->
      <div class="pl-pricing-card">
        <div class="pl-pricing-top">
          <span class="pl-pricing-pill">PEMULA</span>
          <h3 class="pl-pricing-name">Paket Perintis Kiloan</h3>
          <div class="pl-pricing-cost">
            <span class="pl-price-amount">Rp 14.500.000</span>
          </div>
          <p class="pl-pricing-summary">Cocok untuk pemula yang ingin memulai usaha laundry rumahan dengan modal terjangkau.</p>
        </div>

        <ul class="pl-pricing-features">
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> 1 Unit Mesin Cuci Front Load 8 Kg</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> 1 Unit Pengering Konversi Gas 10.5 Kg</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> 1 Unit Setrika Uap Boiler 5 Liter</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Starter Pack DETERMAT (Bahan 40L Sabun)</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> 5 Liter Parfum Laundry Grade A+</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Timbangan Digital 30 Kg &amp; Tagging Gun</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> SOP Operasional &amp; Bimbingan Online</li>
        </ul>

        <div class="pl-pricing-footer">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik dengan Paket Perintis Kiloan Rp 14.500.000. Mohon kirim rincian spesifikasinya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Konsultasi Paket Perintis</span>
          </a>
        </div>
      </div>

      <!-- Tier 2: Paket Standar Komersial (POPULAR) -->
      <div class="pl-pricing-card pl-pricing-popular">
        <div class="pl-badge-featured">PALING POPULER &bull; REKOMENDASI</div>
        <div class="pl-pricing-top">
          <span class="pl-pricing-pill">KOMERSIAL</span>
          <h3 class="pl-pricing-name">Paket Sukses Komersial</h3>
          <div class="pl-pricing-cost">
            <span class="pl-price-amount">Rp 28.500.000</span>
          </div>
          <p class="pl-pricing-summary">Kapasitas harian 100-150 kg pakaian dengan mesin komersial tahan pakai seharian penuh.</p>
        </div>

        <ul class="pl-pricing-features">
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> <strong>2 Unit Mesin Cuci Front Load Heavy Duty</strong></li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> <strong>2 Unit Pengering Gas Kapasitas Besar</strong></li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> 1 Unit Setrika Uap Boiler 10 Liter + 2 Kepala Setrika</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Starter Pack Chemical Lengkap (Sabun 80L, Softener, Antinoda)</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> 10 Liter Bibit Parfum Laundry Varian Best Seller</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Keranjang Laundry (10 Pcs) &amp; Meja Kasir Standar</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Software Kasir Laundry POS Android</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Training Karyawan + Desain Spanduk &amp; Brosur Promosi</li>
        </ul>

        <div class="pl-pricing-footer">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik Paket Sukses Komersial Rp 28.500.000. Mohon informasi ketersediaan unit dan pengiriman.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Pesan Paket Komersial</span>
          </a>
        </div>
      </div>

      <!-- Tier 3: Paket Express / Koin Self Service -->
      <div class="pl-pricing-card">
        <div class="pl-pricing-top">
          <span class="pl-pricing-pill">EXPRESS &amp; KOIN</span>
          <h3 class="pl-pricing-name">Paket Laundry Express</h3>
          <div class="pl-pricing-cost">
            <span class="pl-price-amount">Rp 48.000.000</span>
          </div>
          <p class="pl-pricing-summary">Konsep modern cuci-kering cepat 1-2 jam siap pakai. Minim ketergantungan tenaga kerja.</p>
        </div>

        <ul class="pl-pricing-features">
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> 2 Set Mesin Cuci &amp; Pengering Stack (Tumpuk)</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Sistem Timer Digital / Koin Otomatis</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Instalasi Pipa Air &amp; Pembuangan Gas Standar</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Chemical Pasokan Besar (Cukup untuk 500 Cuci Pertama)</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Media Promosi Toko &amp; Neon Box Depan</li>
          <li><?php peluanglaundry_icon('check-circle', 'pl-check-icon', 16); ?> Pelatihan Manajemen Operasional &amp; Marketing Lokal</li>
        </ul>

        <div class="pl-pricing-footer">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi Paket Laundry Express Rp 48.000.000.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Konsultasi Paket Express</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hero Comparison Component -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php get_template_part('template-parts/landing/hero', 'comparison'); ?>
  </div>
</section>

<!-- 10 Keunggulan Grid Component -->
<section class="pl-section">
  <div class="pl-container">
    <?php get_template_part('template-parts/landing/benefits', 'grid'); ?>
  </div>
</section>

<!-- Order Box Component -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php
    set_query_var('order_box_title', 'Konsultasikan Lokasi Usaha &amp; Kebutuhan Paket Anda');
    set_query_var('order_box_subtitle', 'Hubungi tim ahli PT Indotech Berkah Abadi untuk menghitung simulasi modal, potensi omset di kota Anda, serta jadwal pengiriman mesin.');
    set_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya ingin konsultasi rencana pembukaan usaha laundry kiloan di kota saya.');
    get_template_part('template-parts/landing/order', 'box');
    ?>
  </div>
</section>

<?php get_footer(); ?>
