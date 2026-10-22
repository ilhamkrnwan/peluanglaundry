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

<style>
/* ==========================================================================
   Content Carousel for Consecutive Images / Sliders
   ========================================================================== */
.pl-content-carousel {
  position: relative !important;
  margin: 36px 0 !important;
  background: #f8fafc !important;
  border: 1.5px solid #e2e8f0 !important;
  border-radius: 24px !important;
  padding: 24px 20px 20px !important;
  overflow: hidden !important;
  box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04) !important;
}
.pl-carousel-badge {
  position: absolute !important;
  top: 14px !important;
  right: 18px !important;
  z-index: 5 !important;
}
.pl-carousel-counter {
  display: inline-flex !important;
  align-items: center !important;
  padding: 4px 12px !important;
  background: rgba(15, 23, 42, 0.72) !important;
  backdrop-filter: blur(8px) !important;
  -webkit-backdrop-filter: blur(8px) !important;
  color: #ffffff !important;
  font-size: 11.5px !important;
  font-weight: 700 !important;
  border-radius: 9999px !important;
  letter-spacing: 0.5px !important;
}
.pl-carousel-viewport {
  overflow: hidden !important;
  border-radius: 16px !important;
  position: relative !important;
  background: #ffffff !important;
}
.pl-carousel-track {
  display: flex !important;
  overflow-x: auto !important;
  scroll-snap-type: x mandatory !important;
  scroll-behavior: smooth !important;
  -webkit-overflow-scrolling: touch !important;
  scrollbar-width: none !important;
}
.pl-carousel-track::-webkit-scrollbar {
  display: none !important;
}
.pl-carousel-slide {
  flex: 0 0 100% !important;
  width: 100% !important;
  scroll-snap-align: center !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  padding: 14px !important;
  box-sizing: border-box !important;
}
.pl-carousel-slide figure {
  margin: 0 !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  justify-content: center !important;
  width: 100% !important;
}
.pl-carousel-slide img {
  max-height: 480px !important;
  width: auto !important;
  max-width: 100% !important;
  object-fit: contain !important;
  border-radius: 12px !important;
  box-shadow: 0 6px 20px rgba(15, 23, 42, 0.08) !important;
  display: block !important;
  margin: 0 auto !important;
}
.pl-carousel-slide figcaption {
  margin-top: 10px !important;
  font-size: 13px !important;
  color: #64748b !important;
  text-align: center !important;
  font-style: italic !important;
}
.pl-carousel-controls {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  gap: 16px !important;
  margin-top: 16px !important;
  padding: 0 8px !important;
}
.pl-carousel-btn {
  width: 40px !important;
  height: 40px !important;
  border-radius: 50% !important;
  background: #ffffff !important;
  border: 1.5px solid #e2e8f0 !important;
  color: #0f172a !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  cursor: pointer !important;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
  box-shadow: 0 2px 8px rgba(15, 23, 42, 0.06) !important;
}
.pl-carousel-btn:hover {
  background: #ecfdf5 !important;
  border-color: #059669 !important;
  color: #059669 !important;
  transform: scale(1.08) !important;
}
.pl-carousel-btn:disabled {
  opacity: 0.3 !important;
  cursor: not-allowed !important;
  transform: none !important;
}
.pl-carousel-dots {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 6px !important;
  flex-wrap: wrap !important;
  max-width: 60% !important;
}
.pl-carousel-dot {
  width: 8px !important;
  height: 8px !important;
  padding: 0 !important;
  border-radius: 50% !important;
  background: #cbd5e1 !important;
  border: none !important;
  cursor: pointer !important;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
}
.pl-carousel-dot:hover {
  background: #94a3b8 !important;
}
.pl-carousel-dot.is-active {
  width: 24px !important;
  border-radius: 9999px !important;
  background: #059669 !important;
}
</style>

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

<script>
document.addEventListener('DOMContentLoaded', function () {
  var carousels = document.querySelectorAll('.pl-content-carousel[data-carousel="true"]');
  if (!carousels.length) return;

  carousels.forEach(function (carousel) {
    var track = carousel.querySelector('.pl-carousel-track');
    var slides = carousel.querySelectorAll('.pl-carousel-slide');
    var prevBtn = carousel.querySelector('.pl-carousel-prev');
    var nextBtn = carousel.querySelector('.pl-carousel-next');
    var dots = carousel.querySelectorAll('.pl-carousel-dot');
    var counter = carousel.querySelector('.pl-carousel-counter');
    if (!track || !slides.length) return;

    var total = slides.length;
    var currentIndex = 0;

    function updateUI(index) {
      currentIndex = Math.max(0, Math.min(total - 1, index));
      if (counter) counter.textContent = (currentIndex + 1) + ' / ' + total;
      if (prevBtn) prevBtn.disabled = (currentIndex === 0);
      if (nextBtn) nextBtn.disabled = (currentIndex === total - 1);
      dots.forEach(function (dot, i) {
        if (i === currentIndex) dot.classList.add('is-active');
        else dot.classList.remove('is-active');
      });
    }

    function scrollToSlide(index) {
      if (!slides[index]) return;
      var slideLeft = slides[index].offsetLeft;
      track.scrollTo({ left: slideLeft, behavior: 'smooth' });
      updateUI(index);
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        scrollToSlide(currentIndex - 1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        scrollToSlide(currentIndex + 1);
      });
    }

    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        var target = parseInt(dot.getAttribute('data-target-index'), 10);
        if (!isNaN(target)) scrollToSlide(target);
      });
    });

    var scrollTimer = null;
    track.addEventListener('scroll', function () {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(function () {
        var scrollLeft = track.scrollLeft;
        var closestIndex = 0;
        var minDiff = Infinity;
        slides.forEach(function (slide, idx) {
          var diff = Math.abs(slide.offsetLeft - scrollLeft);
          if (diff < minDiff) {
            minDiff = diff;
            closestIndex = idx;
          }
        });
        updateUI(closestIndex);
      }, 50);
    }, { passive: true });

    updateUI(0);
  });
});
</script>

</main>

<?php get_footer(); ?>
