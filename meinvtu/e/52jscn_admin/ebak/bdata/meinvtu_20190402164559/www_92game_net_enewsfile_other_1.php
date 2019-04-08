<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewsfile_other`;");
E_C("CREATE TABLE `www_92game_net_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsfile_other` values('1','0','601799514fc12959cb0dc1360c7dc7e5.jpg','29854','2016-09-09','admin','1473381161','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('2','0','acbdc126c5520c799c02d2a0dd487bb0.jpg','30169','2016-09-09','admin','1473381228','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('3','0','81f5b7c496e5619e08b09042ceebe0b7.jpg','30277','2016-09-09','admin','1473381254','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('4','0','bdac73263b33b13e135ba84c88d430df.jpg','39985','2016-09-09','admin','1473404144','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('5','0','f7128e368ffe93fe17855abaac79aa98.jpg','31272','2016-09-09','admin','1473404164','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('6','0','ca959e4051846153317c7e5743759aa8.jpg','38962','2016-09-09','admin','1473404192','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('7','0','874151f2a264db5d269f640b6e4ee926.jpg','37918','2016-09-09','admin','1473404212','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('8','0','c0a078ac6b4e2f7b5f5975d17347966f.jpg','41525','2016-09-09','admin','1473404231','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('9','0','718f3b3f4a6d1461b8f2d54cb059334f.jpg','29152','2016-09-09','admin','1473404249','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('10','0','a80adc29a93581f31332b1a2775fad13.jpg','30632','2016-09-09','admin','1473404267','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('11','0','cb52fb6f5e360576fcdd1f5f630dc96a.jpg','35517','2016-09-09','admin','1473404285','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('12','0','d96f533db9be246926cedc4e53014aa3.jpg','37903','2016-09-10','admin','1473485644','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('13','0','919f090439df7a8bf96a23590107f465.jpg','36674','2016-09-10','admin','1473485664','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('14','0','19c09e9a855e348d9a6374d218e6f17e.jpg','46313','2016-09-10','admin','1473485684','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('15','0','15e64d97e974cd1b5816720cc85065ff.jpg','42888','2016-09-10','admin','1473485701','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('16','0','b2de5b743ff2ab782264255f4af0f4f0.jpg','43880','2016-09-10','admin','1473485728','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('17','0','ef9a60aebc7ba772f5f11105b293eaa0.jpg','44619','2016-09-10','admin','1473485746','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('18','0','02557a0535e7ec79faaf07fbfa714790.jpg','28756','2016-09-10','admin','1473485763','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('19','0','2d3584ad37f098a2af0011cca7e06cba.jpg','43245','2016-09-10','admin','1473485781','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('20','0','b9c202734e1ad05c3cd9458ac6708fd3.jpg','29811','2016-09-10','admin','1473500260','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('21','0','78fc884b1577fb583bf74aa668762261.jpg','25311','2016-09-10','admin','1473500282','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('22','0','596e08fb4133dcabf269a2f7a411c4bc.jpg','28582','2016-09-10','admin','1473500302','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('23','0','182e433f5b0a87bc3c1545dd5dd2fdff.jpg','34643','2016-09-10','admin','1473500322','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('24','0','d8e68133c969b6c1deb54162f85615c0.jpg','37335','2016-09-10','admin','1473500340','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('25','0','1f1a1907f56387a2e51d33f316d77ed9.jpg','21315','2016-09-10','admin','1473500360','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('26','0','041a26b880e4853de3ac51465aa4632b.jpg','25087','2016-09-10','admin','1473500392','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('27','0','e2143618d234fc3c7ff3163ed3b033d0.jpg','34360','2016-09-10','admin','1473500412','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('28','0','ca2542cf3a47107b9bb071f67c4ce624.jpg','35205','2016-09-11','admin','1473538652','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('29','0','a532f2957cc4b91e994424d334c52c79.jpg','34015','2016-09-11','admin','1473538672','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('30','0','7568139f6378345c93c9020768f63f3c.jpg','36307','2016-09-11','admin','1473538695','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('31','0','48ea2f8c8a6d26b093c2f9cac35f0f4e.jpg','51125','2016-09-11','admin','1473538731','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('32','0','9ff4a697330d700eeaf257a2523261ef.jpg','41111','2016-09-11','admin','1473538780','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('33','0','9ca9a1197964e5e5c406714087f17a5b.jpg','38540','2016-09-11','admin','1473538820','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('34','0','c696c2e10acc9c518b74a4027c428a4c.jpg','34503','2016-09-11','admin','1473538841','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('35','0','f3a0b2577ddc349158801e5fcf2e1d8f.jpg','43307','2016-09-11','admin','1473538865','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('36','0','a855b6884c4a142f87885ec36b36d9fc.jpg','43708','2016-09-11','admin','1473538884','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('37','0','61c60cb50904cf8a12b46d22de99f0c7.jpg','44570','2016-09-11','admin','1473538911','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('38','0','661be58917e734839c1e3ef0c51bbef5.jpg','38828','2016-09-11','admin','1473538939','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('39','0','629e4c8185663813327a34a21a12d7f7.jpg','41977','2016-09-11','admin','1473538961','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('40','0','b00de54e24142d20c50932eff34c3790.jpg','45679','2016-09-11','admin','1473538981','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('41','0','147f94704307aa82173b83d666a21299.jpg','45679','2016-09-11','admin','1473539001','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('42','0','98c8819bbd3567583329524574b6a05f.png','8043','2016-09-11','admin','1473539010','0','1.png','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('43','0','99f70d2b8b2b95ebe2c57e01d25a2c22.jpg','38606','2016-09-11','admin','1473539029','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('44','0','1ec6488dab24b50c16b6ff2764192398.jpg','32667','2016-09-11','admin','1473587634','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('45','0','11ab246384c2d63492b86c5b95e980cc.jpg','34546','2016-09-11','admin','1473587654','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('46','0','26bd421870365a0cb3ba20e39eb03788.jpg','23157','2016-09-11','admin','1473587672','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('47','0','2cd4f47fcb2ba4cba15d87aa1b4df41a.jpg','41484','2016-09-11','admin','1473587690','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('48','0','c27b4f1f00b3f68d028aebfa54c30e07.jpg','22393','2016-09-11','admin','1473587707','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('49','0','a5c4d37921cda2b44887c00dab44473a.jpg','38357','2016-09-11','admin','1473587730','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('50','0','f348da2ad3280fbb4b721a0f95e338f1.jpg','24598','2016-09-11','admin','1473587746','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('51','0','ac0c1046511032b2bded3b62f615d893.jpg','20126','2016-09-11','admin','1473587763','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('52','0','0edffaaf21cc40f3d5fbce893863a095.jpg','22630','2016-09-11','admin','1473587780','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('53','0','514652731b91e280bf47c8542468f4f1.jpg','16833','2016-09-11','admin','1473587795','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('54','0','e3f2d895298c17547577dc2df3c14035.jpg','23669','2016-09-11','admin','1473587812','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('55','0','ec308ae7644a23c5ec9912192a8a27e9.jpg','18957','2016-09-11','admin','1473587827','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('56','0','2d09523361ea5e403e9a3e69f9ae881c.jpg','22422','2016-09-11','admin','1473587842','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('57','0','585b12c9cca6856d910cd2ecf7995877.jpg','23780','2016-09-11','admin','1473587857','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('58','0','22419fc00d275810a34c0b36015b3b3d.jpg','25681','2016-09-11','admin','1473587872','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('59','0','353dab1507d243b153c0a6600105951d.jpg','23063','2016-09-11','admin','1473587887','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('60','0','511c2525ee2a753e815de938ca2ee02b.jpg','19819','2016-09-11','admin','1473587981','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('61','0','282ad52cf6148bab26508b478f5f1ca7.jpg','23752','2016-09-11','admin','1473588007','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('62','0','b8ab4cbf8773c95081e56916592f1592.jpg','19296','2016-09-11','admin','1473588024','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('63','0','b39c5968583fc0b8aa708e975e829a72.jpg','24018','2016-09-11','admin','1473588041','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('64','0','ffc0c78e73683a69a59b5f85ad3d1b1a.jpg','34547','2016-09-11','admin','1473588059','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('65','0','0eebbfe159c7de7c9b99f6af36dabfef.jpg','32852','2016-09-11','admin','1473588075','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('66','0','b0a362c158b391a50a99e0b588cc03ba.jpg','27414','2016-09-11','admin','1473588090','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('67','0','539e8c78c572ebc8d7cccf8b4d246767.jpg','38611','2016-09-11','admin','1473588105','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('68','0','b2fd2bb33008219cc6cf994b817fa13f.jpg','28582','2016-09-11','admin','1473588123','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('69','0','e678e6a28e0e6d375dedd65fd4444d8e.jpg','21315','2016-09-11','admin','1473588139','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('70','0','6526d77f46e87ca06358fad0b60a32cf.jpg','34360','2016-09-11','admin','1473588155','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('73','0','b3a4ed096f9734575a868b1cdfc7691a.jpg','29854','2016-09-11','admin','1473599268','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('74','0','674174c291fb2f59d259c670c046b885.jpg','30277','2016-09-11','admin','1473599297','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('75','0','46a9cc30cd9ccd4c30aa662b3006f39a.jpg','43245','2016-09-11','admin','1473603874','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('76','0','b9078023311f18fdc854222c54e4aed4.jpg','28756','2016-09-11','admin','1473603908','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('77','0','d2f430b399931dff783b6ca401d227f4.jpg','44619','2016-09-11','admin','1473603927','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('78','0','22a59b90fb8470e3589ca3662edfb20e.jpg','43880','2016-09-11','admin','1473603944','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('79','0','fa37f344e44dfb02fc534303a9364740.jpg','42888','2016-09-11','admin','1473603961','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('80','0','7ead693ae15b5ffcf9310098fe459a06.jpg','46313','2016-09-11','admin','1473603979','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('81','0','dad34198629dee75aa25790ab7f7e203.jpg','14357','2016-09-12','admin','1473622845','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('82','0','0ecd594fb779a8b911ba83ff325f80c4.jpg','14983','2016-09-12','admin','1473622878','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('83','0','cf1e1d952614192ec50c1929277a45f0.jpg','18047','2016-09-12','admin','1473622897','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('84','0','f47fb08c5fe74fcb30026a3a6a26db9d.jpg','16645','2016-09-12','admin','1473622917','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('85','0','0ea51f5aad71b16509b42e526a60f932.jpg','18508','2016-09-12','admin','1473622936','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('86','0','3ff5f903140f3c68cdf3260e09055a98.jpg','17695','2016-09-12','admin','1473622954','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('87','0','5d2cb675d25109c1618154ee3f2434c5.jpg','14237','2016-09-12','admin','1473622980','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('88','0','c1d5cdcadaab42adbc48a19e5dd7188f.jpg','17949','2016-09-12','admin','1473623001','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('89','0','e92c57c463c401620bd6a07fe9a6e192.jpg','31197','2016-09-12','admin','1473659671','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('90','0','cac1f758ddb83b4c22a61c92f70ec8b8.jpg','36942','2016-09-12','admin','1473659707','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('91','0','681772c43f33f846dab8d9f93530c609.jpg','32100','2016-09-12','admin','1473659728','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('92','0','2dd310e872271e072c98b76ed266a211.jpg','43245','2016-09-12','admin','1473677265','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('93','0','9ef1e477d7e62098ac729a5d9fa827ed.jpg','44619','2016-09-12','admin','1473677291','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('94','0','e359b2a7fbd2f64338207143f44b5ad2.jpg','28756','2016-09-12','admin','1473677311','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('95','0','c6d8080e6c22c1a6929a963fe5f7c53a.jpg','43880','2016-09-12','admin','1473677332','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('96','0','a8898587cf39d48c1f151d8b742c1f9d.jpg','46313','2016-09-12','admin','1473677352','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('97','0','add643be2a54870c22750fff26b855c9.jpg','42888','2016-09-12','admin','1473677373','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('98','0','843df751d0fa7fccfd7a0d68f20950ba.jpg','38814','2016-09-12','admin','1473678151','0','1.jpg','1','0','2','2','0','1');");
E_D("replace into `www_92game_net_enewsfile_other` values('99','0','dabade4a1cfb76c87a2d15a002304d5f.jpg','56021','2016-10-04','92game','1475511406','0','2.jpg','1','0','101','0','0','2');");
E_D("replace into `www_92game_net_enewsfile_other` values('100','0','115d5fe20702980cbece5a1f828791c3.jpg','108080','2016-10-04','92game','1475511487','0','2.jpg','1','0','101','0','0','2');");

@include("../../inc/footer.php");
?>