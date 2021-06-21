<?php  
$path = "../../";
include "../../head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";
$a = $_POST['neirong'];
if(isset($a)){
	echo md5($a);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>xss-dom</title>
</head>
<body class="container">
	<form action="xss_dom.php" method="POST">
		<div class="form-group" style="width: 200px;">
		    <label >请输入提交内容</label>
		    <input type="text" class="form-control" name="neirong" placeholder="内容">
	 	</div>
	 	<input type="submit" class="btn btn-default" name="asd" class="" value="提交">
		
	</form>
</body>
</html>

<script type="text/javascript">
//获取url参数值 进行写入操作

function getQueryString(name) {
    var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
    var r = window.location.search.substr(1).match(reg);
    if (r != null) {
        return unescape(r[2]);
    }
    return "";
}
document.write(getQueryString("as"));
</script>