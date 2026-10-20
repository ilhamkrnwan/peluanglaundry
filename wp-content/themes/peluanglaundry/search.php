<?php
/**
 * The template for displaying search results pages
 *
 * @package PeluangLaundry
 */

get_header();
?>

<!-- Search Hero Header -->
<section class="pl-page-hero">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill">
        <?php peluanglaundry_icon('search', 'pl-icon-inline', 14); ?>
        <span>HASIL PENCARIAN SITUS</span>
      </div>
      <h1 class="pl-page-title">
        Pencarian: &ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;
      </h1>
      <p class="pl-page-subtitle">
        Menampilkan <?php echo esc_html($wp_query->found_posts); ?> artikel dan informasi relevan seputar usaha laundry &amp; chemical.
      </p>

      <!-- Search Input Box -->
      <form role="search" method="get" class="pl-archive-search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <label for="pl-search-input" class="screen-reader-text">Cari artikel atau produk laundry</label>
        <div class="pl-search-input-wrap">
          <?php peluanglaundry_icon('search', 'pl-search-icon', 18); ?>
          <input type="search" id="pl-search-input" class="pl-search-field" placeholder="Ketik kata kunci lain (misal: determat, parfum, mesin)..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" required />
          <button type="submit" class="pl-search-submit">
            <span>Cari</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Search Results Grid -->
<div class="pl-section">
  <div class="pl-container">
    <?php if (have_posts()) : ?>
      <div class="pl-grid-3">
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

<?php get_footer(); ?>
