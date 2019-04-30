<table>
  <thead>

    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Nama</th>
        <th>Hak Akses</th>
        <th>Action</th>
    </tr>
  </thead>

  <tbody>

    <?php
    include '../config.php';
    $result_user=mysqli_query($conn, "SELECT * FROM tbl_user");
    $i=1;
    while ($rows=mysqli_fetch_assoc($result_user)):

    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $rows['username']?></td>
      <td><?= $rows['nama']?></td>
      <td><?= $rows['level']?></td>
      <td>
        <a href="?page=user&id_hapus=<?= $rows['id_user']?>&nama=<?= $rows['nama']?>" class="a btn-floating btn red">
          <i class="material-icons">delete</i>
        </a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
