<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_ecms_gg_index`;");
E_C("CREATE TABLE `www_92game_net_ecms_gg_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_ecms_gg_index` values('1','15','1','1473514824','1473514837','1473685517','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('2','15','1','1473514839','1473514856','1473685523','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('3','15','1','1473514858','1473514876','1473685529','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('4','15','1','1473514879','1473514898','1473685538','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('5','15','1','1473514900','1473514919','1473685545','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('6','15','1','1473514921','1473514938','1473685551','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('7','15','1','1473514940','1473514956','1473685558','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('8','15','1','1473514958','1473514976','1473685564','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('9','16','1','1473514982','1473515004','1473685592','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('10','21','1','1473521540','1473521563','1473521563','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('11','21','1','1473521565','1473521593','1473521593','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('12','21','1','1473521595','1473521614','1473521614','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('13','21','1','1473521616','1473521641','1473521641','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('14','21','1','1473521643','1473521667','1473521667','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('15','21','1','1473521669','1473521688','1473521688','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('16','24','1','1473532708','1473533269','1473533269','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('17','24','1','1473533272','1473533303','1473533303','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('18','24','1','1473533305','1473533325','1473533325','1');");
E_D("replace into `www_92game_net_ecms_gg_index` values('19','24','1','1473533328','1473533350','1473533350','1');");

@include("../../inc/footer.php");
?>