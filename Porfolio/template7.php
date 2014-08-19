<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>A-OfSweets</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="files/Template7/css/template7css.css">	
	
</head>
<body>
	<?php include 'commonHeaders/template5commonhead.php'; ?>
	


		
	<div id="container">		
		<img src="img/A-OfSweets_files/img30.jpg">
		<img src="img/A-OfSweets_files/img32.jpg">
		<img src="img/A-OfSweets_files/img33.jpg">
		<img src="img/A-OfSweets_files/img35.jpg">
		<img src="img/A-OfSweets_files/img36.jpg">
		<img src="img/A-OfSweets_files/img37.jpg">
		<img src="img/A-OfSweets_files/img38.jpg">
		<img src="img/A-OfSweets_files/img39.jpg">
		<img src="img/A-OfSweets_files/img40.jpg">
		<img src="img/A-OfSweets_files/img41.jpg">
		<img src="img/A-OfSweets_files/img42.jpg">
		<img src="img/A-OfSweets_files/img45.jpg">
		<img src="img/A-OfSweets_files/img46.jpg">
		<img src="img/A-OfSweets_files/img47.jpg">
		<img src="img/A-OfSweets_files/img32.jpg">

		
	</div>
		
	
	
	


	
	
	
	
	

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://rawgithub.com/desandro/masonry/v2.1.08/jquery.masonry.js"></script>
	<script type="text/javascript" src="files/Template7/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="files/Template7/js/modernizr-transitions.js"></script>
	<script type="text/javascript">
	$(function(){
		// $("#container").addClass('.masonry');
		
		$("#container img").wrap("<div class='wrps'></div>");
		
		$( function() {

	  var $container = $('#container');

	  $container.imagesLoaded( function() {
	    $container.masonry({
	    	isAnimated: false,
	    	animationOptions: {
	    		duration: .1,
	    		easing: 'linear',
	    		queue: false,
	    	},
	      columnWidth: function( containerWidth ) {
	        return containerWidth / 3
		      },
		      
		    });
		  });
	  
		});

	});
	</script>
	
	
	
	<script type="text/javascript" src="files/Template7/js/template7js.js"></script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- START SOUND CODE V4.1 HTML5 -->
	<script language="JavaScript" type="text/javascript">
	<!--

	// PLAYER VARIABLES

	// var mp3snd = "music/Calyspo.mp3";
	// var oggsnd = "music/Calyspo.ogg";

	document.write('<audio autoplay="autoplay">');
	document.write('<source src="'+mp3snd+'" type="audio/mpeg">');
	document.write('<source src="'+oggsnd+'" type="audio/ogg">');
	document.write('<!--[if lt IE 9]>');
	document.write('<bgsound src="'+mp3snd+'" loop="1">');
	document.write('<![endif]-->');
	document.write('</audio>');

	//-->
	</script>
	
	<!-- END SOUND CODE V4.1 -->
	
</body>
</html>