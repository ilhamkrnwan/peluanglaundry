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
      <!-- Card 1: Kantor Pusat -->
      <div class="pl-contact-card">
        <div class="pl-contact-icon-wrap">
          <?php peluanglaundry_icon('map-pin', 'pl-contact-svg', 26); ?>
        </div>
        <h3>Kantor Pusat &amp; Warehouse</h3>
        <p class="pl-contact-text">
          <strong>PT Indotech Berkah Abadi</strong><br>
          Jl. Palagan Tentara Pelajar, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581, Indonesia.
        </p>
        <span class="pl-contact-note">Menerima kunjungan calon mitra usaha &amp; demo produk.</span>
      </div>

      <!-- Card 2: Hotline WhatsApp -->
      <div class="pl-contact-card pl-contact-card-highlight">
        <div class="pl-contact-icon-wrap">
          <?php peluanglaundry_icon('whatsapp', 'pl-contact-svg', 26); ?>
        </div>
        <h3>Hotline WhatsApp Sales</h3>
        <p class="pl-contact-text">
          Konsultasi cepat seputar paket usaha laundry, pemesanan chemical curah, dan keagenan wilayah:
        </p>
        <div class="pl-contact-hotline">
          0822-1584-0088
        </div>
        <div style="margin-top:16px;">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi produk dan paket laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%;">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Chat Langsung via WhatsApp</span>
          </a>
        </div>
      </div>

      <!-- Card 3: Jam Kerja -->
      <div class="pl-contact-card">
        <div class="pl-contact-icon-wrap">
          <?php peluanglaundry_icon('clock', 'pl-contact-svg', 26); ?>
        </div>
        <h3>Jam Layanan &amp; Operasional</h3>
        <ul class="pl-contact-hours">
          <li>
            <span class="pl-day">Senin – Jumat</span>
            <span class="pl-time">08.00 – 17.00 WIB</span>
          </li>
          <li>
            <span class="pl-day">Sabtu</span>
            <span class="pl-time">08.00 – 15.00 WIB</span>
          </li>
          <li>
            <span class="pl-day">Minggu &amp; Libur</span>
            <span class="pl-time">Layanan Chat Online</span>
          </li>
        </ul>
      </div>

      <!-- Card 4: Official Marketplace -->
      <div class="pl-contact-card">
        <div class="pl-contact-icon-wrap">
          <?php peluanglaundry_icon('shopping-bag', 'pl-contact-svg', 26); ?>
        </div>
        <h3>Toko Online Resmi</h3>
        <p class="pl-contact-text">
          Belanja produk DETERMAT &amp; bibit parfum bergaransi aman lewat official store e-commerce kami:
        </p>
        <div class="pl-contact-store-btns">
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat')); ?>" target="_blank" rel="noopener" class="pl-btn-store pl-btn-store-tokopedia" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('shopping-cart', '', 16); ?>
            <span>Tokopedia Official Store</span>
          </a>
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755')); ?>" target="_blank" rel="noopener" class="pl-btn-store pl-btn-store-shopee" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('shopping-bag', '', 16); ?>
            <span>Shopee Official Store</span>
          </a>
        </div>
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
          <?php peluanglaundry_icon('package', 'pl-icon-inline', 22); ?>
          <h4>Paket Usaha Laundry Kiloan</h4>
        </div>
        <p>Bimbingan memilih mesin, perlengkapan, dan estimasi modal untuk buka laundry rumahan atau komersial.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Konsultan, saya ingin tanya rincian Paket Usaha Laundry Kiloan untuk pemula.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%;">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 16); ?>
          <span>Konsultasi Paket Usaha</span>
        </a>
      </div>

      <!-- Option 2 -->
      <div class="pl-consult-box">
        <div class="pl-consult-head">
          <?php peluanglaundry_icon('droplet', 'pl-icon-inline', 22); ?>
          <h4>Order Chemical &amp; Deterjen</h4>
        </div>
        <p>Pemesanan bibit DETERMAT, parfum laundry 14 hari, softener, pencerah pakaian, dan sabun cuci piring grosir.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Chemical, saya ingin pesan bahan chemical laundry Orchid Brand / DETERMAT.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%;">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 16); ?>
          <span>Order Bahan Chemical</span>
        </a>
      </div>

      <!-- Option 3 -->
      <div class="pl-consult-box">
        <div class="pl-consult-head">
          <?php peluanglaundry_icon('building', 'pl-icon-inline', 22); ?>
          <h4>Keagenan &amp; Depo Sabun Curah</h4>
        </div>
        <p>Peluang menjadi master distributor bahan kimia dan depo isi ulang sabun di kota Anda dengan margin tinggi.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Manajemen, saya tertarik mengajukan kemitraan Master Agen / Depo Sabun Curah di wilayah saya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%;">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 16); ?>
          <span>Konsultasi Keagenan</span>
        </a>
      </div>

      <!-- Option 4 -->
      <div class="pl-consult-box">
        <div class="pl-consult-head">
          <?php peluanglaundry_icon('graduation', 'pl-icon-inline', 22); ?>
          <h4>Pelatihan &amp; Training Formulasi</h4>
        </div>
        <p>Kelas kursus teknis formulasi pembuatan deterjen cair, softener, dan manajemen laundry higienis.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Edukasi, saya ingin info jadwal dan materi Pelatihan Pembuatan Chemical Laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%;">
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
