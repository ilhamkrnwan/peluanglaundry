<?php
/**
 * Template Name: Halaman Kontak Perusahaan (Contact Us)
 * Description: Template resmi kontak kantor pusat & pabrik PT Indotech Berkah Abadi
 *
 * @package PeluangLaundry
 */

get_header();
?>

<!-- Contact Hero Section -->
<section class="pl-page-hero">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill">
        <?php peluanglaundry_icon('phone', 'pl-icon-inline', 14); ?>
        <span>PUSAT INFORMASI &amp; KONSULTASI RESMI</span>
      </div>
      <h1 class="pl-page-title">Hubungi PT Indotech Berkah Abadi</h1>
      <p class="pl-page-subtitle">
        Saluran komunikasi resmi kantor pusat, pabrik formulasi chemical, dan tim konsultan kemitraan laundry Orchid Brand di Yogyakarta.
      </p>
    </div>
  </div>
</section>

<!-- Contact Cards Grid -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-contact-grid">
      <!-- Card 1: Hotline WhatsApp (Primary Conversion - Highlight) -->
      <div class="pl-contact-card pl-contact-card-highlight">
        <div class="pl-contact-card-header">
          <div class="pl-contact-icon-wrap pl-icon-wa">
            <?php peluanglaundry_icon('whatsapp', 'pl-contact-svg', 26); ?>
          </div>
          <div class="pl-contact-header-info">
            <span class="pl-badge pl-badge-primary">ONLINE &bull; RESPON CEPAT</span>
            <h3>Hotline WhatsApp Sales</h3>
          </div>
        </div>
        <p class="pl-contact-text">
          Konsultasi langsung seputar rincian paket usaha laundry pemula, pemesanan bahan kimia curah DETERMAT, dan peluang keagenan wilayah bersama tim konsultan resmi Orchid Brand.
        </p>
        <div class="pl-contact-hotline-box">
          <div class="pl-contact-hotline">
            0822-1584-0088
          </div>
          <span class="pl-contact-hotline-sub">Aktif Setiap Hari</span>
        </div>
        <div class="pl-contact-card-action">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi produk dan paket usaha laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary pl-btn-block">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Chat Langsung via WhatsApp</span>
          </a>
        </div>
      </div>

      <!-- Card 2: Kantor Pusat & Warehouse -->
      <div class="pl-contact-card">
        <div class="pl-contact-card-header">
          <div class="pl-contact-icon-wrap">
            <?php peluanglaundry_icon('map-pin', 'pl-contact-svg', 26); ?>
          </div>
          <div class="pl-contact-header-info">
            <span class="pl-badge pl-badge-neutral">KANTOR PUSAT &amp; GUDANG</span>
            <h3>Kantor Pusat &amp; Warehouse</h3>
          </div>
        </div>
        <p class="pl-contact-text">
          <strong>PT Indotech Berkah Abadi</strong><br>
          Jl. Palagan Tentara Pelajar, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581, Indonesia.
        </p>
        <div class="pl-contact-visit-note">
          <?php peluanglaundry_icon('check-circle', '', 15); ?>
          <span>Menerima kunjungan calon mitra usaha, konsultasi tatap muka &amp; demo produk.</span>
        </div>
        <div class="pl-contact-card-action">
          <a href="https://maps.google.com/?q=PT+Indotech+Berkah+Abadi+Palagan+Tentara+Pelajar+Sleman" target="_blank" rel="noopener" class="pl-btn pl-btn-outline pl-btn-block">
            <?php peluanglaundry_icon('navigation', 'pl-btn-icon', 16); ?>
            <span>Petunjuk Arah Google Maps</span>
          </a>
        </div>
      </div>

      <!-- Card 3: Jam Layanan & Operasional -->
      <div class="pl-contact-card">
        <div class="pl-contact-card-header">
          <div class="pl-contact-icon-wrap">
            <?php peluanglaundry_icon('clock', 'pl-contact-svg', 26); ?>
          </div>
          <div class="pl-contact-header-info">
            <span class="pl-badge pl-badge-info">JADWAL LAYANAN RESMI</span>
            <h3>Jam Layanan &amp; Operasional</h3>
          </div>
        </div>
        <ul class="pl-contact-hours">
          <li>
            <span class="pl-day">Senin &ndash; Jumat</span>
            <span class="pl-time">08.00 &ndash; 17.00 WIB</span>
          </li>
          <li>
            <span class="pl-day">Sabtu</span>
            <span class="pl-time">08.00 &ndash; 15.00 WIB</span>
          </li>
          <li>
            <span class="pl-day">Minggu &amp; Libur</span>
            <span class="pl-time-badge">Layanan Chat Online Tetap Buka</span>
          </li>
        </ul>
        <span class="pl-contact-note">Pengiriman kargo deterjen cair dan paket mesin diproses pada hari kerja (Senin &ndash; Sabtu).</span>
      </div>

      <!-- Card 4: Official Marketplace -->
      <div class="pl-contact-card">
        <div class="pl-contact-card-header">
          <div class="pl-contact-icon-wrap">
            <?php peluanglaundry_icon('shopping-bag', 'pl-contact-svg', 26); ?>
          </div>
          <div class="pl-contact-header-info">
            <span class="pl-badge pl-badge-accent">OFFICIAL STORE</span>
            <h3>Toko Online Resmi</h3>
          </div>
        </div>
        <p class="pl-contact-text">
          Belanja produk DETERMAT &amp; bibit parfum bergaransi aman lewat official store e-commerce kami:
        </p>
        <div class="pl-contact-store-grid">
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat')); ?>" target="_blank" rel="noopener" class="pl-store-pill pl-store-tokopedia">
            <?php peluanglaundry_icon('shopping-cart', '', 18); ?>
            <div>
              <strong>Tokopedia</strong>
              <small>Official Store</small>
            </div>
          </a>
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755')); ?>" target="_blank" rel="noopener" class="pl-store-pill pl-store-shopee">
            <?php peluanglaundry_icon('shopping-bag', '', 18); ?>
            <div>
              <strong>Shopee</strong>
              <small>Official Store</small>
            </div>
          </a>
        </div>
        <span class="pl-contact-note">Tersedia garansi transaksi aman, promo gratis ongkir, dan opsi pembayaran COD.</span>
      </div>
    </div>
  </div>
