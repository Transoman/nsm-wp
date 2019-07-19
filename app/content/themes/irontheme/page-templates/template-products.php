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
        <div class="products-tabs">
          <ul class="products-tabs-list">
            <?php $i=0; while ($products->have_posts()): $products->the_post(); ?>
              <li>
                <a href="#prod-<?php echo $i++; ?>"><?php the_title(); ?></a>
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>

          <?php $i=0; $j=1; while ($products->have_posts()): $products->the_post(); ?>
            <div class="products-tabs__item" id="prod-<?php echo $i++; ?>">
              <div class="row">
                <div class="col-lg-6">
                  <div class="section-head">
                    <h3 class="section-head__suptitle">Наши продукты</h3>
                    <h2 class="section-title"><?php the_title(); ?> <span class="products-tabs__number"><?php echo str_pad($j++, 2, '0', STR_PAD_LEFT); ?></span></h2>
                  </div>

                  <div class="products-tabs__content">
                    <?php the_content(); ?>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="products-tabs__img-wrap">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                </div>

              </div>

              <?php if (have_rows('list')): ?>
                <div class="products-list row">
                  <?php while (have_rows('list')): the_row(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="products-list__item">
                        <div class="products-list__dots"><span></span><span></span><span></span></div>
                        <h3 class="products-list__title"><?php the_sub_field('title'); ?></h3>
                        <div class="products-list__descr">
                          <?php the_sub_field('descr'); ?>
                        </div>

                        <div class="products-list__content">
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