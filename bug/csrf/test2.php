<?php
header("Content-Type:application/json;charset=utf-8");
header("Access-Control-Allow-Origin:*");
$data = json_decode($_GET['data'],true);
echo  $_GET['data']; 
?>