<article id="post-<?php the_ID(); ?>" <?php post_class('pl-post-item'); ?>>
  <div class="pl-post-thumb">
    <a href="<?php the_permalink(); ?>" class="pl-post-thumb-link" aria-label="<?php the_title_attribute(); ?>">
      <?php
      $thumb_url = peluanglaundry_get_card_thumbnail_url(get_the_ID());
      $default_fallback = get_template_directory_uri() . '/assets/img/determat.jpg';
      ?>
      <img src="<?php echo esc_url($thumb_url); ?>" 
           alt="<?php the_title_attribute(); ?>" 
           loading="lazy" 
           onerror="this.onerror=null; this.src='<?php echo esc_url($default_fallback); ?>';" />
    </a>
  </div>

  <div class="pl-post-content">
    <div class="pl-post-meta">
      <?php
      $categories = get_the_category();
      if (!empty($categories)) :
      ?>
        <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="pl-post-category">
          <?php echo esc_html($categories[0]->name); ?>
        </a>
        <span class="pl-post-meta-dot">&bull;</span>
      <?php endif; ?>
      <span class="pl-post-date"><?php echo esc_html(get_the_date('j M Y')); ?></span>
    </div>

    <h3 class="pl-post-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <p class="pl-post-excerpt">
      <?php echo esc_html(wp_trim_words(get_the_excerpt(), 18, '...')); ?>
    </p>

    <a href="<?php the_permalink(); ?>" class="pl-post-link">
      <span>Baca selengkapnya</span>
      <?php peluanglaundry_icon('arrow-right', 'pl-icon-inline', 14); ?>
    </a>
  </div>
</article>
