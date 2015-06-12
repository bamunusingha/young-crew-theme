$(function () {
		 
	// fitVids
	$("body").fitVids();
	
	// Scroll to top 
	var toTop = $('#toTop');
	var scred = false;
	var scrHeight = 300;
	$(window).scroll(function () {
		if (scrHeight < $(window).scrollTop() && !scred) {
			toTop.fadeIn();
			scred = true;
		} else if (scrHeight > $(window).scrollTop() && scred) {
			toTop.fadeOut();
			scred = false;    
		}
	});
	$('a#toTop').click(function () {
		$('body,html').animate({scrollTop: 0}, 800);
		return false;
	});
	
	
	// Sticky navigation
	var nav = $('#nav');
	var navwrapper = $('.nav-wrapper');
	var megamenu = $('.sf-mega-block');
	var scrolled = false;
	var headerHeight = nav.offset().top;
	$(window).scroll(function () {
		if (headerHeight < $(window).scrollTop() && !scrolled) {
			nav.addClass('sticky-nav').animate({ top: '0px' });
			navwrapper.addClass('prl-container');
			megamenu.addClass('prl-container');
			scrolled = true;
		} else if (headerHeight > $(window).scrollTop() && scrolled) {
			nav.removeClass('sticky-nav').removeAttr('style');
			navwrapper.removeClass('prl-container');
			megamenu.removeClass('prl-container');
			scrolled = false;    
		}
	});
	
	
	// Mobile navigation
	$('.nav-item').has('ul').prepend('<span class="nav-click"></span>');
	$('.nav-list').on('click', '.nav-click', function(){
		$(this).siblings('.nav-submenu').slideToggle();
		$(this).toggleClass('nav-click-up');
	});
	
	
})(jQuery);

