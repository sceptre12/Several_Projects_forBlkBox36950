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
