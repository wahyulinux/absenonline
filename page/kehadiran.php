<div class="row">
  <div class="m12">
    <form method="get" action="index.php?page=kehadiran" class="col s12 form-user">
      <div class="row">
        <div class="input-field col m6 s12">
          <select name="kelas">
            <option value="" disabled selected>Pilih Kelas</option>
            <option value="6ska1">6SKA1</option>
            <option value="5ska1">5SKA1</option>
          </select>
        </div>
        <div class="input-field col m6 s12">
          <button class="btn waves-effect waves-light" type="submit" name="page" value="kehadiran">Pilih
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
    <table class="striped">
      <thead>
        <tr>
          <td rowspan="2" style="text-align:center;">Nama</td>
          <td colspan="16" style="text-align:center;">Pertemuan</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>5</td>
          <td>6</td>
          <td>7</td>
          <td>8</td>
          <td>9</td>
          <td>10</td>
          <td>11</td>
          <td>12</td>
          <td>13</td>
          <td>14</td>
          <td>15</td>
          <td>16</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $kelas=$_GET['kelas'];
        $result_mahasiswa=mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE kelas='$kelas'");
        $i=1;
        $scan=0;
        while ($rows=mysqli_fetch_assoc($result_mahasiswa)):
          $a=$rows['UID'];
        ?>
        <tr>
          <td><?= $rows['nama']?></td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='1'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='2'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='3'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='4'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='5'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='6'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='7'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='8'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='9'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='10'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='11'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='12'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='13'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='14'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='15'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
          <td>
            <?php
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='16'");
            $row_log=mysqli_fetch_assoc($result_log);
            echo $row_log['kehadiran'];
            ?>
          </td>
        </tr>
      <?php endwhile;?>
      </tbody>
    </table>
  </div>
</div>
