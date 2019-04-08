<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewsnotcj`;");
E_C("CREATE TABLE `www_92game_net_enewsnotcj` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `word` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsnotcj` values('1','<input type=hidden value=''欢迎登陆站长分享圈精品源码下载：www.adminn.cn''>');");
E_D("replace into `www_92game_net_enewsnotcj` values('2','<phome 帝国网站管理系统,phome.net>');");
E_D("replace into `www_92game_net_enewsnotcj` values('3','<!--帝国CMS,phome.net-->');");
E_D("replace into `www_92game_net_enewsnotcj` values('4','<table style=display:none><tr><td>\r\nEmpire CMS,phome.net\r\n</td></tr></table>');");
E_D("replace into `www_92game_net_enewsnotcj` values('5','<div style=display:none>\r\n拥有帝国一切，皆有可能。欢迎访问phome.net\r\n</div>');");

@include("../../inc/footer.php");
?>