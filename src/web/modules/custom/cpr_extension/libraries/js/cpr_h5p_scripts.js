(function ($) {
  $(document).ready(function () {

    hideButtons = function() {
      var $this = $(this);
      var nextBtnPosition = $this.closest('.question-container').find('.h5p-question-buttons');
      $this.closest('.h5p-answers').find('.h5p-alternative-container').hide();
      $this.find('.h5p-feedback-dialog .h5p-feedback-inner').append(nextBtnPosition);
      nextBtnPosition.show();
    };

    var nexBtn = $('.h5p-question-next');
    var nexBtnValue = nexBtn.attr('aria-label');
    nexBtn.html(nexBtnValue);

    $('.h5p-answer').click(hideButtons);

    var introductionTitle = $('.intro-page .title');
    var introductionBody = $('.intro-page .introduction');
    var introductionBtn = $('.intro-page .buttons');

    $('.intro-page').append('<div class="introduction__all--body"></div>');
    $('.introduction__all--body').append(introductionTitle)
      .append(introductionBody)
      .append(introductionBtn);

    $('.question-container').last().find('.h5p-answer').click(function() {
      $(this).closest('.question-container').find('.h5p-question-finish').click();
    })
  });

})(jQuery);


H5P.externalDispatcher.on('domChanged', function(event) {
});