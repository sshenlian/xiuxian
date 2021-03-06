<?php
session_start();
//  判断是否登陆
if (!isset($_SESSION["user"])) {
    header("location:csrf_login.php");
}

if (@$_SERVER['HTTP_ORIGIN']){
    header("Access-Control-Allow-Origin: ".$_SERVER['HTTP_ORIGIN']);
}else{
    header("Access-Control-Allow-Origin: *");
}
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: PUT,POST,GET,DELETE,OPTIONS");

$path = "../../";
include "../../head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="pull-left" style="width:100px;">
        <p><a href="csrf_member.php?act=0">个人中心</a></p>
        <p><a href="csrf_member.php?act=address">修改资料</a></p>
        <p><a href="csrf_member.php?act=pwd">更改密码</a></p>
        <p><a href="csrf_member.php?act=logut">退出登录</a></p>
    </div>
    <?php include_once "csrf.php";?>
    
</body>
</html>