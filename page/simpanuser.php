<?php
include '../config.php';
$password=$_POST['password'];
$level=$_POST['level'];
$nama=$_POST['nama'];
$username=$_POST['username'];
if ($username) {
  mysqli_query($conn, "INSERT INTO `tbl_user` VALUES('', '$username', md5('$password'), '$level', '$nama')");
}

 ?>
