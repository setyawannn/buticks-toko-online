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
    <section class="signup">
        <div class="container">
            <nav class="nav-signup">
                <div class="nav-signup-title">
                    <h3>Buticks.</h3>
                    <p>Semua bisa dengan klik</p>
                </div>
            </nav>
            <div class="signup-content">
                <div class="signup-session">
                    <div class="signup-title">
                        <h2>Isi data dibawah ini</h2>
                    </div>
                    <div class="signup-content-input">
                        <form action="proses_tambah_pelanggan.php" method="post">
                            <div class="text-field">
                                <input type="text" name="nama" required>
                                <span></span>
                                <label>Nama</label>
                            </div>
                            <div class="text-field">
                                <input type="text" name="alamat" required>
                                <span></span>
                                <label>Alamat</label>
                            </div>
                            <div class="text-field">
                                <input type="number" name="telp" required>
                                <span></span>
                                <label>No Telepon</label>
                            </div>
                            <div class="text-field">
                                <input type="text" name="user" required>
                                <span></span>
                                <label>Username</label>
                            </div>
                            <div class="text-field">
                                <input type="password" name="pass" required>
                                <span></span>
                                <label>Password</label>
                            </div>
                            <div class="button-signup">
                                <input type="submit" name="simpan" value="Sign Up">
                            </div>

                            <div class="signup-link">
                                <span>Sudah punya akun? </span><a href="login.php">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="signup-pict">
                    <img src="gambar/selfi-bg.png">
                </div>

            </div>
        </div>
    </section>

</body>

</html>