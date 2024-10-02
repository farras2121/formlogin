<?php
// ini_set('display_errors', 0);
include "koneksi.php";


if (isset($_POST['tambah'])) {
  $nama = $_POST ['Nama'];
  $username = $_POST ['Username'];
  $password = $_POST ['Password'];

  //query disimpan dalam var $sql
  $sql = "insert into admin (Nama, Username, Password) 
  values ('$nama', '$username', '$password')";
  
  //validasi
  //jika query berhasil dieksekusi
  if ($hotel->query($sql)) {
    echo "<script> alert ('Tambah Data Berhasil');
    document.location='dashboard.php';</script>";
      exit();
  } else {
    echo "data gagal";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    </div>
  </div>
</nav>
<br><br>
    
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><b>XPRO</b>HOTEL</a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>



<div class="container">
<br><br>
<b><h3 class= "p-5">Tambah Data Admin</h3></b>
<form method="post">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="Nama" placeholder="nama">
  <label for="floatingInput">Nama</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="Username" placeholder="username">
  <label for="floatingInput">Username</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="password">
  <label for="floatingPassword">Password</label>
</div><br>
<center><button type="submit" class="btn btn-warning" name="tambah">Tambah Data</button></center>
</div>

</form><br>
<div class="p-3 mb-2 bg-primary text-white"><b>XPRO</b>HOTEL</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>
