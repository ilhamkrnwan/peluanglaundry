<?php
/**
 * The front page template file - Company Profile Peluang Usaha Laundry & Orchid Brand
 *
 * @package PeluangLaundry
 */

get_header();
?>

<!-- Hero Section: Corporate Value Proposition -->
<section class="pl-hero">
  <div class="pl-container">
    <div class="pl-badge">
      <span class="pl-badge-dot"></span>
      <?php peluanglaundry_icon('building', 'pl-badge-icon', 14); ?>
      <span>PT Indotech Berkah Abadi &bull; Produsen &amp; Distributor Resmi Orchid Brand</span>
    </div>

    <h1 class="pl-hero-title">
      Pusat Formulasi Chemical Ramah Lingkungan &amp; <span class="pl-text-gradient">Kemitraan Usaha Laundry Terpercaya</span>
    </h1>

    <p class="pl-hero-desc">
      Produsen bahan baku deterjen konsentrat hemat ongkir (1 kg diolah jadi 20 liter), bibit parfum laundry grade A+, dan penyedia paket pendirian usaha laundry kiloan siap buka <strong>100% tanpa royalti</strong> ke seluruh wilayah Indonesia.
    </p>

    <div class="pl-hero-actions">
      <a href="#paket-usaha" class="pl-btn pl-btn-primary">
        <?php peluanglaundry_icon('package', '', 18); ?>
        <span>Pilihan Paket Kemitraan</span>
      </a>
      <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya tertarik konsultasi paket kemitraan usaha laundry / agen chemical Orchid Brand.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary">
        <?php peluanglaundry_icon('whatsapp', '', 18); ?>
        <span>Konsultasi Bisnis Resmi</span>
      </a>
    </div>

    <!-- Corporate Stats Glass Bar -->
    <div class="pl-stats-bar">
      <div class="pl-stat-item">
        <div class="pl-stat-num">2012</div>
        <div class="pl-stat-label">Tahun Pendirian Perusahaan</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">1.200+</div>
        <div class="pl-stat-label">Jaringan Mitra se-Indonesia</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">0%</div>
        <div class="pl-stat-label">Royalti &amp; Bagi Hasil</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">60%</div>
        <div class="pl-stat-label">Efisiensi Biaya Chemical</div>
      </div>
    </div>
  </div>
</section>

