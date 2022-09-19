<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  include "navbar.php";
  ?>

  <div class="container">

    <div class="buy-wrapper">
      <div class="buy-img">
        <img src="./gambar/sepatu-nike.png" alt="">
      </div>
      <div class="buy-content">
        <h2>Sepatu Nike Air Jordan</h2>
        <span>Rp 750000</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea suscipit in veniam vitae minima, ipsum quibusdam expedita quas dolores nam.</p>

        <form action="masukkankeranjang.php?id_produk=<?= $dt_buku['id_produk'] ?>" method="post">
          <div class="add-button">
            <input type="number" value="1" id="add-number">
            <input type="submit" value="Beli" id="buy-input">
          </div>
        </form>


      </div>

    </div>

  </div>
</body>

</html>