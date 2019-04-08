function tags($a)
{
	var count = $a.find(".tags_list a");
	if (count.length>29)
	{
		for(i=28;i<count.length;i++)
		{
			count.eq(i).css("display","none")
		}
		$a.find(".slideDowm").css("display","block")
	}else
	{
		$a.find(".slideDowm").css("display","none")
	}
	$a.find(".slideDowm").toggle(
		function()
		{
			for(i=28;i<count.length;i++)
			{
				count.eq(i).fadeIn(400);
			}
				$a.find(".slideDowm").addClass("deg");
		},
		function()
		{
			for(i=28;i<count.length;i++)
			{
			count.eq(i).css("display","none");
			$a.find(".slideDowm").css("display","block");
			$a.find(".slideDowm").removeClass("deg");
			}
		}
	)
}