

  <?php
  include '../config.php';

//    $url=$_SERVER['REQUEST_URI'];
//  header("Refresh: 10; URL=$url");

  $result_mahasiswa=mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
  $i=1;
  while ($rows=mysqli_fetch_assoc($result_mahasiswa)):

  ?>
  <tr>
    <td><?= $i++ ?></td>
    <td><?= $rows['nim']?></td>
    <td><?= $rows['nama']?></td>
    <td><?php

    $a=$rows['UID'];
    $result_log=mysqli_query($conn, "SELECT * FROM tbl_log WHERE UID='$a'");
    $row_log=mysqli_fetch_assoc($result_log);
    if ($row_log['waktu']) {
      echo "Sudah Scan";
    }else {
      echo "Belum Scan";
    };

     ?></td>
    <td><?= $row_log['waktu'] ; ?></td>
  </tr>
  <?php endwhile; ?>
