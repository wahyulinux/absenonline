<?php
include '../config.php';
$kode_matkul=$_POST['kode_matkul'];
$kelas=$_POST['kelas'];
$nama_matkul=$_POST['nama_matkul'];
$id_user=$_POST['id_user'];
if ($kode_matkul) {
  mysqli_query($conn, "INSERT INTO `tbl_matkul` VALUES('', '$kode_matkul', '$kelas', '$nama_matkul', '$id_user')");
}

 ?>
