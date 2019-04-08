function TagHoverRand()
{
	var NewTagListBox = $("#Tag_list a");
	for (var i=0; i<NewTagListBox.length; i++)
	{
			var rand = "color_"+Math.floor(0+Math.random()*10);
			NewTagListBox.eq(i).addClass(rand);
	}
}
function ShowPic()
{
	$("#CarSize a").hover(function()
	{
	$(this).find("span").hide();
	},function()
	{$(this).find("span").show();
	})
}