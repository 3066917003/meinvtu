function ShowMore()
{
	var _height = $(".starInfoBox");
	var He = parseInt((_height.width()*0.3)+26);
	for (var e=0; e<_height.length; e++)
	{
		if (_height.eq(e).find("p").height()>=He)
		{
			_height.eq(e).height(He);
			_height.eq(e).after('<div class="MoreTxt"><span attr="'+e+'" value="1">点击展开</span></div>');
		} else 
		{
			_height.eq(e).after('<div class="hr20"></div>');
		}
	}
	var Click = $(".MoreTxt").find("span");
	Click.click(function()
	{
		var i = $(this).attr("attr")
		var vv = $(this).attr("value");
		if (vv == 1)
		{
			$(".MoreTxt").eq(i).find("span").attr("value","0");
			$(".MoreTxt").eq(i).find("span").addClass("sq");
			$(".MoreTxt").eq(i).find("span").html("点击收起");
			_height.eq(i).css("height","auto");
		} else if(vv == 0)
		{
			$(".MoreTxt").eq(i).find("span").attr("value","1");
			$(".MoreTxt").eq(i).find("span").removeClass("sq");
			$(".MoreTxt").eq(i).find("span").html("点击展开");
			_height.eq(i).css("height",He);
		}
	})
}