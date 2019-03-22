<?php
include '../config.php';
$result_log=mysqli_query($conn, "SELECT * FROM tbl_log");
$totalscan=mysqli_num_rows($result_log);
echo "Sudah Scan : ".$totalscan;
 ?>
