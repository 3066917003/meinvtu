function MoreLetter()
{
	var selects = $("#a_select");
	var selectbox = $("#a_selectbox");
	var point = $("#point");
	point.click(function()
	{
		if (point.hasClass("down"))
		{
			var height = selectbox.outerHeight()-5;
			selects.animate({"height":height+"px"},100,function()
			{
				point.removeClass("down").addClass("up");
			});
			
		}else
		{
			
			selects.animate({"height":"146px"},100,function()
			{
				point.removeClass("up").addClass("down");
			});
		}
	})
}
function MoreSelect()
{
	var a = $("#a_selectbox2");
	var b = a.find("li");
	var c = b.length;
	var n = 11;
	if (c < 12)
	{
		return false;
	}else
	{
		b.hide().slice(0,11).show();
		b.last().after("<li id=\"point2\">查看更多</li>");

	}
	$("#point2").live("click",function()
	{
		n = parseInt(n+18)
		b.slice(0,n).show();
		if (n >c)
		{
			$("#point2").hide();
		}
	})
}