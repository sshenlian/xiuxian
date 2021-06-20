<?php
include $path."config/config.php";
$db_host = DBHOST;
$db_user = DBUSER;
$db_pwd  = DBPW;
$db_name = DBNAME;
$conn = @mysqli_connect($db_host, $db_user, $db_pwd,$db_name);
?>