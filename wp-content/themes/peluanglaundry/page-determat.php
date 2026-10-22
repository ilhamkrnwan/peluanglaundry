<?php
/**
 * Template Name: Halaman Produk DETERMAT (Bibit Konsentrat Deterjen)
 * Description: Landing page produk DETERMAT konsentrat sabun laundry 1 kg jadi 20 liter hemat ongkir.
 *
 * @package PeluangLaundry
 */

get_header();

$wa_order_matic = peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin memesan DETERMAT Matic (Low Suds) 1 Kg. Mohon info ketersediaan stok.');
$wa_order_extra = peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin memesan DETERMAT Extra Busa 1 Kg. Mohon info ketersediaan stok.');
$wa_order_eco   = peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin memesan DETERMAT Eco (Ekonomis) 1 Kg. Mohon info ketersediaan stok.');
$wa_konsultasi  = peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi bibit konsentrat DETERMAT 1 kg jadi 20 liter untuk kebutuhan usaha saya.');

$img_matic = content_url('/uploads/2023/08/DETERMAT-MATIC-WEB.png');
$img_extra = content_url('/uploads/2023/08/DETERMAT-EXTRA-BUSA-WEB.jpg');
$img_eco   = content_url('/uploads/2023/08/NEW-DETERMAT-ECO-6.jpg');

$toped_url  = get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat');
$shopee_url = get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755');
?>

<main id="main">

<!-- Page Hero: Playful Cute Smooth Motion -->
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>

      <div class="pl-hero-pill pl-pill-blue">
        <span>💧 Bibit Konsentrat Deterjen Laundry Kiloan No. 1</span>
      </div>

      <h1 class="pl-page-title">
        DETERMAT™ Konsentrat Sabun
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em">1 Kg Jadi 20 Liter</span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h1>

      <p class="pl-page-subtitle">
        Inovasi formulasi bibit deterjen cair dari pabrik Orchid Brand (PT Indotech Berkah Abadi). Pangkas biaya ongkos kirim hingga 80%, hemat HPP cuci hingga Rp 3.000-an per liter, dan hasil cucian bersih cemerlang tanpa merusak mesin cuci front load maupun top load.
      </p>

      <div class="pl-hero-actions-cute">
        <a href="#varian-determat" class="pl-btn-cute-primary">
          <span>Pilih Varian DETERMAT</span>
          <span class="pl-btn-icon-bubble" aria-hidden="true">&darr;</span>
        </a>
        <a href="<?php echo esc_url($wa_konsultasi); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Konsultasi &amp; Sample via WA</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Stats Highlight Bar -->
<section class="pl-section pl-section-light" style="padding: 36px 0;">
  <div class="pl-container">
    <div class="pl-stats-bar pl-stats-bar-cute">
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-blue">1 Kg : 20 L</div>
        <div class="pl-stat-label">Rasio Hasil Jadi Maksimal</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-green">80%</div>
        <div class="pl-stat-label">Pangkas Ongkir Seluruh RI</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-purple">Low Suds</div>
        <div class="pl-stat-label">Aman Mesin Cuci Front Load</div>
      </div>
      <div class="pl-stat-item">
        <div class="pl-stat-num pl-color-orange">Halal &amp; SNI</div>
        <div class="pl-stat-label">Formula Ramah Lingkungan</div>
      </div>
    </div>
  </div>
</section>

