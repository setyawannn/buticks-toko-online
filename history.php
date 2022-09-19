<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$id = $_SESSION['id_pelanggan'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Histori</title>
  <link rel="stylesheet" href="style12.css">
</head>

<body>
  <!-- Histori Section -->
  <section class="history">
    <!-- Container -->
    <div class="container">
      <?php
      include "koneksi.php";
      $sql = mysqli_query($conn, "SELECT A.nama_produk, foto,B.tgl_transaksi,A.harga,C.qty,C.subtotal,B.id_transaksi FROM produk A JOIN transaksi B ON A.id_produk=B.id_produk JOIN detail_transaksi C ON B.id_transaksi=C.id_transaksi WHERE B.id_pelanggan='$id'");
      $no = 0;

      $pan = mysqli_query($conn, "select * from transaksi where id_pelanggan = '$id'");
      $f = mysqli_num_rows($pan);
      if ($f == 0) {
        echo "<div class='history-empty'><h3>tidak ada barang yang dibeli</h3></div>";
      } elseif ($f > 0) {
        while ($histori = mysqli_fetch_array($sql)) {
          $no++;
          $hapus = "<a href='hapushistori.php?id_transaksi=$histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='btn btn-danger'>X</a>";
      ?>
          <div class="history-wrapper">
            <div class="history-img">
              <img src="gambar/<?= $histori['foto'] ?>">
            </div>
            <div class="history-title">
              <h3><?= $histori['nama_produk'] ?></h3>
            </div>
            <div class="history-date">
              <h6><?= $histori['tgl_transaksi'] ?></h6>
            </div>
            <div class="history-qty">
              <h6><?= $histori['qty'] ?></h6>
            </div>
            <div class="history-price">
              <h6>Rp <?= number_format($histori['harga'], 0, ',', '.') ?></h6>
            </div>
            <div class="history-total-price">
              <h6>Rp <?= number_format($histori['subtotal'], 0, ',', '.') ?></h6>
            </div>
            <div class="history-delete">
              <?= $hapus ?>
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