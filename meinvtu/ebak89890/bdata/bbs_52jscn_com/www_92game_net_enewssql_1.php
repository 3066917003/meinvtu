<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewssql`;");
E_C("CREATE TABLE `www_92game_net_enewssql` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sqlname` varchar(60) NOT NULL DEFAULT '',
  `sqltext` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewssql` values('1','替换栏目介绍','update [!db.pre!]enewsclass set intro=replace(intro,''27270'',''92kaifa'')');");
E_D("replace into `www_92game_net_enewssql` values('2','tag介绍替换','update [!db.pre!]enewstags set tagintro=replace(tagintro,''27270'',''92kaifa'')');");

require("../../inc/footer.php");
?>