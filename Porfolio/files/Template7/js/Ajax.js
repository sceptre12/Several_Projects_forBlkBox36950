$(document).ready(function(){


	// inital page to be displayed
	$('#switch_content').load('files/Template1/Home.php');

	// handles the click menu
	$('ul.menu li a').click(function(){
		var page = $(this).attr('href');

		$('#switch_content').load( 'files/Template1/' + page + '.php');
		return false;
	})

});