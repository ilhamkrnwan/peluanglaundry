<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Promotional Announcement Bar -->
<?php $banner_text = get_theme_mod('peluanglaundry_top_banner', 'Paket Usaha Laundry & Bahan Chemical Hemat Ongkir Seluruh Indonesia — Konsultasi Gratis.'); ?>
<?php if (!empty($banner_text)) : ?>
<div class="pl-top-banner">
  <div class="pl-container">
    <span>
      <?php peluanglaundry_icon('sparkles', 'pl-icon-inline', 14); ?> 
      <?php echo esc_html($banner_text); ?> 
      <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin, saya ingin info promo paket usaha laundry.')); ?>" target="_blank" rel="noopener">Hubungi Kami &rarr;</a>
    </span>
  </div>
</div>
<?php endif; ?>

<!-- Main Header & Navigation -->
<header class="pl-header" id="site-header">
  <div class="pl-container">
    <div class="pl-nav-wrapper">
      <div class="pl-logo-area">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="pl-logo-link" aria-label="<?php bloginfo('name'); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png'); ?>" alt="<?php bloginfo('name'); ?>" class="pl-logo-img" width="180" height="48">
        </a>
      </div>

      <nav class="pl-main-nav" aria-label="Menu Utama">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'pl-menu-list',
            'fallback_cb'    => 'wp_page_menu',
            'depth'          => 2,
        ));
        ?>
      </nav>

      <div class="pl-header-cta">
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi paket usaha / pembelian chemical laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn-consult">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
          <span>Chat WhatsApp</span>
        </a>

        <button class="pl-hamburger" aria-label="Buka Menu Navigasi">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- Mobile Drawer -->
<div class="pl-mobile-drawer">
  <div class="pl-drawer-head">
    <span style="font-weight:700; color:var(--primary);">Menu Navigasi</span>
    <button class="pl-drawer-close" aria-label="Tutup Menu">&times;</button>
  </div>
  <?php
  wp_nav_menu(array(
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'pl-mobile-menu',
      'fallback_cb'    => false,
  ));
  ?>
  <div style="margin-top:auto; padding-top:20px;">
    <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi via mobile menu.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary" style="width:100%;">
      Hubungi Admin WhatsApp
    </a>
  </div>
</div>
<div class="pl-overlay"></div>