<!-- Komparasi Penghematan Biaya (Calculator Box) -->
<section class="pl-section" id="kalkulator">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag" style="background:#ecfdf5; color:#059669; padding:4px 12px; border-radius:999px; font-size:12px; font-weight:800; display:inline-block; margin-bottom:10px;">KOMPARASI PENGHEMATAN BIAYA</span>
      <h2 class="pl-section-title">Bandingkan Biaya: Jerigen Cair Biasa vs DETERMAT™</h2>
      <p class="pl-section-desc">Mengapa ratusan pengusaha laundry dan pemilik depo isi ulang beralih ke DETERMAT? Lihat simulasi per 100 Liter deterjen berikut.</p>
    </div>

    <div class="pl-determat-calc">
      <div class="pl-calc-grid">
        <!-- Box Konvensional -->
        <div class="pl-calc-box-bad">
          <div class="pl-calc-box-title" style="color:#b91c1c;">
            <span>❌ Beli Deterjen Cair Jerigen Jadi (100 L)</span>
          </div>
          <ul class="pl-calc-list">
            <li>
              <span>Harga 5 Jerigen (@20 Liter)</span>
              <strong>Rp 300.000 - Rp 375.000</strong>
            </li>
            <li>
              <span>Ongkir Kargo Bobot 100 Kg</span>
              <strong>Rp 250.000 - Rp 450.000</strong>
            </li>
            <li>
              <span>Risiko Pengiriman</span>
              <span style="color:#b91c1c;">Rentan bocor / pecah jerigen</span>
            </li>
            <li>
              <span>Kapasitas Ruang Simpan</span>
              <span>Makan tempat gudang outlet</span>
            </li>
          </ul>
          <div class="pl-calc-total" style="border-color:#fca5a5; color:#991b1b;">
            <span>Total Modal Per 100 Liter</span>
            <span style="font-size:20px;">Rp 550.000 - Rp 825.000</span>
          </div>
          <div style="font-size:12px; color:#b91c1c; margin-top:8px; text-align:right;">
            HPP Cuci: Rp 5.500 - Rp 8.250 / Liter
          </div>
        </div>

        <!-- Box DETERMAT -->
        <div class="pl-calc-box-good">
          <div class="pl-calc-badge-best">PILIHAN HEMAT JUARA</div>
          <div class="pl-calc-box-title" style="color:#047857;">
            <span>✅ Bikin Sendiri dengan DETERMAT™ (100 L)</span>
          </div>
          <ul class="pl-calc-list">
            <li>
              <span>Harga 5 Pack DETERMAT (Hasil 100 L)</span>
              <strong>Rp 275.000 - Rp 325.000</strong>
            </li>
            <li>
              <span>Ongkir Kargo Bobot HANYA 5 Kg</span>
              <strong>Rp 35.000 - Rp 60.000</strong>
            </li>
            <li>
              <span>Risiko Pengiriman</span>
              <span style="color:#047857;">Aman anti tumpah, pouch tebal</span>
            </li>
            <li>
              <span>Kapasitas Ruang Simpan</span>
              <span>Ringkas, cukup 1 kardus kecil</span>
            </li>
          </ul>
          <div class="pl-calc-total" style="border-color:#a7f3d0; color:#065f46;">
            <span>Total Modal Per 100 Liter</span>
            <span style="font-size:22px; color:#059669;">Rp 310.000 - Rp 385.000</span>
          </div>
          <div style="font-size:13px; font-weight:800; color:#059669; margin-top:8px; text-align:right;">
            🎉 Hemat Lebih dari Rp 300.000+ (HPP hanya ~Rp 3.100 / Liter)
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3 Pilihan Varian DETERMAT -->
<section class="pl-section pl-section-light" id="varian-determat">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag" style="background:#e0f2fe; color:#0369a1; padding:4px 12px; border-radius:999px; font-size:12px; font-weight:800; display:inline-block; margin-bottom:10px;">FORMULASI KHUSUS MESIN &amp; CUCI</span>
      <h2 class="pl-section-title">3 Pilihan Varian DETERMAT Sesuai Kebutuhan Anda</h2>
      <p class="pl-section-desc">Pilih varian formula yang paling pas dengan jenis mesin cuci di outlet laundry Anda atau segmen pasar penjualan depo sabun Anda.</p>
    </div>

    <div class="pl-determat-varian-grid">
      <!-- Varian 1: DETERMAT Matic -->
      <div class="pl-determat-card pl-varian-popular">
        <div class="pl-determat-card-img-wrap">
          <img src="<?php echo esc_url($img_matic); ?>" alt="DETERMAT Matic Rendah Busa" class="pl-determat-card-img" loading="lazy" />
        </div>
        <div class="pl-determat-card-body">
          <span class="pl-determat-varian-badge pl-badge-matic">MATIC &bull; LOW SUDS (BEST SELLER)</span>
          <h3 class="pl-determat-varian-title">DETERMAT™ Matic</h3>
          <p class="pl-determat-varian-desc">Khusus mesin cuci Front Load dan Top Load digital otomatis. Busa rendah mempercepat bilas, hemat air, dan melindungi modul PCB elektronik.</p>
          
          <div class="pl-determat-price-row">
            <span class="pl-determat-price-main">Rp 65.000</span>
            <span class="pl-determat-price-yield">Hasil 20 Liter</span>
          </div>

          <ul class="pl-determat-specs-list">
            <li>✓ <span><strong>Low Suds Formula:</strong> Aman 100% untuk mesin front load</span></li>
            <li>✓ <span><strong>Pilihan Aroma:</strong> Sakura, Downy Passion, Molto Blue</span></li>
            <li>✓ <span><strong>Enzim Aktif:</strong> Angkat noda minyak &amp; daki bandel</span></li>
            <li>✓ <span><strong>Hemat Air &amp; Waktu:</strong> Cukup 1-2 kali bilas bersih</span></li>
          </ul>

          <div class="pl-determat-card-actions">
            <a href="<?php echo esc_url($wa_order_matic); ?>" target="_blank" rel="noopener" class="pl-btn-cute-primary" style="width:100%; justify-content:center;">
              <?php peluanglaundry_icon('whatsapp', '', 18); ?>
              <span>Pesan DETERMAT Matic via WA</span>
            </a>
            <a href="<?php echo esc_url($toped_url); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary" style="width:100%; justify-content:center;">
              <span>Beli di Tokopedia Official</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Varian 2: DETERMAT Extra Busa -->
      <div class="pl-determat-card">
        <div class="pl-determat-card-img-wrap">
          <img src="<?php echo esc_url($img_extra); ?>" alt="DETERMAT Extra Busa" class="pl-determat-card-img" loading="lazy" />
        </div>
        <div class="pl-determat-card-body">
          <span class="pl-determat-varian-badge pl-badge-extra">HIGH FOAM &bull; CUCI MANUAL</span>
          <h3 class="pl-determat-varian-title">DETERMAT™ Extra Busa</h3>
          <p class="pl-determat-varian-desc">Formula busa melimpah untuk mesin cuci 2 tabung manual, cuci rendam pakaian kerja noda berat, dan penjualan retail di toko kimia/depo sabun.</p>
          
          <div class="pl-determat-price-row">
            <span class="pl-determat-price-main">Rp 65.000</span>
            <span class="pl-determat-price-yield">Hasil 20 Liter</span>
          </div>

          <ul class="pl-determat-specs-list">
            <li>✓ <span><strong>Busa Melimpah:</strong> Sensasi busa tebal disukai konsumen</span></li>
            <li>✓ <span><strong>Ideal Tabung 2:</strong> Cocok untuk mesin cuci 2 tabung manual</span></li>
            <li>✓ <span><strong>Daya Angkat Kuat:</strong> Meluruhkan noda seragam kotor &amp; celana kerja</span></li>
            <li>✓ <span><strong>Wangi Segar:</strong> Pilihan aroma tahan lama saat perendaman</span></li>
          </ul>

          <div class="pl-determat-card-actions">
            <a href="<?php echo esc_url($wa_order_extra); ?>" target="_blank" rel="noopener" class="pl-btn-cute-primary" style="width:100%; justify-content:center;">
              <?php peluanglaundry_icon('whatsapp', '', 18); ?>
              <span>Pesan Extra Busa via WA</span>
            </a>
            <a href="<?php echo esc_url($shopee_url); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary" style="width:100%; justify-content:center;">
              <span>Beli di Shopee Official</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Varian 3: DETERMAT Eco -->
      <div class="pl-determat-card">
        <div class="pl-determat-card-img-wrap">
          <img src="<?php echo esc_url($img_eco); ?>" alt="DETERMAT Eco Ekonomis" class="pl-determat-card-img" loading="lazy" />
        </div>
        <div class="pl-determat-card-body">
          <span class="pl-determat-varian-badge pl-badge-eco">EKONOMIS &bull; CUSTOM AROMA</span>
          <h3 class="pl-determat-varian-title">DETERMAT™ Eco</h3>
          <p class="pl-determat-varian-desc">Varian paling hemat untuk laundry kiloan partai besar, RS, asrama, dan depo isi ulang. Formula netral yang siap dicampur bibit aroma racikan sendiri.</p>
          
          <div class="pl-determat-price-row">
            <span class="pl-determat-price-main">Rp 55.000</span>
            <span class="pl-determat-price-yield">Hasil 20 Liter</span>
          </div>

          <ul class="pl-determat-specs-list">
            <li>✓ <span><strong>HPP Terendah:</strong> Hanya ~Rp 2.750 per liter sabun cair</span></li>
            <li>✓ <span><strong>Formula Netral:</strong> Bebas pewangi, bebas custom aroma</span></li>
            <li>✓ <span><strong>Detergensi Tinggi:</strong> Efektif untuk linen, sprei, dan handuk</span></li>
            <li>✓ <span><strong>Ramah Lingkungan:</strong> Biodegradable &amp; aman untuk septic tank</span></li>
          </ul>

          <div class="pl-determat-card-actions">
            <a href="<?php echo esc_url($wa_order_eco); ?>" target="_blank" rel="noopener" class="pl-btn-cute-primary" style="width:100%; justify-content:center;">
              <?php peluanglaundry_icon('whatsapp', '', 18); ?>
              <span>Pesan DETERMAT Eco via WA</span>
            </a>
            <a href="<?php echo esc_url($toped_url); ?>" target="_blank" rel="noopener" class="pl-btn-cute-secondary" style="width:100%; justify-content:center;">
              <span>Beli di Marketplace Resmi</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4 Langkah Pengolahan DETERMAT -->
