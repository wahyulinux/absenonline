<div class="row">
  <form method="get" action="index.php?page=validasi" class="col s12 form-user">
    <div class="row">
      <div class="input-field col m6 s12">
        <select name="kelas">
          <option value="" disabled selected>Pilih Kelas</option>
          <option value="6ska1">6SKA1</option>
          <option value="5ska1">5SKA1</option>
        </select>
      </div>
      <div class="input-field col m6 s12">
        <button class="btn waves-effect waves-light" type="submit" name="page" value="validasi">Pilih
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>

<form method="post" action="">
<div class="row">
    <div class="row">
      <div class="input-field col m3 s12">
        <select name="pertemuan">
          <?php
          $kelas=$_GET['kelas'];
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=1 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==1) {
            echo '<option value="1">Pertemuan 1</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=2 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==2) {
            echo '<option value="2">Pertemuan 2</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=3 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==3) {
            echo '<option value="3">Pertemuan 3</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=4 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==4) {
            echo '<option value="4">Pertemuan 4</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=5 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==5) {
            echo '<option value="5">Pertemuan 5</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=6 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==6) {
            echo '<option value="6">Pertemuan 6</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=7 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==7) {
            echo '<option value="7">Pertemuan 7</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=8 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==8) {
            echo '<option value="8">Pertemuan 8</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=9 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==9) {
            echo '<option value="9">Pertemuan 9</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=10 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==10) {
            echo '<option value="10">Pertemuan 10</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=11 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==11) {
            echo '<option value="11">Pertemuan 11</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=12 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==12) {
            echo '<option value="12">Pertemuan 12</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=13 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==13) {
            echo '<option value="13">Pertemuan 13</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=14 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==14) {
            echo '<option value="14">Pertemuan 14</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=15 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==15) {
            echo '<option value="15">Pertemuan 15</option>';
          };
          $result_pertemuan=mysqli_query($conn, "SELECT pertemuan FROM tbl_pertemuan WHERE pertemuan=16 and kelas='$kelas'");
          $row_pertemuan=mysqli_fetch_assoc($result_pertemuan);
          if (!$row_pertemuan['pertemuan']==16) {
            echo '<option value="16">Pertemuan 16</option>';
          };
          ?>
        </select>
      </div>
      <div class="input-field col m3 s12">
        <select name="jam" required>
          <option value="" disabled selected>Pilih Jam</option>
          <option value="08:00-09:30">08:00-09:30</option>
          <option value="09:30-11:00">09:30-11:00</option>
          <option value="11:30-12:30">11:30-12:30</option>
        </select>
      </div>
      <div class="input-field col m6 s12">
        <input id="judul_pertemuan" name="judul_pertemuan" type="text" class="validate" required>
        <label for="judul_pertemuan">Judul Pertemuan</label>
      </div>
      <div class="input-field col m6 s12">
        <button class="btn waves-effect waves-light" type="submit"  onclick="return confirm('Apakah Anda Yakin Validasi ?');" name="kirim" value="1">Validasi
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
</div>
<div class="row">
  <div class="col s12">
    <table>
    <thead>
      <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Status</th>
          <th>Waktu</th>
      </tr>
    </thead>
    <?php
    $result_mahasiswa=mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE kelas='$kelas'");
    $i=1;
    $scan=0;
    while ($rows=mysqli_fetch_assoc($result_mahasiswa)):

    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $rows['nim']?></td>
      <td><?= $rows['nama']?></td>
      <td><?= $rows['kelas']?></td>
      <td>
        <div class="input-field col s12 m8">
          <input type="hidden" name="uid[]" value="<?= $rows['UID']?>">
          <select name="kehadiran[]">
            <?php

            $a=$rows['UID'];
            $result_log=mysqli_query($conn, "SELECT * FROM tbl_log WHERE UID='$a'");
            $row_log=mysqli_fetch_assoc($result_log);
            if ($row_log['waktu']) {
              ?>
              <option value="0">Hadir</option>
              <?php
              $scan++;
            }else {
              ?>
            <option value="1">Absen</option>
            <option value="2">Sakit</option>
            <option value="3">Izin</option>
            <option value="4">Hadir Tanpa Kartu</option>
          <?php } ?>
          </select>
        </div>
    </td>
      <td><?= $row_log['waktu'] ; ?></td>
    </tr>
    <?php endwhile;

    echo '<h3>Sudah Scan:'.$scan.'</h3>';?>
  </table>
  </div>
</div>
</form>

<?php
if ($_POST['kirim']) {

  $pertemuan= $_POST['pertemuan'];
  $judul_pertemuan= $_POST['judul_pertemuan'];
  $jam= $_POST['jam'];

  mysqli_query($conn, "INSERT INTO `tbl_pertemuan` VALUES('', '$pertemuan', '$judul_pertemuan', '$kelas', '$jam', '')");

  $uid=$_POST['uid'];

  $kehadiran = $_POST['kehadiran'];
  $jumlah_dipilih = count($kehadiran);

    for($x=0;$x<$jumlah_dipilih;$x++){
      mysqli_query($conn, "INSERT INTO `tbl_kehadiran` VALUES('', '$uid[$x]', '$pertemuan', '$kehadiran[$x]')");
      mysqli_query($conn, "DELETE FROM tbl_log WHERE UID='$uid[$x]'");

    }
    ?>
    <meta http-equiv="refresh" content="0;url=?page=kehadiran&kelas=<?= $kelas ?>"/>
    <?php

}

 ?>
