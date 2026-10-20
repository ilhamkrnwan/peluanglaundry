<?php
/**
 * The main template file / Blog Index & Archive
 *
 * @package PeluangLaundry
 */

get_header();
?>

<!-- Blog Index Hero Header -->
<section class="pl-archive-hero">
  <div class="pl-container">
    <div class="pl-badge">
      <span class="pl-badge-dot"></span>
      <?php peluanglaundry_icon('graduation', 'pl-badge-icon', 14); ?>
      <span>Pusat Edukasi & Wawasan Bisnis Laundry</span>
    </div>
    <h1 class="pl-archive-title">
      Blog & Panduan Sukses Usaha Laundry Kiloan
    </h1>
    <p class="pl-archive-desc">
      Kumpulan artikel panduan teknis, tips racik chemical hemat ongkir, strategi pemasaran laundry, dan SOP manajemen laundry dari tim ahli Orchid Brand — PT Indotech Berkah Abadi.
    </p>

    <!-- Search Form -->
    <div class="pl-archive-search-box">
      <form role="search" method="get" class="pl-archive-search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <span class="pl-search-svg"><?php peluanglaundry_icon('search', '', 18); ?></span>
        <input type="search" class="pl-archive-search-input" placeholder="Cari tips racik chemical, deterjen matic, paket laundry..." value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="pl-archive-search-submit">Cari Artikel</button>
      </form>
    </div>

    <!-- Category Filter Chips -->
    <div class="pl-category-chips">
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/')); ?>" class="pl-chip <?php echo (!is_category()) ? 'is-active' : ''; ?>">
        Semua Topik
      </a>
      <?php
      $categories = get_categories(array(
          'orderby'    => 'count',
          'order'      => 'DESC',
          'number'     => 6,
          'hide_empty' => true,
      ));
      foreach ($categories as $cat) :
          $is_active = is_category($cat->term_id) ? 'is-active' : '';
      ?>
        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="pl-chip <?php echo esc_attr($is_active); ?>">
          <span><?php echo esc_html($cat->name); ?></span>
          <span class="pl-chip-count"><?php echo esc_html($cat->count); ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Main Content Grid -->
<div class="pl-section" style="padding-top:40px; padding-bottom:80px;">
  <div class="pl-container">
    <?php if (have_posts()) : ?>
      <div class="pl-grid-3">
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/cards/post-card');
        endwhile;
        ?>
      </div>

      <div class="pl-pagination-container">
        <?php
        the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => '&larr; Sebelumnya',
            'next_text' => 'Selanjutnya &rarr;',
        ));
        ?>
      </div>
    <?php else : ?>
      <div class="pl-empty-box">
        <div class="pl-empty-icon"><?php peluanglaundry_icon('search', '', 48); ?></div>
        <h3>Belum Ada Artikel yang Sesuai</h3>
        <p>Maaf, belum ada artikel yang dipublikasikan pada kategori atau kata kunci pencarian ini.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="pl-btn pl-btn-primary" style="margin-top:16px;">
          Kembali ke Beranda
        </a>
      </div>
    <?php endif; ?>

    <!-- In-Archive Consultation Banner -->
    <div class="pl-archive-cta-banner">
      <div class="pl-archive-cta-text">
        <h3>Mau Konsultasi Kebutuhan Chemical & Paket Usaha?</h3>
        <p>Hubungi customer support resmi PT Indotech Berkah Abadi untuk info harga grosir distributor dan bimbingan buka usaha.</p>
      </div>
      <div class="pl-archive-cta-action">
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik konsultasi paket usaha atau bahan chemical laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-cta-wa">
          <?php peluanglaundry_icon('whatsapp', '', 18); ?>
          <span>Chat WhatsApp Admin</span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
