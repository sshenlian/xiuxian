<?php
$path = "../../";
include $path."head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";

if(isset($_GET['name'])){
	$name = $_GET['name'];
	$sql = "select * from users where username='$name'";
	$result = mysqli_query($conn, $sql);
	if (@mysqli_num_rows($result) > 0) {
	// 输出数据
		while($row = mysqli_fetch_assoc($result)) {
		$status = "<br/><p class='container'>名字：".$row['username'] ."&nbsp;&nbsp;&nbsp;&nbsp;"."电话：".$row['tel']."&nbsp;&nbsp;&nbsp;&nbsp;".'邮箱：'.$row['email']."</p>";
		}
	}else{
		$status = "<p class='container'>查询不到此人信息</p>";
	}
	@mysqli_close($conn);

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" class="container">
		<p>请输入学生姓名查询档案</p>
		<input type="text" class="form-control" style="width: 150px;" name="name">
		<input type="submit" name="tj" class="btn btn-default" value="查询档案">
		<h5>tips:name shenlian mask zhangfei</h5>
	</form>
	<? echo $status?>
</body>
</html>