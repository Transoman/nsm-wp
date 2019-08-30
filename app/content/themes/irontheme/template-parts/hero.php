<section class="hero<?php echo (!is_home() && !is_front_page()) ? ' hero--inner' : ''; ?>">
  <div class="container">
    <div class="hero__content">
      <?php if (get_field('hero_subtitle')): ?>
        <p class="hero__subtitle"><?php the_field('hero_subtitle'); ?></p>
      <?php endif; ?>

      <?php if (get_field('hero_title')): ?>
        <h1><?php the_field('hero_title'); ?></h1>
      <?php else: ?>
        <?php the_title('<h1>', '</h1>'); ?>
      <?php endif; ?>

      <?php if (get_field('hero_text')): ?>
        <div class="hero__descr">
          <?php the_field('hero_text'); ?>
        </div>
      <?php endif; ?>

      <?php if (is_home() || is_front_page()): ?>
        <a href="#" class="btn btn--white consultation_open">Получить консультацию</a>
      <?php endif; ?>
    </div>
  </div>

  <button type="button" class="scroll-down">
    <?php ith_the_icon('scroll-down'); ?>
  </button>

</section>