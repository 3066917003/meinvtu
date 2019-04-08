function showTag(){
	$(".tagTit span").click(function(){
		$(".tagTit span").removeClass("active");
		$(this).addClass("active");
		var for1 ='#'+$(this).attr("alt");
		$(".taglist").css("display","none");
		$(".tagbox").find(for1).css("display","block")
		})}
function hover1(){
	$(".showhot li").mouseover(function(){
		$(this).find("img").css("opacity","0.8")});
	$(".showhot li").mouseleave(function(){
		$(this).find("img").css("opacity","1")})}
		