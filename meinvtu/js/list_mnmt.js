$(document).ready(function() {
  var NewTagListBox = $("#NewTagListBox")
  var MvMtMoreList = $("#MvMtMoreList")
  var MvMtNumHeight = $("#MvMtNumHeight")
	MvMtMoreList.click(function() {
	if ($(".MvMtMore").find("em").attr("class")=="MoreIco1"){
	var autoHeight = MvMtNumHeight.height();
    NewTagListBox.animate({height:autoHeight},200);
	MvMtMoreList.removeClass("MoreIco1").addClass("MoreIco2");
	}else{
    NewTagListBox.animate({height:"60px"},200);
	MvMtMoreList.removeClass("MoreIco2").addClass("MoreIco1");
		}
    });
});
  
function showTit(){
var bigbox= $("#MvScrollBoxs li")
bigbox.hover(function(){
	$(this).find("span").stop(true,true).animate({bottom:"0"},200);
	},function(){
	$(this).find("span").stop(true,true).animate({bottom:"-200px"},200);
		})
}