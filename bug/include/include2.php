<?php
$path = "../../";
include "../../head.php";
@$url = $_GET['s'];
@include $url.'.html';
?>