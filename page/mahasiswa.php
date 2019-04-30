<div class="row">
  <div class="col s12">
    <ul class="hide-on-med-and-down">
      <a href="#modalMahasiswa" class="waves-effect waves-light btn-large modal-trigger"><i class="material-icons left">edit</i>Tambah Mahasiswa</a>
    </ul>

    <div class="fixed-action-btn hide-on-large-only">
      <a href="#modalMahasiswa" class="btn-floating btn-large cyan pulse modal-trigger">
        <i class="large material-icons">edit</i>
      </a>
    </div>

  </div>
  <div class="col s12">
    <div class="tampildata_mahasiswa"></div>
  </div>
</div>



<!-- Modal Structure -->
  <div id="modalMahasiswa" class="modal">
    <div class="modal-content">
      <div class="row">
        <form method="post" class="col s12 form-user">
          <div class="row">
            <div class="input-field col s12">
              <input id="nim" name="nim" type="number" min="111111111" max="9999999999" class="validate">
              <label for="nim">NIM</label>
            </div>
            <div class="input-field col s12">
              <input id="nama" name="nama" type="text" class="validate">
              <label for="nama">Nama</label>
            </div>
            <div class="input-field col s12">
              <input id="kelas" name="kelas" type="text" class="validate">
              <label for="kelas">Kelas</label>
            </div>
            <div class="input-field col s12">
              <input id="uid" name="uid" type="text" class="validate">
              <label for="uid">UID Card</label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn-flat">Tutup</a>
      <a href="#!" class="waves-effect waves-light btn-flat tombol-simpan">Simpan</a>
    </div>
  </div>


    <?php
    $id_hapus=$_GET['id_hapus'];
    $nama=$_GET['nama'];

    if ($id_hapus) {
        mysqli_query($conn, "DELETE FROM tbl_mahasiswa WHERE id='$id_hapus'");
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $('.tampildata_mahasiswa').load("page/tampilmahasiswa.php");
            M.toast({html: '<?= $nama ?> Sudah Dihapus'});
          });
        </script>
        <?php
    }
     ?>
