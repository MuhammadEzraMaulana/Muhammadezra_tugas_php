<?php
include 'connect.php';
$id_kostumer = $_POST['id_kostumer'];
$nama_kostumer = $_POST['nama_kostumer'];
$alamat_kostumer = $_POST['alamat_kostumer'];

$query = mysqli_query($conn, "INSERT INTO kostumer (id_kostumer, nama_kostumer, alamat_kostumer) VALUES ('$id_kostumer', '$nama_kostumer', '$alamat_kostumer')");

header("location:index.php");
