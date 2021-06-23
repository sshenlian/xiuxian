<?php
session_start();
//检测登录状态
if(isset($_SESSION['user'])){
    header("location:csrf_member.php");
    var_dump($_SESSION);

}

$path = "../../";
include "../../head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";

$user = $_POST['username'];
$pwd = md5($_POST['password']);
if(isset($user)){
    $sql = "SELECT `username` FROM `admin` WHERE `password` = '$pwd' AND `username` = '$user'";
    $userInfo = mysqli_query($conn,$sql);
    if ($userInfo->num_rows == 1) {
        // 输出数据
        while($row = $userInfo->fetch_assoc()) {
            $_SESSION["user"] = $row['username'];
            $status .= "<script>alert('登录成功');window.location.href='./csrf_member.php';</script>";
        }
    } else {
        
        $status .= "账号或者密码错误";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会员登录</title>
</head>
<body>
<body>
	<h1 class="container">会员登录</h1>
	<form class="container" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">账号</label>
    <input type="text" class="form-control" style="width: 240px;" name="username" id="exampleInputName2" placeholder="账号">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">密码</label>
    <input type="password" class="form-control" style="width: 240px;" name="password" id="exampleInputPassword1" placeholder="密码">
  </div>
  <button type="submit" name="submit" value="tj" class="btn btn-default">登录</button>
  <?php echo $status;?>
</form>
</form>
</body>
</html>