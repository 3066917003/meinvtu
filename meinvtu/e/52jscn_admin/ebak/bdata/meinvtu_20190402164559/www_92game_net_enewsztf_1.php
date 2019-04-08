<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewsztf`;");
E_C("CREATE TABLE `www_92game_net_enewsztf` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsztf` values('1','title','标题','text','\r\n<input name=\\\\\"title\\\\\" type=\\\\\"text\\\\\" id=\\\\\"title\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[title])?>\\\\\" size=\\\\\"60\\\\\">\r\n','','0','VARCHAR','255','','60');");
E_D("replace into `www_92game_net_enewsztf` values('2','bgpic','背景图片','img','\r\n<input name=\\\\\"bgpic\\\\\" type=\\\\\"text\\\\\" id=\\\\\"bgpic\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[bgpic])?>\\\\\" size=\\\\\"45\\\\\">\r\n<a onclick=\\\\\"window.open(\\\\''../ecmseditor/FileMain.php?modtype=2&type=1&classid=&filepass=<?=\$filepass?>&sinfo=1&doing=2&field=bgpic<?=\$ecms_hashur[ehref]?>\\\\'',\\\\''\\\\'',\\\\''width=700,height=550,scrollbars=yes\\\\'');\\\\\" title=\\\\\"选择已上传的图片\\\\\"><img src=\\\\\"../../data/images/changeimg.gif\\\\\" border=\\\\\"0\\\\\" align=\\\\\"absbottom\\\\\"></a> \r\n','','0','VARCHAR','255','','');");

@include("../../inc/footer.php");
?>