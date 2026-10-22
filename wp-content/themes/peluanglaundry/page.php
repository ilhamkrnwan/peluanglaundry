<?php
/**
 * The template for displaying all static pages
 *
 * @package PeluangLaundry
 */

get_header();
?>

<main id="main">

<?php while (have_posts()) : the_post(); ?>

<!-- Cute Page Hero -->
<section class="pl-page-hero pl-page-hero-cute">
  <div class="pl-container">
    <div class="pl-page-hero-inner">
      <?php peluanglaundry_breadcrumbs(); ?>
      <h1 class="pl-page-title"><?php the_title(); ?></h1>
    </div>
  </div>
</section>

<div class="pl-single-layout" style="padding: 48px 0 64px 0;">
  <div class="pl-container pl-container-narrow">
    <article id="post-<?php the_ID(); ?>" <?php post_class('pl-article-box'); ?>>
      <div class="pl-content">
        <?php the_content(); ?>
      </div>

      <!-- Corporate Fast Help Box -->
      <div class="pl-cta-box-single">
        <h3>Butuh Bantuan atau Informasi Lebih Lengkap?</h3>
        <p>Tim konsultan PT Indotech Berkah Abadi siap membantu menjawab pertanyaan Anda seputar produk chemical, paket usaha, atau keagenan.</p>
        <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya sedang membaca halaman "' . get_the_title() . '". Saya ingin info lebih lanjut.')); ?>" target="_blank" rel="noopener" class="pl-btn pl-btn-cute-wa">
          <?php peluanglaundry_icon('whatsapp', 'pl-btn-icon', 18); ?>
          <span>Konsultasi Cepat via WhatsApp</span>
        </a>
      </div>
    </article>
  </div>
</div>

<?php endwhile; ?>

</main>

<?php get_footer(); ?>
