/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.hideFieldSet = {
    wrapperHide: function () {
      $(this).closest('.js-question-wrapper').hide();
    },

    attach: function (context, settings) {
      $('.js-next-btn', context).click(this.wrapperHide);
    }
  };

  Drupal.behaviors.questionsCalc = {
    attach: function (context, settings) {
      var $totalQuestions = $('#edit-total-questions', context);
      var totalQuestionsLength = $('fieldset.js-answer-btn').length;
      $totalQuestions.val(totalQuestionsLength);

      $('.js-answer-btn', context).click(this.calcResult)
    },

    calcResult: function() {
      var $this = $(this);
      var answer = $this.val();
      var $field = answer === 'correct' ? $('#edit-total-correct-answers')
        : answer === 'incorrect' ? $('#edit-total-incorrect-answers')
          : $();
      if (!$field.length) {
        return;
      }
      var val = $field.val();
      $field.val($.isNumeric(val) ? ++val : 1);
    },
  };

  Drupal.behaviors.showBlocks = {
    attach: function (context, settings) {
      var $tackeTheTestBlock = $('.block--jointhefightagainstcorruption');
      var $addToAnyBlock = $('.test-share--wrapper');
      var $confirmImage = $('.block--webformconfirmationmessage');
      var $resultTarget = $('.js-results-confirm-id');

      $('.form-item-finish-question-btns', context).click(function() {
        var correctAnswers = $('#edit-total-correct-answers').val();
        $resultTarget.html(correctAnswers);
        var quoteValue = $('.js-results-confirm-wrapper').text();
        a2a_config.templates.facebook.quote = quoteValue;
      });

      if ($('.webform-confirmation', context).length) {
        $('.webform-confirmation').prepend($confirmImage);
        $('.js-results-confirm-wrapper').clone().appendTo($('.webform-confirmation__message'));
        $tackeTheTestBlock.show();
        $addToAnyBlock.show();

        if ($(window).width() >= 768) {
          $confirmImage.show();
        }
      }
    }
  };

  Drupal.behaviors.submitForm = {
    attach: function (context, settings) {
      $('.form-item-finish-question-btns', context).click(function() {
        $('.webform-button--submit').click();
      });
    }
  };

})(jQuery, Drupal);
