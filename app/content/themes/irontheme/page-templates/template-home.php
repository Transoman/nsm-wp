<?php
/**
 * Template Name: Главная
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<section class="services">
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <div class="section-head">
          <h3 class="section-head__suptitle">Категория клиента</h3>
          <h2 class="section-title">Наши услуги</h2>
        </div>

        <div class="services__content">
          <p class="md-text">В2В и В2С</p>
          <p>Мы всегда внимательно изучаем специфику деятельности конкретного предприятия, анализируем возможные риски, которые неминуемы в процессе работы. Ведь в разных отраслях хозяйственной деятельности действуют свои правила. Первый и важный шаг к успешному сотрудничеству:  cогласование бизнес задач и подготовка технического задания по проекту.</p>
        </div>

        <div class="services__img-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/serv-pic.svg" alt="">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="services__list">
          <div class="services__item">
            <h3 class="services__item-title">География нашей работы</h3>
            <div class="services__item-content">
              <p>Маркетинговые / рекламные коммуникации</p>
              <p>Россия, Европа, СНГ, страны Балтии, Северной Америки</p>
              <p>Богатый опыт позволяет нам в кратчайшие сроки предоставить профессионально подготовленный документ. Он даст четкое понимание динамики развития соответствующего направления. Маркетинговые исследования в России от NSM Group – это отличное качество и доступная цена.</p>
            </div>
          </div>

          <div class="services__item">
            <h3 class="services__item-title">Основные инструменты</h3>
            <div class="services__item-content">
              <p>ATL, BTL, Digital</p>
              <h4>ATL</h4>
              <p>Размещение на ТВ, радио, в печатных изданиях (offline / online версии), наружная реклама, LED</p>
              <h4>BTL</h4>
              <p>Организация и проведение event-мероприятий, торговых и промо акций, обеспечение участия клиента в выставках, конференциях. Спецпроекты</p>
              <h4>Digital</h4>
              <p>Контекстная реклама, баннерная реклама на тематических площадках, медийная реклама, SEO, SMM. Etc</p>
            </div>
          </div>

          <div class="services__item">
            <h3 class="services__item-title">Сопутствующие возможности</h3>
            <div class="services__item-content">
              <p>Полный спектр услуг по изготовлению pos-, аудио-, видео материалов.</p>
              <p>Создание креативных концепций. Изготовление всех видов рекламной продукцию от аудио до видео.</p>
            </div>
          </div>

        </div>

        <div class="services__btn">
          <a href="#" class="btn" target="_blank">Скачать презентацию</a>
        </div>
      </div>

    </div>
  </div>
</section>

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

        </div>
      </section>

    <?php endif;

  endwhile;

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
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>