<section class="pl-section" id="cara-olah">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag" style="background:#ecfdf5; color:#059669; padding:4px 12px; border-radius:999px; font-size:12px; font-weight:800; display:inline-block; margin-bottom:10px;">MUDAH DIOLAH SENDIRI</span>
      <h2 class="pl-section-title">4 Langkah Mengolah DETERMAT Menjadi 20 Liter Deterjen Cair</h2>
      <p class="pl-section-desc">Tidak perlu keahlian kimia dan tanpa mesin pabrik mahal. Cukup sediakan ember dan air bersih biasa.</p>
    </div>

    <div class="pl-process-grid">
      <!-- Step 1 -->
      <div class="pl-process-card">
        <div class="pl-process-step-num">01</div>
        <h3 class="pl-process-step-title">Siapkan Air Bersih</h3>
        <p class="pl-process-step-desc">Siapkan 19 Liter air bersih suhu ruang biasa di dalam ember besar, jerigen terbuka, atau drum plastik bersih.</p>
      </div>

      <!-- Step 2 -->
      <div class="pl-process-card">
        <div class="pl-process-step-num">02</div>
        <h3 class="pl-process-step-title">Tuang Bahan DETERMAT</h3>
        <p class="pl-process-step-desc">Buka 1 pack kemasan DETERMAT (1 Kg), lalu tuangkan seluruh isinya ke dalam air bersih tersebut secara perlahan.</p>
      </div>

      <!-- Step 3 -->
      <div class="pl-process-card">
        <div class="pl-process-step-num">03</div>
        <h3 class="pl-process-step-title">Aduk 5 - 10 Menit</h3>
        <p class="pl-process-step-desc">Aduk campuran secara perlahan dan merata menggunakan tongkat pengaduk selama 5-10 menit sampai formula larut menyatu sempurna.</p>
      </div>

      <!-- Step 4 -->
      <div class="pl-process-card">
        <div class="pl-process-step-num">04</div>
        <h3 class="pl-process-step-title">Diamkan &amp; Siap Pakai</h3>
        <p class="pl-process-step-desc">Diamkan 15-30 menit agar busa awal mengendap dan mengental. 20 Liter deterjen cair siap dipakai mencuci atau dikemas!</p>
      </div>
    </div>
  </div>
