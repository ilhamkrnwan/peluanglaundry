<?php
/**
 * Template Name: Landing Page Sales Funnel (Clean Canvas)
 * Template Post Type: page, post
 *
 * @package PeluangLaundry
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class('pl-landing-page-body'); ?>>
<?php wp_body_open(); ?>

<main id="primary" class="site-main">
  <?php
  while (have_posts()) : the_post();
      the_content();
  endwhile;
  ?>
</main>

<!-- Floating WhatsApp Action -->
<div class="pl-wa-float">
  <span class="pl-wa-tooltip">Konsultasi Promo WA</span>
  <a href="<?php echo esc_url(peluanglaundry_get_wa_link('Halo Admin Orchid Brand, saya tertarik dengan promo di halaman ' . get_the_title())); ?>" target="_blank" rel="noopener" class="pl-wa-btn" aria-label="Chat WhatsApp">
    <?php peluanglaundry_icon('whatsapp', '', 28); ?>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
