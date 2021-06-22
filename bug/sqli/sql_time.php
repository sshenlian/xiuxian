<?php
$path = "../../";
include $path."head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";

if(isset($_POST['submit'])){
	$name = $_POST['username'];
	$pwd = md5($_POST['password']);
	$sql = "select * from admin where username='$name'";
	$result = mysqli_query($conn, $sql);
	if (@mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if($row['username']==$name and $row['password'] == $pwd){
				$status = "<br><p class='container'><script>alert('登录成功');window.location.href='./main.php';</script></p>";
			}else{
				$status = "<br><p class='container'><script>alert('登录失败');window.location.href='';</script></p>";
			}
			
		}

	}else{
		$status = "<br><p class='container'><script>alert('登录失败');window.location.href='';</script></p>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 class="container">后台登录</h1>
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
</form>
	<?php echo $status?>
</body>
</html>