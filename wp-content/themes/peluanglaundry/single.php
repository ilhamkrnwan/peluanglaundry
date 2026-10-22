<?php
/**
 * The template for displaying all single posts
 *
 * Layout desktop: dua panel (konten utama di kiri, panel informasi di kanan).
 * Layout mobile: satu kolom, panel samping disembunyikan dan Daftar Isi tampil
 * di dalam artikel (boxtoc inline).
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<div class="pl-single-layout">
  <div class="pl-container">
    <?php peluanglaundry_breadcrumbs(); ?>

    <div class="pl-single-grid">
      <!-- ============ PANEL KIRI: KONTEN ARTIKEL ============ -->
      <div class="pl-single-main">
        <?php
        // Disimpan agar panel sisi tetap konsisten setelah query lain berjalan.
        $pl_single_id    = get_the_ID();
        $pl_single_title = get_the_title();

        while (have_posts()) : the_post();

        $pl_single_id    = get_the_ID();
        $pl_single_title = get_the_title();
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

              <!-- Top Share Buttons (mobile & tablet) -->
              <div class="pl-entry-share-inline">
                <?php peluanglaundry_share_buttons(); ?>
              </div>
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

            <!-- High-Conversion Product Recommendation & Partnership Banner -->
            <div class="pl-article-promo-banner">
              <div class="pl-promo-badge">
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
        <?php endwhile; ?>
      </div>

      <!-- ============ PANEL KANAN: INFORMASI TAMBAHAN ============ -->
      <aside class="pl-single-aside" aria-label="Informasi tambahan artikel">

        <!-- Daftar Isi (dibuat otomatis dari heading artikel) -->
        <?php if (!empty(peluanglaundry_get_toc_items())) : ?>
          <section class="pl-aside-card pl-aside-toc" aria-labelledby="pl-aside-toc-title">
            <div class="pl-aside-card-head">
              <?php peluanglaundry_icon('list', 'pl-aside-card-icon', 18); ?>
              <h2 class="pl-aside-card-title" id="pl-aside-toc-title">Daftar Isi Artikel</h2>
            </div>
            <?php peluanglaundry_render_toc_nav(); ?>
          </section>
        <?php endif; ?>

        <!-- Bagikan Artikel -->
        <section class="pl-aside-card pl-aside-share" aria-labelledby="pl-aside-share-title">
          <div class="pl-aside-card-head">
            <?php peluanglaundry_icon('share-2', 'pl-aside-card-icon', 18); ?>
            <h2 class="pl-aside-card-title" id="pl-aside-share-title">Bagikan Artikel</h2>
          </div>
          <?php peluanglaundry_share_buttons(); ?>
        </section>

        <!-- Artikel Terbaru -->
        <?php
        $latest_query = new WP_Query(array(
            'post_type'           => 'post',
            'posts_per_page'      => 4,
            'post__not_in'        => array($pl_single_id),
            'ignore_sticky_posts' => 1,
            'no_found_rows'       => true,
        ));
        if ($latest_query->have_posts()) :
        ?>
          <section class="pl-aside-card pl-aside-latest" aria-labelledby="pl-aside-latest-title">
            <div class="pl-aside-card-head">
              <?php peluanglaundry_icon('clock', 'pl-aside-card-icon', 18); ?>
              <h2 class="pl-aside-card-title" id="pl-aside-latest-title">Artikel Terbaru</h2>
            </div>
            <ul class="pl-aside-latest-list">
              <?php
              while ($latest_query->have_posts()) : $latest_query->the_post();
              ?>
                <li class="pl-aside-latest-item">
                  <a href="<?php the_permalink(); ?>">
                    <span class="pl-aside-latest-thumb">
                      <img src="<?php echo esc_url(peluanglaundry_get_card_thumbnail_url(get_the_ID())); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy" width="72" height="72">
                    </span>
                    <span class="pl-aside-latest-text">
                      <span class="pl-aside-latest-title"><?php the_title(); ?></span>
                      <span class="pl-aside-latest-date"><?php echo esc_html(get_the_date('j F Y')); ?></span>
                    </span>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          </section>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <!-- CTA Konsultasi -->
        <section class="pl-aside-card pl-aside-cta" aria-labelledby="pl-aside-cta-title">
          <h2 class="pl-aside-cta-title" id="pl-aside-cta-title">Butuh Panduan Sesuai Usaha Anda?</h2>
          <p class="pl-aside-cta-desc">Tim Orchid Brand siap membantu menghitung kebutuhan deterjen, pewangi, dan rekomendasi paket usaha laundry Anda.</p>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya membaca artikel "' . $pl_single_title . '". Saya ingin konsultasi paket usaha laundry dan produk chemical.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-wa pl-aside-cta-btn">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Konsultasi Gratis</span>
          </a>
          <a href="<?php echo esc_url(home_url('/jual-paket-bahan-deterjen-cair-matic-ramah-lingkungan-determat/')); ?>" class="pl-aside-cta-link">
            <span>Lihat Produk DETERMAT</span>
            <?php peluanglaundry_icon('arrow-right', 'pl-icon-inline', 16); ?>
          </a>
        </section>

      </aside>
    </div>

    <!-- Related Articles Section -->
    <?php
    $categories = get_the_category();
    if (!empty($categories)) :
        $related_args = array(
            'category__in'        => wp_list_pluck($categories, 'term_id'),
            'post__not_in'        => array($pl_single_id),
            'posts_per_page'      => 3,
            'ignore_sticky_posts' => 1,
        );
        $related_query = new WP_Query($related_args);
        if ($related_query->have_posts()) :
    ?>
      <section class="pl-related-section">
        <div class="pl-related-header">
          <h2 class="pl-related-heading">Panduan Menarik Terkait</h2>
        </div>
        <div class="pl-grid-3 pl-grid-3-2up">
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

  </div>
</div>

</main>

<?php get_footer(); ?>
