  </div><!-- /.content -->

  <footer class="footer">
    <div class="container">
      <p class="copy">&copy; <?php echo date('Y'); ?>. Все права защищены</p>

      <?php if (get_field('policy', 'option')): ?>
        <a href="<?php echo esc_url(get_field('policy', 'option')); ?>" target="_blank" class="policy">Политика конфиденциальности</a>
      <?php endif; ?>
    </div>
  </footer><!-- #colophon -->

</div><!-- /.wrapper -->

  <div id="callback" class="modal">
    <button type="button" class="modal__close callback_close"></button>

    <h3 class="modal__title">Обратный звонок</h3>

    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="6" title="Обратный звонок"]'); ?>
      <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
    </div>
  </div>

  <div id="order-service" class="modal">
    <button type="button" class="modal__close order-service_close"></button>

    <h3 class="modal__title">Заказать услугу</h3>

    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="64" title="Заказ услуги"]'); ?>
      <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
    </div>
  </div>

<?php wp_footer(); ?>

</body>
</html>
