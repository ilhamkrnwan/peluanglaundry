<?php
/**
 * Template Name: Halaman Profil Perusahaan (About Us)
 * Description: Template resmi profil PT Indotech Berkah Abadi, legalitas usaha, visi misi, dan fasilitas pabrik Orchid Brand.
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<!-- About Hero Section -->
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill pl-pill-cyan">
        <span>Profil Perusahaan Resmi</span>
      </div>
      <h1 class="pl-page-title">
        PT Indotech
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em">Berkah Abadi</span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h1>
      <p class="pl-page-subtitle">
        Pelopor industri formulasi chemical laundry ramah lingkungan (Green Cleaning) dan penyedia paket usaha laundry kiloan profesional di Indonesia sejak 2012.
      </p>
    </div>
  </div>
</section>

<!-- Company Stats Bar -->
<section class="pl-about-stats-sec">
  <div class="pl-container">
    <div class="pl-stats-bar pl-stats-bar-cute">
      <div class="pl-stat-item">
        <span class="pl-stat-num pl-color-blue">2012</span>
        <span class="pl-stat-label">Tahun Berdiri</span>
      </div>
      <div class="pl-stat-item">
        <span class="pl-stat-num pl-color-green">1.200+</span>
        <span class="pl-stat-label">Mitra Usaha Laundry</span>
      </div>
      <div class="pl-stat-item">
        <span class="pl-stat-num pl-color-orange">150+</span>
        <span class="pl-stat-label">Agen &amp; Depo Chemical</span>
      </div>
      <div class="pl-stat-item">
        <span class="pl-stat-num pl-color-purple">34</span>
        <span class="pl-stat-label">Provinsi Terjangkau</span>
      </div>
    </div>
  </div>
</section>

<!-- Main Corporate Story & Narrative -->
<section class="pl-section pl-about-story-sec">
  <div class="pl-container">
    <div class="pl-about-grid">
      <div class="pl-about-narrative">
        <h2 class="pl-section-title" style="text-align:left; margin-bottom:20px;">
          Membangun Ekosistem Bisnis Laundry yang Sehat, Berkelanjutan, dan Mandiri
        </h2>
        <div class="pl-about-body-text">
          <p>
            <strong>PT Indotech Berkah Abadi</strong> didirikan di Sleman, D.I. Yogyakarta pada tahun 2012 oleh para praktisi dan formulator kimia kebersihan. Berawal dari keprihatinan atas tingginya ongkos logistik cairan deterjen konvensional ke luar pulau Jawa serta limbah laundry yang mencemari lingkungan air tanah, kami menciptakan terobosan inovasi di bawah merek dagang <strong>Orchid Brand Green Cleaning</strong>.
          </p>
          <p>
            Inovasi unggulan kami, seperti bibit deterjen konsentrat <strong>DETERMAT</strong>, memungkinkan pengusaha laundry mengolah 1 kg bibit menjadi 20 liter sabun cair berkualitas tinggi secara mandiri. Inovasi ini memangkas beban biaya logistik hingga 80%, melipatgandakan margin profit para pelaku usaha kiloan di seluruh pelosok nusantara.
          </p>
          <p>
            Hingga kini, PT Indotech Berkah Abadi tidak hanya bertindak sebagai pabrik produsen bahan kimia pembersih, melainkan pusat inkubasi wirausaha lengkap: menyediakan paket mesin laundry komersial, bimbingan SOP operasional higienis, serta kemitraan keagenan <strong>100% tanpa royalti fee</strong>.
          </p>
        </div>

        <div class="pl-about-signature">
          <div class="pl-about-sig-info">
            <span class="pl-sig-name">Manajemen PT Indotech Berkah Abadi</span>
            <span class="pl-sig-role">Orchid Brand Green Cleaning &amp; Perfumery</span>
          </div>
        </div>
      </div>

      <div class="pl-about-side-box">
        <div class="pl-about-card">
          <div class="pl-about-card-head">
            <?php peluanglaundry_icon('shield-check', 'pl-icon-inline', 22); ?>
            <h3>Legalitas &amp; Dokumen Usaha</h3>
          </div>
          <ul class="pl-legal-list">
            <li>
              <div class="pl-legal-item">
                <span class="pl-legal-key">Badan Hukum</span>
                <span class="pl-legal-val">PT Indotech Berkah Abadi</span>
              </div>
            </li>
            <li>
              <div class="pl-legal-item">
                <span class="pl-legal-key">Nomor Induk Berusaha (NIB)</span>
                <span class="pl-legal-val">Terdaftar Resmi OSS RBA</span>
              </div>
            </li>
            <li>
              <div class="pl-legal-item">
                <span class="pl-legal-key">Merek Dagang</span>
                <span class="pl-legal-val">Orchid Brand &amp; DETERMAT</span>
              </div>
            </li>
            <li>
              <div class="pl-legal-item">
                <span class="pl-legal-key">Standar Formulasi</span>
                <span class="pl-legal-val">Low Suds &amp; Biodegradable Surfactant</span>
              </div>
            </li>
            <li>
              <div class="pl-legal-item">
                <span class="pl-legal-key">Kantor &amp; Warehouse</span>
                <span class="pl-legal-val">Sleman, D.I. Yogyakarta</span>
              </div>
            </li>
          </ul>

          <div class="pl-about-card-foot">
            <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Manajemen PT Indotech Berkah Abadi, saya ingin meminta company profile lengkap dan legalitas usaha.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary" style="width:100%;">
              <?php peluanglaundry_icon('file-text', 'pl-btn-icon', 16); ?>
              <span>Minta Dokumen Legalitas</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Vision and Mission Section -->
<section class="pl-section pl-section-alt">
  <div class="pl-container">
    <div class="pl-section-head">
      <h2 class="pl-section-title">Visi &amp; Misi PT Indotech Berkah Abadi</h2>
      <p class="pl-section-desc">Prinsip kerja yang memandu seluruh operasional pabrikasi, pelayanan konsumen, dan riset formulasi kami.</p>
    </div>

    <div class="pl-vm-grid">
      <!-- Visi Card -->
      <div class="pl-vm-card pl-vision-card">
        <div class="pl-vm-head">
          <div class="pl-vm-icon-wrap">
            <?php peluanglaundry_icon('award', 'pl-vm-icon', 32); ?>
          </div>
          <h3>Visi Perusahaan</h3>
        </div>
        <p class="pl-vm-text">
          Menjadi perusahaan produsen chemical pembersih ramah lingkungan dan inkubator kemitraan wirausaha laundry yang paling terpercaya, transparan, dan berdampak positif bagi perekonomian masyarakat Indonesia.
        </p>
      </div>

      <!-- Misi Card -->
      <div class="pl-vm-card pl-mission-card">
        <div class="pl-vm-head">
          <div class="pl-vm-icon-wrap">
            <?php peluanglaundry_icon('trending-up', 'pl-vm-icon', 32); ?>
          </div>
          <h3>Misi Perusahaan</h3>
        </div>
        <ul class="pl-vm-list">
          <li>
            <?php peluanglaundry_icon('check', 'pl-check-icon', 15); ?>
            <span>Memproduksi chemical laundry higienis, bebas bahan berbahaya, dan aman bagi mesin cuci serta lingkungan.</span>
          </li>
          <li>
            <?php peluanglaundry_icon('check', 'pl-check-icon', 15); ?>
            <span>Menghadirkan solusi penghematan biaya produksi laundry kiloan melalui inovasi konsentrat bahan aktif.</span>
          </li>
          <li>
            <?php peluanglaundry_icon('check', 'pl-check-icon', 15); ?>
            <span>Menyediakan paket usaha laundry tanpa royalti fee yang membimbing wirausaha dari nol hingga sukses.</span>
          </li>
          <li>
            <?php peluanglaundry_icon('check', 'pl-check-icon', 15); ?>
            <span>Membangun jaringan depo dan agen distribusi mandiri di seluruh kabupaten dan kota di Indonesia.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 4 Core Pillars -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <h2 class="pl-section-title">4 Pilar Utama Layanan Kami</h2>
      <p class="pl-section-desc">Fondasi keunggulan yang menjadikan Orchid Brand pilihan lebih dari 500 pemilik laundry di Indonesia.</p>
    </div>

    <div class="pl-about-pillars">
      <div class="pl-pillar-card">
        <div class="pl-pillar-icon">
          <?php peluanglaundry_icon('flask', '', 28); ?>
        </div>
        <h3>R&amp;D Kimia Mandiri</h3>
        <p>Formulasi dikembangkan dan diuji secara berkala di laboratorium untuk menjamin kestabilan aroma, kelembutan serat, dan daya angkat kotoran membandel.</p>
      </div>

      <div class="pl-pillar-card">
        <div class="pl-pillar-icon">
          <?php peluanglaundry_icon('leaf', '', 28); ?>
        </div>
        <h3>Formula Ramah Lingkungan</h3>
        <p>Surfactant nabati terurai alami (biodegradable) dengan kadar busa rendah (Low Suds) yang tidak merusak komponen PCB mesin cuci modern.</p>
      </div>

      <div class="pl-pillar-card">
        <div class="pl-pillar-icon">
          <?php peluanglaundry_icon('graduation', '', 28); ?>
        </div>
        <h3>Edukasi &amp; SOP Praktis</h3>
        <p>Kami tidak sekadar menjual paket, melainkan memberikan bimbingan teknis SOP pencucian, perhitungan HPP per kg, dan trik pemasaran laundry lokal.</p>
      </div>

      <div class="pl-pillar-card">
        <div class="pl-pillar-icon">
          <?php peluanglaundry_icon('truck', '', 28); ?>
        </div>
        <h3>Distribusi Logistik Cepat</h3>
        <p>Bekerja sama dengan ekspedisi kargo darat, laut, dan udara dengan tarif khusus sehingga ongkos kirim ke seluruh Indonesia tetap ekonomis.</p>
      </div>
    </div>
  </div>
</section>

<!-- Fasilitas Produksi, R&D & Showroom -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <div class="pl-section-head">
      <h2 class="pl-section-title">Fasilitas Pabrik, Laboratorium R&amp;D &amp; Showroom</h2>
      <p class="pl-section-desc">Keseriusan kami dalam membangun ekosistem bisnis laundry didukung oleh fasilitas fisik yang siap dikunjungi oleh calon mitra.</p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:28px;">
      <!-- Fasilitas 1: Lab R&D -->
      <div>
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; border-radius:var(--radius-md); background:#0f172a; margin-bottom:12px;">
          <?php peluanglaundry_image_slot('about_facility_lab', array('sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">LABORATORIUM &amp; QC</span>
        </div>
        <div>
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Pusat Formulasi &amp; Uji Mutu</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Pengembangan deterjen ramah lingkungan dengan sertifikasi pengujian formula deterjen berstandar Kemenkes RI.
          </p>
        </div>
      </div>

      <!-- Fasilitas 2: Showroom Mesin -->
      <div>
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; border-radius:var(--radius-md); background:#0f172a; margin-bottom:12px;">
          <?php peluanglaundry_image_slot('about_facility_showroom', array('sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">SHOWROOM UNIT</span>
        </div>
        <div>
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Showroom Hardware Komersial</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Display unit mesin cuci front load, pengering gas konversi, dan boiler setrika uap yang siap diuji coba langsung.
          </p>
        </div>
      </div>

      <!-- Fasilitas 3: Outlet Model -->
      <div>
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; border-radius:var(--radius-md); background:#0f172a; margin-bottom:12px;">
          <?php peluanglaundry_image_slot('about_facility_outlet', array('sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">TRAINING CENTER</span>
        </div>
        <div>
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Pusat Pelatihan &amp; SOP Mitra</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Outlet percontohan operasional nyata tempat pelatihan karyawan mitra sebelum pembukaan grand opening.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Corporate CTA Banner -->
<section class="pl-section pl-cta-section">
  <div class="pl-container">
    <div class="pl-cta-card">
      <div class="pl-cta-content">
        <h2>Ingin Berdiskusi Langsung dengan Tim Manajemen Kami?</h2>
        <p>Kunjungi kantor pusat dan warehouse kami di Sleman, Yogyakarta, atau jadwalkan konsultasi bisnis via WhatsApp bersama konsultan resmi kami.</p>
        <div class="pl-cta-actions">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya ingin menjadwalkan konsultasi kemitraan bisnis laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Hubungi Manajemen via WhatsApp</span>
          </a>
          <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="pl-btn pl-btn-secondary">
            <?php peluanglaundry_icon('map-pin', 'pl-btn-icon', 16); ?>
            <span>Lihat Lokasi &amp; Kontak Kantor</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
