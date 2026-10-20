<!-- Global Footer -->
<footer class="pl-footer">
  <div class="pl-container">
    <div class="pl-footer-grid">
      <div class="pl-footer-col">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png'); ?>" alt="<?php bloginfo('name'); ?>" style="max-height:42px; margin-bottom:16px;">
        <p>Pusat pelatihan pembuatan chemical laundry dan distributor bibit deterjen, pewangi, softener, dan paket usaha laundry kiloan terpercaya di Indonesia sejak 2012.</p>
      </div>

      <div class="pl-footer-col">
        <h4>Menu Cepat</h4>
        <ul class="pl-footer-links">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a></li>
          <li><a href="<?php echo esc_url(home_url('/pesan/')); ?>">Cara Pesan</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">Tentang Kami</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Hubungi Kami</a></li>
        </ul>
      </div>

      <div class="pl-footer-col">
        <h4>Produk & Layanan</h4>
        <ul class="pl-footer-links">
          <li><a href="<?php echo esc_url(home_url('/jual-paket-bahan-deterjen-cair-matic-ramah-lingkungan-determat/')); ?>">DETERMAT (Paket Bahan Deterjen)</a></li>
          <li><a href="<?php echo esc_url(home_url('/paket-usaha-laundry-kiloan-murah/')); ?>">Paket Usaha Laundry Kiloan</a></li>
          <li><a href="<?php echo esc_url(home_url('/pelatihan-pembuatan-chemical/')); ?>">Pelatihan Pembuatan Chemical</a></li>
          <li><a href="<?php echo esc_url(home_url('/depo-isi-ulang-sabaun/')); ?>">Depo Isi Ulang Sabun</a></li>
        </ul>
      </div>

      <div class="pl-footer-col">
        <h4>Kantor & Distribusi</h4>
        <p style="margin-bottom:10px;"><strong>PT Indotech Berkah Abadi</strong><br>Jl. Palagan Tentara Pelajar, Sleman, D.I. Yogyakarta</p>
        <p style="margin-bottom:14px;">Hotline: <strong>0822-1584-0088</strong></p>
        <div style="display:flex; flex-direction:column; gap:8px;">
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_tokopedia_url', 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat')); ?>" target="_blank" rel="noopener" style="color:#03ac0e; font-weight:600; display:inline-flex; align-items:center; gap:6px;">
            <?php peluanglaundry_icon('shopping-cart', '', 16); ?> Tokopedia Official
          </a>
          <a href="<?php echo esc_url(get_theme_mod('peluanglaundry_shopee_url', 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755')); ?>" target="_blank" rel="noopener" style="color:#ee4d2d; font-weight:600; display:inline-flex; align-items:center; gap:6px;">
            <?php peluanglaundry_icon('shopping-bag', '', 16); ?> Shopee Official
          </a>
        </div>
      </div>
    </div>

    <div class="pl-footer-bottom">
      <p>&copy; <?php echo esc_html(date('Y')); ?> <strong>PT Indotech Berkah Abadi</strong> — Orchid Brand Green Cleaning & Perfumery. All rights reserved.</p>
      <div style="display:flex; gap:16px;">
        <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
        <a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">Terms & Conditions</a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Action -->
<div class="pl-wa-float">
  <span class="pl-wa-tooltip">Konsultasi Gratis WA</span>
  <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya sedang membuka halaman ' . get_the_title() . '. Saya ingin tanya info lebih lanjut.')); ?>" target="_blank" rel="noopener" class="pl-wa-btn" aria-label="Chat WhatsApp">
    <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
