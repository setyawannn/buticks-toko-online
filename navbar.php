<?php
session_start();
if ($_SESSION['status_login'] != true) {
  header('location: login.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>BUTICKS</title>
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/1c9103e509.js" crossorigin="anonymous"></script>

  <!-- My CSS -->
  <link rel="stylesheet" href="style12.css">
</head>

<body>
  <div class="container">
    <header>
      <h3 id="logo-company">BUTICKS.</h3>
      <nav>
        <ul>
          <li><a href="dashboard.php">Beranda</a></li>
          <li><a href="produk.php">Produk</a></li>
          <li><a href="histori.php">Histori</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <div class="nav-cart">
        <a href="keranjang.php"><i class='fa-solid fa-cart-shopping'></i></a>
        <?php
        if (@$_SESSION['cart']) {
          echo "<h6>" . count(@$_SESSION['cart']) . "</h6>";
        }
        ?>
      </div>
    </header>
  </div>
</body>

</html>