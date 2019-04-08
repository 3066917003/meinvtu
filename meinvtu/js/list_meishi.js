function showTit(){
var bigbox= $("#mstp_box a")
bigbox.hover(function(){
	$(this).find(".showTitBg").stop(true,true).animate({bottom:"0"},200);
	},function(){
	$(this).find(".showTitBg").stop(true,true).animate({bottom:"-200px"});
		})
}
function Ms_show()
{
	var RandShow = $(".BigBox");
	var showRand = $(".MiniBoxs");
	RandShow.each(function(i)
	{
		var randRun = Math.floor(0+Math.random()*3);
		$(this).find("a").hide();
		$(this).find("a").eq(randRun).show();
	});
	showRand.each(function(i)
	{
		var randRun = Math.floor(0+Math.random()*3);
		$(this).find("a").hide();
		$(this).find("a").eq(randRun).show();
	});
}
function MeiShiTagHoverRand()
{
	var NewTagListBox = $("#Msfenlei a");
	for (var i=0; i<NewTagListBox.length; i++)
	{
			var rand = "Ftc"+Math.floor(0+Math.random()*9);
			//alert (rand);
			NewTagListBox.eq(i).addClass(rand);
	}
}