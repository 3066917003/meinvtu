<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$ecms_gr[title]?>_<?=$ecms_gr[title]?>个人资料_<?=$ecms_gr[title]?>图片</title>
<meta name="keywords" content="<?=$ecms_gr[title]?>,<?=$ecms_gr[title]?>个人资料,<?=$ecms_gr[title]?>图片">
<meta name="description" content="<?=$ecms_gr[title]?>专题由<?=$public_r[sitename]?>小编精心整理，集合众多<?=$ecms_gr[title]?>的图片、写真、八卦新闻，以及<?=$ecms_gr[title]?>个人简历资料。">
<link rel="alternate" media="only screen and (max-width: 640px)"  href="http://<?=$public_r['add_www_92game_net_shouji']?><?=$grtitleurl?>" >
<meta name="mobile-agent" content="format=html5;url=http://<?=$public_r['add_www_92game_net_shouji']?><?=$grtitleurl?>"/>
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<script type="text/javascript" src="/js/tz.js"></script>
<link href="/css/stylev2.css" type="text/css" rel="stylesheet" />
<link href="/css/star.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">adgg();</script>
</head>
<body>
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
<div class="warp yh">
  <div class="hr10"></div>
  <div class="star">
    <div class="star_wrap">
      <div class="starBigBg" style="background:url(<?=$public_r['add_www_92game_net_file']?><?=$ecms_gr[bigbg]?>) no-repeat center top;">
        <div class="hh"></div>
        <div class="l">
          <div class="star_pic"><img src="<?=$public_r['add_www_92game_net_file']?><?=$ecms_gr[pic]?>" width="300" height="450" /></div>
        </div>
        <div class="starInfo yh">
          <div class="hh"></div>
          <div class="fx">
            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more"></span> <a class="bds_qzone" title="分享到QQ空间" href="#"></a> <a class="bds_tsina" title="分享到新浪微博" href="#"></a> <a class="bds_tqq" title="分享到腾讯微博" href="#"></a> <a class="bds_renren" title="分享到人人网" href="#"></a> <a class="bds_tsohu" title="分享到搜狐微博" href="#"></a> <a class="bds_copy kaobei" href="#"></a> <a class="shareCount" href="#" title="累计分享0次">0</a> </div>
            <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=213922" src="http://bdimg.share.baidu.com/static/js/bds_s_v2.js?cdnversion=397450"></script> 
            <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();</script> 
          </div>
          <div class="hr20"></div>
		  
          <div class="starInfoList">
<h1><?=$ecms_gr[title]?></h1>
		  <div class="c"></div>
            <ul class="l">
              <li><i>出&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生</i>
                <p><?=$ecms_gr[chusheng]?></p>
              </li>
              <li><i>国&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;籍</i>
                <p><?=$ecms_gr[guoji]?></p>
              </li>
              <li><i>人物信息</i>
                <p><?=$ecms_gr[xinxi]?></p>
              </li>
            </ul>
			<div style="display:none"><script src=localhoste/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
          </div>
		  <div class="r">
		  <p class="sys">扫一扫,关注<strong> <?=$ecms_gr[title]?> </strong>微信公众号</p>
			<?if ($navinfor[weixin]){?><img src="<?=$public_r['add_www_92game_net_file']?><?=$ecms_gr[weixin]?>" width="180" height="180" /><?}?>
		  </div>
        </div>
      </div>
      <div class="hr20"></div>
      <div class="w640 l">
        <div class="typeTitle yh">
          <h2>影视作品</h2>
        </div>
        <div class="movieBox PicW120">
          <ul>
