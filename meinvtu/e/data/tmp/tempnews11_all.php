<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?
$classid=$GLOBALS[navclassid];
$cr=$empire->fetch1("select classname,bname,classpath from {$dbtbpre}enewsclass where classid='".$GLOBALS[navclassid]."' limit 1"); 
$classname=$cr['classname']; 
$bname=$cr['bname']; 
$classpath=$cr['classpath']; 
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$ecms_gr[title]?>-<?=$public_r[sitename]?></title>
<meta name="keywords" content="<?=$ecms_gr[title]?>">
<meta name="description" content="<?=$public_r[sitename]?>(<?=$public_r['add_www_92game_net_www']?>)为你提供<?=$ecms_gr[title]?>的内容，如果你喜欢请把这篇文章转发给你的朋友或者微博上。">
<script type="text/javascript" src="/js/tz.js"></script>
<link rel="alternate" media="only screen and (max-width: 640px)"  href="http://<?=$public_r['add_www_92game_net_shouji']?><?=$grtitleurl?>" >
<meta name="mobile-agent" content="format=html5;url=http://<?=$public_r['add_www_92game_net_shouji']?><?=$grtitleurl?>"/>
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="canonical" href="http://<?=$public_r['add_www_92game_net_www']?><?=$grtitleurl?>"/>
<link href="/css/global.css" type="text/css" rel="stylesheet" />
<link href="/css/article_article_rtys.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">adgg();</script>
<script type="text/javascript" src="/js/article_article_rtys.js"></script>
</head>
<body>
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
<li class="NenuLi"> <a href="http://www.mn131.cn/" title="美女图片">美女图片大全</a>
   </ul>
  </div>
  <script type="text/javascript">ShowNavSon()</script> 
 </div>
</div>

<div class="warp yh">
 <div class="hr10"></div>
 <div class="warp"> 当前位置 ：<?=$grurl?> >  <strong><a href="<?=$grtitleurl?>" title="<?=$ecms_gr[title]?>"><?=$ecms_gr[title]?></a></strong> </div>
 <div class="hr10"></div>
 <div class="w1200 mar">
  <div class="articleV2Title">
   <h1><?=$ecms_gr[title]?></h1>
  </div>
  <div class="articleV2Info">更新时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?> &nbsp;&nbsp;&nbsp;  类别：<a href="/<?=$classpath?>/" title="<?=$classname?>"><?=$classname?></a>
 &nbsp;&nbsp;&nbsp;<small>点击:</small><script src=localhoste/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script>次</div>
  
  <div class="articleV2Desc"> <b>图集说明：</b>
   <p><?=nl2br($ecms_gr[picsay])?></p>
  </div>
  
  <div class="hr10"></div>
  <script type="text/javascript">ArtTopW960()</script>
  <div class="hr10"></div>
    <div class="articleV2Body" id="picBody"><p align="center">
	<strong id='mouse' class='PicHover'>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id<'.$navinfor[id].'','id desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?
$preurl="<span class='leftCur' onclick='window.open(\"http://$public_r[add_www_92game_net_www]$bqsr[titleurl]\" ,\"_top\")'></span>";
$pre='true'; 
?>
<?php
}
}
?>
<?php 
if(!$pre){ 
$preurl=""; 
} 
?> 
<?=$preurl?><span class='rightCur' onclick='window.open("[!--next.page--]" ,"_top")'></span><a href='[!--next.page--]' id='RightUrl'><img alt="<?=$ecms_gr[title]?>" src="<?=$public_r['add_www_92game_net_file']?>[!--piclist--]" /></a></strong></p>
</div>
  <div class="hr10"></div>
  <ul class="articleV2Page">[!--page.url--]<li class="thisclass"><a target="_blank" id="viewPic" href="javascript:;">查看原图</a></li>
  </ul>
  <script type="text/javascript">ArticleV2Pic_PreNext();</script>
  <dl class="articleV2Tag">
   
   <dt>标签：</dt>
