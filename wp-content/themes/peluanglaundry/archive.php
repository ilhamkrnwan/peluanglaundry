<?php
/**
 * The template for displaying archive pages
 *
 * @package PeluangLaundry
 */

get_header();
?>

<!-- Archive Page Hero -->
<section class="pl-page-hero">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill">
        <?php peluanglaundry_icon('folder', 'pl-icon-inline', 14); ?>
        <span>ARSIP ARTIKEL &amp; PANDUAN</span>
      </div>
      <h1 class="pl-page-title">
        <?php the_archive_title(); ?>
      </h1>
      <?php if (get_the_archive_description()) : ?>
        <div class="pl-page-subtitle">
          <?php the_archive_description(); ?>
        </div>
      <?php else : ?>
        <p class="pl-page-subtitle">
          Kumpulan artikel, tips praktis, panduan operasional laundry, dan kabar produk dari Orchid Brand.
        </p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Archive Post Grid -->
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
      <div class="pl-empty-state">
        <div class="pl-empty-icon">
          <?php peluanglaundry_icon('folder', '', 40); ?>
        </div>
        <h3 class="pl-empty-title">Belum Ada Artikel pada Kategori Ini</h3>
        <p class="pl-empty-desc">
          Silakan kembali ke halaman utama blog atau hubungi tim kami jika memerlukan informasi tertentu.
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="pl-btn pl-btn-primary">
          <span>Kembali ke Beranda</span>
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