</section>

<!-- 6 Keunggulan Formula Teknologi DETERMAT -->
<section class="pl-section pl-section-light" id="keunggulan">
  <div class="pl-container">
    <div class="pl-section-head">
      <span class="pl-section-tag" style="background:#f1f5f9; color:#475569; padding:4px 12px; border-radius:999px; font-size:12px; font-weight:800; display:inline-block; margin-bottom:10px;">STANDAR MUTU PABRIK</span>
      <h2 class="pl-section-title">Keunggulan Teknologi Formulasi DETERMAT™</h2>
      <p class="pl-section-desc">Diriset secara konsisten oleh formulator kimia PT Indotech Berkah Abadi demi hasil cucian higienis standar binatu hotel.</p>
    </div>

    <div class="pl-tech-grid">
      <div class="pl-tech-card">
        <div class="pl-tech-icon">🧪</div>
        <h3 class="pl-tech-title">Bio-Enzim Aktif Pengangkat Noda</h3>
        <p class="pl-tech-desc">Mengandung enzim protease dan lipase yang mengurai noda lemak makanan, noda darah, kuah santan, dan daki tanpa merusak serat kain pakaian.</p>
      </div>

      <div class="pl-tech-card">
        <div class="pl-tech-icon">🛡️</div>
        <h3 class="pl-tech-title">Teknologi Anti-Redeposisi</h3>
        <p class="pl-tech-desc">Mencegah partikel kotoran yang telah terlepas dari pakaian menempel kembali ke pakaian lain selama proses pencucian dalam drum.</p>
      </div>

      <div class="pl-tech-card">
        <div class="pl-tech-icon">✨</div>
        <h3 class="pl-tech-title">Optical Brightener Agent (OBA)</h3>
        <p class="pl-tech-desc">Menjaga kecemerlangan warna pakaian putih tetap cemerlang bersinar dan pakaian berwarna gelap tidak cepat pudar kusam.</p>
      </div>

      <div class="pl-tech-card">
        <div class="pl-tech-icon">🌿</div>
        <h3 class="pl-tech-title">Surfactant Biodegradable</h3>
        <p class="pl-tech-desc">Formula ramah lingkungan yang mudah terurai di saluran pembuangan air dan ramah terhadap instalasi pengolahan limbah (IPAL).</p>
      </div>

      <div class="pl-tech-card">
        <div class="pl-tech-icon">⚖️</div>
        <h3 class="pl-tech-title">pH Seimbang &amp; Anti-Korosi</h3>
        <p class="pl-tech-desc">Formula lembut di tangan dan tidak menyebabkan karat atau korosi pada tabung stainless steel mesin cuci komersial Anda.</p>
      </div>

      <div class="pl-tech-card">
        <div class="pl-tech-icon">📦</div>
        <h3 class="pl-tech-title">Pouch Kedap Udara Tahan 2 Tahun</h3>
        <p class="pl-tech-desc">Kemasan tebal berstandar ekspor yang tahan disimpan hingga 24 bulan dan aman dari benturan ekspedisi saat pengiriman antarpulau.</p>
      </div>
    </div>
  </div>