</section>

<!-- Direct Consultation Topic Selector -->
<section class="pl-section pl-section-alt">
  <div class="pl-container">
    <div class="pl-section-head">
      <div class="pl-section-badge">
        <?php peluanglaundry_icon('message-square', 'pl-icon-inline', 14); ?>
        <span>PILIH KEBUTUHAN KONSULTASI</span>
      </div>
      <h2 class="pl-section-title">Konsultasi Terarah Berdasarkan Kebutuhan Anda</h2>
      <p class="pl-section-desc">Pilih topik konsultasi di bawah untuk langsung terhubung dengan divisi ahli yang tepat di PT Indotech Berkah Abadi.</p>
    </div>

    <div class="pl-consult-grid">
      <!-- Option 1 -->
      <div class="pl-consult-box">
        <div class="pl-consult-head">
          <div class="pl-consult-icon">
            <?php peluanglaundry_icon('package', '', 22); ?>
          </div>
          <div>
            <h4>Paket Usaha Laundry Kiloan</h4>
            <span class="pl-consult-sub">Pemula, Standar, &amp; Komersial</span>
          </div>
        </div>
        <p>Bimbingan memilih paket mesin cuci komersial, instalasi perlengkapan, dan estimasi modal untuk buka laundry rumahan atau ruko komersial tanpa royalti fee.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Konsultan, saya ingin tanya rincian Paket Usaha Laundry Kiloan untuk pemula.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary pl-btn-block">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 16); ?>
          <span>Konsultasi Paket Usaha</span>
        </a>
      </div>

      <!-- Option 2 -->
      <div class="pl-consult-box">
        <div class="pl-consult-head">
          <div class="pl-consult-icon">
            <?php peluanglaundry_icon('droplet', '', 22); ?>
          </div>
          <div>
            <h4>Order Chemical &amp; Deterjen</h4>
            <span class="pl-consult-sub">DETERMAT, Parfum, Softener</span>
          </div>
        </div>
        <p>Pemesanan bibit DETERMAT konsentrat hemat ongkir (1 kg diolah jadi 20 L), parfum laundry grade A+, softener, pencerah pakaian, dan sabun cuci piring curah.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Chemical, saya ingin pesan bahan chemical laundry Orchid Brand / DETERMAT.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary pl-btn-block">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 16); ?>
          <span>Order Bahan Chemical</span>
        </a>
      </div>

      <!-- Option 3 -->
      <div class="pl-consult-box">
        <div class="pl-consult-head">
          <div class="pl-consult-icon">
            <?php peluanglaundry_icon('building', '', 22); ?>
          </div>
          <div>
            <h4>Keagenan &amp; Depo Sabun Curah</h4>
            <span class="pl-consult-sub">Distributor &amp; Reseller Daerah</span>
          </div>
        </div>
        <p>Peluang menjadi master distributor bahan kimia dan membuka depo isi ulang sabun di kota Anda dengan margin keuntungan tinggi serta proteksi wilayah.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Manajemen, saya tertarik mengajukan kemitraan Master Agen / Depo Sabun Curah di wilayah saya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary pl-btn-block">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 16); ?>
          <span>Konsultasi Keagenan</span>
        </a>
      </div>

      <!-- Option 4 -->
      <div class="pl-consult-box">
        <div class="pl-consult-head">
          <div class="pl-consult-icon">
            <?php peluanglaundry_icon('graduation', '', 22); ?>
          </div>
          <div>
            <h4>Pelatihan &amp; Training Formulasi</h4>
            <span class="pl-consult-sub">Teori &amp; Praktik Laboratorium</span>
          </div>
        </div>
        <p>Kelas kursus teknis formulasi pembuatan deterjen cair, softener, dan manajemen laundry higienis bersama praktisi kimia kebersihan PT Indotech Berkah Abadi.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Edukasi, saya ingin info jadwal dan materi Pelatihan Pembuatan Chemical Laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary pl-btn-block">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 16); ?>
          <span>Daftar Pelatihan</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Office Visit Card -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-office-guide-card">
      <div class="pl-guide-content">
        <div class="pl-section-badge">
          <?php peluanglaundry_icon('building', 'pl-icon-inline', 14); ?>
          <span>KUNJUNGAN KANTOR &amp; GUDANG</span>
        </div>
        <h2>Rencana Berkunjung ke Kantor Kami di Yogyakarta?</h2>
        <p>
          Kami menyambut dengan hangat calon pengusaha laundry, distributor, dan pemilik hotel/rumah sakit yang ingin berdiskusi langsung, melihat demo pencampuran deterjen DETERMAT, atau mencoba mesin cuci komersial. Harap membuat janji temu terlebih dahulu agar tim kami dapat melayani Anda dengan maksimal.
        </p>
        <div style="margin-top:20px;">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin PT Indotech Berkah Abadi, saya berencana berkunjung ke kantor di Sleman Yogyakarta pada tanggal: ')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
            <?php peluanglaundry_icon('calendar', 'pl-btn-icon', 16); ?>
            <span>Jadwalkan Janji Temu Kunjungan</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
