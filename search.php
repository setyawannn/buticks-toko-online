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

  <body>
    <div class="container">
      <div class="category-wrapper">
        <form action="hasil_cari.php" method="POST">
          <select name="search" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option value="Kategori">Pilih Kategori</option>
            <option value="Semua">Semua</option>
            <option value="Jas">Jas</option>
            <option value="Kaos">Kaos</option>
            <option value="Kemeja">Kemeja</option>
            <option value="Sepatu">Sepatu</option>
            <option value="Sandal">Sandal</option>
            <option value="Topi">Topi</option>
          </select>
        </form>
      </div>
    </div>
  </body>

</body>

</html>