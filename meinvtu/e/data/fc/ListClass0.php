<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=1></td><td onMouseUp='turnit(classdiv1);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>1</td><td><input type=checkbox name=reclassid[] value=1> <a href='localhostword/' target=_blank>图看世界</a></td><td align=center>0</td><td><a href='#e' onclick=editc(1)>修改</a> <a href='#e' onclick=copyc(1)>复制</a> <a href='#e' onclick=delc(1)>删除</a></td><td><a href='#e' onclick=relist(1)>刷新</a> <a href='#e' onclick=renews(1,'news')>信息</a> <a href='#e' onclick=rejs(1)>JS</a> <a href='#e' onclick=tvurl(1)>调用</a></td></tr><tbody id='classdiv1'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=2></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(2)><img src='../data/images/txt.gif' border=0></a></td><td align=center>2</td><td><input type=checkbox name=reclassid[] value=2> <a href='localhostword/shehuibaitai/' target=_blank>图说社会</a></td><td align=center>0</td><td><a href='#e' onclick=editc(2)>修改</a> <a href='#e' onclick=copyc(2)>复制</a> <a href='#e' onclick=delc(2)>删除</a></td><td><a href='#e' onclick=relist(2)>刷新</a> <a href='#e' onclick=renews(2,'news')>信息</a> <a href='#e' onclick=rejs(2)>JS</a> <a href='#e' onclick=tvurl(2)>调用</a> <a href='#e' onclick=ttc(2)>分类</a> <a href='#e' onclick=docinfo(2)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=3></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(3)><img src='../data/images/txt.gif' border=0></a></td><td align=center>3</td><td><input type=checkbox name=reclassid[] value=3> <a href='localhostword/fengjingsheying/' target=_blank>风景图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(3)>修改</a> <a href='#e' onclick=copyc(3)>复制</a> <a href='#e' onclick=delc(3)>删除</a></td><td><a href='#e' onclick=relist(3)>刷新</a> <a href='#e' onclick=renews(3,'photo')>信息</a> <a href='#e' onclick=rejs(3)>JS</a> <a href='#e' onclick=tvurl(3)>调用</a> <a href='#e' onclick=ttc(3)>分类</a> <a href='#e' onclick=docinfo(3)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=4></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(4)><img src='../data/images/txt.gif' border=0></a></td><td align=center>4</td><td><input type=checkbox name=reclassid[] value=4> <a href='localhostword/gaoxiaoqutu/' target=_blank>搞笑图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(4)>修改</a> <a href='#e' onclick=copyc(4)>复制</a> <a href='#e' onclick=delc(4)>删除</a></td><td><a href='#e' onclick=relist(4)>刷新</a> <a href='#e' onclick=renews(4,'photo')>信息</a> <a href='#e' onclick=rejs(4)>JS</a> <a href='#e' onclick=tvurl(4)>调用</a> <a href='#e' onclick=ttc(4)>分类</a> <a href='#e' onclick=docinfo(4)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=5></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(5)><img src='../data/images/txt.gif' border=0></a></td><td align=center>5</td><td><input type=checkbox name=reclassid[] value=5> <a href='localhostword/dongwushijie/' target=_blank>动物图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(5)>修改</a> <a href='#e' onclick=copyc(5)>复制</a> <a href='#e' onclick=delc(5)>删除</a></td><td><a href='#e' onclick=relist(5)>刷新</a> <a href='#e' onclick=renews(5,'photo')>信息</a> <a href='#e' onclick=rejs(5)>JS</a> <a href='#e' onclick=tvurl(5)>调用</a> <a href='#e' onclick=ttc(5)>分类</a> <a href='#e' onclick=docinfo(5)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=6></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(6)><img src='../data/images/txt.gif' border=0></a></td><td align=center>6</td><td><input type=checkbox name=reclassid[] value=6> <a href='localhostword/chebiao/' target=_blank>汽车标志</a></td><td align=center>0</td><td><a href='#e' onclick=editc(6)>修改</a> <a href='#e' onclick=copyc(6)>复制</a> <a href='#e' onclick=delc(6)>删除</a></td><td><a href='#e' onclick=relist(6)>刷新</a> <a href='#e' onclick=renews(6,'news')>信息</a> <a href='#e' onclick=rejs(6)>JS</a> <a href='#e' onclick=tvurl(6)>调用</a> <a href='#e' onclick=ttc(6)>分类</a> <a href='#e' onclick=docinfo(6)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=7></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(7)><img src='../data/images/txt.gif' border=0></a></td><td align=center>7</td><td><input type=checkbox name=reclassid[] value=7> <a href='localhostmeishitupian/' target=_blank>美食图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(7)>修改</a> <a href='#e' onclick=copyc(7)>复制</a> <a href='#e' onclick=delc(7)>删除</a></td><td><a href='#e' onclick=relist(7)>刷新</a> <a href='#e' onclick=renews(7,'photo')>信息</a> <a href='#e' onclick=rejs(7)>JS</a> <a href='#e' onclick=tvurl(7)>调用</a> <a href='#e' onclick=ttc(7)>分类</a> <a href='#e' onclick=docinfo(7)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=8></td><td onMouseUp='turnit(classdiv8);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>8</td><td><input type=checkbox name=reclassid[] value=8> <a href='localhostent/' target=_blank>娱乐周边</a></td><td align=center>0</td><td><a href='#e' onclick=editc(8)>修改</a> <a href='#e' onclick=copyc(8)>复制</a> <a href='#e' onclick=delc(8)>删除</a></td><td><a href='#e' onclick=relist(8)>刷新</a> <a href='#e' onclick=renews(8,'news')>信息</a> <a href='#e' onclick=rejs(8)>JS</a> <a href='#e' onclick=tvurl(8)>调用</a></td></tr><tbody id='classdiv8'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=9></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(9)><img src='../data/images/txt.gif' border=0></a></td><td align=center>9</td><td><input type=checkbox name=reclassid[] value=9> <a href='localhostent/mingxingbagua/' target=_blank>八卦图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(9)>修改</a> <a href='#e' onclick=copyc(9)>复制</a> <a href='#e' onclick=delc(9)>删除</a></td><td><a href='#e' onclick=relist(9)>刷新</a> <a href='#e' onclick=renews(9,'news')>信息</a> <a href='#e' onclick=rejs(9)>JS</a> <a href='#e' onclick=tvurl(9)>调用</a> <a href='#e' onclick=ttc(9)>分类</a> <a href='#e' onclick=docinfo(9)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=10></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(10)><img src='../data/images/txt.gif' border=0></a></td><td align=center>10</td><td><input type=checkbox name=reclassid[] value=10> <a href='localhostent/rentiyishu/' target=_blank>人体艺术</a></td><td align=center>0</td><td><a href='#e' onclick=editc(10)>修改</a> <a href='#e' onclick=copyc(10)>复制</a> <a href='#e' onclick=delc(10)>删除</a></td><td><a href='#e' onclick=relist(10)>刷新</a> <a href='#e' onclick=renews(10,'photo')>信息</a> <a href='#e' onclick=rejs(10)>JS</a> <a href='#e' onclick=tvurl(10)>调用</a> <a href='#e' onclick=ttc(10)>分类</a> <a href='#e' onclick=docinfo(10)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=12></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(12)><img src='../data/images/txt.gif' border=0></a></td><td align=center>12</td><td><input type=checkbox name=reclassid[] value=12> <a href='localhostent/mingxingtuku/' target=_blank>明星图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(12)>修改</a> <a href='#e' onclick=copyc(12)>复制</a> <a href='#e' onclick=delc(12)>删除</a></td><td><a href='#e' onclick=relist(12)>刷新</a> <a href='#e' onclick=renews(12,'photo')>信息</a> <a href='#e' onclick=rejs(12)>JS</a> <a href='#e' onclick=tvurl(12)>调用</a> <a href='#e' onclick=ttc(12)>分类</a> <a href='#e' onclick=docinfo(12)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=13></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(13)><img src='../data/images/txt.gif' border=0></a></td><td align=center>13</td><td><input type=checkbox name=reclassid[] value=13> <a href='localhostent/meinvtupian/' target=_blank>美女图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(13)>修改</a> <a href='#e' onclick=copyc(13)>复制</a> <a href='#e' onclick=delc(13)>删除</a></td><td><a href='#e' onclick=relist(13)>刷新</a> <a href='#e' onclick=renews(13,'photo')>信息</a> <a href='#e' onclick=rejs(13)>JS</a> <a href='#e' onclick=tvurl(13)>调用</a> <a href='#e' onclick=ttc(13)>分类</a> <a href='#e' onclick=docinfo(13)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=17></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(17)><img src='../data/images/txt.gif' border=0></a></td><td align=center>17</td><td><input type=checkbox name=reclassid[] value=17> <a href='localhostent/lianglimeimo/' target=_blank>美女模特</a></td><td align=center>0</td><td><a href='#e' onclick=editc(17)>修改</a> <a href='#e' onclick=copyc(17)>复制</a> <a href='#e' onclick=delc(17)>删除</a></td><td><a href='#e' onclick=relist(17)>刷新</a> <a href='#e' onclick=renews(17,'photo')>信息</a> <a href='#e' onclick=rejs(17)>JS</a> <a href='#e' onclick=tvurl(17)>调用</a> <a href='#e' onclick=ttc(17)>分类</a> <a href='#e' onclick=docinfo(17)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=18></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(18)><img src='../data/images/txt.gif' border=0></a></td><td align=center>18</td><td><input type=checkbox name=reclassid[] value=18> <a href='localhostent/haibao/' target=_blank>电影海报</a></td><td align=center>0</td><td><a href='#e' onclick=editc(18)>修改</a> <a href='#e' onclick=copyc(18)>复制</a> <a href='#e' onclick=delc(18)>删除</a></td><td><a href='#e' onclick=relist(18)>刷新</a> <a href='#e' onclick=renews(18,'photo')>信息</a> <a href='#e' onclick=rejs(18)>JS</a> <a href='#e' onclick=tvurl(18)>调用</a> <a href='#e' onclick=ttc(18)>分类</a> <a href='#e' onclick=docinfo(18)>归档</a></td></tr></tbody><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=11></td><td><a href='#e' onclick=addi(11)><img src='../data/images/txt.gif' border=0></a></td><td align=center>11</td><td><input type=checkbox name=reclassid[] value=11> <a href='localhoste/action/ListInfo/?classid=11' target=_blank>明星库</a></td><td align=center>0</td><td><a href='#e' onclick=editc(11)>修改</a> <a href='#e' onclick=copyc(11)>复制</a> <a href='#e' onclick=delc(11)>删除</a></td><td><a href='#e' onclick=relist(11)>刷新</a> <a href='#e' onclick=renews(11,'star')>信息</a> <a href='#e' onclick=rejs(11)>JS</a> <a href='#e' onclick=tvurl(11)>调用</a> <a href='#e' onclick=ttc(11)>分类</a> <a href='#e' onclick=docinfo(11)>归档</a></td></tr><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=19></td><td onMouseUp='turnit(classdiv19);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>19</td><td><input type=checkbox name=reclassid[] value=19> <a href='localhostbeautiful/' target=_blank>唯美图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(19)>修改</a> <a href='#e' onclick=copyc(19)>复制</a> <a href='#e' onclick=delc(19)>删除</a></td><td><a href='#e' onclick=relist(19)>刷新</a> <a href='#e' onclick=renews(19,'photo')>信息</a> <a href='#e' onclick=rejs(19)>JS</a> <a href='#e' onclick=tvurl(19)>调用</a></td></tr><tbody id='classdiv19'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=20></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(20)><img src='../data/images/txt.gif' border=0></a></td><td align=center>20</td><td><input type=checkbox name=reclassid[] value=20> <a href='localhostbeautiful/zhuomianbeijing/' target=_blank>高清壁纸</a></td><td align=center>0</td><td><a href='#e' onclick=editc(20)>修改</a> <a href='#e' onclick=copyc(20)>复制</a> <a href='#e' onclick=delc(20)>删除</a></td><td><a href='#e' onclick=relist(20)>刷新</a> <a href='#e' onclick=renews(20,'photo')>信息</a> <a href='#e' onclick=rejs(20)>JS</a> <a href='#e' onclick=tvurl(20)>调用</a> <a href='#e' onclick=ttc(20)>分类</a> <a href='#e' onclick=docinfo(20)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=22></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(22)><img src='../data/images/txt.gif' border=0></a></td><td align=center>22</td><td><input type=checkbox name=reclassid[] value=22> <a href='localhostbeautiful/dongmantupian/' target=_blank>动漫图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(22)>修改</a> <a href='#e' onclick=copyc(22)>复制</a> <a href='#e' onclick=delc(22)>删除</a></td><td><a href='#e' onclick=relist(22)>刷新</a> <a href='#e' onclick=renews(22,'photo')>信息</a> <a href='#e' onclick=rejs(22)>JS</a> <a href='#e' onclick=tvurl(22)>调用</a> <a href='#e' onclick=ttc(22)>分类</a> <a href='#e' onclick=docinfo(22)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=23></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(23)><img src='../data/images/txt.gif' border=0></a></td><td align=center>23</td><td><input type=checkbox name=reclassid[] value=23> <a href='localhostbeautiful/qichetuku/' target=_blank>汽车图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(23)>修改</a> <a href='#e' onclick=copyc(23)>复制</a> <a href='#e' onclick=delc(23)>删除</a></td><td><a href='#e' onclick=relist(23)>刷新</a> <a href='#e' onclick=renews(23,'photo')>信息</a> <a href='#e' onclick=rejs(23)>JS</a> <a href='#e' onclick=tvurl(23)>调用</a> <a href='#e' onclick=ttc(23)>分类</a> <a href='#e' onclick=docinfo(23)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=25></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(25)><img src='../data/images/txt.gif' border=0></a></td><td align=center>25</td><td><input type=checkbox name=reclassid[] value=25> <a href='localhostbeautiful/feizhuliutupian/' target=_blank>非主流图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(25)>修改</a> <a href='#e' onclick=copyc(25)>复制</a> <a href='#e' onclick=delc(25)>删除</a></td><td><a href='#e' onclick=relist(25)>刷新</a> <a href='#e' onclick=renews(25,'photo')>信息</a> <a href='#e' onclick=rejs(25)>JS</a> <a href='#e' onclick=tvurl(25)>调用</a> <a href='#e' onclick=ttc(25)>分类</a> <a href='#e' onclick=docinfo(25)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=26></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(26)><img src='../data/images/txt.gif' border=0></a></td><td align=center>26</td><td><input type=checkbox name=reclassid[] value=26> <a href='localhostbeautiful/beijingtupian/' target=_blank>背景图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(26)>修改</a> <a href='#e' onclick=copyc(26)>复制</a> <a href='#e' onclick=delc(26)>删除</a></td><td><a href='#e' onclick=relist(26)>刷新</a> <a href='#e' onclick=renews(26,'photo')>信息</a> <a href='#e' onclick=rejs(26)>JS</a> <a href='#e' onclick=tvurl(26)>调用</a> <a href='#e' onclick=ttc(26)>分类</a> <a href='#e' onclick=docinfo(26)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=27></td><td onMouseUp='turnit(classdiv27);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>27</td><td><input type=checkbox name=reclassid[] value=27> <a href='localhostgame/' target=_blank>游戏动漫</a></td><td align=center>0</td><td><a href='#e' onclick=editc(27)>修改</a> <a href='#e' onclick=copyc(27)>复制</a> <a href='#e' onclick=delc(27)>删除</a></td><td><a href='#e' onclick=relist(27)>刷新</a> <a href='#e' onclick=renews(27,'news')>信息</a> <a href='#e' onclick=rejs(27)>JS</a> <a href='#e' onclick=tvurl(27)>调用</a></td></tr><tbody id='classdiv27'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=28></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(28)><img src='../data/images/txt.gif' border=0></a></td><td align=center>28</td><td><input type=checkbox name=reclassid[] value=28> <a href='localhostgame/youxixinwen/' target=_blank>游戏新闻</a></td><td align=center>0</td><td><a href='#e' onclick=editc(28)>修改</a> <a href='#e' onclick=copyc(28)>复制</a> <a href='#e' onclick=delc(28)>删除</a></td><td><a href='#e' onclick=relist(28)>刷新</a> <a href='#e' onclick=renews(28,'news')>信息</a> <a href='#e' onclick=rejs(28)>JS</a> <a href='#e' onclick=tvurl(28)>调用</a> <a href='#e' onclick=ttc(28)>分类</a> <a href='#e' onclick=docinfo(28)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=29></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(29)><img src='../data/images/txt.gif' border=0></a></td><td align=center>29</td><td><input type=checkbox name=reclassid[] value=29> <a href='localhostgame/youxijietu/' target=_blank>游戏原画</a></td><td align=center>0</td><td><a href='#e' onclick=editc(29)>修改</a> <a href='#e' onclick=copyc(29)>复制</a> <a href='#e' onclick=delc(29)>删除</a></td><td><a href='#e' onclick=relist(29)>刷新</a> <a href='#e' onclick=renews(29,'photo')>信息</a> <a href='#e' onclick=rejs(29)>JS</a> <a href='#e' onclick=tvurl(29)>调用</a> <a href='#e' onclick=ttc(29)>分类</a> <a href='#e' onclick=docinfo(29)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=30></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(30)><img src='../data/images/txt.gif' border=0></a></td><td align=center>30</td><td><input type=checkbox name=reclassid[] value=30> <a href='localhostgame/xieemanhua/' target=_blank>邪恶漫画</a></td><td align=center>0</td><td><a href='#e' onclick=editc(30)>修改</a> <a href='#e' onclick=copyc(30)>复制</a> <a href='#e' onclick=delc(30)>删除</a></td><td><a href='#e' onclick=relist(30)>刷新</a> <a href='#e' onclick=renews(30,'photo')>信息</a> <a href='#e' onclick=rejs(30)>JS</a> <a href='#e' onclick=tvurl(30)>调用</a> <a href='#e' onclick=ttc(30)>分类</a> <a href='#e' onclick=docinfo(30)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=31></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(31)><img src='../data/images/txt.gif' border=0></a></td><td align=center>31</td><td><input type=checkbox name=reclassid[] value=31> <a href='localhostgame/cosplaymeitu/' target=_blank>Cosplay</a></td><td align=center>0</td><td><a href='#e' onclick=editc(31)>修改</a> <a href='#e' onclick=copyc(31)>复制</a> <a href='#e' onclick=delc(31)>删除</a></td><td><a href='#e' onclick=relist(31)>刷新</a> <a href='#e' onclick=renews(31,'photo')>信息</a> <a href='#e' onclick=rejs(31)>JS</a> <a href='#e' onclick=tvurl(31)>调用</a> <a href='#e' onclick=ttc(31)>分类</a> <a href='#e' onclick=docinfo(31)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=32></td><td onMouseUp='turnit(classdiv32);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>32</td><td><input type=checkbox name=reclassid[] value=32> <a href='localhostqita/' target=_blank>其他图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(32)>修改</a> <a href='#e' onclick=copyc(32)>复制</a> <a href='#e' onclick=delc(32)>删除</a></td><td><a href='#e' onclick=relist(32)>刷新</a> <a href='#e' onclick=renews(32,'photo')>信息</a> <a href='#e' onclick=rejs(32)>JS</a> <a href='#e' onclick=tvurl(32)>调用</a></td></tr><tbody id='classdiv32'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=33></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(33)><img src='../data/images/txt.gif' border=0></a></td><td align=center>33</td><td><input type=checkbox name=reclassid[] value=33> <a href='localhostqita/mengtu/' target=_blank>萌图</a></td><td align=center>0</td><td><a href='#e' onclick=editc(33)>修改</a> <a href='#e' onclick=copyc(33)>复制</a> <a href='#e' onclick=delc(33)>删除</a></td><td><a href='#e' onclick=relist(33)>刷新</a> <a href='#e' onclick=renews(33,'photo')>信息</a> <a href='#e' onclick=rejs(33)>JS</a> <a href='#e' onclick=tvurl(33)>调用</a> <a href='#e' onclick=ttc(33)>分类</a> <a href='#e' onclick=docinfo(33)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=34></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(34)><img src='../data/images/txt.gif' border=0></a></td><td align=center>34</td><td><input type=checkbox name=reclassid[] value=34> <a href='localhostzhuangxiusheji/' target=_blank>装修设计</a></td><td align=center>0</td><td><a href='#e' onclick=editc(34)>修改</a> <a href='#e' onclick=copyc(34)>复制</a> <a href='#e' onclick=delc(34)>删除</a></td><td><a href='#e' onclick=relist(34)>刷新</a> <a href='#e' onclick=renews(34,'photo')>信息</a> <a href='#e' onclick=rejs(34)>JS</a> <a href='#e' onclick=tvurl(34)>调用</a> <a href='#e' onclick=ttc(34)>分类</a> <a href='#e' onclick=docinfo(34)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=35></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(35)><img src='../data/images/txt.gif' border=0></a></td><td align=center>35</td><td><input type=checkbox name=reclassid[] value=35> <a href='localhostwenshentupian/' target=_blank>纹身图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(35)>修改</a> <a href='#e' onclick=copyc(35)>复制</a> <a href='#e' onclick=delc(35)>删除</a></td><td><a href='#e' onclick=relist(35)>刷新</a> <a href='#e' onclick=renews(35,'photo')>信息</a> <a href='#e' onclick=rejs(35)>JS</a> <a href='#e' onclick=tvurl(35)>调用</a> <a href='#e' onclick=ttc(35)>分类</a> <a href='#e' onclick=docinfo(35)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=36></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(36)><img src='../data/images/txt.gif' border=0></a></td><td align=center>36</td><td><input type=checkbox name=reclassid[] value=36> <a href='localhostzhiwu/' target=_blank>植物图片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(36)>修改</a> <a href='#e' onclick=copyc(36)>复制</a> <a href='#e' onclick=delc(36)>删除</a></td><td><a href='#e' onclick=relist(36)>刷新</a> <a href='#e' onclick=renews(36,'photo')>信息</a> <a href='#e' onclick=rejs(36)>JS</a> <a href='#e' onclick=tvurl(36)>调用</a> <a href='#e' onclick=ttc(36)>分类</a> <a href='#e' onclick=docinfo(36)>归档</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=99 size=2><input type=hidden name=classid[] value=14></td><td onMouseUp='turnit(classdiv14);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>14</td><td><input type=checkbox name=reclassid[] value=14> <a href='localhoste/action/ListInfo/?classid=14' target=_blank>广告位</a></td><td align=center>0</td><td><a href='#e' onclick=editc(14)>修改</a> <a href='#e' onclick=copyc(14)>复制</a> <a href='#e' onclick=delc(14)>删除</a></td><td><a href='#e' onclick=relist(14)>刷新</a> <a href='#e' onclick=renews(14,'news')>信息</a> <a href='#e' onclick=rejs(14)>JS</a> <a href='#e' onclick=tvurl(14)>调用</a></td></tr><tbody id='classdiv14'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=15></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(15)><img src='../data/images/txt.gif' border=0></a></td><td align=center>15</td><td><input type=checkbox name=reclassid[] value=15> <a href='localhoste/action/ListInfo/?classid=15' target=_blank>明星图片(160*119)</a></td><td align=center>0</td><td><a href='#e' onclick=editc(15)>修改</a> <a href='#e' onclick=copyc(15)>复制</a> <a href='#e' onclick=delc(15)>删除</a></td><td><a href='#e' onclick=relist(15)>刷新</a> <a href='#e' onclick=renews(15,'gg')>信息</a> <a href='#e' onclick=rejs(15)>JS</a> <a href='#e' onclick=tvurl(15)>调用</a> <a href='#e' onclick=ttc(15)>分类</a> <a href='#e' onclick=docinfo(15)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=16></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(16)><img src='../data/images/txt.gif' border=0></a></td><td align=center>16</td><td><input type=checkbox name=reclassid[] value=16> <a href='localhoste/action/ListInfo/?classid=16' target=_blank>明星图片(238)</a></td><td align=center>0</td><td><a href='#e' onclick=editc(16)>修改</a> <a href='#e' onclick=copyc(16)>复制</a> <a href='#e' onclick=delc(16)>删除</a></td><td><a href='#e' onclick=relist(16)>刷新</a> <a href='#e' onclick=renews(16,'gg')>信息</a> <a href='#e' onclick=rejs(16)>JS</a> <a href='#e' onclick=tvurl(16)>调用</a> <a href='#e' onclick=ttc(16)>分类</a> <a href='#e' onclick=docinfo(16)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=21></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(21)><img src='../data/images/txt.gif' border=0></a></td><td align=center>21</td><td><input type=checkbox name=reclassid[] value=21> <a href='localhoste/action/ListInfo/?classid=21' target=_blank>高清壁纸推荐分类</a></td><td align=center>0</td><td><a href='#e' onclick=editc(21)>修改</a> <a href='#e' onclick=copyc(21)>复制</a> <a href='#e' onclick=delc(21)>删除</a></td><td><a href='#e' onclick=relist(21)>刷新</a> <a href='#e' onclick=renews(21,'gg')>信息</a> <a href='#e' onclick=rejs(21)>JS</a> <a href='#e' onclick=tvurl(21)>调用</a> <a href='#e' onclick=ttc(21)>分类</a> <a href='#e' onclick=docinfo(21)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=24></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(24)><img src='../data/images/txt.gif' border=0></a></td><td align=center>24</td><td><input type=checkbox name=reclassid[] value=24> <a href='localhoste/action/ListInfo/?classid=24' target=_blank>汽车图片推荐分类</a></td><td align=center>0</td><td><a href='#e' onclick=editc(24)>修改</a> <a href='#e' onclick=copyc(24)>复制</a> <a href='#e' onclick=delc(24)>删除</a></td><td><a href='#e' onclick=relist(24)>刷新</a> <a href='#e' onclick=renews(24,'gg')>信息</a> <a href='#e' onclick=rejs(24)>JS</a> <a href='#e' onclick=tvurl(24)>调用</a> <a href='#e' onclick=ttc(24)>分类</a> <a href='#e' onclick=docinfo(24)>归档</a></td></tr></tbody>