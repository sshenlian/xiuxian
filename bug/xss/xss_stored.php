<?php 
$path = "../../";
include $path."head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";
$name = $_POST['xname'];
$indn = $_POST['mytextarea'];
$url = $_POST['url'];
if(isset($name)){
	$sql = "insert into message(xname,indn,url) values('$name','$indn','$url')";
	if(!mysqli_query($conn,$sql)){
		$status = '创建失败请检查内容';
	}else{
		$status = "创建成功<script>window.location.href='./xss_stored_index.php'</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" style="width: 240px;" class="container">
  <div class="form-group" >
    <label >小说名称</label>
    <input type="text" class="form-control" name="xname" placeholder="名称">
  </div>
  <div class="form-group">
    <label >小说介绍</label>
    <textarea class="form-control" name="mytextarea" rows="3" placeholder="介绍"></textarea>
  </div>
  <div class="form-group" >
    <label >小说封面地址</label>
    <input type="text" class="form-control" name="url" placeholder="http://xxxxx.com/123.jpg">
  </div>
  <img src='123123'>
  <button type="submit" class="btn btn-default">Submit</button><br/>
  <?php echo $status?>
</form>
</body>
</html>