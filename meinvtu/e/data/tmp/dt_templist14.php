<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?
$diqu=(int)$_GET[diqu];
$xingbie=(int)$_GET[xingbie];
$infozm=$_GET[infozm];
if (!$infozm){$infozm=0;}
$classid=$_GET[classid];
$page=(int)$_GET[page];
$cr=$empire->fetch1("select classname,bname,classpath from {$dbtbpre}enewsclass where classid='11' limit 1"); 
$classname=$cr['classname']; 
$bname=$cr['bname']; 
$classpath=$cr['classpath']; 
if ($diqu==1){
if ($xingbie==1){
$title='【香港男演员】港台|香港男明星_台湾|香港男歌手_港台男歌手_港台男星_香港男演员名单';
$keywords='香港男演员,香港男明星,台湾男歌手,港台男明星,香港男歌手,香港男星,台湾男星,港台男歌手,港台男星,香港男演员名单';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）港台男明星栏目为您提供港台男明星、香港男明星、台湾男歌手、香港男歌手、港台男歌手、港台男星、香港男演员名单等港台男明星大全.找港台男明星、香港男明星、台湾男歌手、香港男歌手、港台男歌手、港台男星、香港男演员名单就上'.$public_r[sitename].'.。';
}elseif ($xingbie==2){
$title='【香港女明星】香港女演员_台湾女明星_香港|台湾女星_港台女明星_香港影星_香港女影星';
$keywords='香港女明星,香港女演员,台湾女明星,香港演员,香港女星,台湾女星,港台女明星,香港影星,香港女影星';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）港台女明星栏目为您提供香港女明星、香港女演员、台湾女明星、香港女星、台湾女星、香港影星、香港女影星等港台女明星大全.找香港女明星、香港女演员、台湾女明星、香港女星、台湾女星、香港影星、香港女影星就上'.$public_r[sitename].'.。';
}else{
$title='【香港明星大全】台湾明星_港台明星图片_香港明星图片|照片_港台明星排行榜';
$keywords='香港明星,香港明星大全,台湾明星,港台,港台明星,港台男星,香港明星图片,港台明星图片,香港明星照片,港台明星排行榜';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）港台明星栏目为您提供香港明星大全、台湾明星、港台明星图片、香港明星图片、香港明星照片、港台明星排行榜等港台明星图片大全.找香港明星大全、台湾明星、港台明星图片、香港明星图片、香港明星照片、港台明星排行榜就上'.$public_r[sitename].'.。';
}

}else if ($diqu==2){

if ($xingbie==1){
$title='【韩国男演员】韩国男明星人气排行榜_日本|韩国男星_韩国男影星_韩国男明星图片_日韩男明星';
$keywords='韩国男明星,韩国男明星人气排行榜,韩国男演员,日本男星,韩国男星,韩国男明星图片,日本男明星,韩国男影星,日韩男明星';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）日韩男明星栏目为您提供韩国男演员、韩国男明星人气排行榜、日本男星、韩国男星、韩国男影星、韩国男明星图片等日韩男明星大全.找韩国男演员、韩国男明星人气排行榜、日本男星、韩国男星、韩国男影星、韩国男明星图片就上'.$public_r[sitename].'.。';
}elseif ($xingbie==2){
$title='【日韩女星】韩国女明星排行榜_韩国女明星图片_日本女星_韩国女星排名_日本|韩国美女明星';
$keywords='韩国女明星,日本女星,韩国女星,韩国女明星排行榜,韩国女星排名,韩国女明星图片,日本女明星,韩国美女明星,日本最美女星,韩国女歌星';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）日韩女明星栏目为您提供韩国女明星排行榜、韩国女明星图片、日本女星、韩国女星排名、日本美女明星、韩国美女明星等日韩女明星大全.找韩国女明星排行榜、韩国女明星图片、日本女星、韩国女星排名、日本美女明星、韩国美女明星就上'.$public_r[sitename].'.。';
}else{
$title='【日韩明星】韩国明星排行榜_日本明星写真_韩国明星图片_韩国明星街拍_日本明星图片';
$keywords='日韩明星,韩国明星,韩国明星排行榜,日本明星,韩国明星图片,韩国明星街拍,日本明星写真,日本明星图片,韩国明星照片,韩国明星壁纸';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）日韩明星栏目为您提供韩国明星排行榜、日本明星写真、韩国明星图片、韩国明星街拍、日本明星图片、韩国明星照片、韩国明星壁纸等日韩明星图片大全.找韩国明星排行榜、日本明星写真、韩国明星图片、韩国明星街拍、日本明星图片、韩国明星照片、韩国明星壁纸就上'.$public_r[sitename].'.。';
}
}else if ($diqu==3){

if ($xingbie==1){
$title='【欧美歌星】欧美男歌手_欧美男明星_欧美男歌星_欧美电影明星';
$keywords='欧美歌星,欧美男歌手,欧美男明星,欧美男歌星,欧美电影明星';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）欧美男明星栏目为您提供欧美歌星、欧美男歌手、欧美男歌星、欧美电影明星等欧美男明星大全.找欧美歌星、欧美男歌手、欧美男歌星、欧美电影明星就上'.$public_r[sitename].'.。';
}elseif ($xingbie==2){
$title='【欧美女星】欧美女明星图片_欧美性感女星_欧美美女明星_欧美女歌星排名_欧美电影明星';
$keywords='欧美女明星,欧美女星,欧美性感女星,欧美美女明星,欧美女歌星,欧美电影明星,欧美女明星图片,欧美女歌星排名';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）欧美美女明星栏目为您提供欧美女明星图片、欧美性感女星、欧美美女明星、欧美女歌星排名、欧美电影明星、欧美女星名字等欧美美女明星大全.找欧美女明星图片、欧美性感女星、欧美美女明星、欧美女歌星排名、欧美电影明星、欧美女星名字就上'.$public_r[sitename].'.。';
}else{
$title='【欧美明星】欧美明星街拍_欧美明星图片_欧美明星壁纸_欧美明星最新街拍';
$keywords='欧美明星,欧美明星街拍,欧美明星夏季街拍,欧美明星最新街拍,欧美明星壁纸';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）欧美明星栏目为您欧美明星街拍、欧美明星图片、欧美明星壁纸、欧美明星最新街拍等欧美明星图片大全.找欧美明星街拍、欧美明星图片、欧美明星壁纸、欧美明星最新街拍就上'.$public_r[sitename].'.。';
}
}else if ($diqu==4){
if ($xingbie==1){
$title='【大陆男演员】内地男演员_大陆男明星_大陆男星_内地歌星';
$keywords='大陆男演员,内地男演员,大陆男明星,大陆男星,内地歌星';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）大陆男明星栏目为您提供大陆男演员、内地男演员、大陆男明星图片、大陆男星、内地歌星等大陆男明星大全.找大陆男演员、内地男演员、大陆男明星图片、大陆男星、内地歌星就上'.$public_r[sitename].'.。';
}elseif ($xingbie==2){
$title='【中国女演员】大陆女明星名单_中国女明星排行榜_中国女明星图片_中国女星排行榜';
$keywords='中国女明星排行榜,大陆女明星名单,中国女演员,大陆女明星,中国女明星图片,中国女星排行榜';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）大陆女明星栏目为您提供中国女演员、大陆女明星名单、中国女明星排行榜、中国女明星图片、中国女星排行榜等大陆女明星大全.找中国女演员、大陆女明星名单、中国女明星排行榜、中国女明星图片、中国女星排行榜就上'.$public_r[sitename].'.。';
}else{
$title='【中国明星】中国内地明星排行榜_大陆明星排行榜_大陆明星大全_中国明星网';
$keywords='中国明星,内地明星,大陆明星,中国明星网,大陆明星排行榜,大陆明星大全,内地明星排行榜,中国内地明星排行榜';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）大陆明星栏目为您提供中国内地明星排行榜、大陆明星排行榜、大陆明星大全、中国明星网、中国明星图片大全等大陆明星大全.找中国内地明星排行榜、大陆明星排行榜、大陆明星大全、中国明星网、中国明星图片大全就上'.$public_r[sitename].'.。';
}
}else if ($diqu==5){
if ($xingbie==1){
$title='【其他男演员】其他男演员_其他男明星_其他男星_其他歌星';
$keywords='其他男演员,其他男演员,其他男明星,其他男星,其他歌星';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）其他男明星栏目为您提供其他男演员、其他男演员、其他男明星图片、其他男星、其他歌星等其他男明星大全.找其他男演员、其他男演员、其他男明星图片、其他男星、其他歌星就上'.$public_r[sitename].'.。';
}elseif ($xingbie==2){
$title='【其他女演员】其他女明星名单_其他女明星排行榜_其他女明星图片_其他女星排行榜';
$keywords='其他女明星排行榜,其他女明星名单,其他女演员,其他女明星,其他女明星图片,其他女星排行榜';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）其他女明星栏目为您提供其他女演员、其他女明星名单、其他女明星排行榜、其他女明星图片、其他女星排行榜等其他女明星大全.找其他女演员、其他女明星名单、其他女明星排行榜、其他女明星图片、其他女星排行榜就上'.$public_r[sitename].'.。';
}else{
$title='【其他明星大全】其他明星_其他明星图片|照片_其他明星排行榜';
$keywords='其他明星,其他明星大全,其他男星,其他明星图片,其他明星照片,其他明星排行榜';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）其他明星栏目为您提供其他明星大全、其他明星、其他明星图片、其他明星照片、其他明星排行榜等其他明星图片大全.找其他明星大全、其他明星、其他明星图片、其他明星照片、其他明星排行榜就上'.$public_r[sitename].'.。';
}
}
if ($infozm&&!$title){
$title='首字母带'.$infozm.'的明星';
$keywords='';
$description=$public_r[sitename].'（'.$public_r['add_www_92game_net_www'].'）';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?if ($title){?>
<title><?=$title?>_<?=$public_r[sitename]?></title>
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">
<?}else{?>
<title><?=$bname?>-<?=$public_r[sitename]?></title>
<meta name="keywords" content="[!--pagekey--]">
<meta name="description" content="[!--pagedes--]">
<?}?>
<script type="text/javascript" src="/js/tz.js"></script>
<link rel="alternate" media="only screen and (max-width: 640px)"  href="http://<?=$public_r['add_www_92game_net_shouji']?>/<?=$classpath?>/" >
<meta name="mobile-agent" content="format=html5;url=http://<?=$public_r['add_www_92game_net_shouji']?>/<?=$classpath?>/"/>
<link rel="canonical" href="http://<?=$public_r['add_www_92game_net_www']?>/<?=$classpath?>/"/>
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link href="/css/global.css" type="text/css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="/css/starV2.css" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">adgg();</script>
<script type="text/javascript" src="/js/starV2.js"></script>
</head>
<body class="color_0">
<div class="HeaderBox">
 <div class="HeaderBox">
  <div class="MinHeader">
  <div class="warp"> <strong><?=$public_r['add_www_92game_net_tishi']?></strong> <em class="r"><a href="/tag/" title="标签云">标签云</a> | <a href="/update/" title="最新更新">最新更新</a> | <a href="javascript:;" onclick="setFav(); return false;">收藏本站</a> | <a href="/sitemap.html" title="网站地图">网站地图</a></em></div>
  </div>
  <div class="SeaHeader">
   <div class="warp">
    <div class="SeaLogo"><a href="http://<?=$public_r['add_www_92game_net_www']?>/" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a></div>
	<div class="QR_code"><a href="/applink/"  title="下载APP">下载APP</a></div>
    <div class="SeaSearch">
	<div class="bdcs-container">
	<div class="bdcs-main bdcs-clearfix" id="default-searchbox">      
	<div class="bdcs-search bdcs-clearfix" id="bdcs-search-inline">   
	<form name="searchform" method="post" action="/e/search/index.php" class="bdcs-search-form" autocomplete="off" id="bdcs-search-form">      
<input type="hidden" name="show" value="title">                       
<input type="hidden" name="tbname" value="photo">
<input type="hidden" name="tempid" value="1">                                   
	<input type="text" name="keyboard" class="bdcs-search-form-input" id="bdcs-search-form-input" placeholder="请输入关键词" autocomplete="off" style="height: 28px; line-height: 28px;">              
	<input type="submit" class="bdcs-search-form-submit " id="bdcs-search-form-submit" value="搜索">                       
	</form>      
	</div>                               
	</div>
	</div>
</div>
   </div>
  </div>
  <div class="SeaNav yh" id="SeaNav">
   <ul>
    <li class="NenuLi on" id="Home"><a href="/">首页</a></li>
    <li class="NenuLi"> <a href="/word/" title="图看世界">图看世界</a>
      <div class="ShowNav">  <a href="/word/shehuibaitai/" title="图说社会">图说社会</a>  <a href="/word/fengjingsheying/" title="风景图片">风景图片</a>  <a href="/word/gaoxiaoqutu/" title="搞笑图片">搞笑图片</a>  <a href="/word/dongwushijie/" title="动物图片">动物图片</a>  <a href="/word/chebiao/" title="汽车标志">汽车标志</a>  <a href="/meishitupian/" title="美食图片">美食图片</a>  </div>
    </li>
    <li class="NenuLi"> <a href="/ent/" title="娱乐周边">娱乐周边</a>
      <div class="ShowNav">  <a href="/ent/mingxingbagua/" title="八卦图片">八卦图片</a>  <a href="/ent/rentiyishu/" title="人体艺术">人体艺术</a>  <a href="/ent/mingxingtuku/" title="明星图片">明星图片</a>  <a href="/ent/meinvtupian/" title="美女图片">美女图片</a>  <a href="/ent/lianglimeimo/" title="美女模特">美女模特</a>  <a href="/ent/haibao/" title="电影海报">电影海报</a>  </div>
    </li>
    <li class="NenuLi"> <a href="/beautiful/" title="唯美图片">唯美图片</a>
      <div class="ShowNav">  <a href="/beautiful/zhuomianbeijing/" title="高清壁纸">高清壁纸</a>  <a href="/beautiful/dongmantupian/" title="动漫图片">动漫图片</a>  <a href="/beautiful/qichetuku/" title="汽车图片">汽车图片</a>  <a href="/beautiful/feizhuliutupian/" title="非主流图片">非主流图片</a>  <a href="/beautiful/beijingtupian/" title="背景图片">背景图片</a>  </div>
    </li>
    <li class="NenuLi"> <a href="/game/" title="游戏动漫">游戏动漫</a>
      <div class="ShowNav">  <a href="/game/youxixinwen/" title="游戏新闻">游戏新闻</a>  <a href="/game/youxijietu/" title="游戏原画">游戏原画</a>  <a href="/game/xieemanhua/" title="邪恶漫画">邪恶漫画</a>  <a href="/game/cosplaymeitu/" title="Cosplay">Cosplay</a>  </div>
    </li>
    <li class="NenuLi"> <a href="/star/" title="明星库">明星库</a>
     <div class="ShowNav" style="display: none;"> <a href="/star/1-0-0-0.html" title="港台明星">港台明星</a> <a href="/star/2-0-0-0.html" title="日韩明星">日韩明星</a> <a href="/star/3-0-0-0.html" title="欧美明星">欧美明星</a> <a href="/star/4-0-0-0.html" title="大陆明星">大陆明星</a> <a href="/star/5-0-0-0.html" title="其他明星">其他明星</a> <a href="/star/0-1-0-0.html" title="男明星">男明星</a> <a href="/star/0-2-0-0.html" title="女明星">女明星</a> </div>
    </li>
    <li class="NenuLi"> <a href="/qita/" title="其他图片">其他图片</a>
      <div class="ShowNav">  <a href="/qita/mengtu/" title="萌图">萌图</a>  <a href="/zhuangxiusheji/" title="装修设计">装修设计</a>  <a href="/wenshentupian/" title="纹身图片">纹身图片</a>  <a href="/zhiwu/" title="植物图片">植物图片</a>  </div>
    </li>
<li class="NenuLi"> <a href="#" title="美女图片">美女图片大全</a>
   </ul>
  </div>
  <script type="text/javascript">ShowNavSon()</script> 
 </div>
</div>

<div class="Bodyer">
 <div class="hr10"></div>
 当前位置：[!--newsnav--] &gt; 列表页
 <div class="hr10"></div>
 <div class="slide l oh re" id="slide">
  <div class="hr10"></div>
  <h1 class="a_title">明星库</h1>
  <div class="hr10"></div>
  <div class="a_select oh re" id="a_select">
   <div class="a_selectbox" id="a_selectbox">
    <div class="add">
     <p class="l">明星搜索：</p>
     <div class="r oh a_search ">
       <input id="search_input" class="brn search_t l oh" type="text" value="明星姓名" onfocus="if (this.value == '明星姓名') this.value = ''; this.style.color ='#000000'; " onblur="if (this.value == '') this.value = '明星姓名'; this.style.color = '#999999';" style="color:#ccc;"><div id="search_btn" class="search_p l oh">搜索</div>
     </div>
    </div>
	<script>
	$("#search_btn").click(function()
	{
		var value = $("#search_input").attr("value");
		var name = $("#search_input").attr("value");
		if (value == '明星姓名' || value == '')
		{
			alert ("输入不正确")
		}else{
		$.post("/e/action/star_search.php",{key:value},function(result)
			{
				$("#a_rank").html(result);
			 })
		$.post("/e/action/star_searchV2.php",{name:name},function(result)
			{
				$("#a_selectbox2").html(result);
			 })
	$("#NewPages").remove();
}
	})
	</script>
    <div class="hr10"></div>
    <p class="add">按地区： <a href="/star/0-<?=$xingbie?>-<?=$infozm?>-0.html"<?if (!$diqu){?> class="curr"<?}?> target="_top">全部</a> <a href="/star/1-<?=$xingbie?>-<?=$infozm?>-0.html"<?if ($diqu==1){?> class="curr"<?}?> target="_top">港台</a> <a href="/star/2-<?=$xingbie?>-<?=$infozm?>-0.html"<?if ($diqu==2){?> class="curr"<?}?> target="_top">日韩</a> <a href="/star/3-<?=$xingbie?>-<?=$infozm?>-0.html"<?if ($diqu==3){?> class="curr"<?}?> target="_top">欧美</a> <a href="/star/4-<?=$xingbie?>-<?=$infozm?>-0.html"<?if ($diqu==4){?> class="curr"<?}?> target="_top">大陆</a> <a href="/star/5-<?=$xingbie?>-<?=$infozm?>-0.html"<?if ($diqu==5){?> class="curr"<?}?> target="_top">其他</a></p>
    <div class="hr10"></div>
    <p class="add">按性别： <a href="/star/<?=$diqu?>-0-<?=$infozm?>-0.html"<?if (!$xingbie){?> class="curr"<?}?> target="_top">全部</a> <a href="/star/<?=$diqu?>-1-<?=$infozm?>-0.html"<?if ($xingbie==1){?> class="curr"<?}?> target="_top">男明星</a> <a href="/star/<?=$diqu?>-2-<?=$infozm?>-0.html"<?if ($xingbie==2){?> class="curr"<?}?> target="_top">女明星</a></p>
    <div class="hr10"></div>
    <p class="add letter">首字母： <a href="/star/<?=$diqu?>-<?=$xingbie?>-0-0.html"<?if (!$infozm){?> class="curr all"<?}?> target="_top">全部</a> 
<?
$a='A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z';
$zm='';
$t=explode(",", $a);
for($i=0;$i<count($t);$i++)
{ 
if ($infozm==$t[$i]&&$infozm){
$zm.='<a href="/star/'.$diqu.'-'.$xingbie.'-'.$t[$i].'-0.html" class="curr" target="_top">'.$t[$i].'</a> ';
}else{
$zm.='<a href="/star/'.$diqu.'-'.$xingbie.'-'.$t[$i].'-0.html" target="_top">'.$t[$i].'</a> ';
}
}
echo $zm;
?></p>
   </div>
   <span class="down" id="point">更多</span> 
   <script type="text/javascript">MoreLetter();</script> 
  </div>
  <div class="hr20"></div>
   <ul class="w110 SmallPic oh" id="a_selectbox2">
[!--star--]
   </ul>
   <script type="text/javascript">MoreSelect();</script> 
  </div>
 <div class="content r oh" id="content">
  <div class="hr10"></div>
  <h2 class="b_title">明星库图片展示</h2>
  <div class="hr10"></div>
  <ul class="w110 a_rank" id="a_rank">
[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]
  </ul>
  <div class="hr10"></div>
 </div>
 <div class="hr20"></div>
 <div class="NewPages" id="NewPages">
  <ul>[!--show.listpage--]</ul>
 </div>
 <div class="hr10"></div>
 <div class="w1190 oh bf">
<div class="hr10"></div>
  <h2 class="b_title">明星风云排行榜</h2>
  <div class="hr10"></div>
<ul class="w110 BigPic">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(11,10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><img src="<?=$public_r['add_www_92game_net_file'].$bqr['pic']?>" width="200" alt="<?=$bqr['title']?>" /><span><?=$bqr['title']?></span></i></a></li>
<?php
}
}
?>
  </ul>
 </div>
