<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewstagsclass`;");
E_C("CREATE TABLE `www_92game_net_enewstagsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewstagsclass` values('1','地方风景');");
E_D("replace into `www_92game_net_enewstagsclass` values('2','景观类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('3','装修类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('4','搞笑类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('5','犬类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('6','动物类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('7','猫类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('8','头像类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('9','果蔬类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('10','美食类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('11','花卉植物');");
E_D("replace into `www_92game_net_enewstagsclass` values('12','鸟类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('13','鼠类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('14','鱼类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('15','地方美女');");
E_D("replace into `www_92game_net_enewstagsclass` values('16','美女特征');");
E_D("replace into `www_92game_net_enewstagsclass` values('17','职业类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('18','服饰类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('19','机构类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('20','纹身类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('21','卡通类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('22','非主流类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('23','名车类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('24','背景类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('25','壁纸类型');");
E_D("replace into `www_92game_net_enewstagsclass` values('26','模特人物');");
E_D("replace into `www_92game_net_enewstagsclass` values('27','人体艺术');");
E_D("replace into `www_92game_net_enewstagsclass` values('28','邪恶漫画');");
E_D("replace into `www_92game_net_enewstagsclass` values('29','Cosplay');");

require("../../inc/footer.php");
?>