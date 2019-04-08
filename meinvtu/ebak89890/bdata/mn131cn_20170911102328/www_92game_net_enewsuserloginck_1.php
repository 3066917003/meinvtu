<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsuserloginck`;");
E_C("CREATE TABLE `www_92game_net_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsuserloginck` values('1','1af15268f4ece45d0cc103e26238d7fd');");
E_D("replace into `www_92game_net_enewsuserloginck` values('2','54cae8391256b8e4e3a85f0d158ec5ae');");
E_D("replace into `www_92game_net_enewsuserloginck` values('4','c56060a534f9483fd73389d7c09e6def');");
E_D("replace into `www_92game_net_enewsuserloginck` values('5','dfef1394d55ce8c70ed54533b05a6f28');");

require("../../inc/footer.php");
?>