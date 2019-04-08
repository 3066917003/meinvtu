<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `www_92game_net_ecms_news_index`;");
E_C("CREATE TABLE `www_92game_net_ecms_news_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_ecms_news_index` values('1','2','1','1474682040','1475425247','1475425247','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('2','2','1','1474595629','1475425249','1475425249','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('3','2','1','1443843532','1475425251','1475425251','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('4','2','1','1443843532','1475425253','1475425253','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('5','2','1','1443715874','1475425254','1475425254','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('6','2','1','1443709839','1475425256','1475425256','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('7','2','1','1443709831','1475425258','1475425258','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('8','2','1','1442889360','1475425259','1475425259','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('9','2','1','1442889360','1475425261','1475425261','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('10','2','1','1442889360','1475425263','1475425263','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('11','2','1','1442889360','1475427786','1475427786','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('12','2','1','1442559000','1475427786','1475427786','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('13','2','1','1442298999','1475427787','1475427787','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('14','2','1','1442559000','1475427788','1475427788','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('15','2','1','1442888358','1475427788','1475427788','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('16','2','1','1442298934','1475427788','1475427788','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('17','2','1','1442802960','1475427790','1475427790','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('18','2','1','1442559000','1475427790','1475427790','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('19','2','1','1442298146','1475427790','1475427790','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('20','2','1','1442559000','1475427791','1475427791','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('21','2','1','1442802960','1475427791','1475427791','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('22','2','1','1442298144','1475427792','1475427792','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('23','2','1','1442472600','1475427793','1475427793','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('24','2','1','1442802960','1475427793','1475427793','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('25','2','1','1442297954','1475427793','1475427793','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('26','2','1','1442472600','1475427795','1475427795','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('27','2','1','1442214091','1475427795','1475427795','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('28','2','1','1442802960','1475427795','1475427795','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('29','2','1','1442307774','1475427796','1475427796','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('30','2','1','1442213849','1475427797','1475427797','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('31','2','1','1442630217','1475427797','1475427797','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('32','2','1','1442307772','1475427798','1475427798','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('33','2','1','1442049813','1475427799','1475427799','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('34','2','1','1442630214','1475427799','1475427799','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('35','2','1','1442305440','1475427799','1475427799','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('36','2','1','1442047192','1475427800','1475427800','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('37','2','1','1442630160','1475427800','1475427800','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('38','2','1','1442299828','1475427801','1475427801','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('39','2','1','1442046736','1475427802','1475427802','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('40','2','1','1442630160','1475427802','1475427802','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('41','6','1','1475429511','1475430923','1475430923','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('42','6','1','1475429512','1475430924','1475430924','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('43','6','1','1475429513','1475430924','1475430924','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('44','6','1','1475429512','1475430925','1475430925','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('45','6','1','1475429513','1475430926','1475430926','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('46','6','1','1475429513','1475430926','1475430926','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('47','6','1','1475429513','1475430926','1475430926','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('48','6','1','1475429514','1475430927','1475430927','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('49','6','1','1475429514','1475430928','1475430928','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('50','6','1','1475429514','1475430928','1475430928','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('51','6','1','1475429515','1475430930','1475430930','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('52','6','1','1475429515','1475430930','1475430930','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('53','6','1','1475429515','1475430930','1475430930','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('54','6','1','1475429515','1475430932','1475430932','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('55','6','1','1475429516','1475430933','1475430933','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('56','6','1','1475429516','1475430933','1475430933','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('57','6','1','1475429516','1475430934','1475430934','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('58','6','1','1475429516','1475430934','1475430934','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('59','6','1','1475429517','1475430935','1475430935','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('60','6','1','1475429517','1475430936','1475430936','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('61','6','1','1475429517','1475430936','1475430936','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('62','6','1','1475429518','1475430937','1475430937','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('63','6','1','1475429518','1475430937','1475430937','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('64','6','1','1475429518','1475430938','1475430938','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('65','6','1','1475429518','1475430938','1475430938','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('66','6','1','1475429519','1475430939','1475430939','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('67','6','1','1475429519','1475430939','1475430939','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('68','6','1','1475429519','1475430940','1475430940','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('69','6','1','1475429520','1475430941','1475430941','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('70','6','1','1475429519','1475430942','1475430942','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('71','6','1','1475429520','1475430942','1475430942','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('72','6','1','1475429521','1475430943','1475430943','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('73','6','1','1475429520','1475430943','1475430943','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('74','6','1','1475429522','1475430945','1475430945','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('75','6','1','1475429521','1475430945','1475430945','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('76','6','1','1475429522','1475430947','1475430947','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('77','6','1','1475429522','1475430947','1475430947','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('78','6','1','1475429523','1475430949','1475430949','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('79','6','1','1475429523','1475430949','1475430949','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('80','6','1','1475429524','1475430950','1475430950','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('81','6','1','1475429524','1475430950','1475430950','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('82','6','1','1475429525','1475430951','1475430951','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('83','6','1','1475429525','1475430952','1475430952','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('84','6','1','1475429526','1475430953','1475430953','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('85','6','1','1475429525','1475430954','1475430954','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('86','6','1','1475429527','1475430955','1475430955','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('87','6','1','1475429526','1475430956','1475430956','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('88','6','1','1475429528','1475430956','1475430956','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('89','6','1','1475429527','1475430957','1475430957','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('90','6','1','1475429529','1475430958','1475430958','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('91','6','1','1475429531','1475430960','1475430960','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('92','6','1','1475429531','1475430961','1475430961','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('93','6','1','1475429532','1475430961','1475430961','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('94','6','1','1475429532','1475430962','1475430962','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('95','6','1','1475429532','1475430962','1475430962','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('96','6','1','1475429533','1475430963','1475430963','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('97','6','1','1475429533','1475430963','1475430963','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('98','6','1','1475429534','1475430964','1475430964','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('99','6','1','1475429533','1475430964','1475430964','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('100','6','1','1475429533','1475430965','1475430965','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('101','6','1','1475429534','1475430965','1475430965','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('102','6','1','1475429534','1475430966','1475430966','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('103','6','1','1475429534','1475430966','1475430966','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('104','6','1','1475429535','1475430967','1475430967','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('105','6','1','1475429535','1475430967','1475430967','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('106','6','1','1475429535','1475430968','1475430968','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('107','6','1','1475429536','1475430969','1475430969','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('108','6','1','1475429537','1475430969','1475430969','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('109','6','1','1475429536','1475430970','1475430970','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('110','6','1','1475429537','1475430970','1475430970','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('111','6','1','1475429538','1475430970','1475430970','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('112','6','1','1475429537','1475430971','1475430971','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('113','6','1','1475429538','1475430972','1475430972','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('114','6','1','1475429539','1475430972','1475430972','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('115','6','1','1475429538','1475430973','1475430973','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('116','6','1','1475429539','1475430973','1475430973','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('117','6','1','1475429540','1475430974','1475430974','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('118','6','1','1475429540','1475430975','1475430975','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('119','6','1','1475429540','1475430975','1475430975','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('120','6','1','1475429541','1475430975','1475430975','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('121','6','1','1475429541','1475430976','1475430976','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('122','6','1','1475429542','1475430978','1475430978','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('123','6','1','1475429543','1475430979','1475430979','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('124','9','1','1474687555','1475431357','1475431357','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('125','9','1','1475032761','1475431358','1475431358','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('126','9','1','1474687001','1475431359','1475431359','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('127','9','1','1475031848','1475431360','1475431360','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('128','9','1','1474684532','1475431361','1475431361','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('129','9','1','1475028930','1475431362','1475431362','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('130','9','1','1474679936','1475431363','1475431363','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('131','9','1','1475027072','1475431364','1475431364','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('132','9','1','1474600727','1475431365','1475431365','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('133','9','1','1474710911','1475431366','1475431366','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('134','9','1','1474599617','1475431367','1475431367','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('135','9','1','1474706233','1475431368','1475431368','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('136','9','1','1474597984','1475431369','1475431369','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('137','9','1','1474703620','1475431370','1475431370','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('138','9','1','1474593337','1475431371','1475431371','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('139','9','1','1474702865','1475431372','1475431372','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('140','9','1','1474516988','1475431373','1475431373','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('141','9','1','1474699629','1475431374','1475431374','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('142','9','1','1474514258','1475431375','1475431375','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('143','9','1','1474689278','1475431376','1475431376','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('144','28','1','1414570019','1475499153','1475499153','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('145','28','1','1433210168','1475499154','1475499154','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('146','28','1','1413369282','1475499155','1475499155','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('147','28','1','1433210091','1475499156','1475499156','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('148','28','1','1411721707','1475499157','1475499157','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('149','28','1','1419989062','1475499158','1475499158','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('150','28','1','1410765979','1475499158','1475499158','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('151','28','1','1418890388','1475499160','1475499160','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('152','28','1','1409387162','1475499160','1475499160','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('153','28','1','1418112351','1475499162','1475499162','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('154','28','1','1408433201','1475499162','1475499162','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('155','28','1','1418110261','1475499164','1475499164','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('156','28','1','1407818672','1475499164','1475499164','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('157','28','1','1417244119','1475499166','1475499166','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('158','28','1','1406542342','1475499166','1475499166','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('159','28','1','1417244045','1475499167','1475499167','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('160','28','1','1405763554','1475499168','1475499168','1');");
E_D("replace into `www_92game_net_ecms_news_index` values('161','28','1','1405325615','1475499170','1475499170','1');");

require("../../inc/footer.php");
?>