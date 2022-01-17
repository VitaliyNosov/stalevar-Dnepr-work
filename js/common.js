document.addEventListener('DOMContentLoaded', () => {

// Кнопка вверх - вниз

var $scroll_btn = $(".js-scrolltop");

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      $scroll_btn.addClass('show');
    } else {
      $scroll_btn.removeClass('show');
    }
  });

    $scroll_btn.click(function () {
        return $("body,html").animate({
            scrollTop: 0
        }, 300);
    });

});


