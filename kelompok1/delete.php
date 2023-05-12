<?php
	$id_kostumer=$_GET['id_kostumer'];
	include('connect.php');
	mysqli_query($conn,"delete from `kostumer` where id_kostumer='$id_kostumer'");
	header('location:index.php');
?>