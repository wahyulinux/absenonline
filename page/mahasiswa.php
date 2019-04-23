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


  <!-- Modal Structure -->
    <div id="modalHapusMahasiswa" class="modal">
      <div class="modal-content">
        <div class="row">
          <div class="col s12">
            <h4>Apakah Anda Ingin Menghapus  ?</h4>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-light btn-flat">Tidak</a>
        <a href="#!" data-id=15 class="waves-effect waves-light btn-flat tombol-hapus">Iya</a>
      </div>
    </div>


    <div id="modallihat" class="modal">
      <div class="modal-content">
        <div class="row">
          <div class="modal-data"></div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-light btn-flat">Tutup</a>
        <a href="#!" class="waves-effect waves-light btn-flat tombol-simpan">Simpan</a>
      </div>
    </div>
