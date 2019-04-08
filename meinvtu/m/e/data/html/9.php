<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>标题图片</td><td bgcolor='ffffff'>
<input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'>
<input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>地区</td><td bgcolor='ffffff'><select name="diqu" id="diqu"><option value="1"<?=$r[diqu]=="1"?' selected':''?>>港台</option><option value="2"<?=$r[diqu]=="2"?' selected':''?>>日韩</option><option value="3"<?=$r[diqu]=="3"?' selected':''?>>欧美</option><option value="4"<?=$r[diqu]=="4"?' selected':''?>>大陆</option><option value="5"<?=$r[diqu]=="5"?' selected':''?>>其他</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>性别</td><td bgcolor='ffffff'><select name="xingbie" id="xingbie"><option value="1"<?=$r[xingbie]=="1"?' selected':''?>>男明星</option><option value="2"<?=$r[xingbie]=="2"?' selected':''?>>女明星</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>首字母</td><td bgcolor='ffffff'><select name="infozm" id="infozm"><option value=""<?=$r[infozm]==""?' selected':''?>>自动</option><option value="A"<?=$r[infozm]=="A"?' selected':''?>>A</option><option value="B"<?=$r[infozm]=="B"?' selected':''?>>B</option><option value="C"<?=$r[infozm]=="C"?' selected':''?>>C</option><option value="D"<?=$r[infozm]=="D"?' selected':''?>>D</option><option value="E"<?=$r[infozm]=="E"?' selected':''?>>E</option><option value="F"<?=$r[infozm]=="F"?' selected':''?>>F</option><option value="G"<?=$r[infozm]=="G"?' selected':''?>>G</option><option value="H"<?=$r[infozm]=="H"?' selected':''?>>H</option><option value="I"<?=$r[infozm]=="I"?' selected':''?>>I</option><option value="J"<?=$r[infozm]=="J"?' selected':''?>>J</option><option value="K"<?=$r[infozm]=="K"?' selected':''?>>K</option><option value="L"<?=$r[infozm]=="L"?' selected':''?>>L</option><option value="M"<?=$r[infozm]=="M"?' selected':''?>>M</option><option value="N"<?=$r[infozm]=="N"?' selected':''?>>N</option><option value="O"<?=$r[infozm]=="O"?' selected':''?>>O</option><option value="P"<?=$r[infozm]=="P"?' selected':''?>>P</option><option value="Q"<?=$r[infozm]=="Q"?' selected':''?>>Q</option><option value="R"<?=$r[infozm]=="R"?' selected':''?>>R</option><option value="S"<?=$r[infozm]=="S"?' selected':''?>>S</option><option value="T"<?=$r[infozm]=="T"?' selected':''?>>T</option><option value="U"<?=$r[infozm]=="U"?' selected':''?>>U</option><option value="V"<?=$r[infozm]=="V"?' selected':''?>>V</option><option value="W"<?=$r[infozm]=="W"?' selected':''?>>W</option><option value="X"<?=$r[infozm]=="X"?' selected':''?>>X</option><option value="Y"<?=$r[infozm]=="Y"?' selected':''?>>Y</option><option value="Z"<?=$r[infozm]=="Z"?' selected':''?>>Z</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>出生</td><td bgcolor='ffffff'>
<input name="chusheng" type="text" id="chusheng" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[chusheng]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>国籍</td><td bgcolor='ffffff'>
<input name="guoji" type="text" id="guoji" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[guoji]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>人物信息</td><td bgcolor='ffffff'>
<input name="xinxi" type="text" id="xinxi" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[xinxi]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>微信公众号</td><td bgcolor='ffffff'>
<input name="weixin" type="text" id="weixin" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[weixin]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=weixin<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>明星关系</td><td bgcolor='ffffff'>
<input name="guanbi" type="text" id="guanbi" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[guanbi]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>背景图</td><td bgcolor='ffffff'>
<input name="bigbg" type="text" id="bigbg" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[bigbg]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=bigbg<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>大图</td><td bgcolor='ffffff'>
<input name="pic" type="text" id="pic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[pic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=pic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>个人介绍</td><td bgcolor='ffffff'><script>
function doadd()
{var i;
var str="";
var oldi=0;
var j=0;
oldi=parseInt(document.add.editnum.value);
for(i=1;i<=document.add.downnum.value;i++)
{
j=i+oldi;
str=str+"<tr><td width=50 align=center>"+j+"</td><td width=248 align=center><input type=text name=jtitle[] style=width:248px;></td><td width=198 align=center><input type=text name=jimg[] id=jimg"+j+" ondblclick=SpOpenChFile(1,'jimg"+j+"') style='width:198px;'></td></tr><tr><td colspan=6><textarea style=WIDTH:100%;height:125px; name=grjs[] id=grjs"+j+"></textarea></td></tr>";
}

document.getElementById("adddown").innerHTML="<table width='962' border=1 borderColor='#4FB4DE' cellspacing=0 cellpadding=0 >"+str+"</table>";
}
</script>
<table width="962" border="0" align="left" cellspacing="0" cellpadding="0">
 
  <tr> 
    <td>
