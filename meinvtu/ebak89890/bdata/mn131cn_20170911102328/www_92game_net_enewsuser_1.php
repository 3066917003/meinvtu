<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsuser`;");
E_C("CREATE TABLE `www_92game_net_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsuser` values('1','admin','7efc65668d1fbb04db375c7f59e88957','wrw2hDnK5CSOucMxduNb','|','1','0','1','0','4L43xR9H','45','1505095010','119.137.34.29','','','0','1505094983','14.28.139.140','1473224769','127.0.0.1','DeclpdfpIf3GAnJj8ImcV09T0THeBDLuRSHWAEn1PA6HTF7R','MAMP249ExuCaGO8Z8gBx','35769','15158','55807','');");
E_D("replace into `www_92game_net_enewsuser` values('4','92game','da35ca0ff214b105ab870fd397d55064','3HGLb8r3fn4RedJ0n7Eu','|','1','0','1','0','r43OIc1b','12','1475660960','39.74.123.132','','','0','1475658224','39.74.123.132','1473846772','175.10.120.18','jfMUBBhG0qs4mULWELUYUqZe2KF8uj3xo8EegrSJbnl4nKof','K99xDfg2p1fqBPiShgz6','0','0','20748','');");

require("../../inc/footer.php");
?>