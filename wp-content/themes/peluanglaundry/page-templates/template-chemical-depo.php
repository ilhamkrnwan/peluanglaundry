<?php
/**
 * Template Name: Ekosistem Chemical & Depo Sabun (Orchid Brand & Determat)
 * Description: Template khusus ekosistem bahan kimia laundry ramah lingkungan, deterjen konsentrat, parfum, dan peluang depo sabun curah.
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
        <?php peluanglaundry_icon('flask', 'pl-icon-inline', 14); ?>
        <span>MANUFAKTUR CHEMICAL RAMAH LINGKUNGAN</span>
      </div>
      <h1 class="pl-page-title">
        Ekosistem Chemical Laundry &amp; Depo Sabun Mandiri
      </h1>
      <p class="pl-page-subtitle">
        Diproduksi langsung oleh PT Indotech Berkah Abadi. Formulasi deterjen konsentrat rendah busa, parfum laundry tahan lama, dan konsep depo isi ulang sabun curah hemat ongkir hingga 80%.
      </p>

      <div class="pl-hero-actions" style="justify-content:center; margin-top:24px;">
        <a href="#katalog-produk" class="pl-btn pl-btn-primary">
          <?php peluanglaundry_icon('droplet', '', 18); ?>
          <span>Lihat Lini Produk</span>
        </a>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik peluang keagenan depo isi ulang sabun laundry di kota saya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Daftar Agen / Depo Sabun</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Chemical Value Stats -->
<section class="pl-section pl-section-light" style="padding:32px 0;">
  <div class="pl-container">
    <div class="pl-stats-bar">
      <div class="pl-stat-item">
        <div class="pl-stat-num">Kemenkes RI</div>
        <div class="pl-stat-label">Standar Mutu &amp; Izin Edar Resmi</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">80%</div>
        <div class="pl-stat-label">Hemat Biaya Ongkos Logistik</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">Low Suds</div>
        <div class="pl-stat-label">Aman Bagi Mesin Front Load</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num">150+</div>
        <div class="pl-stat-label">Depo Sabun Aktif se-Indonesia</div>
      </div>
    </div>
  </div>
</section>

<!-- Keunggulan Formulasi Hijau (Green Cleaning) -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">FORMULA UNGGULAN</span>
      <h2 class="pl-section-title">Mengapa Memilih Formulasi Orchid Brand &amp; DETERMAT?</h2>
      <p class="pl-section-desc">Diformulasikan oleh praktisi kimia kebersihan sejak 2012 untuk memberikan efisiensi biaya maksimal tanpa merusak pakaian dan mesin.</p>
    </div>

    <div class="pl-features-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:24px;">
      <!-- Feature 1 -->
      <div class="pl-card" style="padding:28px; background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg);">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('leaf', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Biodegradable &amp; Ramah Lingkungan</h3>
        <p style="color:var(--slate-600); font-size:14.5px; line-height:1.6;">
          Menggunakan surfaktan ramah lingkungan yang mudah terurai oleh mikroorganisme air tanah, bebas fosfat, dan tidak menimbulkan bau apek pada limbah buangan.
        </p>
      </div>

      <!-- Feature 2 -->
      <div class="pl-card" style="padding:28px; background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg);">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('shield-check', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Proteksi Komponen Mesin Cuci</h3>
        <p style="color:var(--slate-600); font-size:14.5px; line-height:1.6;">
          Formula rendah busa (Low Suds) khusus mesin komersial mencegah luapan busa masuk ke modul elektronik, bearing, dan elemen pemanas drum mesin.
        </p>
      </div>

      <!-- Feature 3 -->
      <div class="pl-card" style="padding:28px; background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg);">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('truck', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Inovasi Konsentrat Hemat Ongkir</h3>
        <p style="color:var(--slate-600); font-size:14.5px; line-height:1.6;">
          Dengan bibit DETERMAT, Anda hanya mengirim 1 kg bahan kering yang dapat diencerkan menjadi 20 liter sabun cair di lokasi Anda. Menghemat ongkir kargo hingga 80%.
        </p>
      </div>

      <!-- Feature 4 -->
      <div class="pl-card" style="padding:28px; background:#fff; border:1px solid var(--slate-200); border-radius:var(--radius-lg);">
        <div style="width:48px; height:48px; border-radius:12px; background:var(--primary-light); color:var(--primary); display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
          <?php peluanglaundry_icon('award', '', 24); ?>
        </div>
        <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:10px;">Parfum Tahan Lama Grade A</h3>
        <p style="color:var(--slate-600); font-size:14.5px; line-height:1.6;">
          Diformulasikan dengan fixative berkualitas tinggi dan bibit aroma impor pilihan (Sakura, Akasia, Snappy, Ocean Fresh) yang melekat hingga 15-30 hari di serat pakaian.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Katalog Lini Produk Utama -->
<section class="pl-section pl-section-light" id="katalog-produk">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag">KATALOG RESMI PABRIK</span>
      <h2 class="pl-section-title">Lini Produk Kimia Laundry Terlengkap</h2>
      <p class="pl-section-desc">Pasokan langsung dari pabrik PT Indotech Berkah Abadi dengan harga modal tangan pertama untuk mitra dan agen.</p>
    </div>

    <div class="pl-prod-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
      <!-- Product 1: DETERMAT Matic -->
      <div class="pl-prod-card" style="background:#fff; border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--slate-200); display:flex; flex-direction:column;">
        <div class="pl-prod-card-thumb" style="position:relative; aspect-ratio:4/3; background:#f1f5f9; overflow:hidden;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/determat.jpg'); ?>" alt="DETERMAT Konsentrat Deterjen Matic" class="pl-zoomable" style="width:100%; height:100%; object-fit:cover;">
          <span class="pl-badge" style="position:absolute; top:16px; right:16px;">BEST SELLER</span>
        </div>
        <div style="padding:24px; flex-grow:1; display:flex; flex-direction:column;">
          <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:8px;">DETERMAT Matic Low Suds (1 Kg)</h3>
          <p style="color:var(--slate-600); font-size:14px; line-height:1.5; margin-bottom:16px; flex-grow:1;">
            Paket bahan konsentrat deterjen cair. 1 paket seberat 1 kg dapat dilarutkan menjadi 20 Liter deterjen cair matic siap pakai dengan daya cuci tinggi.
          </p>
          <div style="padding:12px; background:var(--primary-light); border-radius:var(--radius-md); margin-bottom:16px;">
            <div style="font-size:12px; color:var(--primary); font-weight:600;">HASIL JADI SETELAH DILARUTKAN:</div>
            <div style="font-size:16px; font-weight:800; color:var(--primary-dark);">20 Liter Deterjen Cair</div>
          </div>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin memesan DETERMAT Matic Low Suds 1 Kg.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Pesan via WhatsApp</span>
          </a>
        </div>
      </div>

      <!-- Product 2: Parfum Laundry Grade A -->
      <div class="pl-prod-card" style="background:#fff; border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--slate-200); display:flex; flex-direction:column;">
        <div class="pl-prod-card-thumb" style="position:relative; aspect-ratio:4/3; background:#f1f5f9; overflow:hidden;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/bisnis-laundry-eco-green.jpg'); ?>" alt="Bibit Parfum Laundry Orchid Brand" class="pl-zoomable" style="width:100%; height:100%; object-fit:cover;">
          <span class="pl-badge" style="position:absolute; top:16px; right:16px;">WANGI MEWAH</span>
        </div>
        <div style="padding:24px; flex-grow:1; display:flex; flex-direction:column;">
          <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:8px;">Parfum Laundry Orchid Grade A+</h3>
          <p style="color:var(--slate-600); font-size:14px; line-height:1.5; margin-bottom:16px; flex-grow:1;">
            Parfum semprot siap pakai dan bibit biang murni. Bebas bercak pada serat kain, tahan panas setrika, dan mengunci keharuman di dalam kemasan plastik laundry.
          </p>
          <div style="padding:12px; background:var(--primary-light); border-radius:var(--radius-md); margin-bottom:16px;">
            <div style="font-size:12px; color:var(--primary); font-weight:600;">PILIHAN VARIAN FAVORIT:</div>
            <div style="font-size:14px; font-weight:700; color:var(--primary-dark);">Sakura, Akasia, Snappy, Ocean Fresh</div>
          </div>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin memesan Parfum Laundry Orchid Grade A+.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Pesan via WhatsApp</span>
          </a>
        </div>
      </div>

      <!-- Product 3: Softener & Pelicin -->
      <div class="pl-prod-card" style="background:#fff; border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--slate-200); display:flex; flex-direction:column;">
        <div class="pl-prod-card-thumb" style="position:relative; aspect-ratio:4/3; background:#f1f5f9; overflow:hidden;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/paket-usaha-laundry.jpg'); ?>" alt="Softener dan Pelicin Setrika" class="pl-zoomable" style="width:100%; height:100%; object-fit:cover;">
          <span class="pl-badge" style="position:absolute; top:16px; right:16px;">ANTI KUSUT</span>
        </div>
        <div style="padding:24px; flex-grow:1; display:flex; flex-direction:column;">
          <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:8px;">Softener &amp; Pelicin Setrika</h3>
          <p style="color:var(--slate-600); font-size:14px; line-height:1.5; margin-bottom:16px; flex-grow:1;">
            Kombinasi pelembut serat kain pakaian dan cairan pelicin setrika. Mempercepat proses finishing setrika uap hingga 30% dan memberikan efek halus bebas kusut.
          </p>
          <div style="padding:12px; background:var(--primary-light); border-radius:var(--radius-md); margin-bottom:16px;">
            <div style="font-size:12px; color:var(--primary); font-weight:600;">KEMASAN TERSEDIA:</div>
            <div style="font-size:16px; font-weight:800; color:var(--primary-dark);">Jerigen 5L &amp; Drum 200L</div>
          </div>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin memesan Softener & Pelicin Pakaian.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Pesan via WhatsApp</span>
          </a>
        </div>
      </div>

      <!-- Product 4: Spotting Agent Anti-Noda -->
      <div class="pl-prod-card" style="background:#fff; border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--slate-200); display:flex; flex-direction:column;">
        <div class="pl-prod-card-thumb" style="position:relative; aspect-ratio:4/3; background:#f1f5f9; overflow:hidden;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/determat.jpg'); ?>" alt="Spotting Agent Pembersih Noda" class="pl-zoomable" style="width:100%; height:100%; object-fit:cover;">
          <span class="pl-badge" style="position:absolute; top:16px; right:16px;">SPESIALIS NODA</span>
        </div>
        <div style="padding:24px; flex-grow:1; display:flex; flex-direction:column;">
          <h3 style="font-size:18px; font-weight:700; color:var(--dark); margin-bottom:8px;">Paket Anti-Noda (Spotting Agent)</h3>
          <p style="color:var(--slate-600); font-size:14px; line-height:1.5; margin-bottom:16px; flex-grow:1;">
            Formula khusus pembersih noda membandel: Anti Noda Darah, Anti Noda Karat, Pembersih Kerah Baju, Peluntur Lemak/Minyak, dan Pencerah Warna (Oxy Bleach).
          </p>
          <div style="padding:12px; background:var(--primary-light); border-radius:var(--radius-md); margin-bottom:16px;">
            <div style="font-size:12px; color:var(--primary); font-weight:600;">KEUNGGULAN:</div>
            <div style="font-size:16px; font-weight:800; color:var(--primary-dark);">Tidak Merusak Serat Kain</div>
          </div>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya butuh Paket Spotting Agent Anti-Noda.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="justify-content:center;">
            <?php peluanglaundry_icon('whatsapp', '', 16); ?>
            <span>Pesan via WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Konsep Bisnis Depo Isi Ulang Sabun Curah -->
<section class="pl-section">
  <div class="pl-container">
    <div style="background:linear-gradient(135deg, #064e3b 0%, #0f172a 100%); border-radius:var(--radius-xl); padding:48px 40px; color:#fff;">
      <div style="max-width:800px; margin:0 auto; text-align:center;">
        <span class="pl-badge" style="background:rgba(255,255,255,0.15); color:#a7f3d0; margin-bottom:16px;">PELUANG REVENUE GANDA</span>
        <h2 style="font-size:32px; font-weight:800; color:#fff; margin-bottom:16px; line-height:1.3;">
          Konsep Depo Isi Ulang Sabun: Jadikan Outlet Laundry Anda Pusat Suplai di Lingkungan Sekitar
        </h2>
        <p style="font-size:16px; color:#cbd5e1; line-height:1.7; margin-bottom:32px;">
          Selain melayani jasa cuci kiloan, outlet Anda bisa difungsikan sebagai <strong>Depo Pengisian Sabun Curah</strong>. Warga sekitar dapat membawa botol atau jerigen sendiri untuk membeli deterjen dan softener berkualitas pabrik dengan harga yang jauh lebih hemat dibanding produk retail di minimarket.
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:20px; text-align:left; margin-bottom:36px;">
          <div style="background:rgba(255,255,255,0.08); padding:20px; border-radius:var(--radius-md); border:1px solid rgba(255,255,255,0.12);">
            <div style="font-size:24px; font-weight:800; color:#34d399; margin-bottom:6px;">Margin s/d 60%</div>
            <div style="font-size:14px; color:#cbd5e1;">Keuntungan tinggi dari penjualan cairan eceran ke masyarakat dan hotel sekitar.</div>
          </div>
          <div style="background:rgba(255,255,255,0.08); padding:20px; border-radius:var(--radius-md); border:1px solid rgba(255,255,255,0.12);">
            <div style="font-size:24px; font-weight:800; color:#34d399; margin-bottom:6px;">Repeat Order Tinggi</div>
            <div style="font-size:14px; color:#cbd5e1;">Kebutuhan sabun cuci harian rumah tangga menciptakan perputaran cashflow rutin.</div>
          </div>
          <div style="background:rgba(255,255,255,0.08); padding:20px; border-radius:var(--radius-md); border:1px solid rgba(255,255,255,0.12);">
            <div style="font-size:24px; font-weight:800; color:#34d399; margin-bottom:6px;">Hak Wilayah Eksklusif</div>
            <div style="font-size:14px; color:#cbd5e1;">Proteksi radius wilayah keagenan agar tidak saling kanibal antar sesama agen.</div>
          </div>
        </div>

        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo PT Indotech Berkah Abadi, saya berminat membuka Depo Isi Ulang Sabun Curah di lokasi saya. Mohon informasi syarat dan paket perintisnya.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="background:#10b981; font-size:16px; padding:14px 28px;">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Konsultasi Syarat Keagenan Depo</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Box -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php
    set_query_var('order_box_title', 'Dapatkan Sampel Formulasi &amp; Pricelist Grosir');
    set_query_var('order_box_subtitle', 'Konsultasikan kebutuhan suplai chemical laundry kiloan, hotel, atau depo sabun curah Anda langsung dengan tim formulator kami.');
    set_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya ingin meminta katalog harga grosir chemical dan info sampel produk.');
    get_template_part('template-parts/landing/order', 'box');
    ?>
  </div>
</section>

<?php get_footer(); ?>
