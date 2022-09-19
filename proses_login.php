<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$q = mysqli_query($conn, "select * from pelanggan where username='" . $username . "' and password='" . md5($password) . "'");
$r = mysqli_fetch_array($q);
$q2 = mysqli_query($conn, "select * from petugas where username='" . $username . "' and password='" . md5($password) . "'");
$row = mysqli_fetch_array($q2);
if (mysqli_num_rows($q) > 0) {
    $_SESSION['id_pelanggan'] = $r['id_pelanggan'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    $_SESSION['status_login'] = true;
    header('location:dashboard.php');
} elseif (mysqli_num_rows($q2) > 0) {
    $_SESSION['id_petugas'] = $row['id_petugas'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header('location:operator.php');
} else {
    echo "Login Gagal";
}
