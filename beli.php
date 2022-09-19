<?php
include "koneksi.php";
$qry_detail_buku = mysqli_query($conn, "select * from produk where id_produk = '" . $_GET['id_produk'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style8.css">
</head>

<body>

    <?php
    include "navbar.php";
    include "buy.php";
    ?>


</body>

</html>