(function ($) {
  'use strict';
  /**
   * Search Box Toggling
   */
  $(function () {
    const $label = $('.search-toggle').siblings('label');
    $label.hide();

    $('.search-toggle').on('click', function (event) {
      event.preventDefault();
      $label.animate({ width: 'toggle' });
      $label.children('[type="search"]').focus();
    });

    $('.search-field').on('blur', function () {
      if ($(this).val() === '') {
        $('.header-search label').animate({ width: 'hide' });
      }
    });
  });
})(jQuery);