</section>

<!-- Peluang Agen & Depo Sabun -->
<section class="pl-section pl-section-tint">
  <div class="pl-container">
    <div style="background:#ffffff; border:2px solid #a7f3d0; border-radius:28px; padding:44px 36px; text-align:center; box-shadow:0 12px 32px -6px rgba(5, 150, 105, 0.12); max-width:860px; margin:0 auto;">
      <span class="pl-badge" style="background:#ecfdf5; color:#059669; margin-bottom:14px; display:inline-block;">PELUANG RESELLER &amp; DEPO SABUN</span>
      <h2 style="font-size:28px; font-weight:800; color:#0f172a; margin-bottom:12px;">Tertarik Menjadi Agen DETERMAT di Kota Anda?</h2>
      <p style="font-size:15px; color:#475569; line-height:1.65; max-width:680px; margin:0 auto 24px;">
        Buka peluang bisnis pengisian sabun curah atau agen chemical laundry di wilayah Anda. Dapatkan harga grosir pabrik tangan pertama, margin keuntungan hingga 50%, dan dukungan media promosi lengkap.
      </p>
      <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik peluang menjadi Agen / Reseller DETERMAT di kota saya. Mohon info syarat dan minimal ordernya.')); ?>" target="_blank" rel="noopener" class="pl-btn-cute-primary" style="display:inline-flex;">
        <?php peluanglaundry_icon('whatsapp', '', 18); ?>
        <span>Konsultasi Peluang Keagenan DETERMAT</span>
      </a>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="pl-section">
  <div class="pl-container">
    <div class="pl-section-head">
      <div class="pl-section-pill-wrap">
        <span class="pl-section-pill">Tanya Jawab Produk</span>
      </div>
      <h2 class="pl-section-title">Pertanyaan Seputar <span class="pl-text-highlight-orange">DETERMAT™</span></h2>
      <p class="pl-section-desc">Jawaban transparan untuk hal-hal yang sering ditanyakan oleh pelanggan sebelum memesan.</p>
    </div>

    <div class="pl-faq-container-narrow">
      <div class="pl-faq-list">
        <!-- FAQ 1 -->
        <details class="pl-faq-item" open>
          <summary class="pl-faq-question">Berapa liter air yang dibutuhkan untuk 1 bungkus DETERMAT?</summary>
          <div class="pl-faq-answer">
            <p>Untuk 1 pack DETERMAT berat 1 kg, Anda cukup mencampurnya dengan <strong>19 liter air bersih</strong>. Total volume deterjen cair siap pakai yang dihasilkan adalah <strong>20 liter penuh</strong> dengan kekentalan dan daya cuci optimal.</p>
          </div>
        </details>

        <!-- FAQ 2 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Apakah harus memakai air hangat atau air galon saat melarutkan?</summary>
          <div class="pl-faq-answer">
            <p><strong>Tidak perlu air hangat maupun air galon.</strong> Cukup gunakan air bersih suhu ruang biasa (bisa air sumur yang jernih atau air PAM). Formula DETERMAT dirancang cepat larut dan mengikat air dengan mudah hanya dengan diaduk manual selama 5-10 menit.</p>
          </div>
        </details>

        <!-- FAQ 3 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Berapa lama deterjen hasil olahan bisa bertahan (kadaluarsa)?</summary>
          <div class="pl-faq-answer">
            <p>Deterjen cair yang sudah dilarutkan dapat bertahan stabil selama <strong>12 hingga 24 bulan</strong> asalkan disimpan di dalam jerigen atau botol tertutup rapat dan terhindar dari paparan sinar matahari langsung.</p>
          </div>
        </details>

        <!-- FAQ 4 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Apakah benar-benar aman untuk mesin cuci Front Load?</summary>
          <div class="pl-faq-answer">
            <p><strong>Sangat aman.</strong> Khusus untuk varian <strong>DETERMAT MATIC</strong>, busa yang dihasilkan sangat rendah (low suds). Busa tidak akan meluap keluar dari pintu kaca mesin front load maupun merusak sensor dan modul elektronik mesin cuci komersial Anda.</p>
          </div>
        </details>

        <!-- FAQ 5 -->
        <details class="pl-faq-item">
          <summary class="pl-faq-question">Bagaimana jika saya ingin menjualnya kembali ke konsumen eceran?</summary>
          <div class="pl-faq-answer">
            <p>Sangat menguntungkan! Anda bisa mengemas hasil 20 liter deterjen ke dalam jerigen 5 Liter atau botol 1 Liter dengan merk Anda sendiri atau curah. Harga jual deterjen cair di pasaran berkisar Rp 8.000 - Rp 14.000 per liter, memberikan Anda margin keuntungan laba kotor lebih dari 100%.</p>
          </div>
        </details>
      </div>

      <!-- FAQ CTA Card -->
      <div class="pl-faq-cta-card">
        <div class="pl-faq-cta-text">
          <h4>Masih ada pertanyaan mengenai pengiriman kargo atau sampel?</h4>
          <p>Diskusikan kebutuhan deterjen laundry Anda bersama tim teknis PT Indotech Berkah Abadi.</p>
        </div>
        <a href="<?php echo esc_url($wa_konsultasi); ?>" target="_blank" rel="noopener" class="pl-btn-cute-wa">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Chat WhatsApp Sekarang</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Official Order Box -->
<section class="pl-section pl-section-light">
  <div class="pl-container">
    <?php
    set_query_var('order_box_title', 'Pesan DETERMAT™ Sekarang & Nikmati Hemat Ongkir');
    set_query_var('order_box_subtitle', 'Siap kirim ke seluruh kota dan kabupaten di Indonesia. Beli langsung via WhatsApp Customer Service kami atau melalui marketplace resmi dengan opsi gratis ongkir.');
    set_query_var('order_box_wa_msg', 'Halo Admin Orchid Brand, saya tertarik memesan paket bahan deterjen DETERMAT 1 Kg jadi 20 Liter.');
    get_template_part('template-parts/landing/order', 'box');
    ?>
  </div>
</section>

</main>

<?php get_footer(); ?>
