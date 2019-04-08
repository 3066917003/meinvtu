<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_ecms_gg_data_1`;");
E_C("CREATE TABLE `www_92game_net_ecms_gg_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` char(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('1','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('2','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('3','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('4','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('5','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('6','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('7','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('8','15','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('9','16','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('10','21','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('11','21','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('12','21','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('13','21','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('14','21','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('15','21','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('16','24','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('17','24','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('18','24','','0','0','0','0','');");
E_D("replace into `www_92game_net_ecms_gg_data_1` values('19','24','','0','0','0','0','');");

@include("../../inc/footer.php");
?>