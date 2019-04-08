<?php
require('../class/connect.php');
require('../class/db_sql.php');
require('../class/functions.php');
require('../class/t_functions.php');
require('../data/dbcache/class.php');
require LoadLang('pub/fun.php');
$link=db_connect();
$empire=new mysqlquery();
$name=$_POST['name'];
if ($name){
$sql=$empire->query("select * from www_92game_net_ecms_star where classid=11 and title like '%".$name."%' order by newstime desc");
while($cr=$empire->fetch($sql))
{
?>
<li><a href="<?=$cr['titleurl']?>" title="<?=$cr['title']?>" target="_blank"><img alt="<?=$cr['title']?>" src="<?=$public_r['add_www_92game_net_file'].$cr['titlepic']?>" width="80" height="80" /><span><?=$cr['title']?></span></a></li>
<?}}
db_close();
$empire=null;
?>