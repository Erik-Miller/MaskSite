(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		$('.open-menu').on('click', function(e){
			e.preventDefault();
			$('.slide-left, .mask').toggleClass('active');
		});
		$('.close-menu').on('click', function(e){
			e.preventDefault();
			$('.slide-left, .mask').toggleClass('active');
		});
		
		  $('.popup').magnificPopup({type:'image'});
		
		
		var theOffset = $('.header-sync').offset().top;
		
		$(window).scroll(function(){
		  var sticky = $('.header .sticky'),
		      scrollPosition = $(window).scrollTop();
			  //console.log(theOffset + ', ' + scrollPosition);
		  if (scrollPosition >= theOffset){				  
			  sticky.addClass('show');
			  $('.header').addClass('scrolled');
			  $('.header').css('position', 'fixed');
		  }else{
		  	sticky.removeClass('show');
		  	$('.header').removeClass('scrolled');
		  	$('.header').css('position', 'absolute');
		  }
		});	
		
		
     });
		
	
})(jQuery, this);

