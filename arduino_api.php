<?php
include 'config.php';
$UID=$_GET['UID'];
$time=new DateTime();
$waktu=$time->format('Y-m-d H:i:s');
echo $waktu;
if ($UID) {
  mysqli_query($conn, "INSERT INTO tbl_log values('', '$UID', '$waktu')");
}

 ?>
