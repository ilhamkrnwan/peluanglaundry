<?php
/**
 * Template Name: Mitra & Portofolio Usaha Laundry (Social Proof)
 * Description: Template portofolio persebaran mitra, galeri foto outlet, testimoni kisah sukses, dan dokumentasi instalasi mesin di seluruh Indonesia.
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<!-- Page Hero -->
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill pl-pill-purple">
        <span>Portofolio &amp; Bukti Sosial Nyata</span>
      </div>
      <h1 class="pl-page-title">
        Jaringan Mitra Laundry
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em">se-Indonesia</span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h1>
      <p class="pl-page-subtitle">
        Lebih dari 500 pengusaha telah mempercayakan pendirian dan suplai operasional laundry kiloannya kepada PT Indotech Berkah Abadi sejak 2012 tanpa terbebani royalty fee.
      </p>

      <div class="pl-hero-actions-cute">
        <a href="#galeri-outlet" class="pl-btn-cute-primary">
          <?php peluanglaundry_icon('package', '', 18); ?>
          <span>Lihat Galeri Outlet</span>
        </a>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya ingin bergabung menjadi mitra usaha laundry di kota saya.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-wa">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Daftar Jadi Mitra Baru</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<section class="pl-section pl-section-light" style="padding:40px 0;">
  <div class="pl-container">
    <div class="pl-stats-bar pl-stats-bar-cute">
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-blue">500+</div>
        <div class="pl-stat-label">Mitra Aktif Beroperasi</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-green">34</div>
        <div class="pl-stat-label">Provinsi Terjangkau</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-orange">12 Tahun</div>
        <div class="pl-stat-label">Pengalaman Teruji</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-purple">0%</div>
        <div class="pl-stat-label">Royalty Fee Seumur Hidup</div>
      </div>
    </div>
  </div>
</section>

<!-- Peta & Sebaran Wilayah Nasional -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <h2 class="pl-section-title">Outlet Mitra Kami Telah Hadir di Berbagai Penjuru</h2>
      <p class="pl-section-desc">Dengan dukungan rekanan ekspedisi kargo darat dan laut terpercaya, pengiriman mesin dan chemical kami menjangkau seluruh pulau di Indonesia.</p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:28px; margin-top:32px;">
      <!-- Wilayah 1 -->
      <div>
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">
          <div style="width:34px; height:34px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:16.5px; font-weight:700; color:var(--dark);">Pulau Jawa &amp; Jabodetabek</h3>
        </div>
        <p style="font-size:13.5px; color:var(--slate-600); line-height:1.6;">
          Jakarta, Bogor, Depok, Tangerang, Bekasi, Bandung, Semarang, Solo, Yogyakarta (Pusat), Surabaya, Malang, dan sekitarnya.
        </p>
      </div>

      <!-- Wilayah 2 -->
      <div>
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">
          <div style="width:34px; height:34px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:16.5px; font-weight:700; color:var(--dark);">Pulau Sumatera</h3>
        </div>
        <p style="font-size:13.5px; color:var(--slate-600); line-height:1.6;">
          Medan, Padang, Pekanbaru, Palembang, Lampung, Batam, Jambi, Bengkulu, hingga Banda Aceh.
        </p>
      </div>

      <!-- Wilayah 3 -->
      <div>
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">
          <div style="width:34px; height:34px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:16.5px; font-weight:700; color:var(--dark);">Kalimantan &amp; Sulawesi</h3>
        </div>
        <p style="font-size:13.5px; color:var(--slate-600); line-height:1.6;">
          Balikpapan, Samarinda, Banjarmasin, Pontianak, Makassar, Manado, Kendari, Palu, dan Gorontalo.
        </p>
      </div>

      <!-- Wilayah 4 -->
      <div>
        <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">
          <div style="width:34px; height:34px; border-radius:8px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center;">
            <?php peluanglaundry_icon('map-pin', '', 18); ?>
          </div>
          <h3 style="font-size:16.5px; font-weight:700; color:var(--dark);">Bali, Nusa Tenggara &amp; Papua</h3>
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
      <h2 class="pl-section-title">Galeri Outlet Aktif &amp; Instalasi Mesin</h2>
      <p class="pl-section-desc">Klik pada gambar untuk memperbesar dokumentasi outlet dan proses instalasi unit mesin di lokasi mitra.</p>
    </div>

    <div class="pl-gallery-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:28px;">
      <!-- Item 1: Outlet Mitra Aktif -->
      <div class="pl-proof-item">
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; border-radius:var(--radius-md); background:#0f172a; margin-bottom:12px;">
          <?php peluanglaundry_image_slot('partner_outlet', array('sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">OUTLET AKTIF</span>
        </div>
        <div>
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Outlet Kemitraan Yogyakarta</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Paket Sukses Komersial dengan deretan mesin cuci front load &amp; pengering gas. Kapasitas harian mencapai 120-150 kg pakaian.
          </p>
        </div>
      </div>

      <!-- Item 2: Depo Isi Ulang Sabun -->
      <div class="pl-proof-item">
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; border-radius:var(--radius-md); background:#0f172a; margin-bottom:12px;">
          <?php peluanglaundry_image_slot('partner_depo', array('sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">DEPO SABUN</span>
        </div>
        <div>
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Depo Pengisian Sabun Solo</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Dispenser deterjen curah DETERMAT dan parfum Orchid Brand untuk melayani warga sekitar dan puluhan laundry rekanan.
          </p>
        </div>
      </div>

      <!-- Item 3: Mesin Komersial & Boiler -->
      <div class="pl-proof-item">
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; border-radius:var(--radius-md); background:#0f172a; margin-bottom:12px;">
          <?php peluanglaundry_image_slot('partner_machine', array('sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">UNIT MESIN</span>
        </div>
        <div>
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">Instalasi Mesin &amp; Boiler Uap</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Paket hardware komersial heavy-duty dengan boiler uap kuningan ganda bertekanan tinggi untuk hasil setrika licin cepat.
          </p>
        </div>
      </div>

      <!-- Item 4: Formulasi & QC Pabrik -->
      <div class="pl-proof-item">
        <div style="position:relative; aspect-ratio:4/3; overflow:hidden; border-radius:var(--radius-md); background:#0f172a; margin-bottom:12px;">
          <?php peluanglaundry_image_slot('partner_lab', array('sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
          <span class="pl-badge" style="position:absolute; bottom:12px; left:12px;">UJI LAB RESMI</span>
        </div>
        <div>
          <h3 style="font-size:16px; font-weight:700; color:var(--dark); margin-bottom:6px;">R&amp;D &amp; Quality Control</h3>
          <p style="font-size:13.5px; color:var(--slate-600); line-height:1.5;">
            Pengujian berkala formula deterjen ramah lingkungan agar selalu stabil, higienis, dan sesuai regulasi standar Kemenkes RI.
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
      <h2 class="pl-section-title">Apa Kata Mereka yang Telah Bermitra?</h2>
      <p class="pl-section-desc">Pengalaman nyata para pemilik usaha yang membangun bisnis mandiri bersama PT Indotech Berkah Abadi.</p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:36px;">
      <!-- Testi 1 -->
      <div style="display:flex; flex-direction:column;">
        <div style="display:flex; gap:4px; color:#f59e0b; margin-bottom:12px;">
          ★★★★★
        </div>
        <blockquote style="font-size:15px; color:var(--slate-700); line-height:1.7; flex-grow:1; font-style:italic; margin-bottom:18px;">
          &ldquo;Yang paling melegakan adalah sistemnya beli putus tanpa royalti fee. Berapapun omset cucian tiap bulan 100% jadi milik saya. Suplai sabun DETERMAT juga bikin ongkos bahan kimia jadi sangat murah dibanding beli deterjen pabrikan biasa.&rdquo;
        </blockquote>
        <div style="display:flex; align-items:center; gap:12px;">
          <div style="width:38px; height:38px; border-radius:50%; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:13px;">
            BS
          </div>
          <div>
            <div style="font-weight:700; color:var(--dark); font-size:14px;">Bapak Setyawan</div>
            <div style="font-size:12.5px; color:var(--slate-500);">Pemilik Berkah Laundry, Sleman</div>
          </div>
        </div>
      </div>

      <!-- Testi 2 -->
      <div style="display:flex; flex-direction:column;">
        <div style="display:flex; gap:4px; color:#f59e0b; margin-bottom:12px;">
          ★★★★★
        </div>
        <blockquote style="font-size:15px; color:var(--slate-700); line-height:1.7; flex-grow:1; font-style:italic; margin-bottom:18px;">
          &ldquo;Pengiriman mesin ke Palembang sangat aman memakai packing peti kayu kokoh. Teknisi juga mendampingi lewat video call sampai instalasi pipa dan boiler selesai. Pelatihan SOP-nya sangat aplikatif untuk karyawan baru.&rdquo;
        </blockquote>
        <div style="display:flex; align-items:center; gap:12px;">
          <div style="width:38px; height:38px; border-radius:50%; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:13px;">
            IR
          </div>
          <div>
            <div style="font-weight:700; color:var(--dark); font-size:14px;">Ibu Rahmawati</div>
            <div style="font-size:12.5px; color:var(--slate-500);">Mitra Laundry Kiloan, Palembang</div>
          </div>
        </div>
      </div>

      <!-- Testi 3 -->
      <div style="display:flex; flex-direction:column;">
        <div style="display:flex; gap:4px; color:#f59e0b; margin-bottom:12px;">
          ★★★★★
        </div>
        <blockquote style="font-size:15px; color:var(--slate-700); line-height:1.7; flex-grow:1; font-style:italic; margin-bottom:18px;">
          &ldquo;Parfum Orchid Brand varian Sakura dan Akasia beneran disukai pelanggan kos-kosan di sini. Pakaian disimpan seminggu di lemari tetap wangi semerbak. Repeat order pelanggan jadi stabil tiap minggunya.&rdquo;
        </blockquote>
        <div style="display:flex; align-items:center; gap:12px;">
          <div style="width:38px; height:38px; border-radius:50%; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:13px;">
            AH
          </div>
          <div>
            <div style="font-weight:700; color:var(--dark); font-size:14px;">Mas Ahmad Hidayat</div>
            <div style="font-size:12.5px; color:var(--slate-500);">Mitra Express Laundry, Malang</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Kemitraan Section -->
<section class="pl-section pl-section-tint">
  <div class="pl-container">
    <div class="pl-section-head">
      <div class="pl-section-pill-wrap">
        <span class="pl-section-pill">FAQ Kemitraan Laundry</span>
      </div>
      <h2 class="pl-section-title">Pertanyaan Seputar <span class="pl-text-highlight-orange">Kemitraan &amp; Kerjasama</span></h2>
      <p class="pl-section-desc">Kejelasan sistem kemitraan tanpa royalti, pendampingan SOP usaha, dan pengiriman mesin ke seluruh Indonesia.</p>
    </div>

    <div class="pl-faq-container-narrow">
      <div class="pl-faq-list">
        <details class="pl-faq-item" open>
          <summary class="pl-faq-question">Apakah ada royalti fee bulanan atau bagi hasil keuntungan?</summary>
          <div class="pl-faq-answer">
            <p><strong>Sama sekali tidak ada (0% Royalti).</strong> Sistem kemitraan Orchid Brand adalah jual putus resmi. Seluruh omset harian dan profit bulanan adalah milik Anda 100% tanpa ada potongan fee atau bagi hasil apa pun ke pihak pusat seumur hidup.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Apakah calon mitra pemula tanpa pengalaman bisa menjalankan bisnis ini?</summary>
          <div class="pl-faq-answer">
            <p><strong>Tentu saja bisa.</strong> Lebih dari 70% mitra kami memulai dari nol. Kami memberikan pelatihan intensif mulai dari teknik pemilahan pakaian, takaran deterjen presisi, cara setrika uap cepat dan rapi, hingga pengoperasian software kasir POS laundry agar bisnis berjalan terstruktur.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana dukungan promosi dan marketing saat pembukaan outlet?</summary>
          <div class="pl-faq-answer">
            <p>Setiap paket sudah dilengkapi desain materi promosi siap pakai (spanduk outdoor, banner kasir, brosur promo diskon kiloan), serta panduan strategi marketing lokal dan pendaftaran lokasi bisnis di Google Maps untuk menarik pelanggan sekitar dengan cepat.</p>
          </div>
        </details>

        <details class="pl-faq-item">
          <summary class="pl-faq-question">Berapa lama estimasi persiapan hingga outlet laundry siap beroperasi?</summary>
          <div class="pl-faq-answer">
            <p>Rata-rata membutuhkan waktu 7 hingga 14 hari kerja sejak penetapan paket, meliputi persiapan unit mesin, pengiriman ekspedisi berpeti kayu, penyesuaian instalasi pipa air/listrik di ruko, serta sesi pelatihan SOP karyawan.</p>
          </div>
        </details>
      </div>

      <div class="pl-faq-cta-card">
        <div class="pl-faq-cta-text">
          <h4>Ingin mendiskusikan ketersediaan wilayah atau simulasi modal di kota Anda?</h4>
          <p>Konsultasikan rencana usaha laundry Anda langsung bersama tim ahli kemitraan kami.</p>
        </div>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik membuka kemitraan laundry kiloan. Mohon info ketersediaan wilayah dan proposal paketnya.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-wa">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Konsultasi Kemitraan via WhatsApp</span>
        </a>
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

</main>

<?php get_footer(); ?>
