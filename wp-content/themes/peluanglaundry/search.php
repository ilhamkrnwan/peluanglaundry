<?php
/**
 * The template for displaying search results pages
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<!-- Search Hero Header -->
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill pl-pill-orange">
        <span>Hasil Pencarian Situs</span>
      </div>
      <h1 class="pl-page-title">
        Pencarian:
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em">&ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;</span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h1>
      <p class="pl-page-subtitle">
        Menampilkan <?php echo esc_html($wp_query->found_posts); ?> artikel dan informasi relevan seputar usaha laundry &amp; chemical.
      </p>

      <!-- Search Input Box -->
      <div class="pl-archive-search-box">
        <form role="search" method="get" class="pl-archive-search-form" action="<?php echo esc_url(home_url('/')); ?>">
          <span class="pl-search-svg" style="display:flex; align-items:center; color:#ea580c; margin-right:8px;"><?php peluanglaundry_icon('search', '', 18); ?></span>
          <input type="search" class="pl-archive-search-input" placeholder="Ketik kata kunci lain (misal: determat, parfum, mesin)..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" required />
          <button type="submit" class="pl-archive-search-submit" style="background:#ea580c;">Cari Artikel</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Search Results Grid -->
<div class="pl-section">
  <div class="pl-container">
    <?php if (have_posts()) : ?>
      <div class="pl-grid-3 pl-grid-3-2up">
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/cards/post-card');
        endwhile;
        ?>
      </div>

      <!-- Pagination -->
      <div class="pl-pagination-wrap">
        <?php
        the_posts_pagination(array(
            'prev_text' => '&larr; Sebelumnya',
            'next_text' => 'Selanjutnya &rarr;',
            'before_page_number' => '',
        ));
        ?>
      </div>

    <?php else : ?>
      <!-- No Results Found State -->
      <div class="pl-empty-state">
        <div class="pl-empty-icon">
          <?php peluanglaundry_icon('search', '', 40); ?>
        </div>
        <h3 class="pl-empty-title">Tidak Ada Hasil untuk &ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;</h3>
        <p class="pl-empty-desc">
          Coba periksa ejaan kata kunci Anda atau telusuri topik populer di bawah ini:
        </p>
        <div class="pl-popular-searches" style="margin-bottom:28px;">
          <a href="<?php echo esc_url(home_url('/?s=determat')); ?>" class="pl-tag-pill">DETERMAT</a>
          <a href="<?php echo esc_url(home_url('/?s=parfum')); ?>" class="pl-tag-pill">Parfum Laundry</a>
          <a href="<?php echo esc_url(home_url('/?s=paket+usaha')); ?>" class="pl-tag-pill">Paket Usaha</a>
          <a href="<?php echo esc_url(home_url('/?s=kiloan')); ?>" class="pl-tag-pill">Laundry Kiloan</a>
          <a href="<?php echo esc_url(home_url('/?s=mesin')); ?>" class="pl-tag-pill">Mesin Cuci</a>
        </div>
        <div>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin, saya mencari informasi seputar: ' . get_search_query())); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Tanyakan Langsung via WhatsApp</span>
          </a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

</main>

<?php get_footer(); ?>
