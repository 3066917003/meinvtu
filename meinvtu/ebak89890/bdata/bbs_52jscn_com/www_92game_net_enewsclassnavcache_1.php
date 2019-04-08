<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsclassnavcache`;");
E_C("CREATE TABLE `www_92game_net_enewsclassnavcache` (
  `navtype` char(16) NOT NULL DEFAULT '',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `modid` smallint(5) unsigned NOT NULL DEFAULT '0',
  KEY `navtype` (`navtype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsclassnavcache` values('listclass','0','0');");
E_D("replace into `www_92game_net_enewsclassnavcache` values('listenews','0','0');");
E_D("replace into `www_92game_net_enewsclassnavcache` values('jsclass','0','0');");

require("../../inc/footer.php");
?>