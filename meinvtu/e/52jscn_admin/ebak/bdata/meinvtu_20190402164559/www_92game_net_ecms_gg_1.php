<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_ecms_gg`;");
E_C("CREATE TABLE `www_92game_net_ecms_gg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_ecms_gg` values('1','15','0','0','0','0','','1','1','admin','0','0','1','0','0','0','1','1473514837','1473685517','1','0','0','','/s/qinglv/','1','1','1','','情侣图片','1473514824','/d/file/gg/mingxingtupian160/2016-09-10/9e5c0a6cf01beb56fbf42cec31eda1f6.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('2','15','0','0','0','0','','2','1','admin','0','0','1','0','0','0','1','1473514856','1473685523','1','0','0','','/s/guzhuang/','1','1','1','','古装美女','1473514839','/d/file/gg/mingxingtupian160/2016-09-10/47c874f1e9bac5b0eddd917053255086.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('3','15','0','0','0','0','','3','1','admin','0','0','1','0','0','0','1','1473514876','1473685529','1','0','0','','/s/wmtx/','1','1','1','','唯美头像','1473514858','/d/file/gg/mingxingtupian160/2016-09-10/0da0f812abea8804145a940191d9d0ec.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('4','15','0','0','0','0','','4','1','admin','0','0','1','0','0','0','1','1473514898','1473685538','1','0','0','','/s/mnbz/','1','1','1','','美女壁纸','1473514879','/d/file/gg/mingxingtupian160/2016-09-10/66c5f207f8d4b991b77ee917f2ae7911.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('5','15','0','0','0','0','','5','1','admin','0','0','1','0','0','0','1','1473514919','1473685545','1','0','0','','/s/wenzi/','1','1','1','','文字图片','1473514900','/d/file/gg/mingxingtupian160/2016-09-10/883c85f0687c7053a2aeea76597bbf44.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('6','15','0','0','0','0','','6','1','admin','0','0','1','0','0','0','1','1473514938','1473685551','1','0','0','','/s/neihan/','1','1','1','','内涵�\�','1473514921','/d/file/gg/mingxingtupian160/2016-09-10/a3d4d0be905ce7f99c32671f3698f927.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('7','15','0','0','0','0','','7','1','admin','0','0','1','0','0','0','1','1473514956','1473685558','1','0','0','','/s/90hou/','1','1','1','','90后美�\�','1473514940','/d/file/gg/mingxingtupian160/2016-09-10/6795b67f313f875c0c1589c40e1e8577.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('8','15','0','0','0','0','','8','1','admin','0','0','1','0','0','0','1','1473514976','1473685564','1','0','0','','/s/hunsha/','1','1','1','','婚纱�\�','1473514958','/d/file/gg/mingxingtupian160/2016-09-10/55d5c1cba07aa23c458d862bc10ace73.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('9','16','0','0','0','0','','9','1','admin','0','0','1','0','0','0','1','1473515004','1473685592','1','0','0','','/ent/meinvtupian/29629.html','1','1','1','','爱尤物赵芊羽私房内衣诱惑写真大片','1473514982','/d/file/gg/mingxingtupian238/2016-09-10/fe6de8c572baae0eb361b89d3007428b.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('10','21','0','0','0','0','','10','1','admin','0','0','1','0','0','0','1','1473521563','1473521563','1','0','0','','/tag/142.html','1','1','1','','浪漫壁纸','1473521540','/d/file/gg/gaoqingbizhituijianfenlei/2016-09-10/e70fe85b8aa82a61060bd6fe4ed82e93.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('11','21','0','0','0','0','','11','1','admin','0','0','1','0','0','0','1','1473521593','1473521593','1','0','0','','/tag/122.html','1','1','1','','清新壁纸','1473521565','/d/file/gg/gaoqingbizhituijianfenlei/2016-09-10/d38c0d152c04a5be980b0b9e00746d80.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('12','21','0','0','0','0','','12','1','admin','0','0','1','0','0','0','1','1473521614','1473521614','1','0','0','','/tag/463.html','1','1','1','','游戏壁纸','1473521595','/d/file/gg/gaoqingbizhituijianfenlei/2016-09-10/650404346de34267a2d77e58eee379cb.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('13','21','0','0','0','0','','13','1','admin','0','0','1','0','0','0','1','1473521641','1473521641','1','0','0','','/tag/83.html','1','1','1','','风景壁纸','1473521616','/d/file/gg/gaoqingbizhituijianfenlei/2016-09-10/4bfb3b78c5e57c9b9ec8c650ed800bf8.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('14','21','0','0','0','0','','14','1','admin','0','0','1','0','0','0','1','1473521667','1473521667','1','0','0','','/tag/462.html','1','1','1','','动漫壁纸','1473521643','/d/file/gg/gaoqingbizhituijianfenlei/2016-09-10/a3bf3b4696173bbb2116259251afecb2.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('15','21','0','0','0','0','','15','1','admin','0','0','1','0','0','0','1','1473521688','1473521688','1','0','0','','/tag/1053.html','1','1','1','','电影壁纸','1473521669','/d/file/gg/gaoqingbizhituijianfenlei/2016-09-10/bf5ebf2f8ef8aadd7f1e1c911e143d01.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('16','24','0','0','0','0','','16','1','admin','0','0','1','0','0','0','1','1473533269','1473533269','1','0','0','','/tag/411.html','1','1','1','','迈凯�\�','1473532708','/d/file/gg/qichetupiantuijianfenlei/2016-09-11/2a00296cfdbbfc8e0261f6edb529ad4a.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('17','24','0','0','0','0','','17','1','admin','0','0','1','0','0','0','1','1473533303','1473533303','1','0','0','','/tag/408.html','1','1','1','','法拉�\�','1473533272','/d/file/gg/qichetupiantuijianfenlei/2016-09-11/444c091da8325b2c6b50276e17647ee5.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('18','24','0','0','0','0','','18','1','admin','0','0','1','0','0','0','1','1473533325','1473533325','1','0','0','','/tag/412.html','1','1','1','','路虎','1473533305','/d/file/gg/qichetupiantuijianfenlei/2016-09-11/a15415131cc626ace34e2095d074ecf0.jpg');");
E_D("replace into `www_92game_net_ecms_gg` values('19','24','0','0','0','0','','19','1','admin','0','0','1','0','0','0','1','1473533350','1473533350','1','0','0','','/tag/405.html','1','1','1','','兰博基尼','1473533328','/d/file/gg/qichetupiantuijianfenlei/2016-09-11/f48e5d7dd0740e25faeb3fa4e0e19ff0.jpg');");

@include("../../inc/footer.php");
?>