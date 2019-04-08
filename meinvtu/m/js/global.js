
document.write("<script type=\"text\/javascript\" src=\"\/js\/27270App.js\"><\/script>");
//Lazyload=========
function Lazyload(options){this.options=$.extend({},Lazyload.DEFAULTS,options||{});this.show()}(function($){$.extend(Lazyload,{DEFAULTS:{container:document,attr:"lazysrc",timeout:200},init:function(options){var options=options||{};new Lazyload(options)}});Lazyload.prototype={getClient:function(){return{"top":document.documentElement.clientHeight+Math.max(document.documentElement.scrollTop,document.body.scrollTop),"left":document.documentElement.clientWidth+Math.max(document.documentElement.scrollLeft,document.body.scrollLeft)}},check:function(){this.container=$(this.options.container);this.imgNum=this.container.find("img["+this.options.attr+"]");var _this=this;if(this.imgNum.length){this.timer&&clearTimeout(this.timer);this.timer=setTimeout(function(){var arr=[],gc=_this.getClient();$.each(_this.imgNum,function(i,o){if($(o).offset().top<=gc.top&&$(o).offset().left<=gc.left){var attrval=$(o).attr("lazysrc");attrval&&$(o).attr("src",attrval).removeAttr("lazysrc").hide().fadeIn()}else{arr.push(o)}});_this.imgNum=arr},this.options.timeout)}else{$(window).unbind("scroll",this.check);$(window).unbind("resize",this.check)}},show:function(){var _this=this;$(window).bind("scroll",function(){_this.check()});$(window).bind("resize",function(){_this.check()});this.check()}};$.extend({Lazyload:Lazyload})})(jQuery);$(document).ready(function(){Lazyload.init({container:document,attr:"lazysrc",timeout:50,threshold:1000})});
//End===============
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
function daohang()
{
	var daohang = $("#daohang");
	var ShowNewNav = $("#ShowNewNav");
	var WrapAutoHeight = $("#WrapAutoHeight").height();
	daohang.click(function()
	{
		var val = $("#daohang").attr("val");
		if (val == 0)
		{
			if($('#appdown').length > 0) {
        var h = $('#appdown').outerHeight();
        var s = $('.headNav').outerHeight();
        var z = h+s;
        $("#ShowNewNav").css('top',z+'px');
      }
      ShowNewNav = $("#ShowNewNav").show(200);
			var val = $("#daohang").attr("val",1);
			var ShowNewNav = $("#ShowNewNav").height();
			$("#WrapAutoHeight").height(ShowNewNav);
		}else
		{
			ShowNewNav = $("#ShowNewNav").hide(200);
			var val = $("#daohang").attr("val",0);
			$("#WrapAutoHeight").height("auto");
      $("#ShowNewNav").removeAttr('style');
		}
	});
}
function TagLists()
{
	var TagLists = $("#TagLists li");
	for (var i=0; i<TagLists.length; i++)
	{
			var rand = "tit"+Math.floor(0+Math.random()*20);
			TagLists.eq(i).addClass(rand);
	}
}
function Pages()
{
	var Pages = $("#Pages li");
	var ThisClass = $("#thisclass").attr("thisclass");
	var pageinfo = $("#pageinfo").attr("pageinfo");
	Pages.eq(0).after("<li class='AppEndLi'><span>"+ThisClass+"</span> <font color='#999'>/ "+pageinfo+"</font></li>");
}