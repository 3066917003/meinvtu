<?php
define('EmpireCMSAdmin','1');
$ecms_config=array();
$do_loginauth='';
require('../class/connect.php');
require('../class/db_sql.php');
require('../class/functions.php');
$link=db_connect();
$empire=new mysqlquery();

//------- 插件参数设置开始 -----

//进入重置页面密码
$pagepassword='010xr.com';

//------- 插件参数设置结束 -----


@header('Content-Type: text/html; charset=gb2312');

//重置密码
function user_ResetUser($add){
	global $empire,$dbtbpre;
	user_CheckGotoPagePass();
	$userid=(int)$add['userid'];
	$password=RepPostVar($add['password']);
	if(!$userid||!$password||!$add['repassword'])
	{
		printerror2('请输入重置的新密码','');
	}
	if($password<>$add['repassword'])
	{
		printerror2('两次输入的密码不一致','');
	}
	if(strlen($password)<6)
	{
		printerror2('密码不能少于6位','');
	}
	if(function_exists('DoEmpireCMSAdminPassword'))
	{
		$salt=make_password(8);
		$salt2=make_password(20);
		$password=DoEmpireCMSAdminPassword($password,$salt,$salt2);
		$a="password='$password',salt='$salt',salt2='$salt2'";
	}
	else
	{
		$salt=make_password(8);
		$password=md5(md5($password).$salt);
		$a="password='$password',salt='$salt'";
	}
	$sql=$empire->query("update {$dbtbpre}enewsuser set ".$a." where userid='$userid'");
	if($add['noquestion']==1)
	{
		$addsql=$empire->query("update {$dbtbpre}enewsuseradd set equestion='0',eanswer='' where userid='$userid'");
	}
	echo"<script>self.location.href='resetuser.php?ecms=success';</script>";
	exit();
}

//返回用户列表
function user_ReturnUserlist(){
	global $empire,$dbtbpre;
	$users='';
	$sql=$empire->query("select userid,username from {$dbtbpre}enewsuser");
	while($r=$empire->fetch($sql))
	{
		$users.="<option value='".$r[userid]."'>".$r[username]."</option>";
	}
	return $users;
}

//登陆验证
function user_GotoPagePassword($ckpassword){
	global $pagepassword;
	if($pagepassword<>$ckpassword)
	{
		printerror2('页面密码错误','');
	}
	@setcookie('ckecmspagepass',md5($ckpassword));
	echo"<script>self.location.href='resetuser.php?ecms=resetpage';</script>";
	exit();
}

//验证信息
function user_CheckGotoPagePass(){
	global $pagepassword;
	if(md5($pagepassword)<>$_COOKIE['ckecmspagepass'])
	{
		printerror2('您还未验证权限','resetuser.php');
	}
}

$ecms=$_POST['ecms'];
if(empty($ecms))
{
	$ecms=$_GET['ecms'];
}

if($ecms=='GotoPagePassword')//登陆验证
{
	user_GotoPagePassword($_POST['ckpassword']);
}
elseif($ecms=='ResetUser')//重置密码
{
	user_ResetUser($_POST);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>重置管理员密码</title>
<style>
a		{ text-decoration: none; color: #002280 }
a:hover	{ text-decoration: underline }
body	{ font-size: 10pt; }
table	{ font-size: 10pt; color: #000000 }
</style>
<script>
function CheckUserInfo(obj){
	if(obj.userid.value=='')
	{
		alert('请选择要重置的用户');
		obj.userid.focus();
		return false;
	}
	if(obj.password.value=='')
	{
		alert('请输入重置的新密码');
		obj.password.focus();
		return false;
	}
	if(obj.password.value!=obj.repassword.value)
	{
		alert('两次输入的密码不一致');
		obj.password.focus();
		return false;
	}
	if(obj.password.value.length<6)
	{
		alert('密码不能少于6位');
		obj.password.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
<br>
<br>
<br>
<?php
if($ecms=='success')
{
	user_CheckGotoPagePass();
?>
<table width="600" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#4FB4DE">
  <tr> 
    <td height="30"><div align="center"><strong><font color="#FFFFFF">已完成重置</font></strong></div></td>
  </tr>
  <tr> 
    <td height="120" bgcolor="#FFFFFF"> 
      <div align="center"><font color="#FF0000"><strong>恭喜！密码重置完毕，现在您可以用新的密码登陆后台了。</strong><br>
        <br>
        <br>
        </font>(友情提示：建议马上删除 /e/update/resetuser.php 文件，防止被重复使用。) </div></td>
  </tr>
</table>
<?php
}
elseif($ecms=='resetpage')
{
	user_CheckGotoPagePass();
?>
<form name="reseteform" method="post" action="resetuser.php" onSubmit="return CheckUserInfo(document.reseteform);">
  <table width="500" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#4FB4DE">
    <tr> 
      <td height="30" colspan="2"><strong><font color="#FFFFFF">重置管理员密码：</font></strong></td>
    </tr>
    <tr> 
      <td width="146" height="25" bgcolor="#FFFFFF">用户：</td>
      <td width="339" bgcolor="#FFFFFF"><select name="userid" id="userid">
		<?=user_ReturnUserlist()?>
        </select></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">新密码：</td>
      <td bgcolor="#FFFFFF"><input name="password" type="password" id="password"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">重复新密码：</td>
      <td bgcolor="#FFFFFF"><input name="repassword" type="password" id="repassword"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">安全问题设为空：</td>
      <td bgcolor="#FFFFFF"><input name="noquestion" type="checkbox" id="noquestion" value="1" checked>
        清空安全问题</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">当前认证码为：</td>
      <td bgcolor="#FFFFFF"><?=$do_loginauth?$do_loginauth:$ecms_config['esafe']['loginauth']?></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="马上重置登录信息">
        <input name="ecms" type="hidden" id="ecms" value="ResetUser"></td>
    </tr>
    <tr> 
      <td height="25" colspan="2" bgcolor="#FFFFFF"><font color="#666666">说明：密码设置6位以上，且密码不能包含：$ 
        &amp; * # &lt; &gt; ' &quot; / \ % ; 空格</font></td>
    </tr>
  </table>
</form>
<?php
}
else
{
?>
<form name="loginform" method="post" action="resetuser.php">
  <table width="500" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#4FB4DE">
    <tr> 
      <td height="30" colspan="2"><strong><font color="#FFFFFF">进入重置页面密码：</font></strong></td>
    </tr>
    <tr> 
      <td width="146" height="25" bgcolor="#FFFFFF">输入密码：</td>
      <td width="339" bgcolor="#FFFFFF"><input name="ckpassword" type="password" id="password"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="进入重置登录页面">
        <input name="ecms" type="hidden" id="ecms" value="GotoPagePassword"></td>
    </tr>
  </table>
</form>
<?php
}
?>
</body>
</html>
<?php
db_close();
$empire=null;
?>