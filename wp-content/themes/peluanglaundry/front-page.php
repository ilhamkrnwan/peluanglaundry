<?php
/**
 * Front page template — company profile, chemical catalog, and partnership.
 *
 * @package PeluangLaundry
 */

get_header();

$home_products = array(
    array(
        'slot'  => 'home_product_determat',
        'badge' => 'Deterjen utama',
        'title' => 'DETERMAT Deterjen Matic',
        'desc'  => 'Konsentrat 1 kg jadi 20 liter. Busa rendah, aman untuk front load dan top load.',
        'wa'    => 'Halo, saya ingin order DETERMAT Konsentrat 1 Kg.',
    ),
    array(
        'slot'  => 'home_product_parfum',
        'badge' => 'Tahan lama',
        'title' => 'Parfum Laundry Grade A+',
        'desc'  => 'Aroma akasia, snappy, sakura, dan ocean fresh tanpa bercak kuning di pakaian.',
        'wa'    => 'Halo, saya tertarik pesan Parfum Laundry Orchid Brand Grade A+.',
    ),
    array(
        'slot'  => 'home_product_softener',
        'badge' => 'Anti kusut',
        'title' => 'Softener & Pelicin Pakaian',
        'desc'  => 'Melembutkan serat, melindungi dari statis, dan memangkas waktu menyetrika.',
        'wa'    => 'Halo, saya ingin order Softener & Pelicin Setrika Orchid Brand.',
    ),
    array(
        'slot'  => 'home_product_oxy',
        'badge' => 'Noda berat',
        'title' => 'Oxy Bleach & Anti Noda',
        'desc'  => 'Oksigen aktif untuk noda darah, minyak, tinta, jamur, dan karat.',
        'wa'    => 'Halo, saya ingin pesan Oxy Bleach & Anti Noda Khusus Laundry.',
    ),
    array(
        'slot'  => 'home_product_dish',
        'badge' => 'Depo & refill',
        'title' => 'Sabun Cuci Piring Konsentrat',
        'desc'  => 'Bahan baku ekonomis untuk depo isi ulang, kesat seketika tanpa residu.',
        'wa'    => 'Halo, saya ingin info bahan Sabun Cuci Piring Konsentrat Orchid Brand.',
    ),
    array(
        'slot'  => 'home_product_alkali',
        'badge' => 'Hotel & RS',
        'title' => 'Alkalite & Emulsifier Heavy Duty',
        'desc'  => 'Chemical pembersih linen tebal, seragam koki, sprei rumah sakit, dan garment.',
        'wa'    => 'Halo, saya butuh penawaran Chemical Laundry Hotel & Industri (Alkalite/Emulsifier).',
    ),
);

$home_packages = array(
    array(
        'slot'     => 'home_package_starter',
        'type'     => 'Pemula / rumahan',
        'title'    => 'Paket Mandiri',
        'desc'     => 'Mulai usaha laundry dari rumah dengan modal terukur dan peralatan siap pakai.',
        'items'    => array(
            '1 unit mesin cuci front load atau top load',
            '1 unit pengering gas konversi',
            'Setrika uap boiler gas 5 liter',
            'Starter pack chemical DETERMAT & parfum 50 liter',
            'SOP operasional dan bimbingan online',
        ),
        'cta'      => 'Konsultasi Paket Mandiri',
        'wa'       => 'Halo Admin, saya ingin info detail & estimasi biaya Paket Usaha Laundry Mandiri (Pemula).',
        'featured' => false,
    ),
    array(
        'slot'     => 'home_package_complete',
        'type'     => 'Bisnis profesional',
        'title'    => 'Paket Komplit Komersial',
        'desc'     => 'Solusi all-in-one untuk ruko atau kios dengan kapasitas puluhan kilogram per hari.',
        'items'    => array(
            '2 unit mesin cuci front load komersial',
            '2 unit pengering gas kapasitas 10,5 kg',
            'Setrika uap 10 liter dengan 2 kepala setrika',
            'Chemical lengkap 100 liter siap pakai',
            'Software kasir dan training karyawan',
        ),
        'cta'      => 'Minta Proposal Lengkap',
        'wa'       => 'Halo Admin, saya ingin info lengkap & proposal Paket Usaha Laundry Komplit Komersial.',
        'featured' => true,
    ),
    array(
        'slot'     => 'home_package_agent',
        'type'     => 'Distributor & depo',
        'title'    => 'Master Agen & Depo Sabun',
        'desc'     => 'Jadi pusat pasokan chemical laundry dan depo isi ulang di kota Anda.',
        'items'    => array(
            'Lisensi keagenan resmi Orchid Brand',
            'Pasokan DETERMAT, parfum, dan softener harga pabrik',
            'Mesin pengaduk racik chemical otomatis',
            'Drum penampung, jerigen, dan botol kemasan',
            'Pelatihan formulasi sabun dan deterjen',
        ),
        'cta'      => 'Konsultasi Keagenan',
        'wa'       => 'Halo Admin, saya tertarik menjadi Master Agen / Depo Chemical Sabun Orchid Brand di kota saya.',
        'featured' => false,
    ),
);
?>

