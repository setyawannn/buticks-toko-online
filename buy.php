<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Product</title>
  <link rel="stylesheet" href="../style10.css">
</head>

<body>
  <!-- Buy Product -->
  <section class="buy-product">
    <!-- Container -->
    <div class="container">
      <div class="buy-wrapper">
        <div class="buy-img">
          <img src="gambar/<?= $dt_buku['foto'] ?>">
        </div>
        <div class="buy-content">
          <form action="masukkankeranjang.php?id_produk=<?= $dt_buku['id_produk'] ?>" method="post">
            <h2><?= $dt_buku['nama_produk'] ?></h2>
            <span>Rp <?= number_format($dt_buku['harga'], 0, ",", ".") ?></span>
            <p><?= ($dt_buku['deskripsi']) ?></p>
            <div class="add-button">
              <input type="number" name="jumlah_pinjam" value="1" id="add-number">
              <input type="submit" value="Beli" id="buy-input">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>