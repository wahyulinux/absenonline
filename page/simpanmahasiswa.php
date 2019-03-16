<?php
include '../config.php';
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$uid=$_POST['uid'];
if ($nim) {
  mysqli_query($conn, "INSERT INTO `tbl_mahasiswa` VALUES('', '$uid', '$nim', '$nama')");
}

 ?>
