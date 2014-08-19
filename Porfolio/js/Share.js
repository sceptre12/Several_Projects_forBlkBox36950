$(document).ready(function(){
	 		$("li a").on("click", function()
	 		{
	 			$("li a").removeClass("active");
	 			$(this).addClass("active");
	 			
	 			var s = $(this).position().left ;

	 			var t = $('li a').eq(3).position().left;	

	 			t/3;
	 			if(s ==0)
	 			{
	 				$(".slider").css("left","0");
	 			}
	 			else if(t/3 == s){
	 				$(".slider").css("left","25%");

	 			}else if(s == ((t/3)*2)){
	 				$(".slider").css("left","50%");

	 			}else{
	 				$(".slider").css("left", "75%");
	 			}

	 		});
	 	});