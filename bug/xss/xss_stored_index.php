<?php 
$path = "../../";
include "../../head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";

$status = $_GET['status'];
$dis = 'inherit';
if(isset($status)){
	$dis = 'none';
}
$select = $_GET['select'];
if(isset($select)){
	$sql = "SELECT * FROM message";
	$result = mysqli_query($conn, $sql);
	if (@mysqli_num_rows($result) > 0) {
				// 输出数据
		while($row = mysqli_fetch_assoc($result)){
			    $xname = htmlspecialchars($row['xname']);
			    $indn = htmlspecialchars($row['indn']);
			    $url = htmlspecialchars($row['url']);
				$stat .= "<br><p class='container'>小说名称：".$xname."</p><p class='container'>小说介绍：".$indn."</p><img src='".$url."'width=240px>";	
			}
	}else{
		$stat .= "<br><p class='container'>没有创作</p>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="container">
	<div style="display:<? echo $dis?>" >
	<p><a href="./xss_stored.php">创建小说</a></p>
	<p><a href="./xss_stored_index.php?status=true&select=1">查看创作</a></p>
	</div>
	<? echo $stat?>
</body>
</html>