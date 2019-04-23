<?php
  error_reporting(0);
	session_start();
  $id_usercek=$_SESSION['id_user'] || $_COOKIE['id_user'];
	if(!$id_usercek){
		header("location: login.php");
	}
  if ($_COOKIE['id_user']) {
    $id_user=$_COOKIE['id_user'] ;
  }else{
  $id_user=$_SESSION['id_user'] ;
  }
  include "config.php";
  $result_user=mysqli_query($conn, "SELECT nama, level FROM tbl_user WHERE id_user=$id_user");
  $data_user=mysqli_fetch_assoc($result_user);
	?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="css/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Absensi</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="?page=dashboard">Beranda</a></li>
          <?php
            if ($data_user['level']=="admin") {
              echo '<li><a href="?page=mahasiswa">Data Mahasiswa</a></li>';
            }
           ?>

          <li><a href="?page=validasi">Validasi</a></li>
          <li><a href="?page=kehadiran">Kehadiran</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
    <li><a href="?page=dashboard">Beranda</a></li>
    <li><a href="?page=mahasiswa">Data Mahasiswa</a></li>
    <li><a href="?page=validasi">Validasi</a></li>
    </ul>


    <div class="container">

      <?php

        if(isset($_GET['page'])){
          $page = $_GET['page'];

          switch ($page) {
            case 'dashboard':
              include "page/dashboard.php";
              break;
            case 'mahasiswa':
              include "page/mahasiswa.php";
              break;
            case 'validasi':
              include "page/validasi.php";
              break;
            case 'kehadiran':
              include "page/kehadiran.php";
              break;
            default:
              include "page/404.php";
              break;
          }
        }else{
          include "page/dashboard.php";
        }

       ?>

    </div>

    <!--JavaScript at end of body for optimized loading-->

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });


    $(document).ready(function(){
       $('.fixed-action-btn').floatingActionButton();
     });

     $(document).ready(function(){
        $('.modal').modal();
      });





    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.tampildata_mahasiswa').load("page/tampilmahasiswa.php");
      	$(".tombol-simpan").click(function(){
      		var data = $('.form-user').serialize();
      		$.ajax({
      			type: 'POST',
      			url: "page/simpanmahasiswa.php",
      			data: data,
      			success: function() {
      				$('.tampildata_mahasiswa').load("page/tampilmahasiswa.php");
              $('.modal').modal().close;
      			}
      		});
      	});
      });

    </script>

<script type="text/javascript">
$(document).ready(function(){
  $('select').formSelect();
});
</script>

  </body>
</html>
