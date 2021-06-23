<?php
header("Content-type: text/html; charset=utf-8");
//路径
if(!isset($path)){
	$path = '';
}
if(!isset($style)){
	$style = '';
}
error_reporting(0);


?>
<!DOCTYPE html>
<html>
<head>
	<title>修仙秘境</title>
	<script type="text/javascript" src="<?php echo $path?>js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $path?>js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $path?>js/bootstrap.min.css">
</head>
<body>
	<ul class="nav nav-pills container" style="margin-bottom: 30px;">

		  <li role="presentation"><a href="<?php echo $path?>index.php">首页</a></li>
		  	<li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SQL注入<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="<?php echo $path?>wiki/">SQL注入漏洞文档学习</a></li>
	    			<li><a href="<?php echo $path?>bug/sqli/sql_union.php">SQL注入-union注入</a></li>
	      			<li><a href="<?php echo $path?>bug/sqli/sql_error.php">SQL注入-报错注入</a></li>
	      			<li><a href="<?php echo $path?>bug/sqli/sql_bool.php">SQL注入-bool盲注</a></li>
	      			<li><a href="<?php echo $path?>bug/sqli/sql_time.php">SQL注入-时间盲注</a></li>
   				</ul>
   			</li>

		  <li role="presentation">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">XSS<span class="caret"></span></a>
    			<ul class="dropdown-menu">
    				<li><a href="<?php echo $path?>wiki/">XSS漏洞文档学习</a></li>
	    			<li><a href="<?php echo $path?>bug/xss/xss_reflection.php?messages=http://www.baidu.com">XSS反射</a></li>
	      			<li><a href="<?php echo $path?>bug/xss/xss_stored_index.php">XSS存储</a></li>
	      			<li><a href="<?php echo $path?>bug/xss/xss_dom.php">XSS-DOM</a></li>
   				</ul>
		  </li>

		  <li role="presentation">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CSRF<span class="caret"></span></a>
    			<ul class="dropdown-menu">
    				<li><a href="">CSRF漏洞文档学习</a></li>
	    			<li><a href="<?php echo $path?>bug/csrf/csrf_login.php">CSRF</a></li>
	      			<li><a href="#">CORS</a></li>
	      			<li><a href="#">JSONP</a></li>
	      			<li><a href="#">self-xss 组合 CSRF</a></li>
   				</ul>
		  </li>

		  <li role="presentation">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">文件上传<span class="caret"></span></a>
    			<ul class="dropdown-menu">
    				<li><a href="#">文件上传漏洞文档学习</a></li>
	    			<li><a href="#">文件上传-前端</a></li>
	      			<li><a href="#">文件上传-黑名单</a></li>
	      			<li><a href="#">文件上传-白名单</a></li>
   				</ul>
		  </li>

		  <li role="presentation">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SSRF<span class="caret"></span></a>
    			<ul class="dropdown-menu">
    				<li><a href="#">SSRF漏洞文档学习</a></li>
	    			<li><a href="#">SSRF-有回显</a></li>
	      			<li><a href="#">SSRF-无回显</a></li>
   				</ul>
		  </li>

		  <li role="presentation">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">文件包含<span class="caret"></span></a>
    			<ul class="dropdown-menu">
    				<li><a href="#">文件包含文档学习</a></li>
	    			<li><a href="#">本地文件包含</a></li>
	      			<li><a href="#">远程文件包含</a></li>
   				</ul>
		  </li>

		  <li role="presentation">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">URL重定向<span class="caret"></span></a>
    			<ul class="dropdown-menu">
    				<li><a href="#">URL重定向漏洞文档学习</a></li>
	    			<li><a href="#">URL重定向</a></li>
	      			<li><a href="#">URL重定向用户凭证劫持</a></li>
   				</ul>
		  </li>

		  <li role="presentation">
		  		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">逻辑漏洞<span class="caret"></span></a>
    			<ul class="dropdown-menu">
    				<li><a href="#">逻辑漏洞文档学习</a></li>
	    			<li><a href="#">越权漏洞</a></li>
	      			<li><a href="#">并发支付漏洞</a></li>
   				</ul>
		  </li>

	</ul>

</body>
</html>