</div>
<div class="hr20"></div>
<div class="footer">
	<div class="warp">
    	<div class="footer_logo mr15"><a href="#" title="27270图片大全-图片分享基地">27270图片大全-图片分享基地</a></div>
        <dl>
        <dt><a href="/word/" title="图看世界">图看世界</a></dt>
            <dd><a href="/word/shehuibaitai/" title="图说社会">图说社会</a></dd><dd><a href="/word/fengjingsheying/" title="风景图片">风景图片</a></dd><dd><a href="/word/gaoxiaoqutu/" title="搞笑图片">搞笑图片</a></dd><dd><a href="/word/dongwushijie/" title="动物图片">动物图片</a></dd><dd><a href="/word/chebiao/" title="汽车标志">汽车标志</a></dd><dd><a href="/meishitupian/" title="美食图片">美食图片</a></dd>  
        </dl>
         <dl>
        	<dt><a href="/ent/" title="娱乐周边">娱乐周边</a></dt>
            <dd><a href="/ent/mingxingbagua/" title="八卦图片">八卦图片</a></dd><dd><a href="/ent/rentiyishu/" title="人体艺术">人体艺术</a></dd><dd><a href="/ent/mingxingtuku/" title="明星图片">明星图片</a></dd><dd><a href="/ent/meinvtupian/" title="美女图片">美女图片</a></dd><dd><a href="/ent/lianglimeimo/" title="美女模特">美女模特</a></dd><dd><a href="/ent/haibao/" title="电影海报">电影海报</a></dd>  
        </dl>
         <dl>
        	<dt><a href="/beautiful/" title="唯美图片">唯美图片</a></dt>
            <dd><a href="/beautiful/zhuomianbeijing/" title="高清壁纸">高清壁纸</a></dd><dd><a href="/beautiful/dongmantupian/" title="动漫图片">动漫图片</a></dd><dd><a href="/beautiful/qichetuku/" title="汽车图片">汽车图片</a></dd><dd><a href="/beautiful/feizhuliutupian/" title="非主流图片">非主流图片</a></dd><dd><a href="/beautiful/beijingtupian/" title="背景图片">背景图片</a></dd>  
        </dl>
         <dl>
        	<dt><a href="/game/" title="游戏动漫">游戏动漫</a></dt>
            <dd><a href="/game/youxixinwen/" title="游戏新闻">游戏新闻</a></dd><dd><a href="/game/youxijietu/" title="游戏原画">游戏原画</a></dd><dd><a href="/game/xieemanhua/" title="邪恶漫画">邪恶漫画</a></dd><dd><a href="/game/cosplaymeitu/" title="Cosplay">Cosplay</a></dd>  
        </dl>
		<dl>
        	<dt><a href="/qita/" title="其他图片">其他图片</a></dt>
            <dd><a href="/qita/mengtu/" title="萌图">萌图</a></dd><dd><a href="/zhuangxiusheji/" title="装修设计">装修设计</a></dd><dd><a href="/wenshentupian/" title="纹身图片">纹身图片</a></dd><dd><a href="/zhiwu/" title="植物图片">植物图片</a></dd>  
        </dl>
        <div class="hr101"></div>
        <div class="center wf">
        	<p> &copy; 2012 中国最大的图库大全，分享高清、唯美的图片，尽在<a href="http://<?=$public_r['add_www_92game_net_www']?>/" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a> 请记住我们的网址 <?=$public_r['add_www_92game_net_www']?>
			<script type="text/javascript">tongji();//统计</script></p>
        </div>
        <div class="hr10"></div>
    </div>
</div>
</body>
</html>