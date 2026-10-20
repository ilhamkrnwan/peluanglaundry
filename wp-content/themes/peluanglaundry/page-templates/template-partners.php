<?php
/**
 * Template Name: Mitra & Portofolio Usaha Laundry (Social Proof)
 * Description: Template portofolio persebaran mitra, galeri foto outlet, testimoni kisah sukses, dan dokumentasi instalasi mesin di seluruh Indonesia.
 *
 * @package PeluangLaundry
 */

get_header();
?>

<!-- Page Hero -->
<section class="pl-page-hero">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill">
        <?php peluanglaundry_icon('award', 'pl-icon-inline', 14); ?>
        <span>PORTOFOLIO &amp; BUKTI SOSIAL NYATA</span>
      </div>
      <h1 class="pl-page-title">
        Jaringan Mitra Usaha Laundry se-Indonesia
      </h1>
      <p class="pl-page-subtitle">
        Lebih dari 500 pengusaha telah mempercayakan pendirian dan suplai operasional laundry kiloannya kepada PT Indotech Berkah Abadi sejak 2012 tanpa terbebani royalty fee.
      </p>

      <div class="pl-hero-actions" style="justify-content:center; margin-top:24px;">
        <a href="#galeri-outlet" class="pl-btn pl-btn-primary">
          <?php peluanglaundry_icon('package', '', 18); ?>
          <span>Lihat Galeri Outlet</span>
        </a>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya ingin bergabung menjadi mitra usaha laundry di kota saya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Daftar Jadi Mitra Baru</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="pl-section pl-section-light" style="padding:32px 0;">
  <div class="pl-container">
    <div class="pl-stats-bar">
      <div class="pl-stat-item">
        <div class="pl-stat-num">500+</div>
        <div class="pl-stat-label">Mitra Aktif Beroperasi</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">30+</div>
        <div class="pl-stat-label">Provinsi Terjangkau</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">12 Tahun</div>
        <div class="pl-stat-label">Pengalaman Industri Laundry</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">0%</div>
        <div class="pl-stat-label">Royalty Fee Seumur Hidup</div>
      </div>
    </div>
  </div>
</section>

<!-- Peta & Sebaran Wilayah Nasional -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">SEBARAN NASIONAL</span>
      <h2 class="pl-section-title">Outlet Mitra Kami Telah Hadir di Berbagai Penjuru</h2>
      <p class="pl-section-desc">Dengan dukungan rekanan ekspedisi kargo darat dan laut terpercaya, pengiriman mesin dan chemical kami menjangkau seluruh pulau di Indonesia.</p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px; margin-top:32px;">
      <!-- Wilayah 1 -->
      <div style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:24px;">
        <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
          <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:17px; font-weight:700; color:var(--dark);">Pulau Jawa &amp; Jabodetabek</h3>
        </div>
        <p style="font-size:13.5px; color:var(--slate-600); line-height:1.6;">
          Jakarta, Bogor, Depok, Tangerang, Bekasi, Bandung, Semarang, Solo, Yogyakarta (Pusat), Surabaya, Malang, dan sekitarnya.
        </p>
      </div>

      <!-- Wilayah 2 -->
      <div style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:24px;">
        <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
          <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:17px; font-weight:700; color:var(--dark);">Pulau Sumatera</h3>
        </div>
        <p style="font-size:13.5px; color:var(--slate-600); line-height:1.6;">
          Medan, Padang, Pekanbaru, Palembang, Lampung, Batam, Jambi, Bengkulu, hingga Banda Aceh.
        </p>
      </div>

      <!-- Wilayah 3 -->
      <div style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:24px;">
        <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
          <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:17px; font-weight:700; color:var(--dark);">Kalimantan &amp; Sulawesi</h3>
        </div>
        <p style="font-size:13.5px; color:var(--slate-600); line-height:1.6;">
          Balikpapan, Samarinda, Banjarmasin, Pontianak, Makassar, Manado, Kendari, Palu, dan Gorontalo.
        </p>
      </div>

      <!-- Wilayah 4 -->
      <div style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:24px;">
        <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
          <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:17px; font-weight:700; color:var(--dark);">Bali, Nusa Tenggara &amp; Papua</h3>
        </div>
        <p style="font-size:13.5px; color:var(--slate-600); line-height:1.6;">
          Denpasar, Mataram (Lombok), Kupang, Ambon, Sorong, Jayapura, hingga Merauke.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Galeri Outlet & Foto Serah Terima Mesin -->
