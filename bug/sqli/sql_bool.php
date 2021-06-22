<?php
$path = "../../";
include $path."head.php";
include $path."config/config.php";
include $path."config/mysql_conn.php";


	$search = $_GET['search'];
	$sql = "SELECT * FROM `news` where content LIKE '%$search%'";
	$result = mysqli_query($conn, $sql);
	if (@mysqli_num_rows($result) > 0) {
			// 输出数据
		while($row = mysqli_fetch_assoc($result)) {
			$status .= "<br><p class='container'>".$row['content']."</p>";	
		}
	}else{
		$status .= "<br><p class='container'>没有搜索到</p>";
	}

?>
<!DOCTYPE html>
<html >
<head>
	<title></title>
</head>
<body id="txtHint">
	<div class="container">
		<p>搜索：</p>
		<input type="text" id="search" class="form-control" onkeyup="showHint(this.value)" style="width: 150px;" name="search"></form>
		<input type="submit" class="btn btn-default navbar-btn" value="搜索">
	<?php echo $status?>
</body>
</html>

















































































































































<script type="text/javascript">

function showHint(str)
{
var xmlhttp;
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","sql_bool.php?search="+str,true);
xmlhttp.send();
}
</script>