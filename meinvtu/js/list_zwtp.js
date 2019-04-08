function ShowPic()
{
	$(".Zw_Header_Top a").hover(function()
	{
	$(this).find("span").hide();
	},function()
	{$(this).find("span").show();
	})
}

function TagHoverRand()
{
	var NewTagListBox = $("#Zw_Tag a");
	for (var i=0; i<NewTagListBox.length; i++)
	{
			var rand = "color"+Math.floor(0+Math.random()*18);
			NewTagListBox.eq(i).addClass(rand);
	}
}
$(function ()
{
    function ShowMoreTag (idBox,idListBox)
    {
		var TagBox = $("#"+idBox);
		var TagListBox = $("#"+idListBox)
		var TagBoxSpan = TagBox.find("span");
		var TagBoxA = TagBox.find("a");
		var TagBoxHeight = TagListBox.height();
		TagBox.find("span").click(function()
		{
			if (TagBox.find("span").attr("class") == "Zw_Down")
			{
			if (TagBoxHeight > 29 )
			 {
				TagBox.animate({"height":TagBoxHeight},200);	
				$(this).removeClass("Zw_Down").addClass("Zw_Up");
			 }
			}
			else if (TagBox.find("span").attr("class") == "Zw_Up")
			{
				TagBox.animate({"height":"29px"},200);	
				$(this).removeClass("Zw_Up").addClass("Zw_Down");
			}
		});
		
    }
	ShowMoreTag ("Tag_list","Tag_Box")
	ShowMoreTag ("Tag_list_2","Tag_Box_2")
	ShowMoreTag ("Tag_list_3","Tag_Box_3")
})