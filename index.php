<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Absensi</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="">Beranda</a></li>
          <li><a href="">Data Mahasiswa</a></li>
          <li><a href="">Validasi</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
    </ul>


    <div class="container">
      <div class="row">
        <div class="col s12">
          <table>
          <thead>

            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Waktu</th>
            </tr>
          </thead>

          <tbody>

            <?php
            include 'config.php';

            $url=$_SERVER['REQUEST_URI'];
            header("Refresh: 10; URL=$url");

            $result_mahasiswa=mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
            $i=1;
            while ($rows=mysqli_fetch_assoc($result_mahasiswa)):

            ?>
            <tr>
              <td><?= $i++ ?></td>
              <td><?= $rows['nim']?></td>
              <td><?= $rows['nama']?></td>
              <td>
              <?php

              $a=$rows['UID'];
              $result_log=mysqli_query($conn, "SELECT * FROM tbl_log WHERE UID='$a'");
              $row_log=mysqli_fetch_assoc($result_log);
              if ($row_log['waktu']) {
                echo "Sudah Scan";
              }else {
                echo "Belum Scan";
              };

               ?></td>
              <td><?= $row_log['waktu'] ; ?></td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript">
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
