$(document).ready(function(){
	// initial
	$('#content').load('content/tester.php');

	// handles clicked menu
	$('ul#nav li a').click(function(){
		var page = $(this).attr('href');
		$('#content').load('content/' + page + '.php');
		return false;
	})
});