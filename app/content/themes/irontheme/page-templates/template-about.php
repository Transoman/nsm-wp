<?php
/**
 * Template Name: О нас
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<?php

if ( have_rows('about_layout') ):

  while ( have_rows('about_layout') ) : the_row();

    if ( get_row_layout() == 'text' ): ?>

      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="section-head">
                <h3 class="section-head__suptitle">О нас</h3>
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              </div>
              <div class="about__content">
                <?php the_sub_field('left_text'); ?>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="about__img">
                <?php echo wp_get_attachment_image(get_sub_field('img_left'), 'full'); ?>
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="about__img-2 clearfix">
                <?php echo wp_get_attachment_image(get_sub_field('img_2'), 'full'); ?>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <div class="about__content-2">
                <?php the_sub_field('right_text'); ?>
                <?php if (get_sub_field('right_text')): ?>
                  <a href="#" class="btn callback_open">Хочу так же</a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <img src="<?php echo THEME_URL; ?>/images/general/diamond.svg" class="float-img float-img-1" alt="">
        <img src="<?php echo THEME_URL; ?>/images/general/circle.svg" width="26" class="float-img float-img-2" alt="">
        <img src="<?php echo THEME_URL; ?>/images/general/circle.svg" width="26" class="float-img float-img-3" alt="">

      </section>

    <?php endif;

  endwhile;

else :

  // no layouts found

endif;

get_template_part('template-parts/contact');

?>

<?php get_footer(); ?>
