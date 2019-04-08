<?php
error_reporting(E_ALL ^ E_NOTICE);

require('../class/db_sql.php');
require('../class/functions.php');

//require('../class/t_functions.php');

require('../data/dbcache/class.php');

require LoadLang('pub/fun.php');
echo "123";
die();
$link = db_connect();
$empire = new mysqlquery();
eCheckCloseMods('fieldand');
$addorder = 'newstime desc';
$trueclassid = 0;

$classid = $_GET['classid'];
$url = ReturnClassLink($classid);
$tbname = $class_r[$classid]['tbname'];
$mid = $class_r[$classid]['modid'];
$yhid = $class_r[$classid]['yhid'];
$tempid = (int)$_GET['tempid'];
$tempr = $empire -> fetch1('select tempid,temptext,subnews,listvar,rownum,showdate,modid,subtitle,docode from ' . GetTemptb('enewslisttemp') . " where tempid='$tempid'");
$line = 28;
$page = (int)$_GET['page'];
$page = RepPIntvar($page);
$start = 0;
$page_line = 10;
$offset = $page * $line;
$ret_r = ReturnReplaceListF($mid);
$diqu = (int)$_GET['diqu'];
$xingbie = (int)$_GET['xingbie'];
$infozm = $_GET['infozm'];
if(!$infozm){
    $infozm = 0;
}
if($diqu){
    $addsql = ' and diqu=' . $diqu;
}
if($xingbie){
    $addsql .= ' and xingbie=' . $xingbie;
}
if($infozm){
    $addsql .= " and infozm='$infozm'";
}
$i = 0;
$sql = $empire -> query("select * from www_92game_net_ecms_star where classid=11 $addsql order by isgood desc,newstime desc");
while($rr = $empire -> fetch($sql)){
    $i = $i + 1;
    if($i == 1){
        $add = 'where classid=\'12\' and title like \'%' . $rr['title'] . '%\'';
    }else{
        $add .= ' or classid=\'12\' and title like \'%' . $rr['title'] . '%\'';
    }
    $star .= '<li><a href="' . $rr['titleurl'] . '" title="' . $rr['title'] . '" target="_blank"><img alt="' . $rr['title'] . '" src="' . $public_r['add_www_92game_net_file'] . $rr['titlepic'] . '" width="80" height="80" /><span>' . $rr['title'] . '</span></a></li>';
}
if(!$add){
    $add = 'where classid=\'12\' and title=\'meiyou\'';
}
$totalquery = "select count(*) as total from {$dbtbpre}ecms_photo $add";
$num = $empire -> gettotal($totalquery);
$query = "select * from {$dbtbpre}ecms_photo $add";
$query .= ' order by ' . $addorder . " limit $offset,$line";
$sql = $empire -> query($query);
$listpage = starpage($num, $line, $page_line, $start, $page);
if($public_r['dtcanbq']){
    $tempr['temptext'] = DtNewsBq('list' . $tempid, $tempr['temptext'], 0);
}else{
    if($public_r['searchtempvar']){
        $tempr['temptext'] = ReplaceTempvar($tempr['temptext']);
    }
}
$listtemp = $tempr['temptext'];
$rownum = $tempr['rownum'];
if(empty($rownum)){
    $rownum = 1;
}
$formatdate = $tempr['showdate'];
$subnews = $tempr['subnews'];
$subtitle = $tempr['subtitle'];
$docode = $tempr['docode'];
$modid = $tempr['modid'];
$listvar = str_replace('[!--news.url--]', $public_r['newsurl'], $tempr['listvar']);
$listtemp = str_replace('[!--star--]', $star, $listtemp);
$listtemp = str_replace('[!--newsnav--]', $url, $listtemp);
$listtemp = Class_ReplaceSvars($listtemp, $url, $pageclassid, $pagetitle, $pagekey, $pagedes, $classimg, $addr, $pageecms);
$listtemp = str_replace('[!--page.stats--]', '', $listtemp);
$listtemp = str_replace('[!--show.page--]', $listpage, $listtemp);
$listtemp = str_replace('[!--show.listpage--]', $listpage, $listtemp);
$listtemp = str_replace('[!--list.pageno--]', $page + 1, $listtemp);
$list_exp = '[!--empirenews.listtemp--]';
$list_r = explode($list_exp, $listtemp);
$listtext = $list_r[1];
$no = $offset + 1;
$changerow = 1;
while($r = $empire -> fetch($sql)){
    $repvar = ReplaceListVars($no, $listvar, $subnews, $subtitle, $formatdate, $url, $have_class, $r, $ret_r, $docode);
    $listtext = str_replace('<!--list.var' . $changerow . '-->', $repvar, $listtext);
    $changerow += 1;
    if($changerow > $rownum){
        $changerow = 1;
        $string .= $listtext;
        $listtext = $list_r[1];
    }
    $no++;
}
if($changerow <= $rownum && $listtext <> $list_r[1]){
    $string .= $listtext;
}
$string = $list_r[0] . $string . $list_r[2];
echo stripSlashes($string);
function get_domain($v_1){
        $var_2 = '/[w-] .(com|net|org|gov|cc|biz|info|cn)(.(cn|hk))*/';
    preg_match($var_2, $v_1, $var_3);
    if(0 < count($var_3)){
        return $var_3[0];
    }else{
        $var_4 = parse_url($v_1);
        $var_5 = $var_4['host'];
        if(!strcmp(long2ip(sprintf('%u', ip2long($var_5))), $var_5)){
            return $var_5;
        }else{
            $var_6 = explode('.', $var_5);
            $var_7 = count($var_6);
            $var_8 = array('com', 'net', 'org', '3322');
            if(in_array($var_6[$var_7-2], $var_8)){
                $var_9 = $var_6[$var_7-3] . '.' . $var_6[$var_7-2] . '.' . $var_6[$var_7-1];
            }else{
                $var_9 = $var_6[$var_7-2] . '.' . $var_6[$var_7-1];
            }
            return $var_9;
        }
    }
}
/*
$domain = 'http://' . $_SERVER['HTTP_HOST'];
$domain = get_domain($domain);
$pre = substr(md5($domain), 0, 8);
$key = 'www_adminn_cn';
$dstr = $pre . $domain . 'VlZaa1UyUkhSbGhPV0ZaV1ZtdFZlVlJ1Y0dwbFJURnhWRlF3UFE9PQ==' . $key;
$dstr = md5(md5($dstr));
$key = $public_r['add_www_adminn_cn_key'];
if($dstr != $key){
    echo '<script>alert(\'序列号错误，请联系：www.adminn.cn\');parent.location.href=\'http://' . $_SERVER['HTTP_HOST'] . '\';</script>';
    exit;
}*/

db_close();
$empire = null;
?>