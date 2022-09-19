<?php

session_start();
if (isset($_SESSION['status_login'])) {
  header('location: dashboard.php');
} else {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style12.css">
  </head>

  <body>
    <!-- Login -->
    <section class="login">
      <div class="container">
        <nav class="nav-login">
          <div class="nav-login-title">
            <h3>Buticks.</h3>
            <p>Semua bisa dengan klik</p>
          </div>
        </nav>
        <div class="login-content">
          <div class="login-session">
            <div class="login-title">
              <h2>Masuk dengan akunmu</h2>
            </div>
            <div class="login-content-input">
              <form action="proses_login.php" method="post" enctype="multipart/form-data">
                <div class="text-field">
                  <input name="username" type="text" required>
                  <span></span>
                  <label>Username</label>
                </div>
                <div class="text-field">
                  <input name="password" type="password" required>
                  <span></span>
                  <label>Password</label>
                </div>
                <div class="button-login">
                  <input type="submit" name="login" value="Sign In">
                </div>

                <div class="signup-link">
                  <span>Belum punya akun? </span><a href="tambah_pelanggan.php">Sign Up</a>
                </div>
              </form>
            </div>
          </div>
          <div class="login-pict">
            <img src="gambar/laying-bg.png">
          </div>

        </div>
      </div>
    </section>

  <?php
}
  ?>

  </body>

  </html>