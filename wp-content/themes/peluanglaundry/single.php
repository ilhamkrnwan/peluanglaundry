<?php
/**
 * The template for displaying all single posts
 *
 * @package PeluangLaundry
 */

get_header();
?>

<div class="pl-single-layout">
  <div class="pl-container pl-container-narrow">
    <?php peluanglaundry_breadcrumbs(); ?>

    <?php
    while (have_posts()) : the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('pl-article-box'); ?>>
        <header class="pl-entry-header">
          <h1 class="pl-entry-title"><?php the_title(); ?></h1>
          <div class="pl-entry-meta">
            <?php peluanglaundry_posted_on(); ?>
            <?php peluanglaundry_posted_by(); ?>
            <?php
            $cats = get_the_category();
            if (!empty($cats)) {
                echo '<span class="pl-meta-cat">' . peluanglaundry_get_icon('folder', 'pl-meta-icon', 14) . ' <a href="' . esc_url(get_category_link($cats[0]->term_id)) . '">' . esc_html($cats[0]->name) . '</a></span>';
            }
            ?>
          </div>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div style="margin-bottom:28px;">
            <?php the_post_thumbnail('peluanglaundry-hero', array('style' => 'border-radius:12px; width:100%;')); ?>
          </div>
        <?php endif; ?>

        <div class="pl-content">
          <?php the_content(); ?>
        </div>

        <!-- In-Article Product Consultation Callout Box -->
        <div class="pl-cta-box-single">
          <h3>Butuh Konsultasi Paket Usaha atau Bahan Chemical Laundry?</h3>
          <p>Dapatkan penawaran harga grosir bibit deterjen, pewangi tahan lama, dan bimbingan buka laundry kiloan dari tim Orchid Brand.</p>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya baru membaca artikel "' . get_the_title() . '". Saya ingin konsultasi produk/paket laundry.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Hubungi Sales via WhatsApp</span>
          </a>
        </div>

        <footer style="margin-top:32px; padding-top:20px; border-top:1px solid var(--slate-200); font-size:14px; color:var(--slate-500);">
          <?php the_tags('<strong>Tag Terkait:</strong> ', ', ', ''); ?>
        </footer>
      </article>

    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
