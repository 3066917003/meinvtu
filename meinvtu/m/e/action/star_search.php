<?php
require('../class/connect.php');
require('../class/db_sql.php');
require('../class/functions.php');
require('../class/t_functions.php');
require('../data/dbcache/class.php');
require LoadLang('pub/fun.php');
$link=db_connect();
$empire=new mysqlquery();
$key=$_POST['key'];
if ($key){
$sql=$empire->query("select * from www_92game_net_ecms_photo where classid=12 and title like '%".$key."%' order by newstime desc");
while($cr=$empire->fetch($sql))
{
?>
<li> <a href="<?=$cr['titleurl']?>" title="<?=$cr['title']?>"><img src="<?=$public_r['add_www_92game_net_file'].$cr['titlepic']?>" width="190" alt="<?=$cr['title']?>" /><span><?=$cr['title']?></span></a></li>
<?}}
db_close();
$empire=null;
?>