<!-- Profil Korporat / Sekilas Perusahaan (About PT Indotech Berkah Abadi) -->
<section class="pl-section pl-section-light" id="tentang-kami">
  <div class="pl-container">
    <div class="pl-about-grid">
      <div class="pl-about-content">
        <span class="pl-section-tag">SEKILAS PERUSAHAAN</span>
        <h2 class="pl-section-title" style="text-align:left;">Mendukung Ribuan Wirausaha Laundry Tumbuh Mandiri</h2>
        <p class="pl-about-p">
          <strong>PT Indotech Berkah Abadi</strong> adalah perusahaan manufaktur dan riset formulasi bahan kimia pembersih ramah lingkungan (Green Cleaning) dengan merk <strong>Orchid Brand</strong> yang berpusat di Sleman, D.I. Yogyakarta.
        </p>
        <p class="pl-about-p">
          Berdiri sejak tahun 2012, kami berkomitmen menghadirkan solusi rantai pasok kimia berkualitas tinggi dengan sistem konsentrat inovatif untuk memangkas beban ongkos kirim antarpulau, serta menyediakan program kemitraan laundry siap operasi tanpa royalti yang terjangkau bagi masyarakat Indonesia.
        </p>

        <div class="pl-about-pillars">
          <div class="pl-about-pillar-item">
            <?php peluanglaundry_icon('shield-check', 'pl-pillar-icon', 22); ?>
            <div>
              <strong>Legalitas Badan Usaha</strong>
              <span>PT resmi dengan legalitas perizinan usaha dan NPWP terdaftar.</span>
            </div>
          </div>
          <div class="pl-about-pillar-item">
            <?php peluanglaundry_icon('flask', 'pl-pillar-icon', 22); ?>
            <div>
              <strong>Uji Mutu Laboratorium</strong>
              <span>Formula ramah lingkungan sesuai baku mutu lingkungan hidup.</span>
            </div>
          </div>
        </div>
      </div>

      <div class="pl-about-card">
        <div class="pl-about-stat-box">
          <div class="pl-about-stat-number">12+</div>
          <div class="pl-about-stat-text">Tahun dedikasi memproduksi chemical laundry terpercaya di Indonesia.</div>
        </div>
        <ul class="pl-about-list">
          <li><?php peluanglaundry_icon('check-circle', '', 18); ?> <span>Pabrikasi mandiri dengan kapasitas produksi puluhan ton per bulan.</span></li>
          <li><?php peluanglaundry_icon('check-circle', '', 18); ?> <span>Jaringan ekspedisi kargo darat, laut, dan udara ke 34 provinsi.</span></li>
          <li><?php peluanglaundry_icon('check-circle', '', 18); ?> <span>Transfer teknologi pelatihan pembuatan chemical bagi mitra agen.</span></li>
          <li><?php peluanglaundry_icon('check-circle', '', 18); ?> <span>Dukungan purna jual, konsultasi operasional, dan SOP gratis.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 4 Pilar Keunggulan Kompetitif -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">KEUNGGULAN KOMPETITIF</span>
      <h2 class="pl-section-title">Mengapa Memilih Produk &amp; Kemitraan Kami?</h2>
      <p class="pl-section-desc">Standar industri komersial yang dirancang untuk efisiensi maksimal dan keamanan operasional jangka panjang.</p>
    </div>

    <div class="pl-highlights-grid">
      <div class="pl-highlight-box">
        <div class="pl-hl-icon-wrap">
          <?php peluanglaundry_icon('leaf', 'pl-hl-svg', 24); ?>
        </div>
        <div class="pl-hl-text">
          <h4>Formula Ramah Lingkungan</h4>
          <p>Limbah buangan aman baku mutu BOD, COD, dan bebas fosfat berbahaya, aman untuk tanah dan air.</p>
        </div>
      </div>

      <div class="pl-highlight-box">
        <div class="pl-hl-icon-wrap">
          <?php peluanglaundry_icon('package', 'pl-hl-svg', 24); ?>
        </div>
        <div class="pl-hl-text">
          <h4>Hemat Ongkir Ekstrem</h4>
          <p>Bahan konsentrat 1 kg menghasilkan 20 liter deterjen cair siap pakai di tempat mitra tanpa bayar ongkir air.</p>
        </div>
      </div>

      <div class="pl-highlight-box">
        <div class="pl-hl-icon-wrap">
          <?php peluanglaundry_icon('truck', 'pl-hl-svg', 24); ?>
        </div>
        <div class="pl-hl-text">
          <h4>Distribusi Seluruh Indonesia</h4>
          <p>Kerjasama resmi dengan puluhan ekspedisi kargo untuk menjamin tarif pengiriman termurah antarpulau.</p>
        </div>
      </div>

      <div class="pl-highlight-box">
        <div class="pl-hl-icon-wrap">
          <?php peluanglaundry_icon('graduation', 'pl-hl-svg', 24); ?>
        </div>
        <div class="pl-hl-text">
          <h4>Bimbingan &amp; SOP Lengkap</h4>
          <p>Dukungan teknis SOP racik bahan kimia, manajemen karyawan, dan panduan buka laundry gratis seumur hidup.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Spotlight Produk Industri: DETERMAT -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">PRODUK UNGGULAN ORCHID BRAND</span>
      <h2 class="pl-section-title">DETERMAT: Konsentrat Deterjen Matic Rendah Busa</h2>
      <p class="pl-section-desc">Pilihan utama ribuan pengusaha laundry di Indonesia. Cukup larutkan dengan air panas, 1 kg bahan baku menghasilkan 20 liter deterjen cair berkualitas tinggi.</p>
    </div>

    <div class="pl-spotlight-card">
      <div class="pl-spotlight-media">
        <div class="pl-spotlight-img-wrap">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/determat.jpg'); ?>" 
               alt="DETERMAT Paket Bahan Deterjen Cair Rendah Busa" 
               class="pl-spotlight-img"
               loading="lazy" />
          <span class="pl-badge-floating">
            <?php peluanglaundry_icon('award', '', 14); ?>
            <span>Terjual 50.000+ Paket</span>
          </span>
        </div>
      </div>

      <div class="pl-spotlight-content">
        <div class="pl-spotlight-meta">
          <span class="pl-tag-pill">Produk Terlaris</span>
          <span class="pl-rating">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <?php peluanglaundry_icon('star', '', 15); ?>
            <?php endfor; ?>
            <span>4.9/5 (1.800+ Ulasan Mitra)</span>
          </span>
        </div>

        <h3 class="pl-spotlight-title">DETERMAT Konsentrat 1 Kg (Jadi 20 Liter)</h3>
        
        <p class="pl-spotlight-p">
          Diformulasikan khusus dengan busa rendah (<strong>Low Suds</strong>) yang sangat aman untuk mesin cuci Front Load maupun Top Load. Tidak meninggalkan kerak pada tabung mesin, tidak berbau apek, dan lembut di serat pakaian.
        </p>

        <ul class="pl-feature-checklist">
          <li><strong>Hasil 15 &ndash; 20 Liter</strong> deterjen cair kental per paket 1 kg.</li>
          <li><strong>Bahan aktif turunan kelapa sawit</strong> ramah lingkungan dan tidak panas di tangan.</li>
          <li><strong>Cocok untuk segala jenis air</strong> (termasuk air sumur, tanah, dan air gambut).</li>
          <li><strong>Daya cuci ekstra</strong> mengangkat noda keringat, minyak, dan debu membandel.</li>
        </ul>

        <div class="pl-spotlight-actions">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech, saya ingin order paket bahan DETERMAT Orchid Brand. Mohon info harga grosir.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
            <?php peluanglaundry_icon('whatsapp', '', 18); ?>
            <span>Pesan via WhatsApp</span>
          </a>
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-toped">
            <?php peluanglaundry_icon('shopping-cart', '', 18); ?>
            <span>Beli di Tokopedia</span>
          </a>
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-shopee">
            <?php peluanglaundry_icon('shopping-bag', '', 18); ?>
            <span>Beli di Shopee</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6 Lini Produk Chemical Lengkap -->
