$(window).load(function(){
	$(document.body).fadeIn(1500);
});

// jquery Slide 

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 2500, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});

$(document).ready(function(){
	// calculates the height of section 2

	var aboveHeight = $('#sect2').height ;

	// when scroll
	$(window).scroll(function(){

		// checks to see if the window has scrolled down to aboveHeight
		if( $(window).scrollTop() + 1 > aboveHeight){
			// $('html').removeClass('noScroll');
			alert("reach")
		}
		
	});
});

// Jubotron title effects
$(document).ready(function(){
	$('#intro_btnpos button').click(function(){
	 $('.jumbotron h1').addClass('sect2Animate'), 
	 $('.jumbotron h1#topSide').addClass('fadeLeft'), 
	 $('.jumbotron h1#leftSide').addClass('fadeRight')  
	});
});

// this is for the overlay js
$(document).ready(function(){
	$('.overlay').each(function(i,el){
		el.id= i  + 1;
	});

	$('.overlay').mouseenter(function(){
        $(this).find('h1').css('display', 'block')
        $(this).find('p').css('display', 'block')       
		$(this).find('h1').addClass('fadeUp overlayAnimate')
        $(this).find('p').addClass('fadeUp overlayAnimate')
        
	});
$('.overlay').mouseleave(function(){
        $(this).find('h1').removeClass('fadeUp overlayAnimate')
        $(this).find('p').removeClass('fadeUp overlayAnimate')
        $(this).find('h1').fadeOut('fast')
        $(this).find('p').fadeOut('fast')
});
});

