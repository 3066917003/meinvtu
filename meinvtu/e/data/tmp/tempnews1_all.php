<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link href="/css/stylev2.css" type="text/css" rel="stylesheet" />
<link rel="canonical" href="http://<?=$public_r['add_www_92game_net_www']?><?=$grtitleurl?>"/>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">adgg();ImgLazyload();</script>
</head>
<body class="bgBlack">
<div class="MinHeader">
  <div class="warp"> <strong><?=$public_r['add_www_92game_net_tishi']?></strong> <em class="r"><a href="/tag/" title="标签云">标签云</a> | <a href="/update/" title="最新更新">最新更新</a> | <a href="javascript:;" onclick="setFav(); return false;">收藏本站</a> | <a href="/sitemap.html" title="网站地图">网站地图</a></em></div>
</div>
<div class="SeaHeader">
  <div class="warp">
    <div class="SeaLogo"><a href="http://<?=$public_r['add_www_92game_net_www']?>/" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a></div>
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
     <ul class="r StarHead" id="StarHead">
<?php include(ECMS_PATH.'/html/star.html');?>
    </ul>

    <script type="text/javascript">HeadStarRand()</script> 
  </div>
</div>
<div class="SeaNav yh" id="SeaNav">
  <ul>
    <li class="NenuLi on" id="Home"><a href="/">首页</a></li>
    <li class="NenuLi"> <a href="/word/" title="图看世界">图看世界</a>
      <div class="ShowNav">  <a href="/word/shehuibaitai/" title="图说社会">图说社会</a>  <a href="/word/fengjingsheying/" title="风景图片">风景图片</a>  <a href="/word/gaoxiaoqutu/" title="搞笑图片">搞笑图片</a>  <a href="/word/dongwushijie/" title="动物图片">动物图片</a>  <a href="/word/chebiao/" title="汽车标志">汽车标志</a>  <a href="/meishitupian/" title="美食图片">美食图片</a>  </div>
    </li>
    <li class="NenuLi"> <a href="/ent/" title="美女图片">美女图片</a>
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

  </ul>
</div>
<script type="text/javascript">ShowNavSon()</script>
</div>
<div class="warp">
 <div class="ad960"><script type="text/javascript">arc_top();</script></div>
 <div class="hr10"></div>
 <div class="leftContentBox">
  <div class="ArticleList articleBody">
    <div class="articleBodyTit">当前位置：<?=$grurl?> > <strong>正文</strong></div>
    <h1><?=$ecms_gr[title]?></h1>
    <center>
      发布时间：<?=date('Y年m月d日',$navinfor[newstime])?>  来源：<?=$public_r[sitename]?>
    </center>
    <div class="hr10"></div><div class="REVIEW">导读：<?=nl2br($ecms_gr[smalltext])?></div><div class="hr10"></div>
    <div class="AestheticContent" id="arcBody"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
      <?if ($navinfor[infotags]){?>
<b>
	<i>标签：</i>
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
 $tag.="<a href='http://$public_r[add_www_92game_net_www]/tag/$tid[tagid].html' target='_blank'>".$t[$i]."</a>";
}
}
echo $tag;
?>
</b>
<?}?>
</div>
    <div class="ad650"><script type="text/javascript">arc650()</script></div>
    <div class="hr10"></div>
    <div class="ArticlePage nostyle"><ul>[!--page.url--]</ul></div><div class="ad650"><script type="text/javascript">arcPageDown650();</script></div>
    <div class="hr10"></div>
    <div class="hr101"></div>
    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="float:right; margin-right:15px;"> <span class="bds_more">分享到：</span> <a class="bds_qzone">QQ空间</a> <a class="bds_tsina">新浪微博</a> <a class="bds_tqq">腾讯微博</a> <a class="bds_renren">人人网</a> <a class="bds_tsohu">搜狐微博</a> <a class="bds_copy kaobei">复制网址</a> <a class="shareCount"></a> </div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&uid=213922" ></script>
    <script type="text/javascript" id="bdshell_js"></script>
    <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();</script>
    <div class="hr101"></div>
    <div class="upAndDown">
      上一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?> <br />
      下一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?> 
    </div>
    <div class="hr10"></div>
    <div class="xiangguan">
      <div class="leftColor"></div>
      <div class="xiangguanBox"><strong>相关阅读</strong></div>
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',12,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr['titleurl']?>" title='<?=$bqr['title']?>'><?=esub($bqr[title],26)?></a></li>
<?php
}
}
?>
      </ul>
    </div>
    </div>
    <div class="tuijian ">
    <div class="channelHead tuijianTit"><h3><em>编辑</em>推荐</h3>
    </div>
  </div>
  <div class="new_pic_list9 pic_bg2 bf">
    <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',8,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img src="<?=$public_r['add_www_92game_net_file'].$bqr['titlepic']?>" alt="<?=$bqr['title']?>" width="133" height="120" /><strong><?=esub($bqr[title],30)?></strong></a></li>
<?php
}
}
?>
    </ul>
  </div>
  <div class="hr10"></div>
  </div>
  <div class="ArticleRight">
  <div>
    <script type="text/javascript">listArticleSide1()</script>
  </div>
  <div class="hr10"></div>
  <div class="RightBox">
    <div class="RightBoxTit">
      <strong>最新更新</strong>
    </div>
    <ul>
<?php include(ECMS_PATH.'/html/zjgx1.html');?>
    </ul>
    <div class="hr101" style="width: 280px;margin-left: 10px;"></div>
    <div class="RightBoxText">
      <ul>
<?php include(ECMS_PATH.'/html/zjgx2.html');?>

      </ul>
    </div>
  </div>
  <div class="hr10"></div>
  <div class="RightBox">
    <div class="RightBoxTit">
      <strong>也许您会喜欢</strong>
    </div>
    <div class="RightBoxPic Maybe">
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',4,0,0,'','rand()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr['titleurl']?>" title='<?=$bqr['title']?>' ><img src="<?=$public_r['add_www_92game_net_file'].$bqr['titlepic']?>" width="135" height="105" alt='<?=$bqr['title']?>' /></a><span></span><b><a href="<?=$bqsr['titleurl']?>" title='<?=$bqr['title']?>'><?=esub($bqr[title],20)?></a></b></li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="hr10"></div>
  <div>
    <script type="text/javascript">listArticleSide2()</script>
  </div>
  <div class="RightBox">
    <div class="RightBoxTit">
      <strong>热门排行</strong>
    </div>
    <div class="listHot">
<?php include(ECMS_PATH.'/html/rmpx.html');?>
    </div>
  </div>
  <div id="sideScroll">
    <script type="text/javascript">listArticleSide3()</script>
  </div>
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
<div style="display:none"><script src=localhoste/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>

</body>
</html>