<section class="pl-section" id="produk">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">KATALOG MANUFAKTUR</span>
      <h2 class="pl-section-title">Lini Produk Kimia Pembersih Laundry &amp; Sanitasi</h2>
      <p class="pl-section-desc">Formula standar komersial dengan pasokan harga pabrik langsung dari produsen PT Indotech Berkah Abadi.</p>
    </div>

    <div class="pl-products-grid">
      <!-- Product 1 -->
      <div class="pl-prod-card">
        <div class="pl-prod-badge">Deterjen Utama</div>
        <div class="pl-prod-icon-wrap">
          <?php peluanglaundry_icon('droplet', 'pl-prod-svg', 32); ?>
        </div>
        <h3>DETERMAT Deterjen Matic</h3>
        <p class="pl-prod-sub">Konsentrat 1 kg diolah jadi 20 liter. Busa rendah (Low Suds), melindungi modul mesin cuci front load &amp; top load.</p>
        <ul class="pl-prod-points">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Hasil 20 liter siap pakai</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Daya angkat kotoran tinggi</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Aman untuk serat pakaian</li>
        </ul>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya ingin order DETERMAT Konsentrat 1 Kg.')); ?>" target="_blank" rel="noopener" class="pl-btn-prod">
          <span>Order via WhatsApp</span>
          <?php peluanglaundry_icon('arrow-right', '', 14); ?>
        </a>
      </div>

      <!-- Product 2 -->
      <div class="pl-prod-card">
        <div class="pl-prod-badge pl-badge-accent">Tahan 14 Hari</div>
        <div class="pl-prod-icon-wrap">
          <?php peluanglaundry_icon('sparkles', 'pl-prod-svg', 32); ?>
        </div>
        <h3>Parfum Laundry Grade A+</h3>
        <p class="pl-prod-sub">Aroma mewah tahan lama tanpa bercak kuning di pakaian. Pilihan aroma favorit: Akasia, Snappy, Sakura, Ocean Fresh.</p>
        <ul class="pl-prod-points">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Pelarut murni cepat kering</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Tidak memicu bau apek</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Formulasi mikrokapsul wangi</li>
        </ul>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya tertarik pesan Parfum Laundry Orchid Brand Grade A+.')); ?>" target="_blank" rel="noopener" class="pl-btn-prod">
          <span>Order via WhatsApp</span>
          <?php peluanglaundry_icon('arrow-right', '', 14); ?>
        </a>
      </div>

      <!-- Product 3 -->
      <div class="pl-prod-card">
        <div class="pl-prod-badge">Anti Kusut</div>
        <div class="pl-prod-icon-wrap">
          <?php peluanglaundry_icon('shield-check', 'pl-prod-svg', 32); ?>
        </div>
        <h3>Softener &amp; Pelicin Pakaian</h3>
        <p class="pl-prod-sub">Formula pelembut dan pelicin setrika dengan perlindungan anti-statis. Pakaian lebih rapi seketika dan halus.</p>
        <ul class="pl-prod-points">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Melembutkan serat kain</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Efisiensi waktu menyetrika</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Perlindungan anti bakteri</li>
        </ul>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya ingin order Softener & Pelicin Setrika Orchid Brand.')); ?>" target="_blank" rel="noopener" class="pl-btn-prod">
          <span>Order via WhatsApp</span>
          <?php peluanglaundry_icon('arrow-right', '', 14); ?>
        </a>
      </div>

      <!-- Product 4 -->
      <div class="pl-prod-card">
        <div class="pl-prod-badge pl-badge-accent">Khusus Noda Berat</div>
        <div class="pl-prod-icon-wrap">
          <?php peluanglaundry_icon('flask', 'pl-prod-svg', 32); ?>
        </div>
        <h3>Oxy Bleach &amp; Anti Noda</h3>
        <p class="pl-prod-sub">Formula oksigen aktif pencerah pakaian warna &amp; putih. Ampuh tuntaskan noda darah, minyak, tinta, jamur, dan karat.</p>
        <ul class="pl-prod-points">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Aman untuk pakaian warna</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Tanpa merusak serat katun</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Daya kerja pembersih cepat</li>
        </ul>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya ingin pesan Oxy Bleach & Anti Noda Khusus Laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn-prod">
          <span>Order via WhatsApp</span>
          <?php peluanglaundry_icon('arrow-right', '', 14); ?>
        </a>
      </div>

      <!-- Product 5 -->
      <div class="pl-prod-card">
        <div class="pl-prod-badge">Bahan Konsentrat</div>
        <div class="pl-prod-icon-wrap">
          <?php peluanglaundry_icon('droplet', 'pl-prod-svg', 32); ?>
        </div>
        <h3>Sabun Cuci Piring Konsentrat</h3>
        <p class="pl-prod-sub">Bahan baku sabun cuci piring ekonomis. Menghilangkan lemak membandel dan bau amis seketika dengan ekstrak jeruk nipis.</p>
        <ul class="pl-prod-points">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Kesat seketika tanpa residu</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Busa melimpah &amp; hemat</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Ideal untuk depo isi ulang</li>
        </ul>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya ingin info bahan Sabun Cuci Piring Konsentrat Orchid Brand.')); ?>" target="_blank" rel="noopener" class="pl-btn-prod">
          <span>Order via WhatsApp</span>
          <?php peluanglaundry_icon('arrow-right', '', 14); ?>
        </a>
      </div>

      <!-- Product 6 -->
      <div class="pl-prod-card">
        <div class="pl-prod-badge pl-badge-accent">Hotel &amp; RS</div>
        <div class="pl-prod-icon-wrap">
          <?php peluanglaundry_icon('building', 'pl-prod-svg', 32); ?>
        </div>
        <h3>Alkalite &amp; Emulsifier Heavy Duty</h3>
        <p class="pl-prod-sub">Chemical khusus pembersih linen tebal hotel, seragam koki restoran, sprei rumah sakit, dan industri garment.</p>
        <ul class="pl-prod-points">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Daya angkat kotoran berat</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Menjaga derajat putih linen</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Standard hygiene komersial</li>
        </ul>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo, saya butuh penawaran Chemical Laundry Hotel & Industri (Alkalite/Emulsifier).')); ?>" target="_blank" rel="noopener" class="pl-btn-prod">
          <span>Order via WhatsApp</span>
          <?php peluanglaundry_icon('arrow-right', '', 14); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Paket Usaha Laundry (Kemitraan Siap Buka Tanpa Royalti) -->
