(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);

jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww < 991) {
      $('#sidebar').addClass('active');
    } else if (ww >= 992) {
      $('#sidebar').removeClass('active');
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  alterClass();
});