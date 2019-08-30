'use strict';

global.jQuery = require('jquery');
let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  Simplebar = require('simplebar');

jQuery(document).ready(function($) {
  // Toggle nav menu
  $('.nav-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.header__nav').toggleClass('open');
  });

  // Modal
  $('.modal').popup({
    transition: 'all 0.3s',
    onclose: function() {
      $(this).find('.wpcf7-not-valid-tip').remove();
      $(this).find('.wpcf7-response-output').hide();
    }
  });

  $('.scroll-down').click(function(e) {
    e.preventDefault();
    let offset = $(this).parent().next().offset().top;
    $('html, body').animate({
      scrollTop: offset
    }, 1000);
  });

  let contactForm = function() {
    $('.contact-form').each(function() {
      let submit = $(this).find('[type="submit"]');
      let button = $(this).find('[data-contact-btn] button');

      if (submit.length) {
        button.find('.text').html(submit.val());
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      }
    });

    // Loader
    $('.contact-form form').on('submit', function () {
      let btn = $(this).find('.btn');

      if (btn.hasClass('btn-link')) {
        btn.addClass("btn-loading");
        btn.find('.text').css('display', 'none');
      } else {
        btn.addClass("btn-loading");
      }
    });

    $('.wpcf7').on('wpcf7spam wpcf7invalid wpcf7mailsent wpcf7mailfailed', function (e) {
      let form = $('.contact-form');
      $(form).find('.btn').removeClass("btn-loading");
    });
  };

  let getServiceName = function() {
    $('.order-service_open').click(function() {
      let name = $(this).data('title');

      $('#order-service input[name="service-name"]').val(name);
    });
  };

  contactForm();
  getServiceName();

  // SVG
  svg4everybody({});
});