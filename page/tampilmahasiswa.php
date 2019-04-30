<table>
  <thead>

    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Action</th>
    </tr>
  </thead>

  <tbody>

    <?php
    include '../config.php';
    $result_mahasiswa=mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
    $i=1;
    while ($rows=mysqli_fetch_assoc($result_mahasiswa)):

    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $rows['nim']?></td>
      <td><?= $rows['nama']?></td>
      <td><?= $rows['kelas']?></td>
      <td>
        <a class="btn-floating btn yellow" href="?page=mahasiswa_edit&id_edit=<?= $rows['id']?>&nim=<?= $rows['nim']?>&nama=<?= $rows['nama']?>&kelas=<?= $rows['kelas']?>&uid=<?= $rows['UID']?>">
          <i class="material-icons">edit</i>
        </a>
        <a href="?page=mahasiswa&id_hapus=<?= $rows['id']?>&nama=<?= $rows['nama']?>" class="a btn-floating btn red tombol-hapus">
          <i class="material-icons">delete</i>
        </a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
