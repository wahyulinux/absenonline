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
      <div class="input-field col m6 s12">
        <select name="pertemuan">
          <option value="" disabled selected>Pilih Pertemuan</option>
          <option value="1">Pertemuan 1</option>
          <option value="2">Pertemuan 2</option>
          <option value="3">Pertemuan 3</option>
          <option value="4">Pertemuan 4</option>
          <option value="5">Pertemuan 5</option>
          <option value="6">Pertemuan 6</option>
          <option value="7">Pertemuan 7</option>
          <option value="8">Pertemuan 8</option>
          <option value="9">Pertemuan 9</option>
          <option value="10">Pertemuan 10</option>
          <option value="11">Pertemuan 11</option>
          <option value="12">Pertemuan 12</option>
          <option value="13">Pertemuan 13</option>
          <option value="14">Pertemuan 14</option>
          <option value="15">Pertemuan 15</option>
          <option value="16">Pertemuan 16</option>
        </select>
      </div>
      <div class="input-field col m6 s12">
        <button class="btn waves-effect waves-light" type="submit" name="kirim" value="1">Validasi
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
    $kelas=$_GET['kelas'];
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
          <select>
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
