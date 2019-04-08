function WS_show()
{
	var RandShow = $("#WenShenBox li");
	var showRand = $("#showRand a");
	var showRands = $("#showRand_1 a");
	var randRun = Math.floor(0+Math.random()*3);
	RandShow.each(function(i)
	{
		$(this).find("a").hide();
		$(this).find("a").eq(randRun).show();
	});
	showRand.each(function(i)
	{
		showRand.hide();
		showRand.eq(randRun).show();
	});
	showRands.each(function(i)
	{
		showRands.hide();
		showRands.eq(randRun).show();
	});
};