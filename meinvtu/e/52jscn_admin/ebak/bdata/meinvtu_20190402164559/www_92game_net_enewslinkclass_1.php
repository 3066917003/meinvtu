<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewslinkclass`;");
E_C("CREATE TABLE `www_92game_net_enewslinkclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewslinkclass` values('1','็”ต่‘็\');");
E_D("replace into `www_92game_net_enewslinkclass` values('2','ๆๆบ็\');");

@include("../../inc/footer.php");
?>