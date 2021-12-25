$(document).ready(function () {
  

var btn = $('#button__top');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});


// Кнопка Битрикс

$('.knopki .menu-item-66 a').removeAttr("href").addClass('b24-web-form-popup-btn-6').css('cursor', 'pointer');

		$(function() {
			var pull 		= $('#pull');
				menu 		= $('.menu ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
});


});