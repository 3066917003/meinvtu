<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_ecms_infoclass_star`;");
E_C("CREATE TABLE `www_92game_net_ecms_infoclass_star` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_diqu` text NOT NULL,
  `z_diqu` varchar(255) NOT NULL,
  `qz_diqu` varchar(255) NOT NULL,
  `save_diqu` varchar(10) NOT NULL,
  `zz_xingbie` text NOT NULL,
  `z_xingbie` varchar(255) NOT NULL,
  `qz_xingbie` varchar(255) NOT NULL,
  `save_xingbie` varchar(10) NOT NULL,
  `zz_infozm` text NOT NULL,
  `z_infozm` varchar(255) NOT NULL,
  `qz_infozm` varchar(255) NOT NULL,
  `save_infozm` varchar(10) NOT NULL,
  `zz_chusheng` text NOT NULL,
  `z_chusheng` varchar(255) NOT NULL,
  `qz_chusheng` varchar(255) NOT NULL,
  `save_chusheng` varchar(10) NOT NULL,
  `zz_guoji` text NOT NULL,
  `z_guoji` varchar(255) NOT NULL,
  `qz_guoji` varchar(255) NOT NULL,
  `save_guoji` varchar(10) NOT NULL,
  `zz_xinxi` text NOT NULL,
  `z_xinxi` varchar(255) NOT NULL,
  `qz_xinxi` varchar(255) NOT NULL,
  `save_xinxi` varchar(10) NOT NULL,
  `zz_weixin` text NOT NULL,
  `z_weixin` varchar(255) NOT NULL,
  `qz_weixin` varchar(255) NOT NULL,
  `save_weixin` varchar(10) NOT NULL,
  `zz_guanbi` text NOT NULL,
  `z_guanbi` varchar(255) NOT NULL,
  `qz_guanbi` varchar(255) NOT NULL,
  `save_guanbi` varchar(10) NOT NULL,
  `zz_bigbg` text NOT NULL,
  `z_bigbg` varchar(255) NOT NULL,
  `qz_bigbg` varchar(255) NOT NULL,
  `save_bigbg` varchar(10) NOT NULL,
  `zz_pic` text NOT NULL,
  `z_pic` varchar(255) NOT NULL,
  `qz_pic` varchar(255) NOT NULL,
  `save_pic` varchar(10) NOT NULL,
  `zz_grjs` text NOT NULL,
  `z_grjs` varchar(255) NOT NULL,
  `qz_grjs` varchar(255) NOT NULL,
  `save_grjs` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>