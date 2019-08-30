<?php
/**
 * Template Name: Главная
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<?php
$services = get_services(-1);
if ($services): ?>
  <section class="services">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div class="section-head">
            <h3 class="section-head__suptitle">Сопутствующие возможности</h3>
            <h2 class="section-title">Наши услуги</h2>
          </div>

          <div class="services__content">
            <p class="md-text">Полный спектр услуг по изготовлению pos-, аудио-, видео материалов</p>
            <p>Создание креативных концепций. Изготовление всех видов рекламной продукцию от аудио до видео.</p>
          </div>

          <div class="services__img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/serv-pic.svg" alt="">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="services__list">
            <?php while ($services->have_posts()): $services->the_post();
            $title = get_the_title(); ?>
              <div class="services__item">
                <h3 class="services__item-title"><?php echo $title; ?></h3>
                <div class="services__item-content">
                  <?php the_content(); ?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>

          <div class="services__btn">
            <a href="#" class="btn consultation_open">Получить консультацию</a>
          </div>
        </div>

      </div>
    </div>
  </section>
<?php endif; ?>

<section class="dev-path">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-head">
          <h3 class="section-head__suptitle">выбор пути развития</h3>
          <h2 class="section-title">Экономическое обоснование <br>рекламных инвестиций</h2>
        </div>

        <div class="dev-path__content">
          <p class="md-text">Бывает крайне тяжело, даже имея формальные данные о ресурсе, объективно оценить рекламные носители и реализовать успешное продвижение на рынок.</p>
          <p>NSM Group впервые в России, применяет ей подход к реализации любых маркетинговых проектов. Мы меряем эффективность экономическими показателями деятельности клиента, а не общими индексами рекламного рынка. Для этого, в штате нашей компании сформирован аналитический отдел, состоящий из маркетологов, бизнес-аналитиков и экспертов финансовых рынков, которые смогут сформировать маркетинговый план в краткосрочной и среднесрочной перспективе</p>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="dev-path__float-img">
          <img src="<?php echo THEME_URL; ?>/images/content/laptop.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<?php

if ( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'advantages' ): ?>

      <section class="advantages">
        <div class="container">
          <div class="section-head text-center">
            <h3 class="section-head__suptitle"><?php the_sub_field('suptitle'); ?></h3>
            <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
          </div>

          <?php if (have_rows('list')): ?>
            <div class="row">
              <?php while (have_rows('list')): the_row();
                $title = get_sub_field('title'); ?>
                <div class="col-xl-4 col-md-6">
                  <div class="advantages-card">
                    <div class="advantages-card__head">
                      <img src="<?php the_sub_field('icon'); ?>" width="60" alt="<?php echo esc_html($title); ?>" class="advantages-card__img">
                      <h3 class="advantages-card__title"><?php echo $title; ?></h3>
                    </div>

                    <div class="advantages-card__text">
                      <?php the_sub_field('descr'); ?>
                    </div>

                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <div class="text-center">
            <a href="#" class="btn consultation_open">Получить консультацию</a>
          </div>

        </div>
      </section>

    <?php endif;

  endwhile;

else :

  // no layouts found

endif;

?>

<section class="principles">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-6">
        <div class="principles__img-wrap clearfix">
          <img src="<?php echo THEME_URL; ?>/images/content/principles-pic.svg" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="section-head">
          <h3 class="section-head__suptitle">Наши принципы</h3>
          <h2 class="section-title">Принципы взаимодействия</h2>
        </div>
        <div class="principles__content">
          <p class="md-text">Наш основной принцип работы – это бизнесориентированность</p>
          <p>Мы изначально рассматриваем все проекты с точки зрения финансовой эффективности для клиента в среднеили дальнесрочном периодах. Мы ведем проекты в формате 360 градусов, с максимальными охватами и качественными показателями достижения результатов. С нами легко работать – мы говорим на языке цифр.</p>
          <a href="#" class="btn consultation_open">Получить консультацию</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>
