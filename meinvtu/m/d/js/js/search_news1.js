function search_check(obj){if(obj.keyboard.value.length==0){alert('请输入搜索关键字');return false;}return true;}document.write("<table border=0 cellpadding=3 cellspacing=1><form name=search_js1 method=post action=\'/e/search/index.php\' onsubmit=\'return search_check(document.search_js1);\'><tr><td><div align=center>搜索: <select name=show><option value=title>标题</option><option value=smalltext>简介</option><option value=newstext>内容</option><option value=writer>作者</option><option value=title,smalltext,newstext,writer>搜索全部</option></select><select name=classid><option value=0>所有栏目</option><option value='1'>|-图看世界</option><option value='2' style='background:#99C4E3'>&nbsp;&nbsp;|-图说社会</option><option value='3' style='background:#99C4E3'>&nbsp;&nbsp;|-风景图片</option><option value='4' style='background:#99C4E3'>&nbsp;&nbsp;|-搞笑图片</option><option value='5' style='background:#99C4E3'>&nbsp;&nbsp;|-动物图片</option><option value='6' style='background:#99C4E3'>&nbsp;&nbsp;|-汽车标志</option><option value='7' style='background:#99C4E3'>&nbsp;&nbsp;|-美食图片</option><option value='8'>|-娱乐周边</option><option value='9' style='background:#99C4E3'>&nbsp;&nbsp;|-八卦图片</option><option value='10' style='background:#99C4E3'>&nbsp;&nbsp;|-人体艺术</option><option value='12' style='background:#99C4E3'>&nbsp;&nbsp;|-明星图片</option><option value='13' style='background:#99C4E3'>&nbsp;&nbsp;|-美女图片</option><option value='17' style='background:#99C4E3'>&nbsp;&nbsp;|-美女模特</option><option value='18' style='background:#99C4E3'>&nbsp;&nbsp;|-电影海报</option><option value='11' style='background:#99C4E3'>|-明星库</option><option value='19'>|-唯美图片</option><option value='20' style='background:#99C4E3'>&nbsp;&nbsp;|-高清壁纸</option><option value='22' style='background:#99C4E3'>&nbsp;&nbsp;|-动漫图片</option><option value='23' style='background:#99C4E3'>&nbsp;&nbsp;|-汽车图片</option><option value='25' style='background:#99C4E3'>&nbsp;&nbsp;|-非主流图片</option><option value='26' style='background:#99C4E3'>&nbsp;&nbsp;|-背景图片</option><option value='27'>|-游戏动漫</option><option value='28' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏新闻</option><option value='29' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏原画</option><option value='30' style='background:#99C4E3'>&nbsp;&nbsp;|-邪恶漫画</option><option value='31' style='background:#99C4E3'>&nbsp;&nbsp;|-Cosplay</option><option value='32'>|-其他图片</option><option value='33' style='background:#99C4E3'>&nbsp;&nbsp;|-萌图</option><option value='34' style='background:#99C4E3'>&nbsp;&nbsp;|-装修设计</option><option value='35' style='background:#99C4E3'>&nbsp;&nbsp;|-纹身图片</option><option value='36' style='background:#99C4E3'>&nbsp;&nbsp;|-植物图片</option><option value='14'>|-广告位</option><option value='15' style='background:#99C4E3'>&nbsp;&nbsp;|-明星图片(160*119)</option><option value='16' style='background:#99C4E3'>&nbsp;&nbsp;|-明星图片(238)</option><option value='21' style='background:#99C4E3'>&nbsp;&nbsp;|-高清壁纸推荐分类</option><option value='24' style='background:#99C4E3'>&nbsp;&nbsp;|-汽车图片推荐分类</option></select><input name=keyboard type=text size=13><input type=submit name=Submit value=搜索></div></td></tr></form></table>");