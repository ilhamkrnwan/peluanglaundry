<?php
/**
 * The template for displaying archive pages
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<!-- Archive Page Hero -->
<?php
if (is_category()) {
    $archive_name = single_cat_title('', false);
    $archive_type = 'Kategori Artikel';
} elseif (is_tag()) {
    $archive_name = single_tag_title('', false);
    $archive_type = 'Tag / Topik';
} else {
    $archive_name = preg_replace('/^(Category|Tag|Kategori):\s*/i', '', get_the_archive_title());
    $archive_type = 'Arsip Panduan';
}
?>
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <div class="pl-hero-pill pl-pill-cyan">
        <span><?php echo esc_html($archive_type); ?></span>
      </div>
      <h1 class="pl-page-title">
        <span class="pl-hero-em-wrap">
          <span class="pl-hero-em"><?php echo esc_html($archive_name); ?></span>
          <svg class="pl-doodle-curve" viewBox="0 0 240 22" fill="none" aria-hidden="true">
            <path d="M4 16C55 4 185 4 236 14" stroke="#f97316" stroke-width="4.5" stroke-linecap="round"/>
          </svg>
        </span>
      </h1>
      <?php if (get_the_archive_description()) : ?>
        <div class="pl-page-subtitle">
          <?php the_archive_description(); ?>
        </div>
      <?php else : ?>
        <p class="pl-page-subtitle">
          Kumpulan artikel terkurasi, tips praktis, panduan operasional laundry, dan kabar produk dari Orchid Brand.
        </p>
      <?php endif; ?>

      <!-- Quick Category Jump Chips -->
      <div class="pl-category-chips">
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>" class="pl-chip">
          <span>Semua Topik</span>
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
  </div>
</section>

<!-- Archive Post Grid -->
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

</main>

<?php get_footer(); ?>
