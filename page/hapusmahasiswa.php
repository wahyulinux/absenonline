<?php
include '../config.php';
$id=$_POST['id'];
if ($id) {
  mysqli_query($conn, "DELETE FROM tbl_mahasiswa WHERE id='$id'");
}

 ?>
