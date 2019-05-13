<div class="row">
  <div class="col s12">
    <ul class="hide-on-med-and-down">
      <a href="#modalMatkul" class="waves-effect waves-light btn-large modal-trigger"><i class="material-icons left">edit</i>Tambah Mata Kuliah</a>
    </ul>

    <div class="fixed-action-btn hide-on-large-only">
      <a href="#modalMatkul" class="btn-floating btn-large cyan pulse modal-trigger">
        <i class="large material-icons">edit</i>
      </a>
    </div>

  </div>
  <div class="col s12">
    <div class="tampilmatkul"></div>
  </div>
</div>


<div id="modalMatkul" class="modal">
  <div class="modal-content">
    <div class="row">
      <form method="post" class="col s12 form-matkul">
        <div class="row">
          <div class="input-field col s12">
            <input id="kode_matkul" onkeyup="this.value = this.value.toUpperCase();" name="kode_matkul" type="text" class="validate" required>
            <label for="kode_matkul">Kode Matkul</label>
          </div>
          <div class="input-field col s12">
            <input id="nama_matkul" name="nama_matkul" type="text" class="validate" required>
            <label for="nama_matkul">Nama Matkul</label>
          </div>
          <div class="input-field col s12">
            <select name="kelas">
              <option value="" disabled selected>Pilih Kelas</option>
              <option value="6ska1">6SKA1</option>
              <option value="5ska1">5SKA1</option>
            </select>
          </div>
          <div class="input-field col s12">
            <select name="id_user">
              <option value="" disabled selected>Pilih Dosen</option>
              <?php
              $result_user=mysqli_query($conn, "SELECT * FROM tbl_user WHERE level='Dosen'");
              $i=1;
              while ($rows=mysqli_fetch_assoc($result_user)): ?>
              <option value="<?= $rows['id_user'] ?>"><?= $rows['nama'] ?></option>
              <?php endwhile; ?>
            </select>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-light btn-flat">Tutup</a>
    <a href="#!" class="waves-effect waves-light btn-flat tombol-simpan-matkul">Simpan</a>
  </div>
</div>

<?php
$id_hapus=$_GET['id_hapus'];
$nama=$_GET['nama'];

if ($id_hapus) {
    mysqli_query($conn, "DELETE FROM tbl_matkul WHERE id_user='$id_hapus'");
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
