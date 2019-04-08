<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsad`;");
E_C("CREATE TABLE `www_92game_net_enewsad` (
  `adid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_height` int(10) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` varchar(255) NOT NULL DEFAULT '',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsad` values('1','','','468','60','0','1','1','栏目页通用顶部广告','','','2016-09-11','0000-00-00','','','','<div style=\"width:598px;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:1 600*90</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('2','','','468','60','0','1','1','栏目页翻页上面通用','','','2016-09-11','0000-00-00','','','','<div style=\"width:598px;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:2 600*90</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('3','','','468','60','0','1','1','栏目页翻页下面通用','','','2016-09-11','0000-00-00','','','','<div style=\"width:598px;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:3 600*90</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('4','','','468','60','0','1','1','栏目页底部下面通用','','','2016-09-11','0000-00-00','','','','<div style=\"width:598px;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:4 600*90</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('5','','','468','60','0','1','1','pc内页广告','','','2016-09-11','0000-00-00','','','','<div style=\"width:958px;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:5 960*90</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('6','','','468','60','0','1','1','pc内容页 960x200','','','2016-09-11','0000-00-00','','','','<div style=\"width:958px;height:198px;text-align: center;border:1px solid #ECECEC;line-height:198px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:6 960*200</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('7','','','468','60','0','1','1','pc内容页 960x60','','','2016-09-11','0000-00-00','','','','<div style=\"width:958px;height:58px;text-align: center;border:1px solid #ECECEC;line-height:58px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:7 960*60</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('8','','','468','60','0','1','1','栏目右边','','','2016-09-11','0000-00-00','','','','<div style=\"width:298px;height:248px;text-align: center;border:1px solid #ECECEC;line-height:248px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:8 300*250</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('9','','','468','60','0','1','1','车标栏目左边','','','2016-09-11','0000-00-00','','','','<div style=\"width:198px;height:398px;text-align: center;border:1px solid #ECECEC;line-height:398px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:9 200*400</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('10','','','468','60','0','1','1','广告ID:10','','','2016-09-12','0000-00-00','','','','<div style=\"width:198px;height:398px;text-align: center;border:1px solid #ECECEC;line-height:398px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:10 200*400</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('11','','','468','60','0','1','1','手机版头部图文广告','','','2016-09-12','0000-00-00','','','','<div style=\"width:100%;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:11</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('12','','','468','60','0','1','1','手机版内页图片下方','','','2016-09-12','0000-00-00','','','','<div style=\"width:100%;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:12</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('13','','','468','60','0','1','1','移动下翻页 全站','','','2016-09-12','0000-00-00','','','','<div style=\"width:100%;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:13</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('14','','','468','60','0','1','1','移动底部 全站','','','2016-09-12','0000-00-00','','','','<div style=\"width:100%;height:88px;text-align: center;border:1px solid #ECECEC;line-height:88px;background-color: #fff;color: #333;font-family: 微软雅黑 Light;font-size: 20px;\">广告ID:14</div>','2','0','');");
E_D("replace into `www_92game_net_enewsad` values('15','','','468','60','0','1','1','m端悬浮','','','2016-09-12','0000-00-00','','','','','2','0','');");

require("../../inc/footer.php");
?>