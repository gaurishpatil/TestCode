<?php
error_reporting(-1);
function getInbetweenStrings($start, $end, $str){
    $matches = array();
    $regex = "/$start([a-zA-Z0-9_]*)$end/";
    //preg_match_all($regex, $str, $matches);
	preg_match_all("/$start([a-zA-Z0-9_]*)$end/",$str,$matches);
    return $matches[1];
}

$str = "C://@@ad_custom_attr1@@/@@upn@@/@@samaccountname@@";
$str_arr = getInbetweenStrings('@@', '@@', $str);
echo '<pre>';
print_r($str_arr);

?>