<?php
include 'connect.php';
$id_kostumer = $_GET['id_kostumer'];
$result = mysqli_query($conn, "DELETE FROM `kostumer` where id_kostumer= '$id_kostumer'");

header("location:index.php");
