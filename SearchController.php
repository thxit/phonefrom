<?php
header("Content-Type:text/html;charset=UTF-8");

$phoneNum =  $_GET['phoneNum'];  // Receive the tranmitted data
include 'nowapi.class.php';
$nowapi_parm['app']='phone.get';
$nowapi_parm['phone']=$phoneNum;
$nowapi_parm['appkey']='31300';   // Change your appkey
$nowapi_parm['sign']='896b1f17d7e889a62e19bf0f657482cb';  // Change your sign
$nowapi_parm['format']='json';
$nowapi=new nowapi();
$result = $nowapi->nowapi_call($nowapi_parm);
echo json_encode($result);

