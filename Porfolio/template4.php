<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="files/Template4/css/template4css.css">

	

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- jQuery library (served from Google) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="files/Template4/jquery.bxslider/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="files/Template4/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

	<script src="js/respond.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.bxslider').bxSlider({
				captions: true

			});
		});
	</script>
	
</head>
<body>
	<section>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#sect1">Bakery</a>
				</div>
				<div class="collapse navbar-collapse ">
					<ul class="nav navbar-nav navbar-right">

						<li><a href="#sect2">About Us</a></li>
						<li><a href="#sect3">Menu</a></li>
						<li><a href="#sect4">Contact</a></li>
						

					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		<div id="sect1" class="slid_cont">
			<ul class="bxslider" >
				<li><img src="img/img34.jpg" width="100%" height="50%" title="Chinas"/></li>
				<li><img src="img/img31.jpg" width="100%" height="50%" title="KingKai's Home"/></li>
				<li><img src="img/img33.jpg" width="100%" height="50%" title="Home"/></li>
				<li><img src="img/img32.jpg" width="100%" height="50%" title="Where I sleep"/></li>
			</ul>
		</div>
		<span class="bar"></span>
	</section>
	<section id="sect2" class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="h2_pos">
					<h2>Welcome to our Business</h2>
				</div>
				<div class="img_cont">
					<img class="" src="img/img35.jpg" />
				</div>
				<div class="p_pos">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pulvinar est eget odio porttitor molestie. Vestibulum id dui quis erat vehicula pulvinar. Duis eu felis justo, vitae viverra dui. Pellentesque venenatis mi vel sapien adipiscing venenatis.
					</p>
				</div>
				<div class="button_feel">
					<h4>Read About Us</h4>
				</div>

			</div>
			<div class="col-md-4">
				<div class="h2_pos">
					<h2>Our Menu</h2>
				</div>
				<div class="img_cont">
					<img class="" src="img/img35.jpg" />
				</div>
				<div class="p_pos">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pulvinar est eget odio porttitor molestie. Vestibulum id dui quis erat vehicula pulvinar. Duis eu felis justo, vitae viverra dui. Pellentesque venenatis mi vel sapien adipiscing venenatis.
					</p>
				</div>
				<div class="button_feel">
				<h4>View Our Menu</h4>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="h2_pos">
				<h2>Contact Us </h2>
					
				</div>
				<div class="img_cont">
					<img class="" src="img/img35.jpg" />
				</div>
				<div class="p_pos">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pulvinar est eget odio porttitor molestie. Vestibulum id dui quis erat vehicula pulvinar. Duis eu felis justo, vitae viverra dui. Pellentesque venenatis mi vel sapien adipiscing venenatis.
					</p>
				</div>
				<div class="button_feel">
					<h4>Leave A Message</h4>
				</div>
			</div>
		</div>
	</section>
	<section id="sect3" class="container ">
		<div class="row">
			<div class="col-md-3">
				<div class="h2_pos">
					<h2>Meta</h2>					
				</div>				
				<div class="p_pos">
					<ul>
						<li><a href="">Log In</a></li>
						<li><a href="">Blogs</a></li>
						<li><a href="">Lounge</a></li>
					</ul>
				</div>
				<div class="button_feel">
					<h4>Leave A Message</h4>
				</div>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
		</div>
	</section>
	<footer>
		<section class="container">
			fwe
		</section>
	</footer>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".button_feel")
		.on("mouseenter" , function(){
			$(" h4").addClass("change");
		})
		.on("mouseleave" , function(){
			$(" h4").removeClass("change");
		});
	});
	</script>
</body>
</html>