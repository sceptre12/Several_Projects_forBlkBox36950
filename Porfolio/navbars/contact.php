<?php
header("refresh:5; url=http://107.170.131.108/~xavier/Several_Projects_forBlkBox36950/Porfolio/template6.php");


if( !empty($_POST["name"]) ){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$number=$_POST["number"];
		$message=$_POST["message"];


}
/*else {
	$name = "Abraham Mesa";
	$email = "abemesa@gmail.com";
	$number = "3055585874";
	$message = "SOMETHING CRAZY";

	$link = mysqli_connect("localhost", "adashofsweet", "sw33tn3$$", "adashofsweet");
	$query ="insert into `customers` (`name`, `email`, `number`, `message`) values ('".$name."','".$email."','".$number."','".$message."')";
	$result = $link->query($query);
//	mysqli_query($link, $query);
}*/
?>

<html>
<head>
	<title>A-OfSweets</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="../files/Template6/css/template6css.css">	
</head>

<body>
	<div class="title_top">
		<h1>A Dash Of Sweet</h1>
	</div>
	<nav id="menu">
			<ul>
				<li><a href="#">My Story</a></li>
				<li><a href="#">Menu</a></li>
				<li id="view" class="active">
					<b>A Dash Of Sweet</b>
					<ul class="clear" >
						<li><a href="template5.php">Home Layout 1</a></li>
						<li><a href="template6.php">Home Layout 2</a></li>
						<li><a href="template7.php">Home Layout 3</a></li>
					</ul>
				</li>
				<li><a href="#">Specialties</a></li>
				<li id="actsect" >Contact</li>
			</ul>
		</nav>



<?php echo  $name; ?>, thank you for submitting to our mailing list. We will update you with our fresh desserts at <?php echo $email."."; ?>

</body>

<?php
		$link = mysqli_connect("localhost", "adashofsweet", "sw33tn3$$", "adashofsweet");
		$query = "insert into `customers` (`name`, `email`, `number`, `message`) values ($name,".mysql_real_escape_string($email).",'$number',".mysql_real_escape_string($message).")";
		$result = $link->query($query) or die(mysql_error());
//		mysqli_query($link, $query);
?>


</html>


