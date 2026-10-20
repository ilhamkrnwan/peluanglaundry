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
          <div class="pl-entry-category-badge">
            <?php
            $cats = get_the_category();
            if (!empty($cats)) {
                echo '<a href="' . esc_url(get_category_link($cats[0]->term_id)) . '" class="pl-tag-pill">' . esc_html($cats[0]->name) . '</a>';
            }
            ?>
          </div>

          <h1 class="pl-entry-title"><?php the_title(); ?></h1>
          
          <div class="pl-entry-meta">
            <?php peluanglaundry_posted_on(); ?>
            <?php peluanglaundry_posted_by(); ?>
            <span class="pl-meta-read">
              <?php peluanglaundry_icon('clock', 'pl-meta-icon', 15); ?>
              <?php echo esc_html(peluanglaundry_reading_time(get_the_ID())); ?>
            </span>
          </div>

          <!-- Top Share Buttons -->
          <?php peluanglaundry_share_buttons(); ?>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="pl-entry-featured-img">
            <?php the_post_thumbnail('peluanglaundry-hero', array('class' => 'pl-featured-image', 'loading' => 'eager')); ?>
          </div>
        <?php endif; ?>

        <!-- Post Content (with automatic Table of Contents injected via filter) -->
        <div class="pl-content">
          <?php the_content(); ?>
        </div>

        <!-- Tags List -->
        <?php if (has_tag()) : ?>
          <div class="pl-entry-tags">
            <span class="pl-tags-label"><?php peluanglaundry_icon('tag', 'pl-icon-inline', 14); ?> Topik Terkait:</span>
            <?php the_tags('<ul class="pl-tags-list"><li>', '</li><li>', '</li></ul>'); ?>
          </div>
        <?php endif; ?>

        <!-- Bottom Share Buttons -->
        <?php peluanglaundry_share_buttons(); ?>

        <!-- High-Conversion Product Recommendation & Partnership Banner -->
        <div class="pl-article-promo-banner">
          <div class="pl-promo-badge">
            <?php peluanglaundry_icon('award', 'pl-icon-inline', 14); ?>
            <span>PELUANG USAHA &amp; CHEMICAL LAUNDRY</span>
          </div>
          <h3 class="pl-promo-title">Mau Buka Usaha Laundry Kiloan atau Hemat Biaya Deterjen Hingga 60%?</h3>
          <p class="pl-promo-desc">
            PT Indotech Berkah Abadi memproduksi formula konsentrat <strong>DETERMAT</strong> (1 kg jadi 20 liter sabun cair) dan paket kemitraan usaha laundry lengkap siap operasi tanpa bagi hasil (100% keuntungan milik Anda).
          </p>
          <div class="pl-promo-actions">
            <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya membaca artikel "' . get_the_title() . '". Saya ingin konsultasi paket usaha laundry dan produk chemical.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-wa">
              <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
              <span>Konsultasi Gratis via WhatsApp</span>
            </a>
            <a href="<?php echo esc_url(home_url('/jual-paket-bahan-deterjen-cair-matic-ramah-lingkungan-determat/')); ?>" class="pl-btn pl-btn-secondary">
              <span>Lihat Produk DETERMAT</span>
            </a>
          </div>
        </div>

        <!-- Next / Previous Post Navigation -->
        <nav class="pl-post-nav" aria-label="Navigasi Artikel">
          <div class="pl-nav-prev">
            <?php
            $prev_post = get_previous_post();
            if (!empty($prev_post)) :
            ?>
              <span class="pl-nav-label">&larr; Artikel Sebelumnya</span>
              <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"><?php echo esc_html(wp_trim_words($prev_post->post_title, 8)); ?></a>
            <?php endif; ?>
          </div>
          <div class="pl-nav-next">
            <?php
            $next_post = get_next_post();
            if (!empty($next_post)) :
            ?>
              <span class="pl-nav-label">Artikel Selanjutnya &rarr;</span>
              <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_html(wp_trim_words($next_post->post_title, 8)); ?></a>
            <?php endif; ?>
          </div>
        </nav>
      </article>

      <!-- Related Articles Section (Tahap 6) -->
      <?php
      $categories = get_the_category();
      if (!empty($categories)) :
          $related_args = array(
              'category__in'        => wp_list_pluck($categories, 'term_id'),
              'post__not_in'        => array(get_the_ID()),
              'posts_per_page'      => 3,
              'ignore_sticky_posts' => 1,
          );
          $related_query = new WP_Query($related_args);
          if ($related_query->have_posts()) :
      ?>
        <section class="pl-related-section">
          <div class="pl-related-header">
            <span class="pl-section-tag">ARTIKEL LAINNYA</span>
            <h2 class="pl-related-heading">Panduan Menarik Terkait</h2>
          </div>
          <div class="pl-grid-3">
            <?php
            while ($related_query->have_posts()) : $related_query->the_post();
                get_template_part('template-parts/cards/post', 'card');
            endwhile;
            wp_reset_postdata();
            ?>
          </div>
        </section>
      <?php
          endif;
      endif;
      ?>

    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
