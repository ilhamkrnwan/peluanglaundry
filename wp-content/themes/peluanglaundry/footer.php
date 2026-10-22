<?php
/**
 * Global Footer Template
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

$tokopedia_url = get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat');
$shopee_url = get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755');
?>

<!-- Global Footer -->
<footer class="pl-footer">
  <div class="pl-container">
    <div class="pl-footer-grid">
      <!-- Col 1: Brand Info -->
      <div class="pl-footer-col pl-footer-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="pl-footer-logo-badge" aria-label="<?php bloginfo('name'); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png'); ?>" alt="<?php bloginfo('name'); ?>" class="pl-footer-logo" width="135" height="38" loading="lazy">
        </a>
        <div class="pl-footer-brand-title">
          <strong>PT Indotech Berkah Abadi</strong>
          <span>Produsen Chemical Laundry &amp; Paket Usaha</span>
        </div>
        <p class="pl-footer-desc">
          Pabrik konsentrat deterjen ramah lingkungan (DETERMAT), bibit parfum laundry tahan 30 hari, serta penyedia paket usaha laundry kiloan siap buka terpercaya sejak 2012.
        </p>
        <div class="pl-footer-trust-pill">
          <span>100% Bebas Royalti &bull; 1.200+ Mitra se-Indonesia</span>
        </div>
      </div>

      <!-- Col 2: Navigasi Cepat -->
      <div class="pl-footer-col">
        <h4 class="pl-footer-heading">Navigasi</h4>
        <ul class="pl-footer-links">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Beranda Utama</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">Profil Perusahaan</a></li>
          <li><a href="<?php echo esc_url(home_url('/pesan/')); ?>">Cara Pemesanan</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog &amp; Panduan Usaha</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Kontak &amp; Konsultasi</a></li>
        </ul>
      </div>

      <!-- Col 3: Produk & Kemitraan -->
      <div class="pl-footer-col">
        <h4 class="pl-footer-heading">Produk &amp; Layanan</h4>
        <ul class="pl-footer-links">
          <li><a href="<?php echo esc_url(home_url('/paket-usaha-laundry-kiloan-murah/')); ?>">Paket Usaha Laundry Kiloan</a></li>
          <li><a href="<?php echo esc_url(home_url('/pewangi-laundry-tahan-lama-murah/')); ?>">Pewangi Laundry Tahan Lama</a></li>
          <li><a href="<?php echo esc_url(home_url('/jual-paket-bahan-deterjen-cair-matic-ramah-lingkungan-determat/')); ?>">DETERMAT Deterjen Matic</a></li>
          <li><a href="<?php echo esc_url(home_url('/depo-isi-ulang-sabaun/')); ?>">Depo Isi Ulang Sabun Curah</a></li>
          <li><a href="<?php echo esc_url(home_url('/pelatihan-pembuatan-chemical/')); ?>">Pelatihan Pembuatan Chemical</a></li>
          <li><a href="<?php echo esc_url(home_url('/agen-resmi-orchid-brand/')); ?>">Kemitraan Distributor &amp; Agen</a></li>
        </ul>
      </div>

      <!-- Col 4: Kantor & Distribusi -->
      <div class="pl-footer-col pl-footer-contact" itemscope itemtype="https://schema.org/LocalBusiness">
        <meta itemprop="name" content="PT Indotech Berkah Abadi - Orchid Brand">
        <meta itemprop="image" content="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png'); ?>">
        <meta itemprop="telephone" content="+628112900668">
        <meta itemprop="priceRange" content="Rp 15.000 - Rp 45.000.000">

        <h4 class="pl-footer-heading">Pabrik &amp; Layanan</h4>
        
        <div class="pl-footer-info-item" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
          <div class="pl-footer-info-icon" aria-hidden="true">
            <?php peluanglaundry_icon('map-pin', '', 16); ?>
          </div>
          <div class="pl-footer-info-txt">
            <strong itemprop="name">Pusat Produksi &amp; Gudang:</strong>
            <span itemprop="streetAddress">Jl. Tentara Pelajar Palagan Km. 9, Kamdanen, Sariharjo, </span>
            <span><span itemprop="addressLocality">Ngaglik, Sleman</span>, <span itemprop="addressRegion">D.I. Yogyakarta</span> <span itemprop="postalCode">55581</span></span>
          </div>
        </div>

        <div class="pl-footer-info-item" itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
          <meta itemprop="latitude" content="-7.718842">
          <meta itemprop="longitude" content="110.378912">
          <div class="pl-footer-info-icon" aria-hidden="true">
            <?php peluanglaundry_icon('clock', '', 16); ?>
          </div>
          <div class="pl-footer-info-txt">
            <strong>Jam Operasional:</strong>
            <time itemprop="openingHours" datetime="Mo-Sa 08:00-16:30">Senin - Sabtu: 08.00 - 16.30 WIB</time>
          </div>
        </div>

        <div class="pl-footer-info-item">
          <div class="pl-footer-info-icon" aria-hidden="true">
            <?php peluanglaundry_icon('phone', '', 16); ?>
          </div>
          <div class="pl-footer-info-txt">
            <strong>Hotline Konsultasi &amp; Kargo:</strong>
            <div class="pl-footer-phone-wrap">
              <a href="tel:08112900668" class="pl-footer-phone">0811-2900-668</a>
              <span class="pl-footer-phone-sep">/</span>
              <a href="tel:082215840088" class="pl-footer-phone">0822-1584-0088</a>
            </div>
          </div>
        </div>

        <div class="pl-footer-marketplace">
          <span class="pl-footer-marketplace-title">Official Marketplace:</span>
          <div class="pl-footer-store-btns">
            <a href="<?php echo esc_url($tokopedia_url); ?>" target="_blank" rel="noopener" class="pl-store-btn pl-store-toped" title="Tokopedia Official">
              <?php peluanglaundry_icon('tokopedia', '', 15); ?>
              <span>Tokopedia Official</span>
            </a>
            <a href="<?php echo esc_url($shopee_url); ?>" target="_blank" rel="noopener" class="pl-store-btn pl-store-shopee" title="Shopee Official">
              <?php peluanglaundry_icon('shopee', '', 15); ?>
              <span>Shopee Official</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Geo SEO: Jangkauan Kemitraan & Distribusi Kargo Nasional -->
    <div class="pl-footer-geo-coverage">
      <div class="pl-geo-coverage-header">
        <div class="pl-geo-title-wrap">
          <span class="pl-geo-badge">PENGIRIMAN SELURUH INDONESIA</span>
          <h4 class="pl-geo-title">Jangkauan Logistik &amp; Distribusi Kargo Pabrik Orchid Brand</h4>
        </div>
        <p class="pl-geo-sub">Pabrik Sleman Yogyakarta melayani suplai paket usaha laundry dan chemical konsentrat hemat ongkir ke seluruh kota &amp; kabupaten</p>
      </div>

      <div class="pl-geo-regions-grid">
        <div class="pl-geo-region-col">
          <div class="pl-geo-region-header">
            <strong>DIY &amp; Jawa Tengah</strong>
          </div>
          <p>Yogyakarta, Sleman, Bantul, Solo, Semarang, Magelang, Purwokerto, Cilacap, Tegal, Pekalongan, Kudus</p>
        </div>

        <div class="pl-geo-region-col">
          <div class="pl-geo-region-header">
            <strong>Jawa Timur &amp; Bali</strong>
          </div>
          <p>Surabaya, Malang, Sidoarjo, Jember, Kediri, Madiun, Banyuwangi, Denpasar, Badung, Singaraja, Mataram</p>
        </div>

        <div class="pl-geo-region-col">
          <div class="pl-geo-region-header">
            <strong>Jawa Barat &amp; Jabodetabek</strong>
          </div>
          <p>Jakarta, Bogor, Depok, Tangerang, Bekasi, Bandung, Cimahi, Cirebon, Karawang, Sukabumi, Serang</p>
        </div>

        <div class="pl-geo-region-col">
          <div class="pl-geo-region-header">
            <strong>Luar Jawa (Ekspedisi Kargo)</strong>
          </div>
          <p>Medan, Palembang, Lampung, Pekanbaru, Padang, Pontianak, Banjarmasin, Balikpapan, Makassar, Manado, Jayapura</p>
        </div>
      </div>

      <div class="pl-geo-couriers">
        <span class="pl-geo-courier-label">Armada Logistik Kargo Rekanan:</span>
        <div class="pl-geo-courier-tags">
          <span class="pl-geo-tag">Indah Logistik Cargo</span>
          <span class="pl-geo-tag">Dakota Cargo</span>
          <span class="pl-geo-tag">KALOG Kereta Api</span>
          <span class="pl-geo-tag">JNE Trucking (JTR)</span>
          <span class="pl-geo-tag">Baraka Sarana Tama</span>
          <span class="pl-geo-tag">Sentral Cargo</span>
          <span class="pl-geo-tag">Tam Cargo</span>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="pl-footer-bottom">
      <p class="pl-footer-copy">
        &copy; <?php echo esc_html(date('Y')); ?> <strong>PT Indotech Berkah Abadi</strong> &bull; Orchid Brand Green Cleaning &amp; Perfumery. Pabrik Sleman, D.I. Yogyakarta.
      </p>
      <div class="pl-footer-legal">
        <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Kebijakan Privasi</a>
        <span class="pl-footer-sep">&bull;</span>
        <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">Syarat &amp; Ketentuan</a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Action with Cute Tooltip -->
<div class="pl-wa-float">
  <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya sedang membuka halaman ' . get_the_title() . '. Saya ingin tanya info lebih lanjut.')); ?>" target="_blank" rel="noopener" class="pl-wa-btn" aria-label="Chat WhatsApp Konsultasi Gratis" title="Chat WhatsApp Konsultasi Gratis">
    <span class="pl-wa-tooltip" aria-hidden="true">Konsultasi Gratis</span>
    <?php peluanglaundry_icon('whatsapp', '', 28); ?>
    <span class="pl-wa-pulse" aria-hidden="true"></span>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