<?

	if($r[grjs])
	{
		$r[grjs]=stripSlashes($r[grjs]);
		$j=0;
		$d_record=explode("@@@@@",$r[grjs]);
		for($i=0;$i<count($d_record);$i++)
		{
			$j=$i+1;


		}
		$editnum=$j;
	}else{
	$editnum=0;
	}


?>
	
	<table width="100%" height="35" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5" borderColor="#4FB4DE">
        <tr> 
          <td width="50" align="center">删除</td>
	  <td width="250" align="center">标题 (必填)</td>
	  <td width="200" align="center">图片(双击上传) 数量: <input name="editnum" type="hidden" id="editnum" value="<?=$editnum?>">
	  <input name="downnum" type="text" id="downnum" value="1" size="6"> <input type="button" name="Submit5" value="添加地址" onclick="javascript:doadd();"></td>
        </tr>
      </table>
	  
	  </td>
  </tr>

  <tr> 
				<td width="100%" height="5">
				</td>
				</tr>
				
    <?php
    if($ecmsfirstpost==1)
    {
    ?>
  <tr> 
    <td >

<table width='100%' border=1 borderColor="#4FB4DE" cellspacing=0 cellpadding=0 >

	<?php
	for($pathi=1;$pathi<=$editnum;$pathi++)
	{
	?>

	    <tr><td width=50 align=center><?=$pathi?></td>
	    <td width=248 align='center'><input type=text name=jtitle[] style='width:248px;'></td>
	    <td width=198 align=center><input type=text name=jimg[] id=jimg<?=$pathi?> ondblclick="SpOpenChFile(1,'jimg<?=$pathi?>');" style='width:198px;'></td></tr>
	    <tr><td colspan=6><textarea style=WIDTH:100%;height:125px; name=grjs[] id=grjs<?=$pathi?>></textarea></td>
	    </tr>
	<?php
	}
	?>
 </table></td>
	</tr>
   <?php
    }
    else
    {
$editnum=0;
	$grjslist="";
	if($r[grjs])
	{
		$r[grjs]=stripSlashes($r[grjs]);
		//下载地址
		$j=0;
		$d_record=explode("@@@@@",$r[grjs]);
		for($i=0;$i<count($d_record);$i++)
		{
			$j=$i+1;
			$d_field=explode("::::::",$d_record[$i]);
			$grjslist.="<tr><td width=50 align=center><input type=hidden name=pathid[] value=".$j."><input type=checkbox name=delpathid[] value=".$j.">删</td><td width=248 align='center'><input type=text name=jtitle[] value='".$d_field[0]."' style='width:248px;'></td><td width=198 align=center><input type=text name=jimg[] value='".$d_field[1]."' id=jimg".$j." ondblclick=\"SpOpenChFile(1,'jimg".$j."');\" style='width:198px;'></td></tr><tr><td colspan=6><textarea style=WIDTH:100%;height:125px; name=grjs[] id=grjs".$j.">".$d_field[2]."</textarea></td></tr>";


           


		}
		$editnum=$j;
		$grjslist="<tr><td><table width='962' border=1 borderColor='#4FB4DE' cellspacing=0 cellpadding=0 >".$grjslist."</table></td></tr>";
	}
	echo $grjslist;
    }
    ?>
  <tr> 
    <td id=adddown></td>
  </tr>
</table></td></tr></table>