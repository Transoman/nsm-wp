<?php
/**
 * Template Name: Продукты
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

  <section class="products">
    <div class="container">
      <div class="section-head text-center">
        <h3 class="section-head__suptitle">Специализируемся</h3>
        <h2 class="section-title">Наши продукты</h2>
      </div>

      <?php $products = get_products(-1);
      if ($products->have_posts()): ?>
        <div class="products__list">
          <?php $j=1; while ($products->have_posts()): $products->the_post(); ?>
            <div class="products-card">
              <div class="products-card__row row">
                <div class="col-lg-6">
                  <div class="section-head">
                    <h3 class="section-head__suptitle">Наши продукты</h3>
                    <h2 class="section-title"><?php the_title(); ?> <span class="products-card__number"><?php echo str_pad($j++, 2, '0', STR_PAD_LEFT); ?></span></h2>
                  </div>

                  <div class="products-card__content">
                    <?php the_content(); ?>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="products-card__img-wrap">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                </div>

              </div>

              <?php if (have_rows('list')): ?>
                <div class="products-card-list row">
                  <?php while (have_rows('list')): the_row(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="products-card-list__item">
                        <h3 class="products-card-list__title"><?php the_sub_field('title'); ?></h3>
                        <div class="products-card-list__descr">
                          <?php the_sub_field('descr'); ?>
                        </div>

                        <div class="products-card-list__content" data-simplebar data-simplebar-auto-hide="false">
                          <?php the_sub_field('text'); ?>
                        </div>

                      </div>
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>

            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>