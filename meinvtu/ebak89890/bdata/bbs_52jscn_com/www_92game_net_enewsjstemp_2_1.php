<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewsjstemp_2`;");
E_C("CREATE TABLE `www_92game_net_enewsjstemp_2` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `showdate` varchar(20) NOT NULL DEFAULT '',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsjstemp_2` values('1','默认js模板','[!--empirenews.listtemp--]<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></li>[!--empirenews.listtemp--]','0','1','m-d','1','0','32');");

require("../../inc/footer.php");
?>