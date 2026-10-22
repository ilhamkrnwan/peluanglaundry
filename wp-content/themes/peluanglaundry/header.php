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

<a class="pl-skip-link" href="#main">Lewati ke konten utama</a>

<!-- Top Promotional Announcement Bar -->
<?php $banner_text = get_theme_mod('peluanglaundry_top_banner', 'Paket Usaha Laundry & Bahan Chemical Hemat Ongkir Seluruh Indonesia — Konsultasi Gratis.'); ?>
<?php if (!empty($banner_text)) : ?>
<div class="pl-top-banner">
  <div class="pl-container">
    <span>
      <?php peluanglaundry_icon('sparkles', 'pl-icon-inline', 14); ?> 
      <?php echo esc_html($banner_text); ?> 
      <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin, saya ingin info promo paket usaha laundry.')); ?>" target="_blank" rel="noopener">Konsultasi &rarr;</a>
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
          <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png'); ?>" alt="<?php bloginfo('name'); ?>" class="pl-logo-img" width="180" height="50" loading="eager" fetchpriority="high" decoding="async">
          <?php endif; ?>
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
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Konsultasi WhatsApp</span>
        </a>

        <button class="pl-hamburger" aria-label="Buka Menu Navigasi" aria-controls="pl-mobile-drawer" aria-expanded="false">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- Mobile Navigation Fullscreen Panel with Drilldown Swipe & Rich Information -->
<div class="pl-mobile-fullscreen pl-mobile-drawer" id="pl-mobile-drawer" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Menu Navigasi dan Informasi">
  <div class="pl-fs-container">
    
    <!-- Top Bar Header -->
    <div class="pl-fs-header">
      <div class="pl-fs-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="pl-fs-logo-link" aria-label="<?php bloginfo('name'); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-orchid.png'); ?>" alt="<?php bloginfo('name'); ?>" class="pl-fs-logo" width="130" height="36" loading="lazy">
        </a>
        <div class="pl-fs-brand-meta">
          <span class="pl-fs-badge">Orchid Brand</span>
          <span class="pl-fs-tagline">Chemical & Solusi Usaha Laundry</span>
        </div>
      </div>
      <button class="pl-fs-close pl-drawer-close" aria-label="Tutup Menu">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        <span class="pl-fs-close-lbl">Tutup</span>
      </button>
    </div>

    <!-- Main Content Area (Scrollable) -->
    <div class="pl-fs-body">
      <div class="pl-fs-grid">
        
        <!-- Left: Drilldown Swipe Navigation Track -->
        <div class="pl-fs-nav-col">
          <div class="pl-fs-viewport">
            <div class="pl-fs-track" id="pl-fs-track">
              
              <!-- PANE 1: Main Menu -->
              <div class="pl-fs-pane pl-fs-pane-main" id="pl-fs-pane-main">
                <div class="pl-fs-pane-header">
                  <span class="pl-fs-pane-label">Menu Navigasi</span>
                </div>
                
                <div class="pl-fs-menu-scroll">
                  <?php
                  wp_nav_menu(array(
                      'theme_location' => 'primary',
                      'container'      => false,
                      'menu_class'     => 'pl-mobile-menu',
                      'fallback_cb'    => false,
                  ));
                  ?>
                </div>
              </div>

              <!-- PANE 2: Sub-menu (Swiped in smoothly when parent item is clicked) -->
              <div class="pl-fs-pane pl-fs-pane-sub" id="pl-fs-pane-sub" aria-hidden="true">
                <div class="pl-fs-pane-header pl-fs-pane-header-sub">
                  <button type="button" class="pl-fs-back-btn" id="pl-fs-back-btn" aria-label="Kembali ke menu utama">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    <span>Kembali ke Menu Utama</span>
                  </button>
                </div>

                <div class="pl-fs-sub-title-wrapper">
                  <span class="pl-fs-sub-tag">Sub-Kategori Menu</span>
                  <h3 class="pl-fs-sub-title" id="pl-fs-sub-title">Detail Menu</h3>
                </div>

                <div class="pl-fs-sub-scroll">
                  <ul class="pl-fs-sub-list" id="pl-fs-sub-list">
                    <!-- Populated dynamically via JS from the parent's .sub-menu -->
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Bottom Actions Bar -->
    <div class="pl-fs-footer">
      <div class="pl-fs-footer-row">
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya ingin konsultasi paket usaha laundry & chemical via menu mobile.')); ?>" target="_blank" rel="noopener" class="pl-fs-btn-wa">
          <?php peluanglaundry_icon('whatsapp', '', 20); ?>
          <span>Konsultasi WhatsApp Sekarang</span>
          <svg class="pl-fs-btn-wa-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>
      <p class="pl-fs-copyright">&copy; <?php echo esc_html(date('Y')); ?> PT Indotech Berkah Abadi &bull; Orchid Brand</p>
    </div>

  </div>
</div>
<div class="pl-overlay"></div>
