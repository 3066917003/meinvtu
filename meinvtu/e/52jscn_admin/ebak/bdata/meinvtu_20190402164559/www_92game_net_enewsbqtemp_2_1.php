<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_enewsbqtemp_2`;");
E_C("CREATE TABLE `www_92game_net_enewsbqtemp_2` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `modid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `temptext` text NOT NULL,
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `listvar` text NOT NULL,
  `subnews` smallint(5) unsigned NOT NULL DEFAULT '0',
  `rownum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('1','子栏目导航标签模�\�','1','| [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<a href=\\\\\"[!--classurl--]\\\\\">[!--classname--]</a> | ','0','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('2','标题列表模板','1','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></li>','0','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('3','标题+简�\�','1','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','m-d','<li><p><strong><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></strong>[!--smalltext--] </p></li>','60','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('4','头条相关','1','[!--empirenews.listtemp--]<!--list.var1-->　<!--list.var2-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">·[!--title--]</a>','0','2','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('5','图片+标题+简�\�','1','[!--empirenews.listtemp--]\r\n<!--list.var1-->\r\n[!--empirenews.listtemp--]','Y-m-d H:i:s','<table width=\\\\\"94%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\" class=\\\\\"picText\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td><a href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\"><img width=\\\\\"70\\\\\" height=\\\\\"78\\\\\" src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" /></a></td>\r\n<td><strong><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></strong>[!--smalltext--]</td>\r\n</tr>\r\n</table>','56','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('7','循环子栏目标�\�','1','<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>[!--the.classname--]</strong></td>\r\n<td align=\\\\\"right\\\\\"><a href=\\\\\"[!--the.classurl--]\\\\\">更多&gt;&gt;</a></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n       [!--empirenews.listtemp--]\r\n       <!--list.var1-->\r\n       [!--empirenews.listtemp--]\r\n</ul>\r\n</td>\r\n</tr>\r\n</table>','Y-m-d','<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a> <span>[!--newstime--]</span></li>','0','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('8','头条标题','1','[!--empirenews.listtemp--]\r\n<!--list.var1-->\r\n[!--empirenews.listtemp--]','Y-m-d H:i:s','<strong><a href=\\\\\"[!--titleurl--]\\\\\">[!--title--]</a></strong>\r\n<p>　　[!--smalltext--]</p>','150','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('9','标题+软件简�\�','2','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li><p><strong><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></strong>[!--softsay--]</p></li>','50','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('10','排行列表','1','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li class=\\\\\"no[!--no.num--]\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></li>','0','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('11','图片集分页模�\�','1','<script type=\\\\\"text/javascript\\\\\">\r\n        var photosr=new Array();\r\n        [!--photor--]\r\n        function GotoPhPage(page){\r\n                page=parseInt(page);\r\n                document.getElementById(\\\\\"showpagephoto\\\\\").innerHTML=photosr[page];\r\n                document.ViewPhotoForm.thisphpage.value=page;\r\n                document.ViewPhotoForm.tothephpage.options[page-1].selected=true;\r\n        }\r\n        //上一�\�\r\n        function PriPhPage(){\r\n                var thispage=parseInt(document.ViewPhotoForm.thisphpage.value);\r\n                var num=photosr.length;\r\n                if(thispage<=1)\r\n                {\r\n                        return false;\r\n                }\r\n                GotoPhPage(thispage-1);\r\n        }\r\n        //下一�\�\r\n        function NextPhPage(){\r\n                var thispage=parseInt(document.ViewPhotoForm.thisphpage.value);\r\n                var num=photosr.length;\r\n                if(thispage>=num-1)\r\n                {\r\n                        return false;\r\n                }\r\n                GotoPhPage(thispage+1);\r\n        }\r\n        function PhAutoPlay(){\r\n                var sec=parseInt(document.ViewPhotoForm.autoplaysec.value);\r\n                var i;\r\n                var num=photosr.length;\r\n                for(i=1;i<=sec;i++)\r\n                {\r\n                        if(document.ViewPhotoForm.autophstop.value==0)\r\n                        {\r\n                                window.setTimeout(\\\\\"PhAutoPlayExe(\\\\\"+i+\\\\\",\\\\\"+sec+\\\\\")\\\\\",i*1000);\r\n                        }\r\n                        else\r\n                        {\r\n                                break;\r\n                        }\r\n                }\r\n        }\r\n        function PhAutoPlayExe(num,sec){\r\n                var t;\r\n                if(document.ViewPhotoForm.autophstop.value==1)\r\n                {\r\n                        return \\\\\"\\\\\";\r\n                }\r\n                if(num==sec) \r\n                {\r\n                        t=NextPhPage();\r\n                        if(t==false)\r\n                        {\r\n                                GotoPhPage(1);\r\n                        }\r\n                        PhAutoPlay();\r\n                } \r\n        }\r\n        </script>\r\n        \r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\">\r\n  <tr> \r\n    <td height=\\\\\"25\\\\\" id=\\\\\"showpagephoto\\\\\" align=\\\\\"center\\\\\"> \r\n      <!--list.var1-->\r\n    </td>\r\n  </tr>\r\n  <form name=\\\\\"ViewPhotoForm\\\\\" id=\\\\\"ViewPhotoForm\\\\\" method=\\\\\"POST\\\\\" action=\\\\\"\\\\\">\r\n    <tr> \r\n      <td height=\\\\\"25\\\\\"> <div align=\\\\\"center\\\\\"> \r\n          <input type=\\\\\"button\\\\\" name=\\\\\"Submit\\\\\" value=\\\\\"上一页\\\\" onclick=\\\\\"PriPhPage();\\\\\">\r\n          &nbsp;&nbsp; \r\n          <select name=\\\\\"tothephpage\\\\\" onchange=\\\\\"GotoPhPage(this.options[this.selectedIndex].value)\\\\\">\r\n            [!--select--]\r\n          </select>\r\n          &nbsp;&nbsp; \r\n          <input type=\\\\\"button\\\\\" name=\\\\\"Submit2\\\\\" value=\\\\\"下一页\\\\" onclick=\\\\\"NextPhPage();\\\\\">\r\n          <input name=\\\\\"thisphpage\\\\\" type=\\\\\"hidden\\\\\" value=\\\\\"1\\\\\">\r\n        </div></td>\r\n    </tr>\r\n    <tr>\r\n      <td height=\\\\\"25\\\\\"><div align=\\\\\"center\\\\\">\r\n          <select name=\\\\\"autoplaysec\\\\\">\r\n            <option value=\\\\\"1\\\\\">1�\�</option>\r\n            <option value=\\\\\"2\\\\\">2�\�</option>\r\n            <option value=\\\\\"3\\\\\" selected>3�\�</option>\r\n            <option value=\\\\\"4\\\\\">4�\�</option>\r\n            <option value=\\\\\"5\\\\\">5�\�</option>\r\n            <option value=\\\\\"6\\\\\">6�\�</option>\r\n            <option value=\\\\\"7\\\\\">7�\�</option>\r\n            <option value=\\\\\"8\\\\\">8�\�</option>\r\n            <option value=\\\\\"9\\\\\">9�\�</option>\r\n            <option value=\\\\\"10\\\\\">10�\�</option>\r\n          </select>\r\n                  <input name=\\\\\"autophstop\\\\\" type=\\\\\"hidden\\\\\" value=\\\\\"0\\\\\">\r\n          <input type=\\\\\"button\\\\\" name=\\\\\"Submit3\\\\\" value=\\\\\"自动播放\\\\\" onclick=\\\\\"document.ViewPhotoForm.autophstop.value=0;PhAutoPlay();\\\\\">\r\n          &nbsp;<input type=\\\\\"button\\\\\" name=\\\\\"Submit32\\\\\" value=\\\\\"停止播放\\\\\" onclick=\\\\\"document.ViewPhotoForm.autophstop.value=1;\\\\\">\r\n        </div></td>\r\n    </tr>\r\n  </form>\r\n</table>\r\n<table width=\\\\\"500\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\">\r\n<tr><td>\r\n<marquee  behavior=alternate ONMOUSEOUT=\\\\\"this.scrollDelay=1\\\\\" ONMOUSEOVER=\\\\\"this.scrollDelay=600\\\\\"  scrollamount=1  SCROLLDELAY=1  border=0  scrolldelay=70  width=\\\\\"100%\\\\\"  align=middle>\r\n        [!--smalldh--]\r\n</marquee>\r\n</td></tr></table>','Y-m-d H:i:s','<a href=\\\\''#ecms\\\\'' onclick=\\\\''NextPhPage();\\\\'' title=\\\\''点击进入下一张图片\''><img src=\\\\''[!--picurl--]\\\\'' alt=\\\\''[!--picname--]\\\\'' border=1 class=\\\\''photoresize\\\\''></a><br><span style=\\\\''line-height=18pt\\\\''>[!--picname--]</span>','0','1','0','0');");
E_D("replace into `www_92game_net_enewsbqtemp_2` values('12','栏目tabs导航','1','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li id=\\\\\"tabnav_btn_[!--no--]\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--classurl--]\\\\\">[!--classname--]</a></li>','0','1','0','0');");

@include("../../inc/footer.php");
?>