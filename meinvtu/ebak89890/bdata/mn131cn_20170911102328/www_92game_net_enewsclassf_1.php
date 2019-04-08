<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsclassf`;");
E_C("CREATE TABLE `www_92game_net_enewsclassf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsclassf` values('1','fenye','图集是否分页','select','<select name=\\\\\"fenye\\\\\" id=\\\\\"fenye\\\\\"><option value=\\\\\"否\\\\\"<?=\$addr[fenye]==\\\\\"否\\\\\"?\\\\'' selected\\\\'':\\\\''\\\\''?>>否</option><option value=\\\\\"是\\\\\"<?=\$addr[fenye]==\\\\\"是\\\\\"?\\\\'' selected\\\\'':\\\\''\\\\''?>>是</option></select>','','0','VARCHAR','255','否|是','');");

require("../../inc/footer.php");
?>