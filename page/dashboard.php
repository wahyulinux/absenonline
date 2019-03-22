<?php
$result_mahasiswa=mysqli_query($conn, "SELECT id FROM tbl_mahasiswa");
$jumlahmahasiswa=mysqli_num_rows($result_mahasiswa);
?>
<div class="row">
  <div class="col s12">
    <h3>Selamat Datang <?php echo $data_user['nama'] ?></h3>
  </div>
</div>
<div class="row">
  <div class="col s12 m6 l3 card">
    <div class="row">
      <h4 class="teal white-text">Mahasiswa</h4>
      <div class="col s6">
        <i class="material-icons large">group</i>
      </div>
      <div class="col s6">
        <h3><?php echo $jumlahmahasiswa ?></h3>
      </div>
    </div>
  </div>
</div>