<section class="pl-section pl-section-light" id="paket-usaha">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">SKEMA KEMITRAAN NASIONAL</span>
      <h2 class="pl-section-title">Pilihan Paket Pendirian Usaha Laundry Siap Buka</h2>
      <p class="pl-section-desc">Mulai bisnis laundry Anda sendiri dengan modal terukur, perlengkapan lengkap siap operasi, dan <strong>100% keuntungan sepenuhnya milik Anda (tanpa bagi hasil)</strong>.</p>
    </div>

    <div class="pl-pricing-grid">
      <!-- Tier 1: Paket Mandiri Pemula -->
      <div class="pl-pricing-card">
        <div class="pl-pricing-head">
          <span class="pl-pricing-type">PEMULA / RUMAHAN</span>
          <h3 class="pl-pricing-title">Paket Mandiri</h3>
          <p class="pl-pricing-desc">Cocok untuk pemula yang ingin memulai usaha laundry dari rumah dengan modal efisien.</p>
        </div>
        <div class="pl-pricing-highlight">
          <span>Tipe Investasi</span>
          <div class="pl-pricing-tag">Modal Fleksibel &amp; Hemat</div>
        </div>
        <ul class="pl-pricing-list">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> 1 Unit Mesin Cuci Front Load / Top Load</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> 1 Unit Mesin Pengering (Dryer) Konversi Gas</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> 1 Setrika Uap Boiler Gas 5 Liter</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Starter Pack Chemical DETERMAT &amp; Parfum (50L)</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Timbangan Digital &amp; 10 Keranjang Pakaian</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> SOP Operasional &amp; Bimbingan Online Gratis</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> <strong>100% Tanpa Royalti Fee</strong></li>
        </ul>
        <div class="pl-pricing-foot">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin, saya ingin info detail & estimasi biaya Paket Usaha Laundry Mandiri (Pemula).')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary" style="width:100%;">
            <span>Konsultasi Paket Mandiri</span>
          </a>
        </div>
      </div>

      <!-- Tier 2: Paket Komplit Komersial (Featured) -->
      <div class="pl-pricing-card pl-pricing-featured">
        <div class="pl-pricing-badge">
          <?php peluanglaundry_icon('award', '', 14); ?>
          <span>PALING DIMINATI MITRA</span>
        </div>
        <div class="pl-pricing-head">
          <span class="pl-pricing-type">BISNIS PROFESIONAL</span>
          <h3 class="pl-pricing-title">Paket Komplit Komersial</h3>
          <p class="pl-pricing-desc">Solusi all-in-one langsung operasional di ruko atau kios dengan kapasitas cuci puluhan kg per hari.</p>
        </div>
        <div class="pl-pricing-highlight">
          <span>Fasilitas Terlengkap</span>
          <div class="pl-pricing-tag">Full Set Peralatan + Branding</div>
        </div>
        <ul class="pl-pricing-list">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> 2 Unit Mesin Cuci Front Load Komersial</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> 2 Unit Mesin Pengering (Dryer) Kapasitas 10.5 Kg</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> 1 Setrika Uap Boiler Gas 10 Liter + 2 Kepala Setrika</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> 1 Meja Setrika Vakum Standar Laundry</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Chemical Lengkap 100 Liter Siap Pakai</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Timbangan Duduk Digital 30 Kg</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Banner Promosi, Brosur, Nota, &amp; Plastik Kemas</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Software Kasir Laundry &amp; Training Karyawan</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> <strong>100% Tanpa Royalti / Franchise Fee</strong></li>
        </ul>
        <div class="pl-pricing-foot">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin, saya ingin info lengkap & proposal Paket Usaha Laundry Komplit Komersial.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%;">
            <?php peluanglaundry_icon('whatsapp', '', 18); ?>
            <span>Minta Proposal Lengkap</span>
          </a>
        </div>
      </div>

      <!-- Tier 3: Master Agen & Depo Chemical -->
      <div class="pl-pricing-card">
        <div class="pl-pricing-head">
          <span class="pl-pricing-type">DISTRIBUTOR &amp; DEPO</span>
          <h3 class="pl-pricing-title">Master Agen &amp; Depo Sabun</h3>
          <p class="pl-pricing-desc">Peluang menjadi distributor bahan kimia laundry &amp; depo isi ulang sabun di kota Anda.</p>
        </div>
        <div class="pl-pricing-highlight">
          <span>Pusat Pasokan Wilayah</span>
          <div class="pl-pricing-tag">Margin Keuntungan s/d 60%</div>
        </div>
        <ul class="pl-pricing-list">
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Hak Lisensi Keagenan Resmi Orchid Brand</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Pasokan Bibit DETERMAT, Parfum, Softener Harga Pabrik</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Mesin Pengaduk (Mixer) Racik Kimia Otomatis</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Drum Penampung, Jerigen, &amp; Botol Kemasan</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Hak Supply ke Puluhan Laundry di Kota Anda</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Pelatihan Formulasi Pembuatan Sabun &amp; Deterjen</li>
          <li><?php peluanglaundry_icon('check', 'pl-check-icon', 14); ?> Didukung Promosi Digital &amp; Leads Pelanggan</li>
        </ul>
        <div class="pl-pricing-foot">
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin, saya tertarik menjadi Master Agen / Depo Chemical Sabun Orchid Brand di kota saya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary" style="width:100%;">
            <span>Konsultasi Keagenan Depo</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Simulasi ROI / Efisiensi Biaya Operasional -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-roi-card">
      <div class="pl-roi-head">
        <span class="pl-section-tag" style="color:var(--accent);">SIMULASI EFISIENSI BIAYA</span>
        <h2 style="color:white; font-size:2rem; font-weight:800; margin-bottom:12px;">Berapa Penghematan Biaya dengan DETERMAT?</h2>
        <p style="color:var(--slate-300); max-width:680px; margin:0 auto;">Bandingkan biaya bahan kimia biasa dengan DETERMAT Orchid Brand. Hemat jutaan rupiah setiap bulan langsung menjadi laba bersih Anda.</p>
      </div>

      <div class="pl-roi-comparison">
        <div class="pl-roi-box pl-roi-old">
          <div class="pl-roi-label">Deterjen Cair Biasa / Beli Jadi</div>
          <div class="pl-roi-price">Rp 12.000 <span>/ liter</span></div>
          <p>Belum termasuk ongkir berat drum air yang mahal ke luar kota.</p>
          <div class="pl-roi-calc">Pengeluaran 300L/bln: <strong>Rp 3.600.000</strong></div>
        </div>

        <div class="pl-roi-divider">VS</div>

        <div class="pl-roi-box pl-roi-new">
          <div class="pl-roi-badge">Hemat 70%</div>
          <div class="pl-roi-label">DETERMAT Orchid Brand (Konsentrat)</div>
          <div class="pl-roi-price">Rp 3.500 <span>/ liter</span></div>
          <p>Hanya bayar ongkir 1 kg serbuk bahan, diolah jadi 20 liter di lokasi.</p>
          <div class="pl-roi-calc">Pengeluaran 300L/bln: <strong>Hanya Rp 1.050.000!</strong></div>
        </div>
      </div>

      <div class="pl-roi-summary">
        <?php peluanglaundry_icon('trending-up', 'pl-icon-inline', 20); ?>
        <span><strong>Hemat Hingga Rp 2.550.000 per Bulan!</strong> (Rp 30.600.000 per Tahun tambahan laba bersih untuk usaha laundry Anda)</span>
      </div>
    </div>
  </div>
