<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewstable`;");
E_C("CREATE TABLE `www_92game_net_enewstable` (
  `tid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tsay` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `datatbs` text NOT NULL,
  `deftb` varchar(6) NOT NULL DEFAULT '',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `intb` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewstable` values('1','news','新闻系统数据�\�','新闻系统数据�\�','1',',1,','1','0','1','0');");
E_D("replace into `www_92game_net_enewstable` values('2','download','下载系统数据�\�','下载系统数据�\�','0',',1,','1','0','2','0');");
E_D("replace into `www_92game_net_enewstable` values('3','photo','图片系统数据�\�','图片系统数据�\�','0',',1,','1','0','3','0');");
E_D("replace into `www_92game_net_enewstable` values('4','flash','FLASH系统数据�\�','FLASH系统数据�\�','0',',1,','1','0','4','0');");
E_D("replace into `www_92game_net_enewstable` values('5','movie','电影系统数据�\�','电影系统数据�\�','0',',1,','1','0','5','0');");
E_D("replace into `www_92game_net_enewstable` values('6','shop','商城系统数据�\�','商城系统数据�\�','0',',1,','1','0','6','0');");
E_D("replace into `www_92game_net_enewstable` values('7','article','文章系统数据�\�','文章系统数据�\�(内容存文�\�)','0',',1,','1','0','7','0');");
E_D("replace into `www_92game_net_enewstable` values('8','info','分类信息数据�\�','分类信息数据�\�','0',',1,','1','0','8','0');");
E_D("replace into `www_92game_net_enewstable` values('9','star','明星数据�\�','','0',',1,','1','0','9','0');");
E_D("replace into `www_92game_net_enewstable` values('10','gg','广告数据�\�','','0',',1,','1','0','11','0');");

@include("../../inc/footer.php");
?>