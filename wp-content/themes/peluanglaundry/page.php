<?php
/**
 * The template for displaying all static pages
 *
 * @package PeluangLaundry
 */

get_header();
?>

<div class="pl-single-layout">
  <div class="pl-container pl-container-narrow">
    <?php peluanglaundry_breadcrumbs(); ?>

    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('pl-article-box'); ?>>
        <header class="pl-entry-header">
          <h1 class="pl-entry-title"><?php the_title(); ?></h1>
        </header>

        <div class="pl-content">
          <?php the_content(); ?>
        </div>

        <!-- Corporate Fast Help Box -->
        <div class="pl-cta-box-single">
          <h3>Butuh Bantuan atau Informasi Lebih Lengkap?</h3>
          <p>Tim konsultan PT Indotech Berkah Abadi siap membantu menjawab pertanyaan Anda seputar produk chemical, paket usaha, atau keagenan.</p>
          <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya sedang membaca halaman "' . get_the_title() . '". Saya ingin info lebih lanjut.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-primary">
            <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
            <span>Konsultasi Cepat via WhatsApp</span>
          </a>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
