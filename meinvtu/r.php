<?php
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
$domain = 'http://' . $_SERVER['HTTP_HOST'];
$domain = get_domain($domain);
$pre = substr(md5($domain), 0, 8);
$key = 'www_adminn_cn';
$dstr = $pre . $domain . 'VlZaa1UyUkhSbGhPV0ZaV1ZtdFZlVlJ1Y0dwbFJURnhWRlF3UFE9PQ==' . $key;
$dstr = md5(md5($dstr));
$key = $public_r['add_www_adminn_cn_key'];
echo "key:".$dstr;
?>