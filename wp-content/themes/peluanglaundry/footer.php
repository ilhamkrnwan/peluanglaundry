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
        <a href="<?php echo esc_url(home_url('/')); ?>" class="pl-footer-logo-link">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png'); ?>" alt="<?php bloginfo('name'); ?>" class="pl-footer-logo">
        </a>
        <p class="pl-footer-desc">
          Pusat pelatihan pembuatan chemical laundry dan produsen konsentrat deterjen, parfum, softener, serta paket usaha laundry kiloan terpercaya di Indonesia sejak 2012.
        </p>
      </div>

      <!-- Col 2: Navigasi Cepat -->
      <div class="pl-footer-col">
        <h4 class="pl-footer-heading">Navigasi</h4>
        <ul class="pl-footer-links">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a></li>
          <li><a href="<?php echo esc_url(home_url('/pesan/')); ?>">Cara Pesan</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">Tentang Kami</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Hubungi Kami</a></li>
        </ul>
      </div>

      <!-- Col 3: Produk & Layanan -->
      <div class="pl-footer-col">
        <h4 class="pl-footer-heading">Produk &amp; Layanan</h4>
        <ul class="pl-footer-links">
          <li><a href="<?php echo esc_url(home_url('/jual-paket-bahan-deterjen-cair-matic-ramah-lingkungan-determat/')); ?>">DETERMAT Deterjen Matic</a></li>
          <li><a href="<?php echo esc_url(home_url('/paket-usaha-laundry-kiloan-murah/')); ?>">Paket Usaha Laundry Kiloan</a></li>
          <li><a href="<?php echo esc_url(home_url('/pelatihan-pembuatan-chemical/')); ?>">Pelatihan Pembuatan Chemical</a></li>
          <li><a href="<?php echo esc_url(home_url('/depo-isi-ulang-sabaun/')); ?>">Depo Isi Ulang Sabun</a></li>
        </ul>
      </div>

      <!-- Col 4: Kantor & Distribusi -->
      <div class="pl-footer-col pl-footer-contact">
        <h4 class="pl-footer-heading">Kantor &amp; Distribusi</h4>
        <div class="pl-footer-info-item">
          <strong>PT Indotech Berkah Abadi</strong>
          <span>Jl. Palagan Tentara Pelajar, Sleman, D.I. Yogyakarta</span>
        </div>

        <div class="pl-footer-info-item">
          <span>Hotline Konsultasi:</span>
          <a href="tel:082215840088" class="pl-footer-phone">0822-1584-0088</a>
        </div>

        <div class="pl-footer-marketplace">
          <span class="pl-footer-marketplace-title">Official Store:</span>
          <div class="pl-footer-store-btns">
            <a href="<?php echo esc_url($tokopedia_url); ?>" target="_blank" rel="noopener" class="pl-store-btn pl-store-toped" title="Tokopedia Official">
              <?php peluanglaundry_icon('shopping-cart', '', 14); ?>
              <span>Tokopedia</span>
            </a>
            <a href="<?php echo esc_url($shopee_url); ?>" target="_blank" rel="noopener" class="pl-store-btn pl-store-shopee" title="Shopee Official">
              <?php peluanglaundry_icon('shopping-bag', '', 14); ?>
              <span>Shopee</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="pl-footer-bottom">
      <p class="pl-footer-copy">
        &copy; <?php echo esc_html(date('Y')); ?> <strong>PT Indotech Berkah Abadi</strong> &bull; Orchid Brand Green Cleaning &amp; Perfumery.
      </p>
      <div class="pl-footer-legal">
        <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
        <span class="pl-footer-sep">&bull;</span>
        <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Action -->
<div class="pl-wa-float">
  <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya sedang membuka halaman ' . get_the_title() . '. Saya ingin tanya info lebih lanjut.')); ?>" target="_blank" rel="noopener" class="pl-wa-btn" aria-label="Chat WhatsApp" title="Chat WhatsApp">
    <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
