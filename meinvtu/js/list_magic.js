var boxflashCont=-1;
function swaptab(i){
	boxflashCont=i;
    var myLi = $("#boxflashTop > ul > li");
    var myDiv =$("#boxflashCont > div");
	var ic=myLi.length;
	if(boxflashCont>=ic) boxflashCont=0;
	
	myLi.removeClass("hover");
	myLi.eq(boxflashCont).addClass("hover");
	myDiv.hide();
	myDiv.eq(boxflashCont).show();
}
$(document).ready(function(){
    $("#boxflashCont > div:not(:first)").hide();
    var myLi = $("#boxflashTop > ul > li");
    var myDiv =$("#boxflashCont > div");	
    myLi.each(function(i){
       $(this).mouseover(function(){
	   	 swaptab(i);
       });
    });
	auto_boxflashCont();
});
function auto_boxflashCont(){
	++boxflashCont;
	swaptab(boxflashCont);
	window.setTimeout("auto_boxflashCont()",5000);
}


    $(document).ready(function(){
    $("#djphmyCont > div:not(:first)").hide();
    var myLi = $("#djphmyTop > ul > li");
    var myDiv =$("#djphmyCont > div");
    myLi.each(function(i){
       $(this).mouseover(function(){
         myLi.removeClass("hover");
          $(this).addClass("hover");
           myDiv.hide();
           myDiv.eq(i).show();
       })
    })
    })
jQuery(function(){
$('.artist_l .a2,.artist_l .a3,.artist_l .a4,.artist_l .a5').mouseover(function(){
$(this).addClass('a_h');
}).mouseout(function(){
$(this).removeClass('a_h');
})
})