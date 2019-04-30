<div class="row">
  <div class="col s12">
    <ul class="hide-on-med-and-down">
      <a href="#modalUser" class="waves-effect waves-light btn-large modal-trigger"><i class="material-icons left">edit</i>Tambah Pengguna</a>
    </ul>

    <div class="fixed-action-btn hide-on-large-only">
      <a href="#modalUser" class="btn-floating btn-large cyan pulse modal-trigger">
        <i class="large material-icons">edit</i>
      </a>
    </div>

  </div>
  <div class="col s12">
    <div class="tampildata_user"></div>
  </div>
</div>


<div id="modalUser" class="modal">
  <div class="modal-content">
    <div class="row">
      <form method="post" class="col s12 form-user">
        <div class="row">
          <div class="input-field col s12">
            <input id="username" name="username" type="text" class="validate" required>
            <label for="username">Username</label>
          </div>
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate" required>
            <label for="password">Password</label>
          </div>
          <div class="input-field col s12">
            <input id="nama" name="nama" type="text" class="validate" required>
            <label for="nama">Nama</label>
          </div>
          <div class="input-field col s12">
            <select name="level" required>
              <option value="" disabled selected>Pilih Hak Akses</option>
              <option value="admin">Admin</option>
              <option value="dosen">Dosen</option>
            </select>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-light btn-flat">Tutup</a>
    <a href="#!" class="waves-effect waves-light btn-flat tombol-simpan-user">Simpan</a>
  </div>
</div>

<?php
$id_hapus=$_GET['id_hapus'];
$nama=$_GET['nama'];

if ($id_hapus) {
    mysqli_query($conn, "DELETE FROM tbl_user WHERE id_user='$id_hapus'");
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.tampildata_user').load("page/tampiluser.php");
        M.toast({html: '<?= $nama ?> Sudah Dihapus'});
      });
    </script>
    <?php
}
 ?>
