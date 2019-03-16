<table>
  <thead>

    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
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
      <td>
        <a href="" class="btn-floating btn yellow">
          <i class="material-icons">edit</i>
        </a>
        <a href="#modalHapusMahasiswa" data-id="<?= $rows['id']?>" class="a btn-floating btn red modal-trigger">
          <i class="material-icons">delete</i>
        </a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
