/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.reportsPicker = {
    attach: function (context, settings) {
      var $eventsFilterBlock = $('#views-exposed-form-reports-view-reports', context);
      var $eventDatepicker = $('#edit-created-from', context);

      var langCode = drupalSettings.path.currentLanguage;


      if ($eventsFilterBlock.length) {
        $eventDatepicker.attr('autocomplete', 'off');
        $eventDatepicker.datepicker({
          onShow: function(dp, animationCompleted){
          },
          onHide: function(dp, animationCompleted){
          },
          'dateFormat': 'yyyy-mm-dd 00:00:00',
          'range': true,
          'language': langCode,
          'onSelect': function(inst) {var components = inst.split(',');
            var from = (0 in components) ? components[0] : '';
            var to = (1 in components) ? components[1] : from;
            $eventsFilterBlock.find('[name="created_to"]').val(to.replace('00:00:00', '23:59:49'));
            $eventsFilterBlock.find('[name="created_from"]').val(from);
          },
        });

        var vars = [], hash;
        var hashes = decodeURI(window.location.href).slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++) {
          hash = hashes[i].split('=');
          vars.push(hash[0]);
          vars[hash[0]] = hash[1];
        }

        if (hashes.length) {
          if (vars['created_from'] && vars['created_from'].length) {
            var filterCreatedFrom = vars['created_from'].replace('+' , ' ').replace(/%3A/g, ':');
            $eventsFilterBlock.find('#edit-created-from').val(filterCreatedFrom);
          }
          if (vars['created_from'] && vars['created_from'].length) {
            var filterCreatedTo = vars['created_to'].replace('+' , ' ').replace(/%3A/g, ':');
            $eventsFilterBlock.find('#edit-created-to').val(filterCreatedTo);
          }
          if (vars['created_from'] && vars['created_from'].length) {
            $eventDatepicker.data('datepicker').selectDate([new Date(filterCreatedFrom),new Date(filterCreatedTo)]);
          }
        }
      }
    }
  };

  Drupal.behaviors.reportsCounter = {
    attach(context, settings) {
      var $counter = $('.js-counter', context);

      $('.views-infinite-scroll-content-wrapper', context).once('reportsCount').each(function() {
        var $contentWrapper = $(this);
        var observer = new MutationObserver(function(mutations) {
          mutations.forEach(function(mutation) {
            var $currentQuantity = $contentWrapper.children().length;
            $counter.html($currentQuantity);
          });
        });

        var config = {
          childList: true
        };

        var element = $(this)[0];

        observer.observe(element, config);
      })
    }
  };

})(jQuery, Drupal);
