<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsclasstemp_2`;");
E_C("CREATE TABLE `www_92game_net_enewsclasstemp_2` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsclasstemp_2` values('1','图看世界栏目模板','<?\r\n\$classid=\$GLOBALS[navclassid];\r\n\$cr=\$empire->fetch1(\\\\\"select classname,bname,classpath from {\$dbtbpre}enewsclass where classid=\\\\''\\\\\".\$GLOBALS[navclassid].\\\\\"\\\\'' limit 1\\\\\"); \r\n\$classname=\$cr[\\\\''classname\\\\'']; \r\n\$bname=\$cr[\\\\''bname\\\\'']; \r\n\$classpath=\$cr[\\\\''classpath\\\\'']; \r\n?>\r\n<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title><?=\$bname?>-<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\\\\\" />\r\n<link rel=\\\\\"canonical\\\\\" href=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\'']?>/<?=\$classpath?>/\\\\\"/>\r\n<link href=\\\\\"/css/NewApp.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"http://libs.baidu.com/jquery/1.4.1/jquery.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/global.js\\\\\"></script>\r\n</head>\r\n<body style=\\\\\"overflow-x:hidden\\\\\">\r\n[!--temp.header--]\r\n<div class=\\\\\"w100\\\\\" id=\\\\\"WrapAutoHeight\\\\\"> \r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">App_top();</script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"bingo-wrapper\\\\\">\r\n        <ul class=\\\\\"pics\\\\\" id=\\\\\"pics\\\\\">\r\n[e:loop={\\\\''3,4,5,6,7\\\\'',5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n          <li class=\\\\\"current\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\"><img alt=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" src=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\''].\$bqr[\\\\''hdpic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n        </ul>\r\n        <div class=\\\\\"msg\\\\\">\r\n          <ul class=\\\\\"tabFn\\\\\" id=\\\\\"tabFn\\\\\" style=\\\\\"margin-left: -45px;\\\\\">\r\n[e:loop={\\\\''3,4,5,6,7\\\\'',5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n            <li<?if (\$bqno==1){?> class=\\\\\"on\\\\\"<?}?>></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n  <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/indexSlide.js\\\\\"></script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"index-desc\\\\\"><div class=\\\\\"TitChannel autosize\\\\\"><h1><?=\$classname?></h1></div>\r\n	<p class=\\\\\"tagD font_size_small\\\\\">[!--pagedes--]</p>\r\n	</div>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <ul class=\\\\\"listUll\\\\\">\r\n[e:loop={\\\\''3,4,5,7\\\\'',30,0,0}]\r\n<?\r\nif (\$bqno % 15==0){\r\n\$div=\\\\''</ul><ul class=\\\\\"listUlr\\\\\">\\\\'';\r\n}\r\n?>\r\n    <li><div class=\\\\\"libox\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img src=\\\\\"/images/grey.png\\\\\" lazysrc=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"><p><?=\$bqr[\\\\''title\\\\'']?></p></a> </div></li><?=\$div?>\r\n[/e:loop]\r\n  </ul>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>标签云</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <ul class=\\\\\"TagLists font_size_small\\\\\" id=\\\\\"TagLists\\\\\">\r\n<?\r\n	\$tagsql=\$empire->query(\\\\''select tagid,tagname from www_92game_net_enewstags order by rand() limit 20\\\\'');\r\n\r\n				while(\$r=\$empire->fetch(\$tagsql))\r\n{\r\n	?>\r\n<li><a class=\\\\\"over\\\\\" href=\\\\\"/tag/<?=\$r[tagid]?>.html\\\\\" title=\\\\\"<?=\$r[tagname]?>\\\\\"><?=\$r[tagname]?></a></li>\r\n<?}?>\r\n        \r\n      </ul>\r\n      <div class=\\\\\"hr101\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>猜你喜欢</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"horizontal vertical horizon\\\\\" id=\\\\\"shotCont\\\\\">\r\n        <div id=\\\\\"scroller\\\\\" style=\\\\\"-webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(0px, 0px) translateZ(0px);\\\\\">\r\n          <ul id=\\\\\"shotUl\\\\\" class=\\\\\"shot-ul clearfix\\\\\" style=\\\\\"width: 1680px;\\\\\">\r\n[e:loop={\\\\''10,13,17\\\\'',16,0,0,\\\\''\\\\'',\\\\''rand()\\\\''}]\r\n          <li><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img data-original=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\" src=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n      <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/ArticleSlide.js\\\\\"></script> \r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">app_bottom()</script>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n</div>\r\n</div>\r\n[!--temp.footer--]\r\n<script type=\\\\\"text/javascript\\\\\">mob();</script>\r\n<script type=\\\\\"text/javascript\\\\\">TagLists();</script>\r\n</body>\r\n</html>','0');");
E_D("replace into `www_92game_net_enewsclasstemp_2` values('2','分类信息一级栏目模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"channle\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"news_list\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n[listsonclass]\\\\''selfinfo\\\\'',5,38,0,0,7,0,0[/listsonclass]</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>分类信息搜索</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><form action=\\\\\"[!--news.url--]e/search/index.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"searchform\\\\\" id=\\\\\"searchform\\\\\">\r\n<table width=\\\\\"98%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tbname\\\\\" value=\\\\\"info\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tempid\\\\\" value=\\\\\"1\\\\\">\r\n<tr>\r\n<td><input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" class=\\\\\"inputText\\\\\" id=\\\\\"keyboard\\\\\" size=\\\\\"18\\\\\" />\r\n<select name=\\\\\"show\\\\\">\r\n<option value=\\\\\"title,smalltext,myarea\\\\\" selected=\\\\\"selected\\\\\">不限</option>\r\n<option value=\\\\\"title\\\\\">信息标题</option>\r\n<option value=\\\\\"smalltext\\\\\">信息内容</option>\r\n<option value=\\\\\"myarea\\\\\">所在地</option>\r\n</select></td>\r\n</tr>\r\n<tr>\r\n<td><select name=\\\\\"classid\\\\\">\r\n<option value=\\\\''9\\\\''>所有分类</option>\r\n<option value=\\\\''10\\\\''>|-房屋信息</option>\r\n<option value=\\\\''11\\\\'' >&nbsp;&nbsp;|-房屋求租</option>\r\n<option value=\\\\''12\\\\'' >&nbsp;&nbsp;|-房屋出租</option>\r\n<option value=\\\\''13\\\\'' >&nbsp;&nbsp;|-房屋求购</option>\r\n<option value=\\\\''14\\\\'' >&nbsp;&nbsp;|-房屋出售</option>\r\n<option value=\\\\''15\\\\'' >&nbsp;&nbsp;|-办公用房</option>\r\n<option value=\\\\''16\\\\'' >&nbsp;&nbsp;|-旺铺门面</option>\r\n<option value=\\\\''17\\\\''>|-跳蚤市场</option>\r\n<option value=\\\\''18\\\\'' >&nbsp;&nbsp;|-电脑配件</option>\r\n<option value=\\\\''19\\\\'' >&nbsp;&nbsp;|-电器数码</option>\r\n<option value=\\\\''20\\\\'' >&nbsp;&nbsp;|-通讯产品</option>\r\n<option value=\\\\''21\\\\'' >&nbsp;&nbsp;|-居家用品</option>\r\n<option value=\\\\''22\\\\''>|-同城生活</option>\r\n<option value=\\\\''23\\\\'' >&nbsp;&nbsp;|-本地新闻</option>\r\n<option value=\\\\''24\\\\'' >&nbsp;&nbsp;|-购物打折</option>\r\n<option value=\\\\''25\\\\'' >&nbsp;&nbsp;|-旅游活动</option>\r\n<option value=\\\\''26\\\\'' >&nbsp;&nbsp;|-便民告示</option>\r\n<option value=\\\\''27\\\\''>|-求职招聘</option>\r\n<option value=\\\\''28\\\\'' >&nbsp;&nbsp;|-工程技术</option>\r\n<option value=\\\\''29\\\\'' >&nbsp;&nbsp;|-财务会计</option>\r\n<option value=\\\\''30\\\\'' >&nbsp;&nbsp;|-餐饮行业</option>\r\n<option value=\\\\''31\\\\'' >&nbsp;&nbsp;|-经营管理</option>\r\n</select>\r\n<input name=\\\\\"Submit2\\\\\" type=\\\\\"image\\\\\" value=\\\\\"搜索\\\\\" src=\\\\\"[!--news.url--]skin/default/images/search.gif\\\\\" />　\r\n[<a href=\\\\\"[!--news.url--]e/DoInfo/ChangeClass.php?mid=8\\\\\" target=\\\\\"_blank\\\\\">发布信息</a>]</td>\r\n</tr>\r\n</table>\r\n</form></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>地区导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoarea--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>分类导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoclassnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>热门点击</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo] \r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0');");
E_D("replace into `www_92game_net_enewsclasstemp_2` values('3','娱乐周边栏目模板','<?\r\n\$classid=\$GLOBALS[navclassid];\r\n\$cr=\$empire->fetch1(\\\\\"select classname,bname,classpath from {\$dbtbpre}enewsclass where classid=\\\\''\\\\\".\$GLOBALS[navclassid].\\\\\"\\\\'' limit 1\\\\\"); \r\n\$classname=\$cr[\\\\''classname\\\\'']; \r\n\$bname=\$cr[\\\\''bname\\\\'']; \r\n\$classpath=\$cr[\\\\''classpath\\\\'']; \r\n?>\r\n<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title><?=\$bname?>-<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\\\\\" />\r\n<link rel=\\\\\"canonical\\\\\" href=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\'']?>/<?=\$classpath?>/\\\\\"/>\r\n<link href=\\\\\"/css/NewApp.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"http://libs.baidu.com/jquery/1.4.1/jquery.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/global.js\\\\\"></script>\r\n</head>\r\n<body style=\\\\\"overflow-x:hidden\\\\\">\r\n[!--temp.header--]\r\n<div class=\\\\\"w100\\\\\" id=\\\\\"WrapAutoHeight\\\\\"> \r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">App_top();</script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"bingo-wrapper\\\\\">\r\n        <ul class=\\\\\"pics\\\\\" id=\\\\\"pics\\\\\">\r\n[e:loop={\\\\''10,11,12,13,17,18\\\\'',5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n          <li class=\\\\\"current\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\"><img alt=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" src=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\''].\$bqr[\\\\''hdpic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n        </ul>\r\n        <div class=\\\\\"msg\\\\\">\r\n          <ul class=\\\\\"tabFn\\\\\" id=\\\\\"tabFn\\\\\" style=\\\\\"margin-left: -45px;\\\\\">\r\n[e:loop={\\\\''10,11,12,13,17,18\\\\'',5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n            <li<?if (\$bqno==1){?> class=\\\\\"on\\\\\"<?}?>></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n  <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/indexSlide.js\\\\\"></script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"index-desc\\\\\"><div class=\\\\\"TitChannel autosize\\\\\"><h1><?=\$classname?></h1></div>\r\n	<p class=\\\\\"tagD font_size_small\\\\\">[!--pagedes--]</p>\r\n	</div>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <ul class=\\\\\"listUll\\\\\">\r\n[e:loop={\\\\''10,11,12,13,17,18\\\\'',30,0,0}]\r\n<?\r\nif (\$bqno % 15==0){\r\n\$div=\\\\''</ul><ul class=\\\\\"listUlr\\\\\">\\\\'';\r\n}\r\n?>\r\n    <li><div class=\\\\\"libox\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img src=\\\\\"/images/grey.png\\\\\" lazysrc=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"><p><?=\$bqr[\\\\''title\\\\'']?></p></a> </div></li><?=\$div?>\r\n[/e:loop]\r\n  </ul>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>标签云</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <ul class=\\\\\"TagLists font_size_small\\\\\" id=\\\\\"TagLists\\\\\">\r\n<?\r\n	\$tagsql=\$empire->query(\\\\''select tagid,tagname from www_92game_net_enewstags order by rand() limit 20\\\\'');\r\n\r\n				while(\$r=\$empire->fetch(\$tagsql))\r\n{\r\n	?>\r\n<li><a class=\\\\\"over\\\\\" href=\\\\\"/tag/<?=\$r[tagid]?>.html\\\\\" title=\\\\\"<?=\$r[tagname]?>\\\\\"><?=\$r[tagname]?></a></li>\r\n<?}?>\r\n        \r\n      </ul>\r\n      <div class=\\\\\"hr101\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>猜你喜欢</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"horizontal vertical horizon\\\\\" id=\\\\\"shotCont\\\\\">\r\n        <div id=\\\\\"scroller\\\\\" style=\\\\\"-webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(0px, 0px) translateZ(0px);\\\\\">\r\n          <ul id=\\\\\"shotUl\\\\\" class=\\\\\"shot-ul clearfix\\\\\" style=\\\\\"width: 1680px;\\\\\">\r\n[e:loop={\\\\''10,13,17\\\\'',16,0,0,\\\\''\\\\'',\\\\''rand()\\\\''}]\r\n          <li><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img data-original=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\" src=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n      <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/ArticleSlide.js\\\\\"></script> \r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">app_bottom()</script>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n</div>\r\n</div>\r\n[!--temp.footer--]\r\n<script type=\\\\\"text/javascript\\\\\">mob();</script>\r\n<script type=\\\\\"text/javascript\\\\\">TagLists();</script>\r\n</body>\r\n</html>','0');");
E_D("replace into `www_92game_net_enewsclasstemp_2` values('4','唯美图片栏目模板','<?\r\n\$classid=\$GLOBALS[navclassid];\r\n\$cr=\$empire->fetch1(\\\\\"select classname,bname,classpath from {\$dbtbpre}enewsclass where classid=\\\\''\\\\\".\$GLOBALS[navclassid].\\\\\"\\\\'' limit 1\\\\\"); \r\n\$classname=\$cr[\\\\''classname\\\\'']; \r\n\$bname=\$cr[\\\\''bname\\\\'']; \r\n\$classpath=\$cr[\\\\''classpath\\\\'']; \r\n?>\r\n<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title><?=\$bname?>-<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\\\\\" />\r\n<link rel=\\\\\"canonical\\\\\" href=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\'']?>/<?=\$classpath?>/\\\\\"/>\r\n<link href=\\\\\"/css/NewApp.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"http://libs.baidu.com/jquery/1.4.1/jquery.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/global.js\\\\\"></script>\r\n</head>\r\n<body style=\\\\\"overflow-x:hidden\\\\\">\r\n[!--temp.header--]\r\n<div class=\\\\\"w100\\\\\" id=\\\\\"WrapAutoHeight\\\\\"> \r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">App_top();</script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"bingo-wrapper\\\\\">\r\n        <ul class=\\\\\"pics\\\\\" id=\\\\\"pics\\\\\">\r\n[e:loop={19,5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n          <li class=\\\\\"current\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\"><img alt=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" src=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\''].\$bqr[\\\\''hdpic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n        </ul>\r\n        <div class=\\\\\"msg\\\\\">\r\n          <ul class=\\\\\"tabFn\\\\\" id=\\\\\"tabFn\\\\\" style=\\\\\"margin-left: -45px;\\\\\">\r\n[e:loop={19,5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n            <li<?if (\$bqno==1){?> class=\\\\\"on\\\\\"<?}?>></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n  <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/indexSlide.js\\\\\"></script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"index-desc\\\\\"><div class=\\\\\"TitChannel autosize\\\\\"><h1><?=\$classname?></h1></div>\r\n	<p class=\\\\\"tagD font_size_small\\\\\">[!--pagedes--]</p>\r\n	</div>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <ul class=\\\\\"listUll\\\\\">\r\n[e:loop={19,30,0,0}]\r\n<?\r\nif (\$bqno % 15==0){\r\n\$div=\\\\''</ul><ul class=\\\\\"listUlr\\\\\">\\\\'';\r\n}\r\n?>\r\n    <li><div class=\\\\\"libox\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img src=\\\\\"/images/grey.png\\\\\" lazysrc=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"><p><?=\$bqr[\\\\''title\\\\'']?></p></a> </div></li><?=\$div?>\r\n[/e:loop]\r\n  </ul>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>标签云</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <ul class=\\\\\"TagLists font_size_small\\\\\" id=\\\\\"TagLists\\\\\">\r\n<?\r\n	\$tagsql=\$empire->query(\\\\''select tagid,tagname from www_92game_net_enewstags order by rand() limit 20\\\\'');\r\n\r\n				while(\$r=\$empire->fetch(\$tagsql))\r\n{\r\n	?>\r\n<li><a class=\\\\\"over\\\\\" href=\\\\\"/tag/<?=\$r[tagid]?>.html\\\\\" title=\\\\\"<?=\$r[tagname]?>\\\\\"><?=\$r[tagname]?></a></li>\r\n<?}?>\r\n        \r\n      </ul>\r\n      <div class=\\\\\"hr101\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>猜你喜欢</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"horizontal vertical horizon\\\\\" id=\\\\\"shotCont\\\\\">\r\n        <div id=\\\\\"scroller\\\\\" style=\\\\\"-webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(0px, 0px) translateZ(0px);\\\\\">\r\n          <ul id=\\\\\"shotUl\\\\\" class=\\\\\"shot-ul clearfix\\\\\" style=\\\\\"width: 1680px;\\\\\">\r\n[e:loop={\\\\''10,13,17\\\\'',16,0,0,\\\\''\\\\'',\\\\''rand()\\\\''}]\r\n          <li><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img data-original=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\" src=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n      <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/ArticleSlide.js\\\\\"></script> \r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">app_bottom()</script>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n</div>\r\n</div>\r\n[!--temp.footer--]\r\n<script type=\\\\\"text/javascript\\\\\">mob();</script>\r\n<script type=\\\\\"text/javascript\\\\\">TagLists();</script>\r\n</body>\r\n</html>','0');");
E_D("replace into `www_92game_net_enewsclasstemp_2` values('5','游戏动漫栏目模板','<?\r\n\$classid=\$GLOBALS[navclassid];\r\n\$cr=\$empire->fetch1(\\\\\"select classname,bname,classpath from {\$dbtbpre}enewsclass where classid=\\\\''\\\\\".\$GLOBALS[navclassid].\\\\\"\\\\'' limit 1\\\\\"); \r\n\$classname=\$cr[\\\\''classname\\\\'']; \r\n\$bname=\$cr[\\\\''bname\\\\'']; \r\n\$classpath=\$cr[\\\\''classpath\\\\'']; \r\n?>\r\n<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title><?=\$bname?>-<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\\\\\" />\r\n<link rel=\\\\\"canonical\\\\\" href=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\'']?>/<?=\$classpath?>/\\\\\"/>\r\n<link href=\\\\\"/css/NewApp.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"http://libs.baidu.com/jquery/1.4.1/jquery.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/global.js\\\\\"></script>\r\n</head>\r\n<body style=\\\\\"overflow-x:hidden\\\\\">\r\n[!--temp.header--]\r\n<div class=\\\\\"w100\\\\\" id=\\\\\"WrapAutoHeight\\\\\"> \r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">App_top();</script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"bingo-wrapper\\\\\">\r\n        <ul class=\\\\\"pics\\\\\" id=\\\\\"pics\\\\\">\r\n[e:loop={\\\\''29,30,31\\\\'',5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n          <li class=\\\\\"current\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\"><img alt=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" src=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\''].\$bqr[\\\\''hdpic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n        </ul>\r\n        <div class=\\\\\"msg\\\\\">\r\n          <ul class=\\\\\"tabFn\\\\\" id=\\\\\"tabFn\\\\\" style=\\\\\"margin-left: -45px;\\\\\">\r\n[e:loop={\\\\''29,30,31\\\\'',5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n            <li<?if (\$bqno==1){?> class=\\\\\"on\\\\\"<?}?>></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n  <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/indexSlide.js\\\\\"></script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"index-desc\\\\\"><div class=\\\\\"TitChannel autosize\\\\\"><h1><?=\$classname?></h1></div>\r\n	<p class=\\\\\"tagD font_size_small\\\\\">[!--pagedes--]</p>\r\n	</div>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <ul class=\\\\\"listUll\\\\\">\r\n[e:loop={\\\\''29,30,31\\\\'',30,0,0}]\r\n<?\r\nif (\$bqno % 15==0){\r\n\$div=\\\\''</ul><ul class=\\\\\"listUlr\\\\\">\\\\'';\r\n}\r\n?>\r\n    <li><div class=\\\\\"libox\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img src=\\\\\"/images/grey.png\\\\\" lazysrc=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"><p><?=\$bqr[\\\\''title\\\\'']?></p></a> </div></li><?=\$div?>\r\n[/e:loop]\r\n  </ul>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>标签云</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <ul class=\\\\\"TagLists font_size_small\\\\\" id=\\\\\"TagLists\\\\\">\r\n<?\r\n	\$tagsql=\$empire->query(\\\\''select tagid,tagname from www_92game_net_enewstags order by rand() limit 20\\\\'');\r\n\r\n				while(\$r=\$empire->fetch(\$tagsql))\r\n{\r\n	?>\r\n<li><a class=\\\\\"over\\\\\" href=\\\\\"/tag/<?=\$r[tagid]?>.html\\\\\" title=\\\\\"<?=\$r[tagname]?>\\\\\"><?=\$r[tagname]?></a></li>\r\n<?}?>\r\n        \r\n      </ul>\r\n      <div class=\\\\\"hr101\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>猜你喜欢</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"horizontal vertical horizon\\\\\" id=\\\\\"shotCont\\\\\">\r\n        <div id=\\\\\"scroller\\\\\" style=\\\\\"-webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(0px, 0px) translateZ(0px);\\\\\">\r\n          <ul id=\\\\\"shotUl\\\\\" class=\\\\\"shot-ul clearfix\\\\\" style=\\\\\"width: 1680px;\\\\\">\r\n[e:loop={\\\\''10,13,17\\\\'',16,0,0,\\\\''\\\\'',\\\\''rand()\\\\''}]\r\n          <li><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img data-original=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\" src=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n      <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/ArticleSlide.js\\\\\"></script> \r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">app_bottom()</script>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n</div>\r\n</div>\r\n[!--temp.footer--]\r\n<script type=\\\\\"text/javascript\\\\\">mob();</script>\r\n<script type=\\\\\"text/javascript\\\\\">TagLists();</script>\r\n</body>\r\n</html>\r\n','0');");
E_D("replace into `www_92game_net_enewsclasstemp_2` values('6','专题封面模板','<?\r\n\$cr=\$empire->fetch1(\\\\\"select * from {\$dbtbpre}enewszt where ztid=\\\\''\$GLOBALS[navclassid]\\\\'' limit 1\\\\\");\r\n\$ztlink=\$public_r[\\\\''newsurl\\\\''].\$cr[ztpath];\r\n?>\r\n<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title><?=ReturnZtAddField(0,\\\\''title\\\\'')?>_<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\\\\\" />\r\n<link href=\\\\\"/css/NewApp.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"http://libs.baidu.com/jquery/1.4.1/jquery.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/global.js\\\\\"></script>\r\n</head>\r\n<body>\r\n[!--temp.header--]\r\n<div class=\\\\\"w100\\\\\" id=\\\\\"WrapAutoHeight\\\\\">\r\n  <div class=\\\\\"MinNavs\\\\\">\r\n    <div class=\\\\\"Xauto\\\\\">\r\n      <dl class=\\\\\"\\\\\" id=\\\\\"AutoNavWidth\\\\\">\r\n        <dt>更多[!--pagetitle--]</dt>\r\n<?\r\n	\$sql=\$empire->query(\\\\\"select * from www_92game_net_enewszttype where ztid=\\\\''\$GLOBALS[navclassid]\\\\'' order by myorder desc\\\\\");\r\n\r\n				while(\$r=\$empire->fetch(\$sql))\r\n{\r\n\$curl=\$ztlink.\\\\''/type\\\\''.\$r[cid].\$r[ttype];\r\n	?>\r\n		   <dd><a href=\\\\\"<?=\$curl?>\\\\\"><?=\$r[cname]?></a></dd>\r\n<?}?>\r\n      </dl>\r\n    </div>\r\n  </div>\r\n  <div class=\\\\\"w98b\\\\\">\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"w100\\\\\"><script type=\\\\\"text/javascript\\\\\">App_top()</script></div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"SpecPic\\\\\">\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"specBox\\\\\"> <img src=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\'']?>[!--class.classimg--]\\\\\" width=\\\\\"150\\\\\">\r\n        <h1>[!--pagetitle--]</h1>\r\n        <p>[!--pagedes--]</p>\r\n        <div class=\\\\\"hr10\\\\\"></div>\r\n      </div>\r\n    </div>\r\n<?\r\n	\$sql=\$empire->query(\\\\\"select * from www_92game_net_enewszttype where ztid=\\\\''\$GLOBALS[navclassid]\\\\'' order by myorder desc\\\\\");\r\n\r\n				while(\$r=\$empire->fetch(\$sql))\r\n{\r\n\$curl=\$ztlink.\\\\''/type\\\\''.\$r[cid].\$r[ttype];\r\n	?>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n	      <h2 class=\\\\\"specTit autosize\\\\\"><a href=\\\\\"<?=\$curl?>\\\\\"><?=\$r[cname]?></a></h2>\r\n          <div class=\\\\\"hr10\\\\\"></div>\r\n<?\r\n\$i=0;\r\n	\$csql=\$empire->query(\\\\\"select * from www_92game_net_enewsztinfo where ztid=\\\\''\$GLOBALS[navclassid]\\\\'' and cid=\\\\''\$r[cid]\\\\'' order by newstime desc limit 8\\\\\");\r\n\r\n				while(\$cr=\$empire->fetch(\$csql))\r\n{\r\n\$tbname=\$class_r[\$cr[classid]][\\\\''tbname\\\\''];\r\n\$rr=\$empire->fetch1(\\\\\"select * from {\$dbtbpre}ecms_\\\\\".\$tbname.\\\\\" where id=\\\\''\$cr[id]\\\\'' limit 1\\\\\");\r\n\r\n\$i=\$i+1;\r\nif (\$i % 2==0){\r\n\$div=\\\\''<ul class=\\\\\"listUlr\\\\\">\\\\'';\r\n}else{\r\n\$div=\\\\''<ul class=\\\\\"listUll\\\\\">\\\\'';\r\n}\r\n	?>\r\n<?=\$div?><li><div class=\\\\\"libox\\\\\"><a href=\\\\\"<?=\$rr[titleurl]?>\\\\\"><img src=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$rr[titlepic]?>\\\\\" lazysrc=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$rr[titlepic]?>\\\\\" /><p><?=\$rr[title]?></p></a></div></li></ul>\r\n<?}?>\r\n</ul>\r\n\r\n         <?}?>\r\n         <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"w100\\\\\"><script type=\\\\\"text/javascript\\\\\">App_top()</script></div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n<script type=\\\\\"text/javascript\\\\\">mob();</script> \r\n</body>\r\n</html>','0');");
E_D("replace into `www_92game_net_enewsclasstemp_2` values('7','其他图片栏目模板','<?\r\n\$classid=\$GLOBALS[navclassid];\r\n\$cr=\$empire->fetch1(\\\\\"select classname,bname,classpath from {\$dbtbpre}enewsclass where classid=\\\\''\\\\\".\$GLOBALS[navclassid].\\\\\"\\\\'' limit 1\\\\\"); \r\n\$classname=\$cr[\\\\''classname\\\\'']; \r\n\$bname=\$cr[\\\\''bname\\\\'']; \r\n\$classpath=\$cr[\\\\''classpath\\\\'']; \r\n?>\r\n<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title><?=\$bname?>-<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\\\\\" />\r\n<link rel=\\\\\"canonical\\\\\" href=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\'']?>/<?=\$classpath?>/\\\\\"/>\r\n<link href=\\\\\"/css/NewApp.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"http://libs.baidu.com/jquery/1.4.1/jquery.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/global.js\\\\\"></script>\r\n</head>\r\n<body style=\\\\\"overflow-x:hidden\\\\\">\r\n[!--temp.header--]\r\n<div class=\\\\\"w100\\\\\" id=\\\\\"WrapAutoHeight\\\\\"> \r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">App_top();</script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"bingo-wrapper\\\\\">\r\n        <ul class=\\\\\"pics\\\\\" id=\\\\\"pics\\\\\">\r\n[e:loop={32,5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n          <li class=\\\\\"current\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\"><img alt=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" src=\\\\\"http://<?=\$public_r[\\\\''add_www_92game_net_www\\\\''].\$bqr[\\\\''hdpic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n        </ul>\r\n        <div class=\\\\\"msg\\\\\">\r\n          <ul class=\\\\\"tabFn\\\\\" id=\\\\\"tabFn\\\\\" style=\\\\\"margin-left: -45px;\\\\\">\r\n[e:loop={32,5,0,0,\\\\\"hdpic<>\\\\''\\\\''\\\\\"}]\r\n            <li<?if (\$bqno==1){?> class=\\\\\"on\\\\\"<?}?>></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n  <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/indexSlide.js\\\\\"></script>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"index-desc\\\\\"><div class=\\\\\"TitChannel autosize\\\\\"><h1><?=\$classname?></h1></div>\r\n	<p class=\\\\\"tagD font_size_small\\\\\">[!--pagedes--]</p>\r\n	</div>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <ul class=\\\\\"listUll\\\\\">\r\n[e:loop={32,30,0,0}]\r\n<?\r\nif (\$bqno % 15==0){\r\n\$div=\\\\''</ul><ul class=\\\\\"listUlr\\\\\">\\\\'';\r\n}\r\n?>\r\n    <li><div class=\\\\\"libox\\\\\"><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img src=\\\\\"/images/grey.png\\\\\" lazysrc=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"><p><?=\$bqr[\\\\''title\\\\'']?></p></a> </div></li><?=\$div?>\r\n[/e:loop]\r\n  </ul>\r\n  <div class=\\\\\"hr10\\\\\"></div>\r\n  <div class=\\\\\"w100b\\\\\">\r\n    <div class=\\\\\"w98\\\\\">\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>标签云</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <ul class=\\\\\"TagLists font_size_small\\\\\" id=\\\\\"TagLists\\\\\">\r\n<?\r\n	\$tagsql=\$empire->query(\\\\''select tagid,tagname from www_92game_net_enewstags order by rand() limit 20\\\\'');\r\n\r\n				while(\$r=\$empire->fetch(\$tagsql))\r\n{\r\n	?>\r\n<li><a class=\\\\\"over\\\\\" href=\\\\\"/tag/<?=\$r[tagid]?>.html\\\\\" title=\\\\\"<?=\$r[tagname]?>\\\\\"><?=\$r[tagname]?></a></li>\r\n<?}?>\r\n        \r\n      </ul>\r\n      <div class=\\\\\"hr101\\\\\"></div>\r\n      <div class=\\\\\"TitChannel autosize\\\\\">\r\n        <h2>猜你喜欢</h2>\r\n      </div>\r\n      <div class=\\\\\"hr10\\\\\"></div>\r\n      <div class=\\\\\"horizontal vertical horizon\\\\\" id=\\\\\"shotCont\\\\\">\r\n        <div id=\\\\\"scroller\\\\\" style=\\\\\"-webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(0px, 0px) translateZ(0px);\\\\\">\r\n          <ul id=\\\\\"shotUl\\\\\" class=\\\\\"shot-ul clearfix\\\\\" style=\\\\\"width: 1680px;\\\\\">\r\n[e:loop={\\\\''10,13,17\\\\'',16,0,0,\\\\''\\\\'',\\\\''rand()\\\\''}]\r\n          <li><a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\"><img data-original=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\" src=\\\\\"<?=\$public_r[\\\\''add_www_92game_net_file\\\\''].\$bqr[\\\\''titlepic\\\\'']?>\\\\\"></a></li>\r\n[/e:loop]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n      <script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/ArticleSlide.js\\\\\"></script> \r\n    </div>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n    <script type=\\\\\"text/javascript\\\\\">app_bottom()</script>\r\n    <div class=\\\\\"hr10\\\\\"></div>\r\n  </div>\r\n</div>\r\n</div>\r\n[!--temp.footer--]\r\n<script type=\\\\\"text/javascript\\\\\">mob();</script>\r\n<script type=\\\\\"text/javascript\\\\\">TagLists();</script>\r\n</body>\r\n</html>','0');");

require("../../inc/footer.php");
?>