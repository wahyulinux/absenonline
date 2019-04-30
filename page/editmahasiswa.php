
<div class="row">
  <div class="col s12">
    <form method="post" action="" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input value="<?= $_GET['nim'] ?>" id="nim" name="nim" type="number" min="111111111" max="9999999999" class="validate">
          <label for="nim">NIM</label>
        </div>
        <div class="input-field col s12">
          <input value="<?= $_GET['nama'] ?>" id="nama" name="nama" type="text" class="validate">
          <label for="nama">Nama</label>
        </div>
        <div class="input-field col s12">
          <input value="<?= $_GET['kelas'] ?>" id="kelas" name="kelas" type="text" class="validate">
          <label for="kelas">Kelas</label>
        </div>
        <div class="input-field col s12">
          <input value="<?= $_GET['uid'] ?>" id="uid" name="uid" type="text" class="validate">
          <label for="uid">UID Card</label>
        </div>
        <a href="?page=mahasiswa" class="waves-effect waves-light btn-flat">Tutup</a>
        <button type="submit" name='edit' value="1" class="waves-effect waves-light btn-flat">Ubah Data</button>
      </div>
    </form>
  </div>
</div>

<?php

if ($_POST['edit']) {
  $id_edit=$_GET['id_edit'];
  $uid=$_POST["uid"];
  $nim=$_POST["nim"];
  $nama=$_POST["nama"];
  $kelas=$_POST["kelas"];

  mysqli_query($conn, "UPDATE tbl_mahasiswa SET UID='$uid', nim='$nim',nama='$nama', kelas='$kelas' WHERE id='$id_edit'");
  header('location: ?page=mahasiswa');
}

 ?>
