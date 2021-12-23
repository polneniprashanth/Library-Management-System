<?php
	session_start();
	$conn=mysqli_connect('sql106.epizy.com','epiz_30634138','LF2rgUnWYY6lt','epiz_30634138_library');
?>
<?php

if(isset($_POST['return']))
{
	$x=$_POST['book_id'];
	$v=$_SESSION['id'];
	$sql="insert into return_request values('$v','$x','')";
	$result=$conn->query($sql);
	header("Location:http://upgradetopro.great-site.net/LMS/issued.php");
}

	
?>
<?php
	if(isset($_POST['renew'])){
	$x1=$_POST['book_id'];
	$v1=$_SESSION['id'];
	$sql33="delete from renew_request where Sid='$v1' and Bid='$x1'";
	$result3=$conn->query($sql33);
	$sql2="insert into renew_request values('$v1','$x1','')";
	$result2=$conn->query($sql2);
	header("Location:http://upgradetopro.great-site.net/LMS/issued.php");
}
?>