<?
$a=$navinfor[infotags];
$str=str_replace('，', ',', $a);
$tag='';
$t= explode(",", $str);
for($i=0;$i<count($t);$i++)
{ 
 if($t[$i])
 {
$tid=$empire->fetch1("select tagid from {$dbtbpre}enewstags where tagname='$t[$i]' limit 1");
 $tag.="<dd><a href='http://$public_r[add_www_92game_net_www]/tag/$tid[tagid].html' target='_blank'>".$t[$i]."</a></dd>";
}
}
echo $tag;
?>
  </dl>
  <div class="hr10"></div>
  <script type="text/javascript">Article_image_FX();</script>
  <div class="hr10"></div>
  <div class="photo-set">
   <ul id="showImg" class="photo-list-box">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',5,0,0,'','rand()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <li><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_www_92game_net_file'].$bqr['titlepic']?>" /><span><?=$bqr['title']?></span></a></li>
<?php
}
}
?>
   </ul>
  </div>
  <div class="hr10"></div>
  <div class="l">上一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?>  </div>
  <div class="r">下一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?> </div>
  <div class="hr101"></div>
  <script type="text/javascript">ArtCenterW960BD_ys();Tools();</script>
  <div class="hr10"></div>
  <script type="text/javascript">picContent();</script>
  <div class="hr10"></div>
  <div class="articleV2Type">
   <h2>高清人体艺术大图赏析</h2>
  </div>
  <div class="articleV2TypeList">
   <ul class="PicList_2" id="PicList_2">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',8,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <li> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><img alt="<?=$bqr['title']?>" src="<?=$public_r['add_www_92game_net_file'].$bqr['titlepic']?>" width="232" height="342"><span><?=$bqr['title']?></span></a></li>
<?php
}
}
?>
   </ul>
   <script type="text/javascript">rtys_Rand();</script>
  </div>
  <div class="hr10"></div>
  <div class="articleV2Type">
   <h2>相关美女图片推荐</h2>
  </div>
  <div class="articleV2TypeList">
   <ul class="PicList" id="PicList">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(13,8,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <li><a href="<?=$bqsr['titleurl']?>" class="autoPic"><span><img src="<?=$public_r['add_www_92game_net_file'].$bqr['titlepic']?>" width="190"></span></a><a href="<?=$bqsr['titleurl']?>" class="autoTit"><?=$bqr['title']?></a></li>
<?php
}
}
?>
</ul>
   <script type="text/javascript">PiclistAutoHeight();ArtCenterW960SouGou();</script>
  </div>
  <div class="hr10"></div>
  <div class="articleV2Type">
   <h2>人体艺术美女推荐</h2>
  </div>
  <div class="articleV2TypeList">
   <ul class="TxtList">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',16,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <li><a href="/<?=$class_r[$bqr[classid]][classpath]?>/" title="<?=$class_r[$bqr[classid]][classname]?>">【<?=$class_r[$bqr[classid]][classname]?>】</a><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><?=$bqr['title']?></a><em><?=date('m-d',$bqr[newstime])?></em></li>
<?php
}
}
?>
   </ul>
  </div>
  <div class="hr10"></div>
  <div class="articleV2Type">
   <h2>热门明星资料</h2>
  </div>
  <div class="hr10"></div>
  <div class="articleV2TypeList">
   <ul class="starList">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(11,20,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$public_r['add_www_92game_net_file'].$bqr['titlepic']?>" alt="<?=$bqr['title']?>" width="80" height="80"></a><span><a target="_blank" href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></span></li>
<?php
}
}
?>

   </ul>
  </div>
  <div class="hr10"></div><dl class="sideTag"><dt>热门标签</dt>
<?
	$tagsql=$empire->query("select tagid,tagname,tagimg from www_92game_net_enewstags where cid=27 order by tagid desc");

				while($r=$empire->fetch($tagsql))
{
	?>
<dd><a href="/tag/<?=$r[tagid]?>.html" title="<?=$r[tagname]?>"><?=$r[tagname]?></a></dd>
<?}?>
</dl><div class="hr10"></div>
  <div class="hr10"></div>
  <script type="text/javascript">article_article_rtys_960_bottom();</script>
  <div class="hr10"></div>
  
  <div class="hr10"></div>
 </div>
</div>
<div class="footer">
	<div class="warp">
    	<div class="footer_logo mr15"><a href="http://www.mn131.cn/" title="27270图片大全-图片分享基地">27270图片大全-图片分享基地</a></div>
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