</section>

<!-- Testimoni & Social Proof Mitra -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">TESTIMONI MITRA</span>
      <h2 class="pl-section-title">Dipercaya Oleh 1.200+ Pengusaha Laundry</h2>
      <p class="pl-section-desc">Inilah pengalaman nyata para mitra yang telah mempercayakan pasokan chemical dan paket usahanya kepada Orchid Brand.</p>
    </div>

    <div class="pl-testi-grid">
      <div class="pl-testi-card">
        <div class="pl-testi-stars">
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php peluanglaundry_icon('star', '', 16); ?>
          <?php endfor; ?>
        </div>
        <p class="pl-testi-quote">&ldquo;Sejak beralih ke DETERMAT konsentrat, biaya operasional laundry saya turun drastis hampir 60%. Hasil cucian tetap bersih cemerlang dan pelanggan suka aroma wanginya yang tahan berhari-hari.&rdquo;</p>
        <div class="pl-testi-author">
          <div class="pl-testi-avatar">H</div>
          <div>
            <strong>Bpk. Hendra Prasetyo</strong>
            <span>Owner Kiloan Fresh Laundry &mdash; Semarang</span>
          </div>
        </div>
      </div>

      <div class="pl-testi-card">
        <div class="pl-testi-stars">
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php peluanglaundry_icon('star', '', 16); ?>
          <?php endfor; ?>
        </div>
        <p class="pl-testi-quote">&ldquo;Saya mulai usaha laundry dari nol sama sekali tanpa pengalaman. Berkat Paket Komplit dari Orchid Brand dan bimbingan SOP-nya yang telaten, sekarang omset stabil dan sudah punya 2 cabang.&rdquo;</p>
        <div class="pl-testi-author">
          <div class="pl-testi-avatar">R</div>
          <div>
            <strong>Ibu Ratna Wulandari</strong>
            <span>Mitra Orchid Brand Laundry &mdash; Balikpapan</span>
          </div>
        </div>
      </div>

      <div class="pl-testi-card">
        <div class="pl-testi-stars">
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php peluanglaundry_icon('star', '', 16); ?>
          <?php endfor; ?>
        </div>
        <p class="pl-testi-quote">&ldquo;Pengiriman chemical ke Jayapura selalu jadi kendala ongkir mahal kalau beli sabun jerigen air. Untung ada bibit DETERMAT 1kg jadi 20L, ongkir kargo jadi sangat murah dan bisnis depo saya laris manis!&rdquo;</p>
        <div class="pl-testi-author">
          <div class="pl-testi-avatar">Y</div>
          <div>
            <strong>Bpk. Yohanes K.</strong>
            <span>Agen Depo Chemical Laundry &mdash; Jayapura, Papua</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Latest Articles & Education Feed -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">EDUKASI &amp; TIPS BISNIS</span>
      <h2 class="pl-section-title">Wawasan &amp; Panduan Sukses Usaha Laundry</h2>
      <p class="pl-section-desc">Artikel praktis, strategi promosi, dan panduan teknis perawatan pakaian dari tim riset Orchid Brand.</p>
    </div>

    <div class="pl-grid-3">
      <?php
      $latest_posts = new WP_Query(array(
          'posts_per_page'      => 6,
          'post_status'         => 'publish',
          'ignore_sticky_posts' => 1,
      ));

      if ($latest_posts->have_posts()) :
          while ($latest_posts->have_posts()) : $latest_posts->the_post();
              get_template_part('template-parts/cards/post-card');
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p style="text-align:center; grid-column:1/-1;">Belum ada artikel yang dipublikasikan.</p>';
      endif;
      ?>
    </div>

    <div style="text-align:center; margin-top:40px;">
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>" class="pl-btn pl-btn-secondary">
        <span>Lihat Semua Artikel Tips Laundry</span>
        <?php peluanglaundry_icon('arrow-right', '', 16); ?>
      </a>
    </div>
  </div>
