<?php
$path = "../../";
include "../../head.php";
@$url = $_GET['file'];
$url = str_ireplace('http','url',$url);
@include $url;
?>