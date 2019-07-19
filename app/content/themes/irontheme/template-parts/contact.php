<section class="contact">
  <div class="container">
    <div class="contact__row">
      <div class="contact__left">
        <div class="section-head">
          <h3 class="section-head__suptitle">Наши контакты</h3>
          <h2 class="section-title">Свяжитесь с нами</h2>
        </div>

        <?php if (get_field('address', 'option')): ?>
          <div class="contact__item">
            <p class="contact__item-label">
              <?php ith_the_icon('location'); ?>
              Адрес нашего офиса:
            </p>
            <p><?php the_field('address', 'option'); ?></p>
          </div>
        <?php endif; ?>

        <?php if (get_field('phone', 'option')): ?>
          <div class="contact__item">
            <p class="contact__item-label">
              <?php ith_the_icon('phone'); ?>
              Телефон:
            </p>
            <a href="tel:<?php echo preg_replace('![^0-9/+]+!', '', get_field('phone', 'option')); ?>"><?php the_field('phone', 'option'); ?></a>
          </div>
        <?php endif; ?>

        <?php if (get_field('email', 'option')): ?>
          <div class="contact__item">
            <p class="contact__item-label">
              <?php ith_the_icon('mail'); ?>
              Почта:
            </p>
            <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
          </div>
        <?php endif; ?>

        <a href="#" class="btn callback_open">Обратный звонок</a>

      </div>
      <div class="contact__right">
        <div id="contact-map" class="contact__map"></div>
      </div>
    </div>
  </div>
</section>

<?php $location = get_field('location', 'option');
if ($location): ?>
  <script>
    function initMap() {
      var uluru = {lat: <?php echo esc_js($location['lat']); ?>, lng: <?php echo esc_js($location['lng']); ?>};
      var image = {
        url: '<?php echo THEME_URL; ?>/images/general/pin.svg',
        size: new google.maps.Size(60, 60),
        anchor: new google.maps.Point(30, 60)
      };
      var map = new google.maps.Map(document.getElementById('contact-map'), {
        zoom: 15,
        center: uluru,
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dde6e8"},{"visibility":"on"}]}]
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        icon: image
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaX1QlThDnYC0tJp8PL9kdxufKXTfIy_0&callback=initMap"></script>
<?php endif; ?>