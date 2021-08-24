<?php
$path = '../../';
//include "../../head.php";
include '../../config/mysql_conn.php';
	if (@$_SERVER['HTTP_ORIGIN']){
		header("Access-Control-Allow-Origin: ".$_SERVER['HTTP_ORIGIN']);
	}else{
		header("Access-Control-Allow-Origin: *");
	}
	header("Access-Control-Allow-Headers: X-Requested-With");
	header("Access-Control-Allow-Credentials: true");
	header("Access-Control-Allow-Methods: PUT,POST,GET,DELETE,OPTIONS");
	$sql = $sql = "SELECT * FROM `admin` where id = 1";
    $info = mysqli_query($conn, $sql) or print_r("<br><p class='container'>".mysqli_error($conn)."</p>");
    if($info) {
        //转化为数组
        while($value = mysqli_fetch_assoc($info)) {
            $result[] = $value;
        }
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户资料api</title>
</head>
<body>
    <div class="container bs-docs-section"><?php echo json_encode($result);?></div>

</body>
</html>
