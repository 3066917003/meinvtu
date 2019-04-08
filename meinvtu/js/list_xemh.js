function HotRank()
{
	var ShowLi = $("#hotlist").find("li");
	$("#HotClick").click(function()
	{
		var specarr=parseInt($("#HotClick").attr("HotRank"));
		if(specarr>=9)
		{
			ShowLi.hide();
			ShowLi.eq(0).fadeIn(200);
			ShowLi.eq(1).fadeIn(200);
			ShowLi.eq(2).fadeIn(200);
			$("#HotClick").attr("HotRank",'3');
		}else
		{
			ShowLi.hide();
			var ThisSpec=specarr;
			ShowLi.eq(ThisSpec).fadeIn(200);
			ShowLi.eq(ThisSpec+1).fadeIn(200);
			ShowLi.eq(ThisSpec+2).fadeIn(200);
			$("#HotClick").attr("HotRank",ThisSpec+3);
		}
	});
}
function tags($a){
	var count = $a.find("li");
	if (count.length>9){
		for(i=9;i<count.length;i++){
			count.eq(i).css("display","none")}
			$a.find(".slideDowm").css("display","block")}
	$a.find(".slideDowm").toggle(
		function(){
			for(i=9;i<count.length;i++){
			count.eq(i).fadeIn(400);}
			$a.find(".slideDowm").addClass("deg");
			$a.find(".slideDowm").html("收起<img src='/images/slideDowm.png'>");
			},
		function(){
			for(i=9;i<count.length;i++){
			count.eq(i).css("display","none");
			$a.find(".slideDowm").css("display","block");
			$a.find(".slideDowm").removeClass("deg");}
			$a.find(".slideDowm").html("展开<img src='/images/slideDowm.png'>");
			})}