<?php
$path = "../../";
include "../../head.php";
$xss = $_GET['messages'];
if(!isset($xss)){
	$xss = "http://www.baidu.com";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
      <div class="background-white payLoser">
        <h3><i class="icon-pigeon icon-loster"></i> 页面访问错误</h3>
        <p>您可以 &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $xss?>">返回首页</a><b>|</b><a href="//.com/" target="_blank">联系客服</a></p>
      </div>
    </div>
</body>
</html>