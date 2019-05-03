/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.cpr_bootstrap_barrio = {
    attach: function (context, settings) {


    }
  };

  Drupal.behaviors.cprAccordion = {
    accordionToggle: function(e) {
      e.preventDefault();
      $(this).toggleClass('accordion__link--active');
      $(this).closest('.js--accordion__header')
        .siblings('.js--accordion__body')
        .slideToggle(200)
    },

    attach: function (context, settings) {
      $('.js--accordion__link', context).once().click(this.accordionToggle);
    }
  };

  Drupal.behaviors.cprLearnTabs = {
    learnTabCall: function(e) {
      e.preventDefault();
      var thisNodeId = $(this).attr('cprTarget');
      var tabBodyParrent = $('.view-display-id-learn_view_page');
      tabBodyParrent.find('.js-learn__tab--body').hide();
      tabBodyParrent.find('#' + thisNodeId).show();

      $('.view-display-id-learn_view_tabs_block')
        .find('.learn__tab--title--active')
        .removeClass('learn__tab--title--active');

      $(this).addClass('learn__tab--title--active')
    },

    attach: function (context, settings) {
      $('.view-display-id-learn_view_tabs_block .views-row:first-of-type .js-learn__tab--title')
        .addClass('learn__tab--title--active');

      $('.js-learn__tab--title', context).click(this.learnTabCall);
    }
  };

  Drupal.behaviors.cprPolicyAgree = {
    PolicyAgree: function() {
      $('#edit-field-privacy-policy-value').prop('checked', true );
    },

    attach: function (context, settings) {
      $('.js-btn__policy--agree', context).click(this.PolicyAgree);
    }
  };

  Drupal.behaviors.counterCall = {
    attach: function (context, settings) {
      $('.js-counter-up', context).counterUp({
        delay: 10,
        time: 750
      });
    }
  };

  Drupal.behaviors.anchorLinks = {

    smoothScroll: function(e) {
      e.preventDefault();
      var el = $( e.target.getAttribute('href') );
      var elOffset = el.offset().top;
      var elHeight = el.height();
      var windowHeight = $(window).height();
      var offset;

      if (elHeight < windowHeight) {
        offset = elOffset - ((windowHeight / 2) - (elHeight / 2));
      }
      else {
        offset = elOffset;
      }
      var speed = 500;
      $('html, body').animate({scrollTop:offset}, speed);
    },

    scrollToTop: function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: ($('#header').offset().top)
      },500);
    },

    // Fix anchors on scrolling
    fixOnScroll: function() {
      var scroller_anchor = $(".anchors-position").offset().top;

      if ($(this).scrollTop() >= scroller_anchor && $('.anchors--wrapper').css('position') != 'fixed') {
        $('.anchors--wrapper').css({
          'position': 'fixed',
          'top': '50px'
        });
      }
      else if ($(this).scrollTop() < scroller_anchor && $('.anchors--wrapper').css('position') != 'relative') {
        $('.anchors--wrapper').css({
          'position': 'relative',
          'top': '0'
        });
      }
    },

    attach: function (context, settings) {
      if ($('.field--name-body .anchor-link').length) {
        var $anchorItems = $('.anchor-link');
        $('.anchors--wrapper', context).prepend($anchorItems);
        $('.anchors-position', context).css('min-width', '300px');

        // fix anchors
        if ($(window).width() >= 768) {
          $(window).on('scroll', this.fixOnScroll);
        }
      }

      $('.anchor-link a', context).click(this.smoothScroll);
      $('.js-scroll-to-top', context).click(this.scrollToTop);
    },

    detach: function (context, settings) {
      if ($('.field--name-body .anchor-link').length) {
        if ($(window).width() >= 768) {
          $(window).on('scroll', this.fixOnScroll);
        }
      }
    }
  };

  Drupal.behaviors.scrollProgress = {
    scrollProgressBar: function() {
      var docHeight = $(document).height();
      var windowHeight = $(window).height();
      var scrollPercent;
      scrollPercent = $(window).scrollTop() / (docHeight - windowHeight) * 100;

      $('.scroll-progress').width(scrollPercent + '%');
    },

    attach: function (context, settings) {
      if ($('.scroll-progress-container', context).length) {
        $(window).on('scroll', this.scrollProgressBar);
      }
    },

    detach: function (context, settings) {
      if ($('.scroll-progress-container', context).length) {
        $(window).off('scroll', this.scrollProgressBar);
      }
    }
  }

})(jQuery, Drupal);
