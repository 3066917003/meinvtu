function RadnSpec()
{
	var SpecBox=$("#Mt_hotList li")
	$("#Ico_reset").click(function()
	{
		var specarr=parseInt($("#Ico_reset").attr("specarr"));
		if(specarr>=9)
		{
			SpecBox.hide();
			SpecBox.eq(0).fadeIn(200);
			SpecBox.eq(1).fadeIn(200);
			SpecBox.eq(2).fadeIn(200);
			SpecBox.eq(3).fadeIn(200);
			$("#Ico_reset").attr("specarr",'1');
		}else
		{
			SpecBox.hide();
			var ThisSpec=specarr+3;
			SpecBox.eq(ThisSpec).fadeIn(200);
			SpecBox.eq(ThisSpec+1).fadeIn(200);
			SpecBox.eq(ThisSpec+2).fadeIn(200);
			SpecBox.eq(ThisSpec+3).fadeIn(200);
			$("#Ico_reset").attr("specarr",ThisSpec+1);
		}
	})
}

function Mt_flash()
{
	var HoverLi = $("#Mt_flash li")
	var value = 1;
	HoverLi.mouseenter(function()
	{
		HoverLi.stop(true,true,false);
		if ($(this).hasClass("curr"))
		{
			return;
		}else
		{
		var ThisLeft = $(this).css("left");
		var ThisZindex = $(this).css("z-index");
		var ThisLeftNum = parseInt(ThisLeft,10);
		var LeftMove = (ThisLeftNum+199)+"px";
		var RightMove = (ThisLeftNum-199)+"px";
		var i = $(this).index();
		HoverLi.find("div").hide();
		if ( i < 1 )
		{
			$(this).animate({left:"-199px"},200,function()
			{
				HoverLi.removeClass("curr").eq(i).find("div").show();
				$(this).addClass("curr").animate({left:"0px"},200);
				HoverLi.removeAttr("style").eq(1).css("z-index","4");
				value = i;
			})
		}else
		{
			if (i > value)
			{
				var ii = i -1;
				var Place = HoverLi.eq(ii).attr('class');
				var a = '<div class="'+Place+' Mt_flashBox"></div>';
				HoverLi.eq(i).before(a);
				$(this).animate({left:LeftMove},200,function()
				{
					HoverLi.removeClass("curr").eq(i).find("div").show();
					$(this).addClass("curr").animate({left:ThisLeft},200,function()
					{
						$(".Mt_flashBox").remove();
					});
					HoverLi.removeAttr("style");
					value = i;
					if (i == 4)
					{
						HoverLi.eq(3).css("z-index","4");
					}
				})
			}else
			{
				var ii = i +1;
				var Place = HoverLi.eq(ii).attr('class');
				var a = '<div class="'+Place+' Mt_flashBox"></div>';
				HoverLi.eq(i).before(a)
				$(this).animate({left:RightMove},200,function()
				{
					HoverLi.removeClass("curr").eq(i).find("div").show();
					$(this).addClass("curr").animate({left:ThisLeft},200,function()
					{
						$(".Mt_flashBox").remove();
					});
					HoverLi.removeAttr("style");
					value = i;
					if (i == 4)
					{
						HoverLi.eq(3).css("z-index","4");
					}
				})
			}	
		}
		}
	})
}