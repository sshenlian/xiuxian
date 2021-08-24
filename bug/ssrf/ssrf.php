<?php
$path = "../../";
include "../../head.php";
$url = $_GET['url'];
echo file_get_contents($url);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ssrf</title>
</head>
<body>

</body>
</html>