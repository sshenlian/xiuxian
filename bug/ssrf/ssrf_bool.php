<?php
$path = "../../";
include "../../head.php";
$url=$_GET['url'];
if(@file_get_contents($url)){
    echo '<div class="container">ok</div>';
}else{
    echo 'error';
}
?>