function hoverli(){
	$(".showhot li").mouseover(function(){
		
		$(this).find("div").css("display","block");
		$(this).find("img").css("filter","alpha(opacity=80);");
		$(this).find("img").css("opacity","0.8");})
	$(".showhot li").mouseleave(function(){
		
		$(this).find("div").css("display","none");
		$(this).find("img").css("opacity","1");})}