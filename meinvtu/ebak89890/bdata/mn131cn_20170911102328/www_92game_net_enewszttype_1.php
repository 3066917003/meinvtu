<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_enewszttype`;");
E_C("CREATE TABLE `www_92game_net_enewszttype` (
  `cid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cname` varchar(20) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `maxnum` int(10) unsigned NOT NULL DEFAULT '0',
  `tnum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `ttype` varchar(10) NOT NULL DEFAULT '',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `ztid` (`ztid`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewszttype` values('5','53','个性婚纱照','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('6','53','唯美婚纱照','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('7','53','时尚婚纱照','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('8','53','创意婚纱照','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('9','55','90后美女图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('10','55','90后性感美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('11','55','90后清纯美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('12','55','90后非主流美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('13','58','邪恶内涵图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('14','58','搞笑内涵图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('15','58','成人内涵图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('16','61','伤感文字图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('17','61','非主流文字图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('18','61','意境文字图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('19','64','性感美女壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('20','64','清纯美女壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('21','64','养眼美女壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('22','67','女生唯美头像','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('23','67','男生唯美头像','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('24','67','非主流唯美头像','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('25','70','古装美女图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('26','70','古装美女明星','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('27','73','欧美情侣图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('28','70','古装美女壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('29','73','非主流情侣图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('30','73','qq情侣图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('31','73','浪漫情侣图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('32','76','黄色图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('33','76','黄色背景','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('34','76','黄色壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('35','79','欧美美女人体','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('36','79','性感欧美美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('37','79','欧美美女明星','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('38','54','欧美个性图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('39','54','qq个性图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('40','54','非主流个性图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('41','57','可爱宝宝图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('42','57','漂亮宝宝图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('43','57','小宝宝图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('44','60','长腿美女图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('45','60','街拍长腿美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('46','60','韩国长腿美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('47','63','豪车标志','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('48','63','豪车图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('49','63','世界豪车','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('50','63','豪车美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('51','66','邪恶gif','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('52','66','搞笑gif','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('53','66','成人gif','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('54','69','丝袜翘臀','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('55','69','性感翘臀','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('56','69','美腿翘臀','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('57','69','丰乳翘臀','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('58','72','杨幂整容前后照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('59','72','baby整容前后照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('60','72','范冰冰整容前后照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('61','72','刘亦菲整容前后照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('62','75','lol图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('63','75','dnf图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('64','75','魔兽世界图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('65','78','美女自拍','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('66','78','情侣自拍','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('67','78','非主流自拍','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('68','81','性感美女照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('69','81','网络美女照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('70','81','清纯美女照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('71','81','非主流美女照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('72','56','美女照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('73','56','帅哥照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('74','56','宝宝照片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('75','56','卡通人物','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('76','59','欧美意境图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('77','59','非主流意境图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('78','59','女生唯美意境图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('79','62','花卉壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('80','62','植物壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('81','62','水果壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('82','65','动态搞笑图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('83','65','动物搞笑图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('84','65','美女搞笑图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('85','65','幽默搞笑图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('86','68','欧美黑白图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('87','68','唯美黑白图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('88','68','伤感黑白图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('89','68','非主流黑白图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('90','71','女生背影图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('91','71','非主流背影图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('92','71','伤感背影图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('93','74','水果蛋糕图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('94','74','慕斯蛋糕图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('95','74','卡通蛋糕图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('96','77','唯美大海风景图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('97','77','唯美田园风光风景图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('98','77','唯美树林风景图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('99','77','唯美草原风景图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('100','80','丝袜美女诱惑','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('101','80','美女制服诱惑','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('102','80','美女翘臀诱惑','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('103','80','美女内衣诱惑','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('104','82','春天图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('105','82','夏天图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('106','82','秋天图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('107','82','冬天图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('108','83','中国旗袍美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('109','83','旗袍丝袜美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('110','83','性感旗袍美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('111','83','旗袍美女诱惑','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('112','85','性感内衣美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('113','85','内衣美女诱惑','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('114','85','情趣内衣美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('115','87','小清新美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('116','87','小清新头像','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('117','87','小清新壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('118','89','哺乳动物','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('119','89','野生动物','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('120','89','海洋动物','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('121','89','北极动物','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('122','91','黑色丝袜美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('123','91','肉色丝袜美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('124','91','制服丝袜美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('125','91','动漫丝袜美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('126','93','中国影视海报','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('127','93','欧美影视海报','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('128','93','动漫影视海报','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('129','95','美女唯美壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('130','95','唯美风景壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('131','95','唯美卡通壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('132','95','个性唯美壁纸','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('133','97','山水图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('134','97','花卉图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('135','97','夜景图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('136','99','清纯美女校花','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('137','97','雪景图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('138','99','清纯美女萝莉','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('139','100','空姐制服','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('140','100','护士制服','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('141','100','学生制服','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('142','100','情趣制服','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('143','84','可爱狗狗图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('144','84','萌狗狗图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('145','84','搞笑狗狗图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('146','84','卡通狗狗图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('147','86','性感美女写真','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('148','86','日本性感美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('149','86','韩国性感美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('150','86','动漫性感美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('151','88','动漫萌图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('152','88','卖萌图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('153','88','动漫萌图头像','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('154','88','动漫萝莉萌图','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('155','90','动漫女生图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('156','90','唯美女生图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('157','92','中国比基尼美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('158','90','可爱女生图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('159','90','伤感女生图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('160','92','动漫比基尼美女','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('161','94','人体模特','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('162','94','内衣模特','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('163','94','平面模特','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('164','94','汽车模特','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('165','96','小猫咪图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('166','96','萌猫咪图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('167','96','猫咪搞笑图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('168','98','法拉利跑车图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('169','98','宝马跑车图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('170','98','保时捷跑车图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('171','98','奔驰跑车图片','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('172','101','童颜巨乳','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('173','101','巨乳女教师','0','1','28','0','200','newstime DESC','.html','0');");
E_D("replace into `www_92game_net_enewszttype` values('174','101','巨乳女优','0','1','28','0','200','newstime DESC','.html','0');");

require("../../inc/footer.php");
?>