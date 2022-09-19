<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style12.css">
</head>

<body>
  <section class="card">
    <div class="wrappercon">
      <?php

      include "koneksi.php";
      $qry_produk = mysqli_query($conn, "select * from produk");
      // can use limit 3 (untuk menampilkan 3 buah saja)
      $row = mysqli_num_rows($qry_produk);
      // Kondisi perulangan Jika jumlah data lebih dari 0 (Berarti jika data ada)
      if ($row > 0) {
        while ($data_produk = mysqli_fetch_array($qry_produk)) {
          echo "<div class='card-wrapper'>";
      ?>
          <div class="card-img">
            <img src="gambar/<?= $data_produk['foto'] ?>">
          </div>
          <div class="card-content">
            <div class="card-content-details">
              <h4><?= $data_produk['nama_produk'] ?></h4>
              <h6>Rp <?= number_format($data_produk['harga'], 0, ',', '.') ?></h6>
            </div>
            <div class="card-content-center">
              <a href="beli.php?id_produk=<?= $data_produk['id_produk'] ?>">Beli</a>
            </div>
          </div>
    </div>
<?php
        }
      }
?>
</div>
  </section>

</body>

</html>