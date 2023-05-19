<?php
include 'connect.php';
// menyimpan data kedalam variabel

$id_kostumer    = $_POST['id_kostumer'];
$nama_kostumer  = $_POST['nama_kostumer'];
$alamat_kostumer = $_POST['alamat_kostumer'];
// query SQL untuk insert data
$result = mysqli_query($conn, "update kostumer set nama_kostumer='$nama_kostumer', alamat_kostumer='$alamat_kostumer' where id_kostumer='$id_kostumer' ");

// mengalihkan ke halaman index.php
header("location:index.php");
