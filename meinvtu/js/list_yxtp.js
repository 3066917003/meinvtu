var count = 1

function Scrolla(){
	if(count<5){
		$(".banner .active").removeClass("active")
		$(".banner .viewport li").eq(count).addClass("active");
		$(".banner .piclist li").eq(count).addClass("active");;
		count++;}
	else if(count=5){
		count = 0;
		Scrolla()}
	}
function banner(){
	var banner = setInterval(Scrolla,"3000");
	$(".banner .piclist li").mouseover(function(){
		window.clearInterval(banner)
		var c = $(this).index();
		$(".banner .active").removeClass("active");
		$(this).addClass("active");
		$(".banner .viewport li").eq(c).addClass("active");
		count = c;
		})
	$(".banner .piclist li").mouseleave(function(){
		window.clearInterval(banner);
		banner = setInterval(Scrolla,"3000");
		})
	}


count2 = 2
function showhot(){
	$(".showhot .tit a").click(function(){
		
		$(".hotlist li").css("display","none");
		switch(count2){
			case 1:
				for(i=0;i<7;i++)
				{$(".hotlist li").eq(i).fadeIn();}
				count2++;
				break;
			case 2:
				for(i=7;i<13;i++){$(".hotlist li").eq(i).fadeIn();}
				count2++;
				break;
			case 3:
				for(i=12;i<19;i++){$(".hotlist li").eq(i).fadeIn();}
				count2=1;
				break;
			}})}
