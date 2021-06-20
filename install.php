<?php
include "./head.php";
include "./config/config.php";

//包含的config文件内定义的常量
$db_host = DBHOST;
$db_user = DBUSER;
$db_pwd  = DBPW;
$db_name = DBNAME;

//检测表单传递数据
if(isset($_POST['install'])){
	//数据库连接检测
	$conn = mysqli_connect($db_host, $db_user, $db_pwd);
	if (!@$conn) {
    	die("<p class='container'>请检查配置文件是否正确！</p>");
	}
	//检测数据库是否重名 已经存在进行删除
	if(@mysqli_connect($db_host, $db_user, $db_pwd,$db_name)) {
		if(!mysqli_query($conn,"drop database $db_name")){
			die("<p class='container'>请检查用户是否有控制数据库的权限！</p>");
		}
	}
	//创建数据库
	if(!@mysqli_query($conn,"create database $db_name")){
		die("<p class='container'>数据库创建失败</p>");
	}
	//创建user表 sql注入用
	$conn = mysqli_connect($db_host, $db_user, $db_pwd,$db_name);
	$sql = "CREATE TABLE users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		username VARCHAR(30) NOT NULL,
		tel VARCHAR(36) NOT NULL,
		email VARCHAR(50)
	)";

	if(!@mysqli_query($conn,$sql)){
		die("<p class='container'>数据表创建失败 请检查用户权限</p>");
	}
	//插入数据
	$sql = "insert into `users`(`id`,`username`,`tel`,`email`) VALUES('1','shenlian','13888888888','12354656@qq.com'),('2','mask','13999999999','c1ma6sk@foxmail.com'),('3','zhangfei','1566666666666','taoyuan@163.com')";
	if(@!mysqli_multi_query($conn,$sql)){
		die("<p class='container'>插入数据失败！</p>");
	}

	$sql = "CREATE TABLE admin (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		username VARCHAR(30) NOT NULL,
		password VARCHAR(36) NOT NULL
	)";
	if(!@mysqli_query($conn,$sql)){
		die("<p class='container'>数据表创建失败 请检查用户权限</p>");
	}
	$sql = "insert into `admin`(`id`,`username`,`password`) VALUES('1','admin',md5('QweAsdZxc'))";
	if(@!mysqli_multi_query($conn,$sql)){
		die("<p class='container'>插入数据失败！</p>");
	}

	//创建xss存储型 存储的表	
	$sql = "CREATE TABLE message (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		xname VARCHAR(100) NOT NULL,
		indn VARCHAR(100) NOT NULL,
		url VARCHAR(100) NOT NULL
	)";
	if(!@mysqli_query($conn,$sql)){
		die("<p class='container'>数据表创建失败 请检查用户权限</p>");
	}
	$sql = "CREATE TABLE News (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		content VARCHAR(100) NOT NULL
	)";
	if(!@mysqli_query($conn,$sql)){
		die("<p class='container'>数据表创建失败 请检查用户权限</p>");
	}
	$sql = "insert into `News`(`id`,`content`) VALUES('1','李白（701年—762年12月），字太白，号青莲居士，又号“谪仙人”，唐代伟大的浪漫主义诗人，被后人誉为“诗仙”。'),('2','杜甫（712年2月12日 [1]  ～770年），字子美，自号少陵野老，唐代著名现实主义诗人'),('3','苏轼（1037年1月8日—1101年8月24日），字子瞻，一字和仲，号铁冠道人、东坡居士，世称苏东坡、苏仙 [1-3]')";
	if(@!mysqli_multi_query($conn,$sql)){
		die("<p class='container'>插入数据失败！</p>");
	}
	$success = "<br><p class='container' style='color:green'>安装成功，可以开启漏洞学习了 冲冲冲！<br>";

}
?>

<div style="width:500px;margin-top: 30px;" class="container" >
<div class="media" >
  <div class="media-left">
  </div>
  <div class="media-body">
    <h4 class="media-heading">安装步骤：</h4><br>
    1.需要安装环境是 php + mysql + web容器(apache 或者 nginx …)<br>
    2.修改配置文件 	config/config.php 文件	<br>
    3.完成以上步骤之后 点击 安装靶机 按钮 <br>
    <!--提交表单 后端才能知道需要创建环境了-->
    <form action="" method="post">
    	<input type="submit" class="btn btn-default navbar-btn" name="install" value="安装靶机">
    </form>
    <?echo $success?>
  </div>
</div>
</div>