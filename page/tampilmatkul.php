<table>
  <thead>

    <tr>
        <th>No</th>
        <th>Kode Matkul</th>
        <th>Kelas</th>
        <th>Nama Mata Kuliah</th>
        <th>Dosen</th>
        <th>Action</th>
    </tr>
  </thead>

  <tbody>

    <?php
    include '../config.php';
    $result_matkul=mysqli_query($conn, "SELECT * FROM tbl_matkul");
    $i=1;
    while ($rowmatkul=mysqli_fetch_assoc($result_matkul)):

    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $rowmatkul['kode_matkul']?></td>
      <td><?= $rowmatkul['kelas']?></td>
      <td><?= $rowmatkul['nama_matkul']?></td>
      <td><?php $id_user=$rowmatkul['id_user']; echo mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_user WHERE id_user='$id_user'"))['nama'];?></td>
      <td>
        <a href="?page=matkul&id_hapus=<?= $rowmatkul['id_user']?>&nama=<?= $rowmatkul['nama_matkul']?>" class="a btn-floating btn red">
          <i class="material-icons">delete</i>
        </a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
