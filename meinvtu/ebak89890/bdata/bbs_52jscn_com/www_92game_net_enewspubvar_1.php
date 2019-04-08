<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewspubvar`;");
E_C("CREATE TABLE `www_92game_net_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewspubvar` values('1','www_92game_net_www','网站域名','demo.52jscn.com','','0','0','1');");
E_D("replace into `www_92game_net_enewspubvar` values('2','www_92game_net_shouji','手机域名','m.demo.52jscn.com','','0','0','1');");
E_D("replace into `www_92game_net_enewspubvar` values('3','www_92game_net_tishi','顶部欢迎语','更多精品源码下载: http://bbs.52jscn.com','','0','0','1');");
E_D("replace into `www_92game_net_enewspubvar` values('4','www_92game_net_file','附件地址','http://demo.52jscn.com','','0','0','1');");

require("../../inc/footer.php");
?>