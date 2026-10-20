<?php
/**
 * Template Name: Halaman Kontak Perusahaan (Contact Us)
 * Description: Template resmi kontak kantor pusat, showroom, dan pabrik PT Indotech Berkah Abadi.
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
    <div class="pl-contact-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:24px;">
      <!-- Card 1: Kantor Pusat -->
      <div class="pl-contact-card" style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:28px;">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('map-pin', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Kantor Pusat &amp; Warehouse</h3>
        <p style="font-size:14px; color:var(--slate-600); line-height:1.6; margin-bottom:16px;">
          <strong>PT Indotech Berkah Abadi</strong><br>
          Jl. Palagan Tentara Pelajar, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581, Indonesia.
        </p>
        <span class="pl-badge" style="background:var(--slate-100); color:var(--slate-700);">Kunjungan Showroom &amp; Demo Mesin</span>
      </div>

      <!-- Card 2: Hotline WhatsApp -->
      <div class="pl-contact-card" style="background:#fff; border:2px solid var(--primary); border-radius:var(--radius-lg); padding:28px; box-shadow:0 12px 24px -8px rgba(5,150,105,0.15);">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary); color:#fff; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('whatsapp', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Hotline Konsultasi Kemitraan</h3>
        <p style="font-size:14px; color:var(--slate-600); line-height:1.6; margin-bottom:16px;">
          Konsultasi seputar pilihan paket mesin laundry, ketersediaan unit, dan perhitungan anggaran:
        </p>
        <div style="font-size:20px; font-weight:800; color:var(--primary); margin-bottom:16px;">
          0822-1584-0088
        </div>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi paket usaha laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%; justify-content:center;">
          <?php peluanglaundry_icon('whatsapp', '', 16); ?>
          <span>Chat via WhatsApp</span>
        </a>
      </div>

      <!-- Card 3: Jam Kerja -->
      <div class="pl-contact-card" style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:28px;">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('clock', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Jam Layanan Showroom</h3>
        <ul style="list-style:none; padding:0; margin:0; font-size:14px; color:var(--slate-700); line-height:2;">
          <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--slate-100); padding-bottom:6px;">
            <span>Senin – Jumat</span>
            <strong>08.00 – 17.00 WIB</strong>
          </li>
          <li style="display:flex; justify-content:space-between; border-bottom:1px solid var(--slate-100); padding-bottom:6px; padding-top:6px;">
            <span>Sabtu</span>
            <strong>08.00 – 15.00 WIB</strong>
          </li>
          <li style="display:flex; justify-content:space-between; padding-top:6px;">
            <span>Minggu &amp; Libur</span>
            <span style="color:var(--slate-500);">Layanan Online</span>
          </li>
        </ul>
      </div>

      <!-- Card 4: Divisi Chemical & Servis -->
      <div class="pl-contact-card" style="background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg); padding:28px;">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('droplet', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Divisi Suplai Chemical &amp; Depo</h3>
        <p style="font-size:14px; color:var(--slate-600); line-height:1.6; margin-bottom:16px;">
          Pemesanan deterjen curah DETERMAT, parfum laundry jerigen, pendaftaran keagenan depo, dan panduan teknisi:
        </p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Divisi Chemical Orchid Brand, saya ingin order bahan deterjen dan parfum laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary" style="width:100%; justify-content:center;">
          <?php peluanglaundry_icon('whatsapp', '', 16); ?>
          <span>Hubungi Divisi Chemical</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Box -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php
    set_query_var('order_box_title', 'Jadwalkan Kunjungan ke Showroom Kami');
    set_query_var('order_box_subtitle', 'Anda dapat melihat langsung unit mesin cuci komersial, mencoba simulasi setrika uap boiler, dan menguji kualitas parfum laundry Orchid Brand di showroom kami.');
    set_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya ingin menjadwalkan kunjungan ke showroom di Yogyakarta.');
    get_template_part('template-parts/landing/order', 'box');
    ?>
  </div>
</section>

<?php get_footer(); ?>