<?
	$sql=$empire->query("select * from www_92game_net_ecms_photo where classid=18 and title like '%".$navinfor[title]."%' order by newstime desc  limit 5");

				while($cr=$empire->fetch($sql))
{
?>
<li><div class="IB"><a target="_blank" href="<?=$cr['titleurl']?>" class="PicBox"><img src="<?=$public_r['add_www_92game_net_file'].$cr['titlepic']?>" width="80" /></a></div>
              <span><a target="_blank" href="<?=$cr['titleurl']?>l"><?=$cr['title']?></a></span></li>
<?}?> 
          </ul>
        </div>
      </div>
      <div class="w300 r">
        <div class="typeTitle yh">
          <h2>明星关系</h2>
        </div>
        <div class="movieBox">
          <ul>

<?
$a=$navinfor[guanbi];
$str=str_replace('，', ',', $a);
$guanxi='';
$t=explode(",", $str);
for($i=0;$i<count($t);$i++)
{ 

$gx=$empire->fetch1("select title,pic,titleurl from {$dbtbpre}ecms_star where title='$t[$i]' limit 1");
 if($gx)
 {
$guanxi.='<li><div class="IB"><a target="_blank" href="'.$gx[titleurl].'" class="PicBox"><img src="'.$public_r['add_www_92game_net_file'].$gx[pic].'" width="80" /></a></div><span><a target="_blank" href="'.$gx[titleurl].'">'.$gx[title].'</a></span></li>';
}
}
echo $guanxi;
?>
          </ul>
        </div>
      </div>
      <div class="hr10"></div>
    </div>
	<div class="re">

<?
$a=$navinfor[grjs];
$grjs='';
$t=explode("@@@@@", $a);
for($i=0;$i<count($t);$i++)
{ 
 if($t[$i])
 {
$d_field=explode("::::::",$t[$i]);
$grjs.='<div class="l w640"><div class="starInfoTit"><h2>'.$d_field[0].'</h2></div><div class="starInfoBox"><em class="starInfoPic"><img src="'.$public_r['add_www_92game_net_file'].$d_field[1].'" width="190"  /><span>'.$d_field[0].'</span></em>'.$d_field[2].'</div><div class="hr20"></div></div><div class="c"></div>';
}
}
echo $grjs;
?>
<div class="starInfoTit" id="endFix"><h2><?=$ecms_gr[title]?>写真图片</h2></div><div class="starMagazine" id="imgList"><ul>
<?
	$sql=$empire->query("select * from www_92game_net_ecms_photo where classid=12 and title like '%".$navinfor[title]."%' order by newstime desc   limit 50");

				while($cr=$empire->fetch($sql))
{
?>
<li><div class="PB"> <a target="_blank" href="<?=$cr['titleurl']?>"><img src="<?=$public_r['add_www_92game_net_file'].$cr['titlepic']?>" width="190"  /></a> <span><?=$cr['title']?></span> </div></li>
<?}?>
</ul>
</div><div class="hr20"></div>
	<div class="SideMore" id="fixStart">
	<dl class="" id="fixBox">
		<dt><h2>更多有关<?=$ecms_gr[title]?>的资讯</h2></dt>
<?
	$sql=$empire->query("select * from www_92game_net_ecms_news where classid=9 and title like '%".$navinfor[title]."%' order by newstime desc limit 10");

				while($cr=$empire->fetch($sql))
{
?>
		 <dd>
				<div class="MorePic">
					<a href="<?=$cr['titleurl']?>" target="_blank"><img src="<?=$public_r['add_www_92game_net_file'].$cr['titlepic']?>"  width="66" /></a>		
				</div>
				<strong><a href="<?=$cr['titleurl']?>" target="_blank" title="<?=$cr['title']?>"><?=$cr['title']?></a></strong>
				<p><?=$cr['smalltext']?></p>
				<em><?=date('Y-m-d',$cr[newstime])?></em>
			</dd>
<?}?>
	</dl>
	</div>
	</div>
	<div class="hr10"></div>
</div>
<script type="text/javascript">
	listLayout_star(document.getElementById("imgList"));star_SideFix();
	window.onload = function(){listLayout_star(document.getElementById("imgList"));};	
</script>
<div class="hr10"></div>

<div class="hr10"></div>
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
