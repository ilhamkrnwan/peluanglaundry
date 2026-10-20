<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package PeluangLaundry
 */

get_header();
?>

<div class="pl-section" style="padding:80px 0; text-align:center;">
  <div class="pl-container pl-container-narrow">
    <div class="pl-404-icon-wrap" style="display:inline-flex; align-items:center; justify-content:center; width:88px; height:88px; border-radius:50%; background:var(--primary-light); color:var(--primary); margin-bottom:24px;">
      <?php peluanglaundry_icon('search', 'pl-404-svg', 44); ?>
    </div>
    <h1 style="font-size:2.5rem; font-weight:800; color:var(--dark); margin-bottom:12px;">Halaman Tidak Ditemukan</h1>
    <p style="font-size:16px; color:var(--slate-600); margin-bottom:32px; max-width:540px; margin-left:auto; margin-right:auto;">
      Maaf, halaman yang Anda cari mungkin telah dipindahkan atau tautan yang Anda masukkan kurang tepat.
    </p>
    <div style="display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="pl-btn pl-btn-primary">
        <span>Kembali ke Beranda</span>
      </a>
      <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin, saya mengalami error halaman tidak ditemukan.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-secondary">
        <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
        <span>Tanya Admin via WA</span>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
