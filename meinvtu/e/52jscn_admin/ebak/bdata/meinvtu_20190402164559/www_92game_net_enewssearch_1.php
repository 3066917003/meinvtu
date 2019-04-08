<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewssearch`;");
E_C("CREATE TABLE `www_92game_net_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewssearch` values('1','搞笑','1473599619','title','678','60.181.132.102','','1','newstime','0','78a03d32c1e67810fd7194aa5df73fd4','photo','1','0',' and ((title LIKE ''%搞笑%''))','0');");
E_D("replace into `www_92game_net_enewssearch` values('2','12','1473609607','title','5','60.181.132.102','','1','newstime','0','ebcadd94340406dfb20afefc5e68963b','photo','1','0',' and ((title LIKE ''%12%''))','0');");
E_D("replace into `www_92game_net_enewssearch` values('3','爱尤物赵芊羽私房内衣诱惑写真大片','1473685572','title','1','60.181.132.102','','1','newstime','0','0ce5b51e0b7de95e25ca231977701005','photo','1','0',' and ((title LIKE ''%爱尤物赵芊羽私房内衣诱惑写真大片%''))','0');");
E_D("replace into `www_92game_net_enewssearch` values('4','剧照','1473750493','title','1580','10.148.99.16','','1','newstime','0','6af0a9ec5a4159b8b0c602f5bb3d0a65','photo','1','0',' and ((title LIKE ''%剧照%''))','0');");
E_D("replace into `www_92game_net_enewssearch` values('5','美女','1502801677','title','147','183.14.133.226','','1','newstime','0','cce155dfbf3ef8817a610346d6b8804d','photo','1','0',' and ((title LIKE ''%美女%''))','0');");

@include("../../inc/footer.php");
?>