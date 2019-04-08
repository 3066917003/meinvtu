$(function(){setTimeout(onWidthChange,500);});
function onWidthChange()
{
    if( $(window).width() > 0 ) {
      var e = document.documentElement.clientWidth;	
			var font_size = e * .04 + "px";
			var font_size_small = e * .03 + "px";
			$(".autosize").css("font-size",font_size);
			$(".font_size_small").css("font-size",font_size_small);
			var PicW64 = $("#PicW64").height();
			var PicW64_a = $("#PicW64_a").height();
			$("#PicW30 em").height(PicW64-30);
			$("#PicW30_a em").height(PicW64_a-30);
			//
			//alert (ShowNewNav);
			var val = $("#daohang").attr("val");
			if (val == 1)
			{
				var ShowNewNav = $("#ShowNewNav").height();
				$("#WrapAutoHeight").height(ShowNewNav-1);	
			}else if (val == 0) 
			{
				$("#WrapAutoHeight").height("auto");
			}
    }
    setTimeout(onWidthChange,500);
}
var daohang = $("#daohang");
var ShowNewNav = $("#ShowNewNav");
var WrapAutoHeight = $("#WrapAutoHeight").height();
daohang.click(function()
{
	var val = $("#daohang").attr("val");
	if (val == 0)
	{
		ShowNewNav = $("#ShowNewNav").show(200);
		var val = $("#daohang").attr("val",1);
		var ShowNewNav = $("#ShowNewNav").height();
			//alert (ShowNewNav);
		$("#WrapAutoHeight").height(ShowNewNav);
	}else 
	{
		ShowNewNav = $("#ShowNewNav").hide(200);
		var val = $("#daohang").attr("val",0);
		$("#WrapAutoHeight").height("auto");
	}
});