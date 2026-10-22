<?php
/**
 * Template Name: Paket Kemitraan Usaha Laundry (BO Tanpa Royalti)
 * Description: Template landing page khusus penawaran kemitraan buka usaha laundry kiloan siap pakai tanpa royalti fee.
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<!-- Package Hero -->
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill pl-pill-blue">
        <span>Kemitraan Usaha Laundry 100% Tanpa Royalti</span>
      </div>
      <h1 class="pl-page-title">
        Paket Usaha Laundry Kiloan
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em">Siap Buka</span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h1>
      <p class="pl-page-subtitle">
        Solusi pendirian bisnis laundry menguntungkan dengan sistem beli putus: mesin komersial bergaransi resmi, suplai chemical langsung dari produsen, dan pelatihan SOP operasional lengkap.
      </p>

      <div class="pl-hero-actions-cute">
        <a href="#pilihan-paket" class="pl-btn-cute-primary">
          <?php peluanglaundry_icon('package', '', 18); ?>
          <span>Pilih Paket Usaha</span>
          <span class="pl-btn-icon-bubble" aria-hidden="true">&darr;</span>
        </a>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya tertarik konsultasi paket buka usaha laundry kiloan.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Konsultasi Syarat &amp; Lokasi</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Value Highlights Bar -->
<section class="pl-section pl-section-light" style="padding:40px 0;">
  <div class="pl-container">
    <div class="pl-stats-bar pl-stats-bar-cute">
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-blue">0%</div>
        <div class="pl-stat-label">Royalty Fee Seumur Hidup</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-green">100%</div>
        <div class="pl-stat-label">Keuntungan Milik Anda Penuh</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-orange">500+</div>
        <div class="pl-stat-label">Mitra Tersebar di Indonesia</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-purple">Resmi</div>
        <div class="pl-stat-label">Garansi Mesin &amp; Purna Jual</div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Packages Section (4 Tiers) -->
<section class="pl-section" id="pilihan-paket">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag" style="background:#ecfdf5; color:#059669; padding:4px 12px; border-radius:999px; font-size:12px; font-weight:800; display:inline-block; margin-bottom:10px;">INVESTASI BISNIS MENGUNTUNGKAN</span>
      <h2 class="pl-section-title">Pilihan Paket Kemitraan Laundry Siap Pakai</h2>
      <p class="pl-section-desc">Pilih paket yang paling sesuai dengan modal, kapasitas ruangan usaha, dan target pasar di lokasi Anda.</p>
    </div>

    <div class="pl-pricing-grid">
      <!-- Tier 1: Paket Perintis Kiloan -->
      <div class="pl-pricing-card">
        <div class="pl-pricing-top">
          <span class="pl-pricing-badge-tier">PEMULA</span>
          <h3 class="pl-pricing-name">Paket Perintis Kiloan</h3>
          <div class="pl-pricing-cost">
            <span class="pl-price-amount">Rp 14.500.000</span>
          </div>
          <p class="pl-pricing-summary">Cocok untuk pemula yang ingin memulai usaha laundry rumahan dengan modal terjangkau.</p>
        </div>

        <ul class="pl-pricing-features">
          <li><span class="pl-pricing-check">✓</span><span>1 Unit Mesin Cuci Front Load 8 Kg</span></li>
          <li><span class="pl-pricing-check">✓</span><span>1 Unit Pengering Konversi Gas 10.5 Kg</span></li>
          <li><span class="pl-pricing-check">✓</span><span>1 Unit Setrika Uap Boiler 5 Liter</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Starter Pack DETERMAT (Bahan 40L Sabun)</span></li>
          <li><span class="pl-pricing-check">✓</span><span>5 Liter Parfum Laundry Grade A+</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Timbangan Digital 30 Kg &amp; Tagging Gun</span></li>
          <li><span class="pl-pricing-check">✓</span><span>SOP Operasional &amp; Bimbingan Online</span></li>
        </ul>

        <div class="pl-pricing-footer">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik Paket Perintis Kiloan Rp 14.500.000. Mohon kirim rincian spesifikasinya.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Konsultasi Paket Perintis</span>
          </a>
        </div>
      </div>

      <!-- Tier 2: Paket Standar Komersial (POPULAR) -->
      <div class="pl-pricing-card pl-pricing-popular">
        <div class="pl-pricing-ribbon">
          PALING POPULER &bull; REKOMENDASI
        </div>
        <div class="pl-pricing-top" style="margin-top:6px;">
          <span class="pl-pricing-badge-tier">KOMERSIAL</span>
          <h3 class="pl-pricing-name">Paket Sukses Komersial</h3>
          <div class="pl-pricing-cost">
            <span class="pl-price-amount">Rp 28.500.000 / 45 Jt</span>
          </div>
          <p class="pl-pricing-summary">Kapasitas harian 100-150 kg pakaian dengan mesin komersial tahan pakai seharian penuh.</p>
        </div>

        <ul class="pl-pricing-features">
          <li><span class="pl-pricing-check">✓</span><span><strong>2 Unit Mesin Cuci Front Load Heavy Duty</strong></span></li>
          <li><span class="pl-pricing-check">✓</span><span><strong>2 Unit Pengering Gas Kapasitas Besar</strong></span></li>
          <li><span class="pl-pricing-check">✓</span><span>1 Unit Setrika Uap Boiler 10 Liter (2 Kepala)</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Starter Pack Chemical Lengkap (Sabun 80L, Softener)</span></li>
          <li><span class="pl-pricing-check">✓</span><span>10 Liter Bibit Parfum Varian Best Seller</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Keranjang Laundry (10 Pcs) &amp; Meja Kasir</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Software Kasir Laundry POS Android</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Training Karyawan + Desain Spanduk &amp; Brosur</span></li>
        </ul>

        <div class="pl-pricing-footer">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik Paket Sukses Komersial Rp 28.5jt - 45jt. Mohon informasi ketersediaan unit.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-primary" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Pesan Paket Komersial</span>
          </a>
        </div>
      </div>

      <!-- Tier 3: Paket Semi-Koin Modern -->
      <div class="pl-pricing-card">
        <div class="pl-pricing-top">
          <span class="pl-pricing-badge-tier">SEMI-KOIN</span>
          <h3 class="pl-pricing-name">Paket Semi-Koin Modern</h3>
          <div class="pl-pricing-cost">
            <span class="pl-price-amount">Rp 72.000.000</span>
          </div>
          <p class="pl-pricing-summary">Konsep modern cuci-kering mandiri dengan sistem token atau koin. Minim biaya tenaga kerja.</p>
        </div>

        <ul class="pl-pricing-features">
          <li><span class="pl-pricing-check">✓</span><span>2 Set Mesin Cuci &amp; Pengering Stack (Tumpuk)</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Modul Box Koin / Token Otomatis</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Full Instalasi Pipa Saluran Gas &amp; Air</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Pasokan Chemical untuk 500 Cuci Pertama</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Neon Box Signboard Depan Toko</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Pelatihan Manajemen Operasional Kasir</span></li>
        </ul>

        <div class="pl-pricing-footer">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik Paket Semi-Koin Modern Rp 72.000.000.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Konsultasi Paket Semi-Koin</span>
          </a>
        </div>
      </div>

      <!-- Tier 4: Paket Laundromat Industri Full Stack -->
      <div class="pl-pricing-card">
        <div class="pl-pricing-top">
          <span class="pl-pricing-badge-tier">INDUSTRIAL</span>
          <h3 class="pl-pricing-name">Paket Laundromat Full</h3>
          <div class="pl-pricing-cost">
            <span class="pl-price-amount">Rp 167.000.000</span>
          </div>
          <p class="pl-pricing-summary">Solusi laundry koin skala besar untuk kawasan apartemen, kampus, atau padat penduduk.</p>
        </div>

        <ul class="pl-pricing-features">
          <li><span class="pl-pricing-check">✓</span><span>4-5 Set Mesin Stack Komersial Heavy Duty</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Sistem Pembayaran Koin &amp; QRIS Digital</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Desain Layout 3D Interior &amp; Partisi Dinding</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Pipa Tembaga Gas Sentral &amp; Booster Pump Air</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Pasokan Kimia Rutin Harga Distributor Pabrik</span></li>
          <li><span class="pl-pricing-check">✓</span><span>Pendampingan Grand Opening &amp; Garansi Servis</span></li>
        </ul>

        <div class="pl-pricing-footer">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik Paket Laundromat Full Industrial Rp 167.000.000.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary" style="width:100%; justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Konsultasi Laundromat 167Jt</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Alur 5 Langkah Menjadi Mitra (Onboarding Process) -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag" style="background:#f1f5f9; color:#475569; padding:4px 12px; border-radius:999px; font-size:12px; font-weight:800; display:inline-block; margin-bottom:10px;">LANGKAH MUDAH BERMITRA</span>
      <h2 class="pl-section-title">5 Langkah Memulai Usaha Laundry Anda</h2>
      <p class="pl-section-desc">Proses terstruktur yang memandu Anda dari nol hingga outlet laundry siap beroperasi penuh.</p>
    </div>

    <div class="pl-steps-horizontal">
      <!-- Step 1 -->
      <div class="pl-step-cute-card">
        <div class="pl-step-cute-num">01</div>
        <h3 class="pl-step-cute-title">Konsultasi &amp; Anggaran</h3>
        <p class="pl-step-cute-desc">Diskusikan besaran modal, luas lokasi tempat usaha, dan target pasar di sekitar Anda.</p>
      </div>

      <!-- Step 2 -->
      <div class="pl-step-cute-card">
        <div class="pl-step-cute-num">02</div>
        <h3 class="pl-step-cute-title">Pemilihan Paket</h3>
        <p class="pl-step-cute-desc">Pilih paket mesin yang paling sesuai dan lakukan penandatanganan kesepakatan kemitraan.</p>
      </div>

      <!-- Step 3 -->
      <div class="pl-step-cute-card">
        <div class="pl-step-cute-num">03</div>
        <h3 class="pl-step-cute-title">Pengiriman Unit</h3>
        <p class="pl-step-cute-desc">Mesin dipacking kayu aman dan dikirim langsung ke alamat ruko/rumah usaha Anda.</p>
      </div>

      <!-- Step 4 -->
      <div class="pl-step-cute-card">
        <div class="pl-step-cute-num">04</div>
        <h3 class="pl-step-cute-title">Instalasi &amp; Training</h3>
        <p class="pl-step-cute-desc">Pemasangan instalasi pipa gas/air serta bimbingan SOP pencucian kepada karyawan Anda.</p>
      </div>

      <!-- Step 5 -->
      <div class="pl-step-cute-card">
        <div class="pl-step-cute-num">05</div>
        <h3 class="pl-step-cute-title">Grand Opening</h3>
        <p class="pl-step-cute-desc">Outlet resmi dibuka dengan dukungan materi promosi spanduk dan strategi marketing lokal.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Kemitraan Section -->
<section class="pl-section pl-section-tint">
  <div class="pl-container">
    <div class="pl-section-head">
      <div class="pl-section-pill-wrap">
        <span class="pl-section-pill">Tanya Jawab Kemitraan</span>
      </div>
      <h2 class="pl-section-title">Pertanyaan Seputar <span class="pl-text-highlight-orange">Kemitraan Usaha Laundry</span></h2>
      <p class="pl-section-desc">Jawaban transparan untuk hal-hal yang sering ditanyakan oleh calon mitra sebelum memulai outlet.</p>
    </div>

    <div class="pl-faq-container-narrow">
      <div class="pl-faq-list">
        <!-- FAQ 1 -->
        <details class="pl-faq-item" open>
          <summary class="pl-faq-question">Apakah benar-benar tidak ada royalty fee atau bagi hasil bulanan?</summary>
          <div class="pl-faq-answer">
            <p><strong>Ya, 100% benar.</strong> Kemitraan usaha laundry Orchid Brand menggunakan sistem <strong>beli putus</strong> murni. Anda tidak dibebani potongan royalti fee bulanan, iuran wajib kemitraan, maupun franchise fee tahunan. Seluruh omset dan keuntungan usaha adalah hak penuh milik Anda.</p>
          </div>
        </details>

        <!-- FAQ 2 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Berapa ukuran tempat atau ruko minimal yang dibutuhkan?</summary>
          <div class="pl-faq-answer">
            <p>Untuk <strong>Paket Perintis Kiloan</strong>, ruangan berukuran minimal 3x3 meter sudah cukup. Sedangkan untuk <strong>Paket Komersial dan Koin (Laundromat)</strong>, direkomendasikan ruangan minimal 3x5 meter hingga 4x6 meter agar alur kerja pemisahan pakaian kotor, area cuci, setrika uap, meja kasir, dan rak penyimpanan bersih tertata rapi dan leluasa.</p>
          </div>
        </details>

        <!-- FAQ 3 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana jika mesin cuci atau dryer mengalami kendala operasional?</summary>
          <div class="pl-faq-answer">
            <p><strong>Semua unit mesin baru bergaransi resmi.</strong> Kami menyediakan panduan teknisi via video call untuk penanganan darurat (troubleshooting) secara cepat. Gudang pusat kami di Sleman, Yogyakarta juga memiliki ketersediaan suku cadang (sparepart) original yang siap dikirimkan kapan pun dibutuhkan.</p>
          </div>
        </details>

        <!-- FAQ 4 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Apakah suplai deterjen dan pewanginya wajib selalu membeli dari sini?</summary>
          <div class="pl-faq-answer">
            <p>Sebagai mitra resmi, Anda mendapatkan hak istimewa harga pabrik tangan pertama (grosir) untuk serbuk konsentrat deterjen DETERMAT dan bibit parfum Orchid Brand seumur hidup. HPP chemical cuci Anda menjadi sangat hemat (mulai Rp 500-an per kg pakaian), sehingga keuntungan margin Anda jauh lebih tebal dibanding membeli sabun biasa di pasaran luar.</p>
          </div>
        </details>

        <!-- FAQ 5 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Apakah sudah termasuk pelatihan karyawan dan modul SOP operasional?</summary>
          <div class="pl-faq-answer">
            <p><strong>Sudah lengkap.</strong> Paket usaha sudah mencakup buku panduan Standar Operasional Prosedur (SOP) siap pakai, teknik spotting pembersihan noda membandel (darah, karat, tinta), takaran chemical yang presisi, cara setrika uap cepat dan licin, serta bimbingan penggunaan aplikasi kasir laundry.</p>
          </div>
        </details>

        <!-- FAQ 6 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana prosedur pengiriman dan keamanan mesin ke luar pulau Jawa?</summary>
          <div class="pl-faq-answer">
            <p>Seluruh unit mesin yang dikirimkan ke luar kota dan luar pulau Jawa dilapisi proteksi bubble wrap tebal dan peti kayu (palet) standar kargo agar aman dari benturan selama di perjalanan. Kami bekerja sama dengan puluhan ekspedisi kargo resmi untuk mendapatkan ongkos kirim paling ekonomis.</p>
          </div>
        </details>
      </div>

      <!-- FAQ CTA Card -->
      <div class="pl-faq-cta-card">
        <div class="pl-faq-cta-text">
          <h4>Masih ada pertanyaan seputar lokasi ruko atau estimasi modal?</h4>
          <p>Diskusikan rencana usaha laundry Anda bersama tim konsultan bisnis kami secara gratis.</p>
        </div>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi detail paket usaha laundry kiloan untuk lokasi saya.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-wa">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Konsultasi Gratis via WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Order Box Component -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php
    set_query_var('order_box_title', 'Konsultasikan Lokasi Usaha &amp; Kebutuhan Paket Anda');
    set_query_var('order_box_subtitle', 'Hubungi tim ahli PT Indotech Berkah Abadi untuk mengecek ketersediaan unit mesin serta konsultasi teknis kebutuhan daya listrik dan lokasi.');
    set_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya ingin konsultasi rencana pembukaan usaha laundry kiloan di kota saya.');
    get_template_part('template-parts/landing/order', 'box');
    ?>
  </div>
</section>

</main>

<?php get_footer(); ?>
