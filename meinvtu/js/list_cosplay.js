function showhot(){
	$(".showhot li").hover(function(){
		$(".showhot li").removeClass("active");
		$(this).addClass("active")});
	}