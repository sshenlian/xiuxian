<?php
define('DBHOST', '127.0.0.1');//本地数据库这里不需要动
define('DBUSER', 'root');//数据用户名
define('DBPW', 'qq123123');//数据库密码
define('DBNAME', 'shilian');//数据库名 不用修改
define('DBPORT', '3306');//数据库端口 默认端口3306 如果没改就不需要动
@mysqli_connect($db_host, $db_user, $db_pwd,$db_name);
?>
