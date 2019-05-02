<div class="row">
  <div class="m12">
    <form method="get" action="index.php?page=kehadiran" class="col s12 form-user">
      <div class="row">
        <div class="col m6 s12">
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
        <div class="col m6 s12">
        </div>

      </div>
    </form>
  </div>

<?php if ($_GET['kelas']): ?>

    <div class="col s12">
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
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='2'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='3'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='4'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='5'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='6'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='7'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='8'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='9'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='10'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='11'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='12'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='13'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='14'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='15'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
            <td>
              <?php
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_kehadiran WHERE UID='$a' and pertemuan='16'");
              $row_log=mysqli_fetch_assoc($result_log);
              ?>
                <span class="
                <?php
                if ($row_log['kehadiran']==0) {
                  echo 'green-text';
                }elseif ($row_log['kehadiran']==1) {
                  echo 'red-text';
                }elseif ($row_log['kehadiran']==2) {
                  echo 'orange-text';
                }
                elseif ($row_log['kehadiran']==3) {
                  echo 'purple-text';
                }else {
                  echo 'blue-text';
                }
                ?>"><?= $row_log['kehadiran']?></span>
            </td>
          </tr>
        <?php endwhile;?>
        </tbody>
      </table>
      <table>
        <tr>
          <td>Keterangan</td>
          <td class="green-text">0 = Hadir</td>
          <td class="red-text">1 = Absen</td>
          <td class="orange-text">2 = Sakit</td>
          <td class="purple-text">3 = Izin</td>
          <td class="blue-text">4 = HTK</td>
        </tr>
      </table>
    </div>

  <div class="col s12">
    <ul class="collection">
      <?php

      $a=array("red","green","blue","yellow","brown","pink","purple","indigo","draken-cyan","lime","amber","orange","brown","deep-orange","light-green","cyan accent-2");
      $random_keys=array_rand($a,5);
      $i=0;
      $result_pertemuan=mysqli_query($conn, "SELECT * FROM tbl_pertemuan WHERE kelas='$kelas'");
      while ($row_pertemuan=mysqli_fetch_assoc($result_pertemuan)):
      ?>
      <li class="collection-item avatar">
        <i class="circle <?php echo $a[$random_keys[$i]]; ?>"><b><?= $row_pertemuan['pertemuan'] ?></b></i>
        <span class="title"><b><?= $row_pertemuan['judul_pertemuan'] ?></b></span>
        <p>Waktu : <?= $row_pertemuan['jam'] ?></p>
        <p>Tanggal Validasi : <?= $row_pertemuan['tgl_validasi'] ?></p>
      </li>
    <?php $i++; endwhile;?>
    </ul>
  </div>
</div>

<?php endif; ?>
