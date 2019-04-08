<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewssearchtemp`;");
E_C("CREATE TABLE `www_92game_net_enewssearchtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewssearchtemp` values('1','默认搜索模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"utf-8\\\\\">\r\n<title>[!--keyboard--] 搜索结果_<?=\$public_r[sitename]?></title>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/tz.js\\\\\"></script>\r\n<link href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\">\r\n<link href=\\\\\"/css/list_tag.css\\\\\" type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\">\r\n<link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"/favicon.ico\\\\\">\r\n<meta http-equiv=\\\\\"Cache-Control\\\\\" content=\\\\\"no-transform\\\\\">\r\n<meta http-equiv=\\\\\"Cache-Control\\\\\" content=\\\\\"no-siteapp\\\\\">\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"/js/jquery.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\">adgg();ImgLazyload();</script>\r\n</head>\r\n<body>\r\n[!--temp.head--]\r\n<div class=\\\\\"w1200\\\\\">\r\n <div class=\\\\\"hr10\\\\\"></div>\r\n <div class=\\\\\"position\\\\\"><a href=\\\\\"http://<?=\$public_r[add_www_92game_net_www]?>\\\\\">首页</a> &gt; 搜索结果</div>\r\n<div class=\\\\\"hr10\\\\\"></div>\r\n <h2 class=\\\\\"Tag_Title_Gs_h2\\\\\">搜索结果</h2>\r\n <div class=\\\\\"hr5\\\\\"></div>\r\n <div class=\\\\\"w1200 oh\\\\\">\r\n  <ul class=\\\\\"w110 oh Tag_list\\\\\">[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]</ul>\r\n </div>\r\n <div class=\\\\\"hr10\\\\\"></div>\r\n<div class=\\\\\"w1200\\\\\">\r\n <div class=\\\\\"ad_w600 l\\\\\"><script type=\\\\\"text/javascript\\\\\">listBottomNewad();</script> \r\n </div>\r\n <div class=\\\\\"ad_w600 r\\\\\"><script type=\\\\\"text/javascript\\\\\">listBottomNewad();</script> \r\n </div>\r\n</div>\r\n<div class=\\\\\"hr10\\\\\"></div>\r\n <div class=\\\\\"NewPages\\\\\">\r\n  <ul>\r\n   \r\n   <div class=\\\\\"TagPage\\\\\">\r\n    <ul>[!--show.page--]</ul>\r\n   </div>\r\n   \r\n  </ul>\r\n </div>\r\n \r\n</div>\r\n<div class=\\\\\"hr10\\\\\"></div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','180','1','\$listtemp=\\\\''<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--title--]\\\\\" target=\\\\\"_blank\\\\\"><img alt=\\\\\"[!--title--]\\\\\" src=\\\\\"\\\\''.\$public_r[\\\\''add_www_92game_net_file\\\\''].\\\\''[!--titlepic--]\\\\\" width=\\\\\"190\\\\\"/><span>[!--title--]</span></a>\r\n    <div class=\\\\\"Article_Info\\\\\"><u><a href=\\\\\"/\\\\''.\$class_r[\$r[classid]][classpath].\\\\''/\\\\\" title=\\\\\"\\\\''.\$class_r[\$r[classid]][classname].\\\\''\\\\\">\\\\''.\$class_r[\$r[classid]][classname].\\\\''</a></u><em>[!--newstime--]</em></div>\r\n   </li>\\\\'';','1','3','Y-m-d','0','0','1');");

@include("../../inc/footer.php");
?>