<main id="main">

  <!-- Hero: Playful Cute Motion + Orbit & Satellites (QuickFold Inspiration) -->
  <section class="pl-hero pl-hero-cute">
    <div class="pl-container pl-hero-grid-cute">
      
      <!-- Left Copy Column -->
      <div class="pl-hero-copy">
        <div class="pl-hero-identity-pill pl-reveal">
          <span>Produsen Resmi &amp; Kemitraan Laundry Terpercaya</span>
        </div>

        <h1 class="pl-hero-title pl-reveal">
          Kembangkan Usaha Laundry Anda Bersama
          <span class="pl-hero-highlight-brand">PeluangLaundry</span>
          <span class="pl-hero-title-break">
            <span class="pl-hero-em-wrap">
              <span class="pl-hero-em">Solusi Pabrik</span>
              <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
                <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
              </svg>
            </span>
          </span>
        </h1>

        <p class="pl-hero-desc pl-reveal">
          Produsen bibit deterjen DETERMAT konsentrat 1 kg jadi 20 liter, parfum laundry grade A+, dan paket usaha laundry siap buka. 100% tanpa royalti, hemat ongkir, dikirim ke seluruh Indonesia.
        </p>

        <!-- Cute Interactive Actions -->
        <div class="pl-hero-actions-cute pl-reveal">
          <a href="#paket-usaha" class="pl-btn-cute-primary">
            <span>Mulai Sekarang</span>
            <span class="pl-btn-icon-bubble" aria-hidden="true">
              <?php peluanglaundry_icon('arrow-up-right', '', 16); ?>
            </span>
          </a>

          <div class="pl-play-action-wrap">
            <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya tertarik konsultasi paket usaha laundry dan bahan chemical Orchid Brand.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-play">
              <span class="pl-play-circle" aria-hidden="true">
                <?php peluanglaundry_icon('play', '', 13); ?>
              </span>
              <span>Konsultasi Cepat</span>
            </a>
            <div class="pl-doodle-arrow-box" aria-hidden="true">
              <svg class="pl-doodle-arrow" viewBox="0 0 70 42" fill="none">
                <path d="M6 30C22 40 42 34 55 18C59 13 61 9 63 6M63 6L52 8M63 6L64 17" stroke="#f97316" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </div>

        <!-- Social Proof Cluster -->
        <div class="pl-hero-proof-cluster pl-reveal">
          <div class="pl-avatar-group" aria-hidden="true">
            <span class="pl-avatar pl-avatar-1" title="Mitra Jawa">HP</span>
            <span class="pl-avatar pl-avatar-2" title="Mitra Kalimantan">RW</span>
            <span class="pl-avatar pl-avatar-3" title="Mitra Sulawesi">YK</span>
            <span class="pl-avatar pl-avatar-4" title="Mitra Sumatera">+1k</span>
          </div>
          <div class="pl-hero-rating-box">
            <div class="pl-rating-stars">
              <strong>4.9</strong>
              <div class="pl-stars-icons" aria-label="Rating 4.9 dari 5 bintang">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                  <?php peluanglaundry_icon('star', '', 14); ?>
                <?php endfor; ?>
              </div>
            </div>
            <span class="pl-rating-sub">1.200+ Mitra Aktif se-Indonesia</span>
          </div>
        </div>
      </div>

      <!-- Right Visual Column: Orbit & Floating Satellite Badges -->
      <div class="pl-hero-visual-centerpiece pl-reveal">
        <!-- Dashed Orbit Ring Background -->
        <div class="pl-hero-orbit-wrap" aria-hidden="true">
          <svg class="pl-hero-orbit-svg" viewBox="0 0 520 520">
            <circle cx="260" cy="260" r="230" class="pl-hero-orbit-line" />
          </svg>
        </div>

        <!-- Main Photo Frame -->
        <div class="pl-hero-main-card">
          <?php peluanglaundry_image_slot('home_hero_main', array('eager' => true, 'sizes' => '(max-width: 1024px) 100vw, 560px')); ?>
          <div class="pl-hero-card-glow" aria-hidden="true"></div>
        </div>

        <!-- Floating Satellite Badges Group -->
        <div class="pl-hero-satellites-group">
          <!-- Floating Satellite 1: Top-Left (Peach Washer) -->
          <div class="pl-satellite-badge pl-satellite-1">
            <div class="pl-satellite-icon-box pl-box-peach">
              <?php peluanglaundry_icon('washer', '', 22); ?>
            </div>
            <div class="pl-satellite-text">
              <strong>DETERMAT Matic</strong>
              <span>Konsentrat 1:20 Liter</span>
            </div>
          </div>

          <!-- Floating Satellite 2: Top-Right (Sky Iron) -->
          <div class="pl-satellite-badge pl-satellite-2">
            <div class="pl-satellite-icon-box pl-box-cyan">
              <?php peluanglaundry_icon('iron', '', 22); ?>
            </div>
            <div class="pl-satellite-text">
              <strong>Paket Usaha Siap</strong>
              <span>Mesin &amp; Boiler Uap</span>
            </div>
          </div>

          <!-- Floating Satellite 3: Bottom-Right (Amber Award) -->
          <div class="pl-satellite-badge pl-satellite-3">
            <div class="pl-satellite-icon-box pl-box-amber">
              <?php peluanglaundry_icon('award', '', 22); ?>
            </div>
            <div class="pl-satellite-text">
              <strong>100% Bebas Royalti</strong>
              <span>Keuntungan Utuh</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Proof band -->
  <section class="pl-proof-band" aria-label="Rekam jejak perusahaan">
    <div class="pl-container">
      <dl class="pl-proof-grid">
        <div class="pl-proof-item">
          <dt>2012</dt>
          <dd>Tahun pendirian perusahaan</dd>
        </div>
        <div class="pl-proof-item">
          <dt>1.200+</dt>
          <dd>Jaringan mitra se-Indonesia</dd>
        </div>
        <div class="pl-proof-item">
          <dt>0%</dt>
          <dd>Royalti &amp; bagi hasil</dd>
        </div>
        <div class="pl-proof-item">
          <dt>60%</dt>
          <dd>Efisiensi biaya chemical</dd>
        </div>
      </dl>
    </div>
  </section>

  <!-- Cute Services & Products Section: QuickFold Style -->
  <section class="pl-section pl-cute-services-section" id="layanan-pilihan">
    <div class="pl-container">
      <div class="pl-cute-services-head pl-reveal">
        <p class="pl-cute-subheading">Kemitraan &amp; Pasokan Chemical Terpercaya <span class="pl-swipe-hint" aria-hidden="true">&larr; Geser &rarr;</span></p>
        <h2 class="pl-section-title pl-text-center">
          Kami hadir mendampingi wirausaha sukses dengan <span class="pl-text-highlight-orange">layanan &amp; produk terbaik</span>
        </h2>
        <p class="pl-section-desc pl-text-center">
          Solusi terpadu dari produsen langsung: konsentrat deterjen hemat ongkir, paket peralatan laundry komersial siap buka, hingga depo isi ulang sabun di kota Anda.
        </p>
      </div>

      <div class="pl-cute-services-grid">
        <!-- Card 1 -->
        <article class="pl-cute-card pl-reveal">
          <div class="pl-cute-card-media">
            <?php peluanglaundry_image_slot('home_package_starter', array('sizes' => '(max-width: 768px) 100vw, 380px')); ?>
          </div>
          <div class="pl-cute-card-pill">
            <div class="pl-cute-icon-bubble">
              <?php peluanglaundry_icon('package', '', 20); ?>
            </div>
            <div class="pl-cute-pill-info">
              <h3 class="pl-cute-card-title">Paket Usaha Kiloan</h3>
              <a href="#paket-usaha" class="pl-cute-card-link">Lihat Paket &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="pl-cute-card pl-reveal">
          <div class="pl-cute-card-media">
            <?php peluanglaundry_image_slot('home_product_determat', array('sizes' => '(max-width: 768px) 100vw, 380px')); ?>
          </div>
          <div class="pl-cute-card-pill">
            <div class="pl-cute-icon-bubble">
              <?php peluanglaundry_icon('droplet', '', 20); ?>
            </div>
            <div class="pl-cute-pill-info">
              <h3 class="pl-cute-card-title">DETERMAT Konsentrat</h3>
              <a href="#determat" class="pl-cute-card-link">Hemat Ongkir &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="pl-cute-card pl-reveal">
          <div class="pl-cute-card-media">
            <?php peluanglaundry_image_slot('home_product_dish', array('sizes' => '(max-width: 768px) 100vw, 380px')); ?>
          </div>
          <div class="pl-cute-card-pill">
            <div class="pl-cute-icon-bubble">
              <?php peluanglaundry_icon('building', '', 20); ?>
            </div>
            <div class="pl-cute-pill-info">
              <h3 class="pl-cute-card-title">Depo Isi Ulang Sabun</h3>
              <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya tertarik info peluang membuka Depo Isi Ulang Sabun / Master Agen Orchid Brand.')); ?>" target="_blank" rel="noopener" class="pl-cute-card-link">Peluang Agen &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Card 4 -->
        <article class="pl-cute-card pl-reveal">
          <div class="pl-cute-card-media">
            <?php peluanglaundry_image_slot('home_product_parfum', array('sizes' => '(max-width: 768px) 100vw, 380px')); ?>
          </div>
          <div class="pl-cute-card-pill">
            <div class="pl-cute-icon-bubble">
              <?php peluanglaundry_icon('sparkles', '', 20); ?>
            </div>
            <div class="pl-cute-pill-info">
              <h3 class="pl-cute-card-title">Parfum &amp; Anti Noda</h3>
              <a href="#produk" class="pl-cute-card-link">Pilihan Aroma &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Card 5 -->
        <article class="pl-cute-card pl-reveal">
          <div class="pl-cute-card-media">
            <?php peluanglaundry_image_slot('home_package_complete', array('sizes' => '(max-width: 768px) 100vw, 380px')); ?>
          </div>
          <div class="pl-cute-card-pill">
            <div class="pl-cute-icon-bubble">
              <?php peluanglaundry_icon('washer', '', 20); ?>
            </div>
            <div class="pl-cute-pill-info">
              <h3 class="pl-cute-card-title">Mesin &amp; Boiler Uap</h3>
              <a href="#paket-usaha" class="pl-cute-card-link">Paket Lengkap &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Card 6 -->
        <article class="pl-cute-card pl-reveal">
          <div class="pl-cute-card-media">
            <?php peluanglaundry_image_slot('home_about_main', array('sizes' => '(max-width: 768px) 100vw, 380px')); ?>
          </div>
          <div class="pl-cute-card-pill">
            <div class="pl-cute-icon-bubble">
              <?php peluanglaundry_icon('graduation', '', 20); ?>
            </div>
            <div class="pl-cute-pill-info">
              <h3 class="pl-cute-card-title">Pelatihan &amp; SOP Usaha</h3>
              <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya ingin konsultasi pelatihan racik chemical dan SOP operasional laundry.')); ?>" target="_blank" rel="noopener" class="pl-cute-card-link">Konsultasi SOP &rarr;</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="pl-section pl-about-section">
    <div class="pl-container pl-about-grid">
      <div class="pl-about-media pl-reveal">
        <div class="pl-about-media-main">
          <?php peluanglaundry_image_slot('home_about_main', array('sizes' => '(max-width: 1024px) 100vw, 560px')); ?>
        </div>
        <div class="pl-about-media-inset">
          <?php peluanglaundry_image_slot('home_about_inset', array('sizes' => '(max-width: 768px) 38vw, 240px')); ?>
        </div>
        <div class="pl-about-badge pl-about-badge-cute">
          <div class="pl-about-badge-txt">
            <strong>12+ Tahun</strong>
            <span>Memproduksi Chemical di Indonesia</span>
          </div>
        </div>
      </div>

      <div class="pl-about-copy pl-reveal">
        <div class="pl-section-pill-wrap">
          <span class="pl-section-pill">Profil Perusahaan <span class="pl-swipe-hint" aria-hidden="true">&larr; Geser &rarr;</span></span>
        </div>

        <h2 class="pl-section-title">
          Mendukung ribuan wirausaha laundry
          <span class="pl-hero-em-wrap">
            <span class="pl-hero-em">tumbuh mandiri</span>
            <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
              <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
            </svg>
          </span>
        </h2>

        <p class="pl-about-p">
          <strong>PT Indotech Berkah Abadi</strong> adalah perusahaan manufaktur dan riset formulasi bahan kimia pembersih ramah lingkungan dengan merek <strong>Orchid Brand</strong>, berpusat di Sleman, D.I. Yogyakarta.
        </p>
        <p class="pl-about-p">
          Berdiri sejak 2012, kami menghadirkan solusi rantai pasok chemical dengan sistem konsentrat untuk memangkas ongkos kirim antarpulau, sekaligus menyediakan program kemitraan laundry siap operasi tanpa royalti.
        </p>

        <ul class="pl-about-points-cute">
          <li class="pl-about-point-card">
            <div class="pl-about-point-icon pl-box-cyan">
              <?php peluanglaundry_icon('shield-check', '', 20); ?>
            </div>
            <div class="pl-about-point-text">
              <strong>Legalitas Badan Usaha</strong>
              <span>PT resmi dengan perizinan usaha dan NPWP terdaftar.</span>
            </div>
          </li>
          <li class="pl-about-point-card">
            <div class="pl-about-point-icon pl-box-peach">
              <?php peluanglaundry_icon('flask', '', 20); ?>
            </div>
            <div class="pl-about-point-text">
              <strong>Uji Mutu Laboratorium</strong>
              <span>Formula ramah lingkungan sesuai baku mutu yang berlaku.</span>
            </div>
          </li>
          <li class="pl-about-point-card">
            <div class="pl-about-point-icon pl-box-purple">
              <?php peluanglaundry_icon('truck', '', 20); ?>
            </div>
            <div class="pl-about-point-text">
              <strong>Distribusi 34 Provinsi</strong>
              <span>Kargo darat, laut, dan udara dengan tarif mitra termurah.</span>
            </div>
          </li>
          <li class="pl-about-point-card">
            <div class="pl-about-point-icon pl-box-amber">
              <?php peluanglaundry_icon('graduation', '', 20); ?>
            </div>
            <div class="pl-about-point-text">
              <strong>Pendampingan Purna Jual</strong>
              <span>SOP operasional dan konsultasi teknis gratis seumur hidup.</span>
            </div>
          </li>
        </ul>

        <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="pl-btn-cute-link">
          <span>Kenali perusahaan kami lebih dekat</span>
          <?php peluanglaundry_icon('arrow-right', '', 16); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- Advantages: portrait image + open list -->
  <section class="pl-section pl-section-tint">
    <div class="pl-container pl-adv-grid">
      <div class="pl-adv-media pl-reveal">
        <?php peluanglaundry_image_slot('home_advantage', array('sizes' => '(max-width: 1024px) 100vw, 460px')); ?>
        <div class="pl-adv-media-caption">
          <span class="pl-adv-media-label">Outlet Mitra</span>
          <span class="pl-adv-media-text">Tata letak, alur cuci, dan area layanan yang bisa direplikasi.</span>
        </div>
      </div>

      <div class="pl-adv-copy pl-reveal">
        <div class="pl-section-pill-wrap">
          <span class="pl-section-pill pl-pill-green">Standar Mutu &amp; Efisiensi <span class="pl-swipe-hint" aria-hidden="true">&larr; Geser &rarr;</span></span>
        </div>

        <h2 class="pl-section-title">Mengapa memilih produk &amp; <span class="pl-text-highlight-orange">kemitraan kami?</span></h2>
        <p class="pl-adv-intro">Standar industri komersial yang dirancang untuk efisiensi biaya dan keamanan operasional jangka panjang.</p>

        <div class="pl-adv-list-cute">
          <article class="pl-adv-card-cute">
            <div class="pl-adv-icon-bubble pl-box-green">
              <?php peluanglaundry_icon('leaf', '', 22); ?>
            </div>
            <div class="pl-adv-content">
              <h3>Formula Ramah Lingkungan</h3>
              <p>Limbah buangan aman baku mutu BOD dan COD, bebas fosfat berbahaya, serta aman untuk tanah dan air.</p>
            </div>
          </article>

          <article class="pl-adv-card-cute">
            <div class="pl-adv-icon-bubble pl-box-peach">
              <?php peluanglaundry_icon('package', '', 22); ?>
            </div>
            <div class="pl-adv-content">
              <h3>Hemat Ongkir Ekstrem</h3>
              <p>Konsentrat 1 kg menghasilkan 20 liter deterjen cair di lokasi mitra, tanpa membayar ongkir air.</p>
            </div>
          </article>

          <article class="pl-adv-card-cute">
            <div class="pl-adv-icon-bubble pl-box-purple">
              <?php peluanglaundry_icon('truck', '', 22); ?>
            </div>
            <div class="pl-adv-content">
              <h3>Distribusi Seluruh Indonesia</h3>
              <p>Kerja sama dengan puluhan ekspedisi kargo untuk tarif pengiriman antarpulau yang kompetitif.</p>
            </div>
          </article>

          <article class="pl-adv-card-cute">
            <div class="pl-adv-icon-bubble pl-box-cyan">
              <?php peluanglaundry_icon('graduation', '', 22); ?>
            </div>
            <div class="pl-adv-content">
              <h3>Bimbingan &amp; SOP Lengkap</h3>
              <p>Panduan racik chemical, manajemen karyawan, dan pendampingan operasional gratis.</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- DETERMAT spotlight -->
  <section class="pl-section" id="determat">
    <div class="pl-container pl-spotlight">
      <div class="pl-spotlight-media pl-reveal">
        <?php peluanglaundry_image_slot('home_spotlight', array('sizes' => '(max-width: 1024px) 100vw, 560px')); ?>
        <span class="pl-spotlight-badge pl-spotlight-badge-cute">
          <?php peluanglaundry_icon('award', '', 16); ?>
          <span>Terjual 50.000+ Paket</span>
        </span>
        <div class="pl-spotlight-specs-cute">
          <div class="pl-spec-capsule"><strong class="pl-spec-val">1 kg</strong><span class="pl-spec-lbl">Konsentrat</span></div>
          <div class="pl-spec-capsule pl-spec-highlight"><strong class="pl-spec-val">20 L</strong><span class="pl-spec-lbl">Siap Pakai</span></div>
          <div class="pl-spec-capsule"><strong class="pl-spec-val">Low</strong><span class="pl-spec-lbl">Busa Mesin</span></div>
        </div>
      </div>

      <div class="pl-spotlight-body pl-reveal">
        <div class="pl-spotlight-meta">
          <span class="pl-section-pill pl-pill-orange">Produk Terlaris</span>
          <span class="pl-rating">
            <span class="pl-rating-stars-list">
              <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php peluanglaundry_icon('star', '', 16); ?>
              <?php endfor; ?>
            </span>
            <strong>4.9/5</strong> (1.800+ ulasan)
          </span>
        </div>

        <h2 class="pl-spotlight-title">DETERMAT: Konsentrat Deterjen Matic <span class="pl-text-highlight-orange">Rendah Busa</span></h2>

        <p class="pl-spotlight-p">
          Diformulasikan dengan busa rendah yang aman untuk mesin front load maupun top load. Tidak meninggalkan kerak pada tabung, tidak berbau apek, dan lembut di serat pakaian.
        </p>

        <ul class="pl-feature-checklist-cute">
          <li>
            <span class="pl-check-dot"><?php peluanglaundry_icon('check', '', 12); ?></span>
            <div><strong>Hasil 15&ndash;20 liter</strong> deterjen cair kental per paket 1 kg.</div>
          </li>
          <li>
            <span class="pl-check-dot"><?php peluanglaundry_icon('check', '', 12); ?></span>
            <div><strong>Bahan aktif turunan kelapa sawit</strong> yang tidak panas di tangan.</div>
          </li>
          <li>
            <span class="pl-check-dot"><?php peluanglaundry_icon('check', '', 12); ?></span>
            <div><strong>Cocok untuk segala jenis air</strong>, termasuk air sumur dan air gambut.</div>
          </li>
          <li>
            <span class="pl-check-dot"><?php peluanglaundry_icon('check', '', 12); ?></span>
            <div><strong>Daya cuci ekstra</strong> mengangkat keringat, minyak, dan debu membandel.</div>
          </li>
        </ul>

        <div class="pl-spotlight-actions">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech, saya ingin order paket bahan DETERMAT Orchid Brand. Mohon info harga grosir.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-cute-wa">
            <?php peluanglaundry_icon('whatsapp', '', 18); ?>
            <span>Order via WhatsApp</span>
          </a>
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-cute-toped">
            <?php peluanglaundry_icon('tokopedia', '', 17); ?>
            <span>Tokopedia Official</span>
          </a>
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-cute-shopee">
            <?php peluanglaundry_icon('shopee', '', 17); ?>
            <span>Shopee Official</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Product catalog -->
  <section class="pl-section pl-section-tint" id="produk">
    <div class="pl-container">
      <div class="pl-section-head pl-section-head-left">
        <div class="pl-section-pill-wrap">
          <span class="pl-section-pill">Formula Standar Industri <span class="pl-swipe-hint" aria-hidden="true">&larr; Geser &rarr;</span></span>
        </div>
        <h2 class="pl-section-title">Lini produk chemical laundry &amp; <span class="pl-text-highlight-orange">sanitasi higienis</span></h2>
        <p class="pl-section-desc">Formula standar komersial dengan pasokan harga pabrik langsung dari PT Indotech Berkah Abadi.</p>
      </div>

      <div class="pl-product-grid">
        <?php foreach ($home_products as $index => $product) : ?>
          <article class="pl-product-card<?php echo 0 === $index ? ' pl-product-card-wide' : ''; ?> pl-reveal">
            <div class="pl-product-media">
              <?php peluanglaundry_image_slot($product['slot'], array('sizes' => '(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 380px')); ?>
              <span class="pl-product-badge"><?php echo esc_html($product['badge']); ?></span>
            </div>
            <div class="pl-product-body">
              <h3><?php echo esc_html($product['title']); ?></h3>
              <p><?php echo esc_html($product['desc']); ?></p>
              <a href="<?php echo esc_url(peluanglaundry_get_wa_link($product['wa'])); ?>" target="_blank" rel="noopener" class="pl-product-link">
                <span>Order via WhatsApp</span>
                <?php peluanglaundry_icon('arrow-right', '', 14); ?>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="pl-section-foot">
        <a href="<?php echo esc_url(home_url('/produk-chemical-laundry/')); ?>" class="pl-btn pl-btn-secondary">
          <span>Lihat katalog lengkap</span>
          <?php peluanglaundry_icon('arrow-right', '', 16); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- Packages -->
  <section class="pl-section" id="paket-usaha">
    <div class="pl-container">
      <div class="pl-section-head pl-section-head-left">
        <div class="pl-section-pill-wrap">
          <span class="pl-section-pill pl-pill-green">Kemitraan 0% Royalti <span class="pl-swipe-hint" aria-hidden="true">&larr; Geser &rarr;</span></span>
        </div>
        <h2 class="pl-section-title">Pilihan paket pendirian <span class="pl-text-highlight-orange">usaha laundry</span></h2>
        <p class="pl-section-desc">Mulai dengan modal terukur, perlengkapan siap operasi, dan <strong>100% keuntungan milik Anda</strong> tanpa bagi hasil.</p>
      </div>

      <div class="pl-package-grid">
        <?php foreach ($home_packages as $package) : ?>
          <article class="pl-package-card<?php echo $package['featured'] ? ' pl-package-featured' : ''; ?> pl-reveal">
            <div class="pl-package-media">
              <?php peluanglaundry_image_slot($package['slot'], array('sizes' => '(max-width: 768px) 100vw, 380px')); ?>
              <?php if ($package['featured']) : ?>
                <span class="pl-package-flag">⭐ Paling Diminati Mitra</span>
              <?php endif; ?>
            </div>

            <div class="pl-package-body">
              <span class="pl-package-type"><?php echo esc_html($package['type']); ?></span>
              <h3><?php echo esc_html($package['title']); ?></h3>
              <p class="pl-package-desc"><?php echo esc_html($package['desc']); ?></p>

              <ul class="pl-package-list">
                <?php foreach ($package['items'] as $item) : ?>
                  <li>
                    <span class="pl-pkg-check"><?php peluanglaundry_icon('check', '', 13); ?></span>
                    <span><?php echo esc_html($item); ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>

              <div class="pl-package-note">
                <?php peluanglaundry_icon('shield-check', '', 16); ?>
                <span>100% Tanpa Royalti &bull; Bebas Franchise Fee</span>
              </div>

              <a href="<?php echo esc_url(peluanglaundry_get_wa_link($package['wa'])); ?>" target="_blank" rel="noopener" class="pl-btn <?php echo $package['featured'] ? 'pl-btn-cute-wa' : 'pl-btn-secondary'; ?> pl-btn-block">
                <?php if ($package['featured']) : ?>
                  <?php peluanglaundry_icon('whatsapp', '', 18); ?>
                <?php endif; ?>
                <span><?php echo esc_html($package['cta']); ?></span>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Cost comparison -->
  <section class="pl-section">
    <div class="pl-container">
      <div class="pl-roi-panel pl-reveal">
        <div class="pl-roi-copy">
          <span class="pl-roi-badge-top">✨ Simulasi Keuntungan Mitra</span>
          <h2 class="pl-roi-title">Berapa penghematan biaya dengan <span class="pl-text-highlight-orange">DETERMAT?</span></h2>
          <p class="pl-roi-intro">Bandingkan biaya bahan kimia biasa dengan DETERMAT Orchid Brand. Selisihnya langsung menjadi laba bersih Anda.</p>

          <div class="pl-roi-compare">
            <div class="pl-roi-box pl-roi-old">
              <span class="pl-roi-label">Deterjen cair biasa</span>
              <div class="pl-roi-price">Rp 12.000 <span>/ liter</span></div>
              <p>Belum termasuk ongkir drum air ke luar kota.</p>
              <div class="pl-roi-calc">300 L/bulan: <strong>Rp 3.600.000</strong></div>
            </div>

            <div class="pl-roi-box pl-roi-new">
              <span class="pl-roi-badge">Hemat 70%</span>
              <span class="pl-roi-label">DETERMAT konsentrat</span>
              <div class="pl-roi-price">Rp 3.500 <span>/ liter</span></div>
              <p>Hanya bayar ongkir bahan kering, diolah jadi 20 liter di lokasi.</p>
              <div class="pl-roi-calc">300 L/bulan: <strong>Rp 1.050.000</strong></div>
            </div>
          </div>

          <div class="pl-roi-summary">
            <?php peluanglaundry_icon('trending-up', '', 20); ?>
            <span><strong>Hemat hingga Rp 2.550.000 per bulan</strong> atau Rp 30.600.000 per tahun.</span>
          </div>
          <p class="pl-roi-note">Simulasi berdasarkan pemakaian 300 liter per bulan. Harga aktual mengikuti daftar harga grosir.</p>
        </div>

        <div class="pl-roi-media">
          <?php peluanglaundry_image_slot('home_roi', array('caption' => 'Pengujian formula di laboratorium Orchid Brand', 'sizes' => '(max-width: 1024px) 100vw, 420px')); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="pl-section pl-section-tint">
    <div class="pl-container pl-testi-layout">
      <div class="pl-testi-media pl-reveal">
        <?php peluanglaundry_image_slot('home_testimonial', array('sizes' => '(max-width: 1024px) 100vw, 440px')); ?>
        <div class="pl-testi-media-badge pl-satellite-badge">
          <div class="pl-satellite-icon-box pl-box-amber">
            <?php peluanglaundry_icon('award', '', 20); ?>
          </div>
          <div class="pl-satellite-text">
            <strong>1.200+ Mitra Aktif</strong>
            <span>Tersebar di Seluruh Indonesia</span>
          </div>
        </div>
      </div>

      <div class="pl-testi-content pl-reveal">
        <div class="pl-section-pill-wrap">
          <span class="pl-section-pill">Bukti Nyata Mitra <span class="pl-swipe-hint" aria-hidden="true">&larr; Geser &rarr;</span></span>
        </div>

        <h2 class="pl-section-title">Dipercaya pengusaha laundry <span class="pl-text-highlight-orange">seluruh Nusantara</span></h2>

        <div class="pl-testi-list">
          <blockquote class="pl-testi-item">
            <div class="pl-testi-stars">
              <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php peluanglaundry_icon('star', '', 16); ?>
              <?php endfor; ?>
            </div>
            <p>&ldquo;Sejak beralih ke DETERMAT konsentrat, biaya operasional laundry saya turun drastis hampir 60%. Hasil cucian tetap bersih dan wanginya tahan berhari-hari.&rdquo;</p>
            <footer>
              <strong>Bpk. Hendra Prasetyo</strong>
              <span>Owner Kiloan Fresh Laundry, Semarang</span>
            </footer>
          </blockquote>

          <blockquote class="pl-testi-item">
            <div class="pl-testi-stars">
              <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php peluanglaundry_icon('star', '', 16); ?>
              <?php endfor; ?>
            </div>
            <p>&ldquo;Saya mulai laundry dari nol tanpa pengalaman. Berkat paket komplit dan bimbingan SOP-nya, sekarang omset stabil dan sudah punya dua cabang.&rdquo;</p>
            <footer>
              <strong>Ibu Ratna Wulandari</strong>
              <span>Mitra Orchid Brand Laundry, Balikpapan</span>
            </footer>
          </blockquote>

          <blockquote class="pl-testi-item">
            <div class="pl-testi-stars">
              <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php peluanglaundry_icon('star', '', 16); ?>
              <?php endfor; ?>
            </div>
            <p>&ldquo;Ongkir chemical ke Jayapura selalu jadi kendala. Dengan bibit DETERMAT 1 kg jadi 20 liter, kargo jadi jauh lebih murah dan depo saya laris.&rdquo;</p>
            <footer>
              <strong>Bpk. Yohanes K.</strong>
              <span>Agen Depo Chemical Laundry, Jayapura</span>
            </footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- Journal -->
  <section class="pl-section">
    <div class="pl-container">
      <div class="pl-section-head pl-section-head-left">
        <div class="pl-section-pill-wrap">
          <span class="pl-section-pill">Wawasan &amp; Edukasi <span class="pl-swipe-hint" aria-hidden="true">&larr; Geser &rarr;</span></span>
        </div>
        <h2 class="pl-section-title">Wawasan &amp; panduan sukses <span class="pl-text-highlight-orange">usaha laundry</span></h2>
        <p class="pl-section-desc">Artikel praktis, strategi promosi, dan panduan teknis perawatan pakaian dari tim riset Orchid Brand.</p>
      </div>

      <div class="pl-grid-3 pl-grid-3-2up">
        <?php
        $latest_posts = new WP_Query(array(
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => 1,
        ));

        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
                get_template_part('template-parts/cards/post-card');
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p class="pl-empty-inline">Belum ada artikel yang dipublikasikan.</p>';
        endif;
        ?>
      </div>

      <div class="pl-section-foot">
        <a href="<?php echo esc_url(home_url('/category/chemical-laundry/')); ?>" class="pl-btn pl-btn-secondary">
          <span>Lihat semua artikel</span>
          <?php peluanglaundry_icon('arrow-right', '', 16); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="pl-section pl-section-tint">
    <div class="pl-container pl-faq-layout">
      <div class="pl-faq-intro pl-reveal">
        <div class="pl-section-pill-wrap">
          <span class="pl-section-pill">Bantuan &amp; Tanya Jawab</span>
        </div>
        <h2 class="pl-section-title">Pertanyaan yang <span class="pl-text-highlight-orange">sering diajukan</span></h2>
        <p class="pl-section-desc">Belum menemukan jawaban? Tim konsultan kami siap membantu memilih paket dan menghitung kebutuhan modal.</p>

        <div class="pl-faq-media">
          <?php peluanglaundry_image_slot('home_faq', array('sizes' => '(max-width: 768px) 100vw, 420px')); ?>
        </div>

        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya punya pertanyaan seputar paket usaha dan chemical laundry.')); ?>" target="_blank" rel="noopener" class="pl-faq-contact pl-btn-cute-play">
          <span class="pl-play-circle" aria-hidden="true">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
          </span>
          <span>Tanya langsung ke konsultan &rarr;</span>
        </a>
      </div>

      <div class="pl-faq-list pl-reveal">
        <details class="pl-faq-item" open>
          <summary class="pl-faq-question">Apakah kemitraan laundry ini ada royalti fee atau bagi hasil?</summary>
          <div class="pl-faq-answer">
            <p><strong>Tidak ada.</strong> Seluruh paket usaha laundry Orchid Brand adalah sistem <strong>beli putus</strong> tanpa royalti fee bulanan, tanpa franchise fee tahunan, dan tanpa bagi hasil. 100% omset dan laba bersih adalah milik Anda sepenuhnya.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana jika saya masih pemula dan belum punya pengalaman laundry?</summary>
          <div class="pl-faq-answer">
            <p><strong>Didampingi dari nol sampai bisa.</strong> Anda mendapatkan bimbingan komprehensif mulai dari konsultasi pemilihan lokasi/ruko, tata letak instalasi mesin, Standar Operasional Prosedur (SOP) pencucian dan setrika uap, hingga training aplikasi kasir POS laundry agar pembukuan rapi dan anti-bocor.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana cara mengolah paket bahan konsentrat DETERMAT?</summary>
          <div class="pl-faq-answer">
            <p><strong>Sangat mudah dan cepat.</strong> Cukup siapkan wadah atau drum dan air bersih sesuai takaran di buku panduan. Masukkan serbuk konsentrat DETERMAT, aduk rata selama 5–10 menit, dan 20 liter deterjen cair matic kental berkualitas tinggi langsung siap digunakan untuk mencuci.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana garansi unit mesin dan penanganan kendala teknis?</summary>
          <div class="pl-faq-answer">
            <p><strong>Semua mesin bergaransi resmi.</strong> Kami menyediakan panduan teknisi via video call untuk instalasi awal maupun troubleshooting darurat. Didukung ketersediaan suku cadang (sparepart) original yang lengkap di gudang pusat kami di Sleman, Yogyakarta.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Apakah melayani pengiriman paket usaha ke luar pulau Jawa?</summary>
          <div class="pl-faq-answer">
            <p><strong>Ya, menjangkau seluruh Indonesia.</strong> Kami bekerja sama dengan puluhan ekspedisi kargo terpercaya via darat, laut, dan udara. Pengiriman mesin dilapisi proteksi peti kayu kokoh sehingga aman sampai tujuan dengan tarif ongkir yang tetap hemat.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana cara memesan paket usaha atau menjadi agen chemical?</summary>
          <div class="pl-faq-answer">
            <p>Tekan tombol <strong>WhatsApp resmi</strong> di website ini untuk terhubung langsung dengan konsultan kami. Kami siap menghitung estimasi kebutuhan modal, mengirimkan proposal rincian paket, dan mendampingi hingga outlet Anda siap buka.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="pl-cta-section pl-cta-photo">
    <div class="pl-cta-bg" aria-hidden="true">
      <?php peluanglaundry_image_slot('home_cta_bg', array('decorative' => true, 'sizes' => '100vw')); ?>
    </div>

    <div class="pl-container pl-cta-inner">
      <div class="pl-cta-pill-wrap pl-reveal">
        <span class="pl-cta-pill">Konsultasi Bisnis Gratis</span>
      </div>

      <h2 class="pl-cta-title pl-reveal">
        Siap memulai bisnis laundry yang 
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em">menguntungkan?</span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h2>

      <p class="pl-cta-desc pl-reveal">Diskusikan rencana usaha Anda bersama tim ahli PT Indotech Berkah Abadi. Dapatkan bimbingan SOP, daftar harga grosir, dan rekomendasi paket yang sesuai modal Anda.</p>

      <div class="pl-cta-trust-row pl-reveal">
        <span class="pl-cta-trust-badge"><?php peluanglaundry_icon('award', '', 16); ?> 0% Royalti Seumur Hidup</span>
        <span class="pl-cta-trust-badge"><?php peluanglaundry_icon('shield-check', '', 16); ?> Mesin &amp; Boiler Bergaransi</span>
        <span class="pl-cta-trust-badge"><?php peluanglaundry_icon('graduation', '', 16); ?> Bimbingan SOP Sampai Buka</span>
      </div>

      <div class="pl-cta-actions pl-reveal">
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya siap konsultasi peluang bisnis laundry & agen chemical Orchid Brand.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-cute-wa pl-btn-cta-wa-large">
          <?php peluanglaundry_icon('whatsapp', '', 22); ?>
          <span>Konsultasi WhatsApp Sekarang</span>
        </a>
        <a href="tel:+6282215840088" class="pl-btn pl-btn-cute-call">
          <?php peluanglaundry_icon('phone', '', 18); ?>
          <span>0822-1584-0088</span>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
