function indexBottom()
{

}
function tongji()
{

}
function indexArticleSide() //原生广告 200x680
{
document.writeln("<script src=/d/js/acmsd/thea10.js></script>");
}
function indexArticleBottom()
{
document.writeln("<script src=/d/js/acmsd/thea7.js></script>");
}
function indexArticleTop_640()
{

}
function listArticleTop()
{

}
function listArticleSide1 ()
{
document.writeln("<script src=/d/js/acmsd/thea8.js></script>");
}
function listArticleSide2()
{

}
function listArticleSide3()
{

}
function ListImageSide200()
{
document.writeln("<script src=/d/js/acmsd/thea9.js></script>");
}
function ArtTopW300_1()
{

}
function ArtTopW300_2()
{

}
function arc_top()
{
}
function arcPageDown650(){}
function ArtTopW960()
{
document.writeln("<script src=/d/js/acmsd/thea5.js></script>");
}
function ArtCenterW960Page()
{

}
function ArtCenterW960SouGou()
{

}
function ArtCenterW960BD_ys() //内容页原生广告 960x200
{
document.writeln("<script src=/d/js/acmsd/thea6.js></script>");
}
function picContent()
{
document.writeln("<script src=/d/js/acmsd/thea7.js></script>");
}
function picContent2()
{
document.writeln("<script src=/d/js/acmsd/thea7.js></script>");
}
function arc650()
{

}
function bd_search()
{
}

function Pic()
{
}

function HeadStarRand()
{
	var StarHead = $("#StarHead li");
	StarHead.each(function(i)
	{
		var randRun = Math.floor(0+Math.random()*5);
	$(this).find("div").hide();
	$(this).find("div").eq(randRun).show();
	});
}
function ListTopicMode()
{
	$(document).ready(function(){
var TopNav = $("#TopNav li");
var newTypeSon = $("#newTypeSon dl");
	TopNav.hover(function()
	{
		var i = $(this).index();
		newTypeSon.hide();
		newTypeSon.eq(i).show();
	});

	var ali = $("#indexTopic li");
	ali.hover(function()
	{
		$(this).css("z-index","999");
		$(this).find("a").stop(true,true).animate({
							left :"-21px",
							top : "-15px",
							height : "150px",
							width : "200px"
							},100);
		$(this).find("img").stop(true,true).animate({
							height : "150px",
							width : "200px"
							},100);
	},function()
	{	
		$(this).css("z-index","2");
		$(this).find("a").stop(true,true).animate({
							left :"0px",
							top : "0px",
							height : "119px",
							width : "159px"
							},100);
		$(this).find("img").stop(true,true).animate({
							height : "119px",
							width : "159px"
							},100);
	});
});
}
function List_MxtpRand()
{
	var List_MxtpRand = $("#ShowTit1 a");
	List_MxtpRand.each(function(i)
	{
		var randRun = Math.floor(0+Math.random()*3);
	//$(this).find("div").hide();
	//$(this).find("div").eq(randRun).show();
	//$(this).attr("class","Spec1 rand"+randRun+"");

	});
}
function MeiNvTagHoverRand()
{
	var NewTagListBox = $("#NewTagListBox a");
	for (var i=0; i<NewTagListBox.length; i++)
	{
			var rand = "tag"+Math.floor(0+Math.random()*9);
			//alert (rand);
			NewTagListBox.eq(i).addClass(rand);
	}
}
function list_mvtpTopicQie()
{
	var specResetBox = $("#NewSpec ul");
	var SpecResetBtn = $("#SpecReset");
	SpecResetBtn.click(function()
	{
			var re = parseInt(SpecResetBtn.attr("reset"))+1;
			//alert ("Aul"+re);
			if (re<5)
			{
				specResetBox.hide(0);
				$("#"+"Aul"+re).show();	
				SpecResetBtn.attr("reset",re);
			}
			else
			{
				specResetBox.hide(0);
				$("#Aul1").show();	
				SpecResetBtn.attr("reset",1);	
			}
			;
	});
}


function ArticleBottom_1()//图看世界
{
}
function ArticleBottom_2()//娱乐周边
{
}
function ArticleBottom_3()//为每图片
{
}
function ArticleBottom_4()//动漫图片
{
}
function ArticleBottom_26()//其他图片
{
}
function ArticleBottom_27()//萌图
{
}
function ArticleBottom_28()//装修设计
{
}
function ArticleBottom_29()//纹身图片
{
}
function ArticleBottom_35()//植物图片
{
}

function BJTJ8()
{
}
function BJTJ7()
{
}
function BJTJ13()
{
}
function TagPageTop()
{

}
function W960x150()
{

}
function Tags()
{

}
//单独人体艺术栏目
function tongji_rtys ()
{
}

function article_article_rtys_960_bottom ()
{
	TagPageTop();
}
function article_rtys_tj ()
{
}
//New_w600_ad
function listTopNewad()
{
document.writeln("<script src=/d/js/acmsd/thea1.js></script>");
}
function listBottomNewad()
{
document.writeln("<script src=/d/js/acmsd/thea2.js></script>");
}
function ArtCenterW1200BD_ys()
{
document.writeln("<script src=/d/js/acmsd/thea3.js></script>");
}
function listBottomSouGou()
{
document.writeln("<script src=/d/js/acmsd/thea4.js></script>");
}