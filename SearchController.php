<?php
header("Content-Type:text/html;charset=UTF-8");


include 'nowapi.class.php';
$nowapi_parm['app'] = 'phone.get';
$nowapi_parm['phone'] = $phoneNum;
$nowapi_parm['appkey'] = '31300';
$nowapi_parm['sign'] = '896b1f17d7e889a62e19bf0f657482cb';
$nowapi_parm['formt'] = 'json';
$nowapi = new nowapi();
$result = $nowapi->nowapi_call($nowapi_parm);
//var_dump($result);
echo json_encode($result);
?>