<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsclassadd`;");
E_C("CREATE TABLE `www_92game_net_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `fenye` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsclassadd` values('1','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('2','','','0');");
E_D("replace into `www_92game_net_enewsclassadd` values('3','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('4','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('5','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('6','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('7','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('8','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('9','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('10','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('11','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('12','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('13','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('14','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('15','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('16','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('17','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('18','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('19','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('20','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('21','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('22','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('23','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('24','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('25','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('26','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('27','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('28','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('29','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('30','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('31','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('32','','','否');");
E_D("replace into `www_92game_net_enewsclassadd` values('33','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('34','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('35','','','是');");
E_D("replace into `www_92game_net_enewsclassadd` values('36','','','是');");

require("../../inc/footer.php");
?>