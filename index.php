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
          <li><a href="?page=mahasiswa">Data Mahasiswa</a></li>
          <li><a href="?page=validasi">Validasi</a></li>
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

  </body>
</html>
