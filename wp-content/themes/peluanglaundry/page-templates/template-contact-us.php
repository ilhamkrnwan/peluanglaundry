<?php
/**
 * Template Name: Halaman Kontak Perusahaan (Contact Us)
 * Description: Template resmi kontak kantor pusat, showroom, dan pabrik PT Indotech Berkah Abadi.
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<!-- Contact Hero Section -->
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill pl-pill-green">
        <span>Pusat Informasi &amp; Konsultasi Resmi</span>
      </div>
      <h1 class="pl-page-title">
        Hubungi Tim
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em">PeluangLaundry</span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h1>
      <p class="pl-page-subtitle">
        Saluran komunikasi resmi kantor pusat, pabrik formulasi chemical, dan tim konsultan kemitraan laundry Orchid Brand di Yogyakarta.
      </p>
    </div>
  </div>
</section>

<!-- Contact Section: Minimalist, Clean & Open Layout (Bukan Kartu-kartu Terpisah) -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-contact-clean-layout">
      <!-- Left Column: Direct Consultation & Operating Hours -->
      <div class="pl-contact-clean-col">
        <h2 class="pl-contact-clean-title">Hotline WhatsApp Sales &amp; Konsultasi Bisnis</h2>
        <p class="pl-contact-clean-desc">
          Konsultasi langsung seputar rincian paket usaha laundry kiloan pemula, pemesanan bahan konsentrat DETERMAT hemat ongkir, dan peluang keagenan wilayah bersama tim konsultan resmi Orchid Brand.
        </p>

        <div class="pl-contact-clean-hotline">
          <span class="pl-hotline-label">Nomor WhatsApp Resmi:</span>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi produk dan paket usaha laundry.')); ?>" target="_blank" rel="noopener" class="pl-hotline-number">
            0822-1584-0088
          </a>
        </div>

        <div class="pl-contact-clean-actions">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi produk dan paket usaha laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Chat Langsung via WhatsApp</span>
          </a>
        </div>

        <div class="pl-contact-clean-schedule">
          <h4 class="pl-schedule-heading">Jam Layanan &amp; Operasional</h4>
          <ul class="pl-clean-hours-list">
            <li>
              <span>Senin &ndash; Jumat</span>
              <strong>08.00 &ndash; 17.00 WIB</strong>
            </li>
            <li>
              <span>Sabtu</span>
              <strong>08.00 &ndash; 15.00 WIB</strong>
            </li>
            <li>
              <span>Minggu &amp; Tanggal Merah</span>
              <span class="pl-badge pl-badge-primary">Layanan Chat Online Tetap Aktif</span>
            </li>
          </ul>
          <p class="pl-schedule-note">Pengiriman kargo deterjen dan paket mesin cuci diproses setiap hari kerja (Senin &ndash; Sabtu).</p>
        </div>
      </div>

      <!-- Right Column: Office Address, Warehouse & Official Marketplace -->
      <div class="pl-contact-clean-col pl-contact-clean-side">
        <div class="pl-contact-clean-block">
          <h3 class="pl-clean-block-title">PT Indotech Berkah Abadi</h3>
          <p class="pl-clean-address">
            Jl. Palagan Tentara Pelajar, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581, Indonesia.
          </p>
          <p class="pl-clean-visit-desc">
            Menerima kunjungan calon mitra usaha untuk konsultasi tatap muka, diskusi bisnis, dan demo pembuatan chemical laundry ramah lingkungan (Senin &ndash; Sabtu).
          </p>
          <a href="https://maps.google.com/?q=PT+Indotech+Berkah+Abadi+Palagan+Tentara+Pelajar+Sleman" target="_blank" rel="noopener" class="pl-clean-link">
            <?php peluanglaundry_icon('navigation', 'pl-icon-inline', 15); ?>
            <span>Petunjuk Arah Google Maps &rarr;</span>
          </a>
        </div>

        <div class="pl-contact-clean-divider"></div>

        <div class="pl-contact-clean-block">
          <h3 class="pl-clean-block-title">Official E-Commerce Store</h3>
          <p class="pl-clean-marketplace-desc">
            Belanja bibit deterjen DETERMAT &amp; bibit parfum bergaransi aman dengan proteksi rekening bersama:
          </p>
          <div class="pl-clean-stores">
            <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat')); ?>" target="_blank" rel="noopener" class="pl-clean-store-btn pl-store-tokopedia">
              <?php peluanglaundry_icon('shopping-cart', '', 16); ?>
              <span>Tokopedia Official Store &rarr;</span>
            </a>
            <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755')); ?>" target="_blank" rel="noopener" class="pl-clean-store-btn pl-store-shopee">
              <?php peluanglaundry_icon('shopping-bag', '', 16); ?>
              <span>Shopee Official Store &rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Direct Consultation Topic Selector: Minimalist Clean List (Bukan Kotak Card Berjajar) -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <div class="pl-section-head">
      <h2 class="pl-section-title">Konsultasi Terarah Berdasarkan Kebutuhan Anda</h2>
      <p class="pl-section-desc">Pilih kebutuhan Anda di bawah untuk langsung terhubung ke konsultan divisi terkait via WhatsApp resmi PT Indotech Berkah Abadi.</p>
    </div>

    <div class="pl-clean-topic-list">
      <!-- Item 1 -->
      <div class="pl-clean-topic-item">
        <div class="pl-topic-icon">
          <?php peluanglaundry_icon('package', '', 24); ?>
        </div>
        <div class="pl-topic-text">
          <h4>Paket Usaha Laundry Kiloan</h4>
          <p>Bimbingan memilih paket mesin komersial, instalasi perlengkapan, dan estimasi modal buka laundry tanpa royalti fee.</p>
        </div>
        <div class="pl-topic-action">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Konsultan, saya ingin tanya rincian Paket Usaha Laundry Kiloan untuk pemula.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-outline">
            <span>Konsultasi Paket &rarr;</span>
          </a>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="pl-clean-topic-item">
        <div class="pl-topic-icon">
          <?php peluanglaundry_icon('droplet', '', 24); ?>
        </div>
        <div class="pl-topic-text">
          <h4>Order Chemical &amp; Deterjen Konsentrat</h4>
          <p>Pemesanan bibit DETERMAT 1:20 hemat ongkir, parfum laundry grade A+, softener, dan sabun cuci piring curah.</p>
        </div>
        <div class="pl-topic-action">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Chemical, saya ingin pesan bahan chemical laundry Orchid Brand / DETERMAT.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-outline">
            <span>Order Bahan Chemical &rarr;</span>
          </a>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="pl-clean-topic-item">
        <div class="pl-topic-icon">
          <?php peluanglaundry_icon('building', '', 24); ?>
        </div>
        <div class="pl-topic-text">
          <h4>Keagenan &amp; Depo Sabun Curah</h4>
          <p>Peluang menjadi master distributor kimia pembersih dan depo isi ulang sabun di kota Anda dengan margin tinggi.</p>
        </div>
        <div class="pl-topic-action">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Manajemen, saya tertarik mengajukan kemitraan Master Agen / Depo Sabun Curah di wilayah saya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-outline">
            <span>Info Keagenan &rarr;</span>
          </a>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="pl-clean-topic-item">
        <div class="pl-topic-icon">
          <?php peluanglaundry_icon('graduation', '', 24); ?>
        </div>
        <div class="pl-topic-text">
          <h4>Pelatihan &amp; Training Formulasi</h4>
          <p>Kelas kursus teknis formulasi pembuatan deterjen cair, softener, dan manajemen laundry higienis bersama praktisi kimia.</p>
        </div>
        <div class="pl-topic-action">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Edukasi, saya ingin info jadwal dan materi Pelatihan Pembuatan Chemical Laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-outline">
            <span>Daftar Pelatihan &rarr;</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Office Visit Section: Clean Layout (Bukan Kotak Card Berbayang) -->
<section class="pl-section">
  <div class="pl-container pl-container-narrow">
    <div class="pl-office-clean-wrap">
      <h2>Rencana Berkunjung ke Kantor Kami di Yogyakarta?</h2>
      <p>
        Kami menyambut dengan hangat calon pengusaha laundry, distributor, dan pemilik hotel/rumah sakit yang ingin berdiskusi langsung, melihat demo pencampuran deterjen DETERMAT, atau mencoba mesin cuci komersial. Harap membuat janji temu terlebih dahulu agar tim kami dapat melayani Anda dengan maksimal.
      </p>
      <div style="margin-top:24px;">
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin PT Indotech Berkah Abadi, saya berencana berkunjung ke kantor di Sleman Yogyakarta pada tanggal: ')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
          <?php peluanglaundry_icon('calendar', 'pl-btn-icon', 16); ?>
          <span>Jadwalkan Janji Temu Kunjungan</span>
        </a>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
