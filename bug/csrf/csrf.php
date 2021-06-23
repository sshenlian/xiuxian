<?php
session_start();
//  判断是否登陆
if (!isset($_SESSION["user"])) {
    header("location:csrf_login.php");
}
$addressdis = $pwd = $infodis = 'none';
$path = "../../";
include $path."config/config.php";
include $path."config/mysql_conn.php";
$act = $_GET['act'];


switch($act){
    case 'address':
        $addressdis = 'run-in';
        if(isset($_POST['add'])){
            $add = $_POST['add'];
            $iphone = $_POSTP['tel'];
            $uname = $_SESSION['user'];
            $sql = "update admin set address='$add',tel='$uname' where username='$uname'";
            if(mysqli_query($conn,$sql)){
                $status = "<script>alert('修改成功');location.href='csrf_member.php'</script>";
            }else{
                $status = "<script>alert('修改失败');</script>";
            }
        }
        break;
    case 'pwd':
        $pwd = 'run-in';
        if(isset($_POST['newpwd'])){
            $newpass = $_POST['newpwd']==$_POST['newpwds']?md5($_POST['newpwd']):$status = "两次密码必须一样";
            $uname = $_SESSION['user'];
            $sql = "update admin set password='$newpass' where username='$uname'";
            if(mysqli_query($conn,$sql)){
                $status = "<script>alert('修改成功');location.href='csrf_member.php'</script>";
                unset($_SESSION['user']);
            }else{
                $status = "<script>alert('修改失败');</script>";
            }
        }
        break;
    default:
        $infodis = 'run-in';
        $userinfo = $_SESSION['user'];
        $sql = "select * from admin where username='$userinfo'";
        $result = mysqli_query($conn,$sql);
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $address = $row['address'];
        $tel = $row['tel'];
        break;
}
//查询



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="float: right;">
        <div style="display: <?php echo $infodis?>;" >
            用户: &nbsp;&nbsp;<?php echo $username;?><br>
            地址：&nbsp;<?php echo $address;?><br>
            电话：&nbsp;<?php echo $tel;?><br>
        </div>


        <div style="display: <?php echo $addressdis?>;">
            <form method="POST" >
            用户: &nbsp;&nbsp;<?php echo $_SESSION['user'];?><br>
                地址：<input type="text" name="add"><br>
                电话：<input type="text" name="tel"><br>
                <input type="submit" style="margin-left: 150px;" class="btn btn-default" value="提交">
            </form>
        </div>

        <div style="display: <?php echo $pwd?>;">
            <form method="POST" >
                新密码：&nbsp;<input  type="password" name="newpwd" ><br>
                确认密码:<input type="password" name="newpwds"><br><br>
                <input type="submit" style="margin-left: 150px;"  class="btn btn-default">
                <?php echo "<br>$status"?>
            </form>
        </div>


</body>
</html>