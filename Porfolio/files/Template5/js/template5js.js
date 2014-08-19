$(document).ready(function(){
	// Calculates the height of nav position
	// Use outerHeight() instead of height() if have padding
	var aboveHeight = $('nav').offset().top ;
	// when scroll
	$(window).scroll(function(){

		// if scrolled down more than the header's height 
		if($(window).scrollTop() > aboveHeight){
			$('nav').addClass('scrolled')
		}
		else{
			$('nav').removeClass('scrolled')
		}
		
	});
});

  
 // Menu dropdown js 
$("#view ").hover(function(){
	$(this).find("ul").removeClass("clear")
	$(this).find("ul").addClass("sneaky")
 
  }, function(){
  	$(this).find("ul").removeClass("sneaky")
	$(this).find("ul").addClass("clear")
  });

// contact activation js
$(document).ready(function(){
			$('#actsect').click(function(){
				
				$('html').addClass('noscrl');
				if($('.page_cover').hasClass('active')){											
					
					$('.page_cover').fadeOut('slow').removeClass('active');
				} else {
					$('.page_cover').fadeIn('slow').addClass('active');
				}
			});
			$('.gyp').click(function(){
				$('.page_cover').fadeOut('slow').removeClass('active');
				$('html').removeClass('noscrl');
			});
		});
