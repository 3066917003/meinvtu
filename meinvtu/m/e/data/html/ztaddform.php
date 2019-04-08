<?php
if(!defined('InEmpireCMS'))
{exit();}
?><tr bgcolor='#FFFFFF' height=25><td>标题</td><td>
<input name="title" type="text" id="title" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars($addr[title])?>" size="60">
</td></tr><tr bgcolor='#FFFFFF' height=25><td>背景图片</td><td>
<input name="bgpic" type="text" id="bgpic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars($addr[bgpic])?>" size="45">
<a onclick="window.open('../ecmseditor/FileMain.php?modtype=2&type=1&classid=&filepass=<?=$filepass?>&sinfo=1&doing=2&field=bgpic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr>