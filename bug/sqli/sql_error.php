<?php
$path = "../../";
include $path."head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";


	$search = $_POST['search'];
	$sql = "SELECT * FROM `news` where content LIKE '%$search%'";
	$result = mysqli_query($conn, $sql) or print_r("<br><p class='container'>".mysqli_error($conn)."</p>");
	if (@mysqli_num_rows($result) > 0) {
			// 输出数据
		while($row = mysqli_fetch_assoc($result)) {
			$status .= "<br><p class='container'>".$row['content']."</p>";	
		}
	}else{
		$status .= "<br><p class='container'>没有搜索到</p>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" class="container">
		<p>搜索：</p>
		<input type="text" class="form-control" style="width: 150px;" name="search">
		<input type="submit" name="tj" class="btn btn-default" value="搜索内容">
	</form>
	<?php echo $status?>
</body>
</html>