</section>

<!-- FAQ Accordion Section -->
<section class="pl-section pl-section-light">
  <div class="pl-container pl-container-narrow">
    <div class="pl-section-head">
      <span class="pl-section-tag">PERTANYAAN UMUM</span>
      <h2 class="pl-section-title">Frequently Asked Questions (FAQ)</h2>
      <p class="pl-section-desc">Jawaban atas pertanyaan yang paling sering diajukan seputar kemitraan dan produk Orchid Brand.</p>
    </div>

    <div class="pl-faq-list">
      <details class="pl-faq-item" open>
        <summary class="pl-faq-question">Apakah kemitraan laundry ini ada royalti fee atau bagi hasil?</summary>
        <div class="pl-faq-answer">
          <p><strong>Tidak ada!</strong> Seluruh paket usaha laundry Orchid Brand adalah sistem jual putus / kemitraan mandiri tanpa royalti, tanpa fee bulanan, dan tanpa bagi hasil. 100% omset dan keuntungan adalah milik Anda sepenuhnya.</p>
        </div>
      </details>

      <details class="pl-faq-item">
        <summary class="pl-faq-question">Bagaimana cara mengolah paket bahan konsentrat DETERMAT?</summary>
        <div class="pl-faq-answer">
          <p>Sangat mudah dan praktis. Cukup siapkan air bersih (sebagian air panas) di wadah/drum, masukkan bahan konsentrat DETERMAT sesuai buku petunjuk SOP yang kami berikan, lalu aduk hingga larut merata. Dalam beberapa menit, 20 liter deterjen cair kental siap digunakan.</p>
        </div>
      </details>

      <details class="pl-faq-item">
        <summary class="pl-faq-question">Apakah melayani pengiriman ke luar pulau Jawa?</summary>
        <div class="pl-faq-answer">
          <p>Ya, kami melayani pengiriman ke seluruh pelosok Indonesia dari Sabang sampai Merauke. Kami bekerjasama dengan puluhan ekspedisi kargo terpercaya (darat, laut, dan udara) sehingga ongkos kirim dijamin paling ekonomis.</p>
        </div>
      </details>

      <details class="pl-faq-item">
        <summary class="pl-faq-question">Bagaimana cara memesan paket usaha atau menjadi agen chemical?</summary>
        <div class="pl-faq-answer">
          <p>Anda bisa langsung menekan tombol WhatsApp resmi yang tersedia di website ini untuk berkonsultasi dengan konsultan bisnis kami. Kami akan membantu menghitungkan kebutuhan modal, memberikan proposal lengkap, dan membimbing Anda hingga siap buka.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- Bottom Fullwidth Call to Action: Corporate Contact -->
<section class="pl-cta-section">
  <div class="pl-container">
    <div class="pl-cta-content">
      <div class="pl-badge" style="background:rgba(255,255,255,0.15); color:white; border-color:rgba(255,255,255,0.3);">
        <?php peluanglaundry_icon('phone', '', 14); ?>
        <span>Konsultasi Bebas Biaya Tanpa Komitmen</span>
      </div>
      <h2>Siap Memulai Bisnis Laundry Menguntungkan Hari Ini?</h2>
      <p>Diskusikan rencana usaha Anda bersama tim ahli PT Indotech Berkah Abadi. Dapatkan bimbingan SOP gratis, daftar harga grosir distributor, dan rekomendasi paket usaha terbaik.</p>
      
      <div class="pl-cta-actions">
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya siap konsultasi peluang bisnis laundry & agen chemical Orchid Brand.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-cta-wa-large">
          <?php peluanglaundry_icon('whatsapp', '', 20); ?>
          <span>Hubungi via WhatsApp (Respon Cepat)</span>
        </a>
        <a href="tel:+6282215840088" class="pl-btn pl-btn-call">
          <?php peluanglaundry_icon('phone', '', 18); ?>
          <span>Telepon: 0822-1584-0088</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
