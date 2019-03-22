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

    <div class="container">
      <div class="row">
        <div class="col s0 m2 l3">
        </div>
        <div class="col s12 m8 l6">
          <div class="row card-panel">
            <form method="post" action="">
              <div class="row">
                <h3 class="teal-text center">Absen Online</h3>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="username" type="text" name="username" required class="validate">
                  <label for="username">Username</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input id="password" type="password" name="password" required class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="col s8">
                  <p>
                    <label>
                      <input type="checkbox" name="rememberme"/>
                      <span>Remember Me</span>
                    </label>
                  </p>
                </div>
                <div class="col s4">
                  <button class="btn waves-effect waves-light" type="submit" name="kirim" value="1">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col s0 m2 l3">
        </div>
      </div>


    </div>
    <!--JavaScript at end of body for optimized loading-->

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>


    <?php
    error_reporting(0);
    session_start();
    if ($_POST['kirim']) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      include 'config.php';

      $result_login=mysqli_query($conn, "SELECT level, id_user FROM tbl_user WHERE username='$username' AND password=md5('$password')");
      $cek=mysqli_fetch_assoc($result_login);

        if ($cek['level']) {
          $_SESSION['level'] = $cek['level'];
          $_SESSION['id_user'] = $cek['id_user'];
          if ($_POST['rememberme']) {
            setcookie("id_user", $cek['id_user'], time()+3600);
          }
          header("Location: index.php");
          }
          else
          {
          ?>
          <script type="text/javascript">
            M.toast({html: 'Username atau Password Salah'})
          </script>
          <?php
          }

    }
     ?>
  </body>
</html>
