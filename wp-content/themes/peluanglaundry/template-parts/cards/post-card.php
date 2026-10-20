<article id="post-<?php the_ID(); ?>" <?php post_class('pl-card'); ?>>
  <div class="pl-card-thumb">
    <a href="<?php the_permalink(); ?>" class="pl-card-thumb-link" aria-label="<?php the_title_attribute(); ?>">
      <?php
      $thumb_url = peluanglaundry_get_card_thumbnail_url(get_the_ID());
      $default_fallback = get_template_directory_uri() . '/assets/img/determat.jpg';
      ?>
      <img src="<?php echo esc_url($thumb_url); ?>" 
           alt="<?php the_title_attribute(); ?>" 
           loading="lazy" 
           onerror="this.onerror=null; this.src='<?php echo esc_url($default_fallback); ?>';" />
    </a>
    <?php
    $categories = get_the_category();
    if (!empty($categories)) :
    ?>
      <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="pl-card-badge">
        <?php echo esc_html($categories[0]->name); ?>
      </a>
    <?php endif; ?>
  </div>

  <div class="pl-card-body">
    <div class="pl-card-meta-top">
      <span class="pl-meta-date"><?php peluanglaundry_icon('calendar', 'pl-icon-inline', 14); ?> <?php echo esc_html(get_the_date('j M Y')); ?></span>
      <span class="pl-meta-read"><?php peluanglaundry_icon('clock', 'pl-icon-inline', 14); ?> <?php echo esc_html(peluanglaundry_reading_time(get_the_ID())); ?></span>
    </div>

    <h3 class="pl-card-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <div class="pl-card-desc">
      <?php echo esc_html(wp_trim_words(get_the_excerpt(), 18, '...')); ?>
    </div>

    <div class="pl-card-footer">
      <a href="<?php the_permalink(); ?>" class="pl-card-readmore">
        <span>Baca Selengkapnya</span>
        <?php peluanglaundry_icon('arrow-right', 'pl-read-icon', 15); ?>
      </a>
    </div>
  </div>
</article>