<section class="pl-section pl-section-light" id="galeri-outlet">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">DOKUMENTASI OUTLET</span>
      <h2 class="pl-section-title">Galeri Outlet Aktif &amp; Instalasi Mesin</h2>
      <p class="pl-section-desc">Klik pada gambar untuk memperbesar dokumentasi outlet dan proses instalasi unit mesin di lokasi mitra.</p>
    </div>

    <div class="pl-gallery-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
      <!-- Item 1 -->
      <div class="pl-proof-card" style="background:#fff; border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--slate-200);">
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; background:#0f172a;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/paket-usaha-laundry.jpg'); ?>" alt="Outlet Laundry Kiloan Paket Komersial Sukses" class="pl-zoomable" style="width:100%; height:100%; object-fit:cover;">
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">OUTLET AKTIF</span>
        </div>
        <div style="padding:20px;">
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Outlet Kemitraan Yogyakarta</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Paket Sukses Komersial 2 Unit Washer &amp; 2 Dryer Gas. Rata-rata kapasitas cucian harian mencapai 120-150 kg pakaian.
          </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="pl-proof-card" style="background:#fff; border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--slate-200);">
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; background:#0f172a;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/determat.jpg'); ?>" alt="Instalasi Depo Sabun dan Bahan Kimia" class="pl-zoomable" style="width:100%; height:100%; object-fit:cover;">
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">DEPO SABUN</span>
        </div>
        <div style="padding:20px;">
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Depo Pengisian Sabun Solo</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Suplai rutin deterjen DETERMAT dan pewangi Orchid Brand untuk 15 outlet laundry rekanan di area Solo Raya.
          </p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="pl-proof-card" style="background:#fff; border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--slate-200);">
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; background:#0f172a;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/bisnis-laundry-eco-green.jpg'); ?>" alt="Outlet Laundry Ramah Lingkungan Orchid Brand" class="pl-zoomable" style="width:100%; height:100%; object-fit:cover;">
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">GREEN LAUNDRY</span>
        </div>
        <div style="padding:20px;">
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Outlet Eco-Laundry Bandung</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Mengusung konsep green laundry hemat air dengan deterjen matic busa rendah yang aman bagi lingkungan permukiman.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimoni Kisah Sukses Mitra -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">TESTIMONI MITRA</span>
      <h2 class="pl-section-title">Apa Kata Mereka yang Telah Bermitra?</h2>
      <p class="pl-section-desc">Pengalaman nyata para pemilik usaha yang membangun bisnis mandiri bersama PT Indotech Berkah Abadi.</p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:24px;">
      <!-- Testi 1 -->
      <div style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:28px; display:flex; flex-direction:column;">
        <div style="display:flex; gap:4px; color:#f59e0b; margin-bottom:16px;">
          ★★★★★
        </div>
        <blockquote style="font-size:14.5px; color:var(--slate-700); line-height:1.7; flex-grow:1; font-style:italic; margin-bottom:20px;">
          &ldquo;Yang paling melegakan adalah sistemnya beli putus tanpa royalti fee. Berapapun omset cucian tiap bulan 100% jadi milik saya. Suplai sabun DETERMAT juga bikin ongkos bahan kimia jadi sangat murah dibanding beli deterjen pabrikan biasa.&rdquo;
        </blockquote>
        <div style="border-top:1px solid var(--slate-100); padding-top:16px; display:flex; align-items:center; gap:12px;">
          <div style="width:40px; height:40px; border-radius:50%; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; font-weight:700;">
            BS
          </div>
          <div>
            <div style="font-weight:700; color:var(--dark); font-size:14.5px;">Bapak Setyawan</div>
            <div style="font-size:12.5px; color:var(--slate-500);">Pemilik Berkah Laundry, Sleman</div>
          </div>
        </div>
      </div>

      <!-- Testi 2 -->
      <div style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:28px; display:flex; flex-direction:column;">
        <div style="display:flex; gap:4px; color:#f59e0b; margin-bottom:16px;">
          ★★★★★
        </div>
        <blockquote style="font-size:14.5px; color:var(--slate-700); line-height:1.7; flex-grow:1; font-style:italic; margin-bottom:20px;">
          &ldquo;Pengiriman mesin ke Palembang sangat aman memakai packing peti kayu kokoh. Teknisi juga mendampingi lewat video call sampai instalasi pipa dan boiler selesai. Pelatihan SOP-nya sangat aplikatif untuk karyawan baru.&rdquo;
        </blockquote>
        <div style="border-top:1px solid var(--slate-100); padding-top:16px; display:flex; align-items:center; gap:12px;">
          <div style="width:40px; height:40px; border-radius:50%; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; font-weight:700;">
            IR
          </div>
          <div>
            <div style="font-weight:700; color:var(--dark); font-size:14.5px;">Ibu Rahmawati</div>
            <div style="font-size:12.5px; color:var(--slate-500);">Mitra Laundry Kiloan, Palembang</div>
          </div>
        </div>
      </div>

      <!-- Testi 3 -->
      <div style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:28px; display:flex; flex-direction:column;">
        <div style="display:flex; gap:4px; color:#f59e0b; margin-bottom:16px;">
          ★★★★★
        </div>
        <blockquote style="font-size:14.5px; color:var(--slate-700); line-height:1.7; flex-grow:1; font-style:italic; margin-bottom:20px;">
          &ldquo;Parfum Orchid Brand varian Sakura dan Akasia beneran disukai pelanggan kos-kosan di sini. Pakaian disimpan seminggu di lemari tetap wangi semerbak. Repeat order pelanggan jadi stabil tiap minggunya.&rdquo;
        </blockquote>
        <div style="border-top:1px solid var(--slate-100); padding-top:16px; display:flex; align-items:center; gap:12px;">
          <div style="width:40px; height:40px; border-radius:50%; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; font-weight:700;">
            AH
          </div>
          <div>
            <div style="font-weight:700; color:var(--dark); font-size:14.5px;">Mas Ahmad Hidayat</div>
            <div style="font-size:12.5px; color:var(--slate-500);">Mitra Express Laundry, Malang</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php
    set_query_var('order_box_title', 'Siap Membuka Outlet Laundry di Kota Anda?');
    set_query_var('order_box_subtitle', 'Diskusikan ketersediaan radius wilayah usaha, penyesuaian anggaran mesin, dan konsultasi lokasi bersama konsultan kami.');
    set_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya ingin konsultasi pembukaan outlet kemitraan laundry di wilayah saya.');
    get_template_part('template-parts/landing/order', 'box');
    ?>
  </div>
</section>

<?php get_footer(); ?>
