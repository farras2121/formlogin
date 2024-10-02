<?php
// ini_set('display_errors', 0);
include "koneksi.php";

if (isset($_POST['tambah'])) {
  $nama = $_POST ['Nama'];
  $no_identitas = $_POST ['No_identitas'];
  $no_handphone = $_POST ['No_handphone'];
  $jenis_kamar = $_POST ['Jenis_kamar'];
  $check_in = $_POST ['Check_in'];
  $check_out = $_POST ['Check_out'];
  $jumlah_kamar = $_POST ['Jumlah_kamar'];

  $tanggal_Check_in = new Datetime($check_in);
  $tanggal_Check_out = new Datetime($check_out);

  if ($tanggal_Check_out <= $tanggal_Check_in) {
    echo '<script>alert ("Tanggal Check_out harus lebih dari Check_in");window.location="pemesanan.php" </script>';
    exit();
  }

  $selisi = $tanggal_Check_in->diff($tanggal_Check_out);
  $jumlahari = $selisi->days;

  $hargaquery = "SELECT Harga from kamar where Id_kamar = '$jenis_kamar'";
  $hasil_harga = $hotel->query($hargaquery);
  $harga_row = $hasil_harga->fetch_assoc();
  $per_malam = $harga_row['Harga'];

  $total = $jumlahari * $per_malam * $jumlah_kamar;

  $sql = "INSERT INTO penyewa (Nama, Checkin, Checkout, No_identitas, No_hp, Jumlah, Total, Id_kamar)
  values ('$nama', '$check_in', '$check_out', '$no_identitas', '$no_handphone', '$jumlah_kamar', '$total', '$jenis_kamar')";
    if ($hotel->query($sql)){
        echo '<script>alert ("Berhasil Di Tambahkan");window.location="penyewa.php"</script>';
    } else
        echo "gagal";
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
  <body class="body">
    <?php
       include "header.php"
    ?>

    </div>
  </div>
</nav>
<br><br>
  <div class="container">
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
      </div>
    </div>
  </div>
</nav>

<!-- <style>
        .body{
            background-image: url("img2.jpg");
        }

    </style> -->

<div class="container">
<b><hr>
<h3><center>Tambah Pesanan</center></h3></b>
<hr>
<form method="post">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="Nama" placeholder="nama" required>
  <label for="floatingInput">Nama Lengkap</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="No_identitas" placeholder="no_identitas">
  <label for="floatingInput">No Identitas</label>
</div>

<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" name="No_handphone" placeholder="no_handphone">
  <label for="floatingInput">No Handphone</label>
</div><br>

<select class="form-select" aria-label="Default select example" name="Jenis_kamar">
  <option selected>Jenis Kamar</option>
  <?php
  $sql = "SELECT * from kamar";

  $hasil = mysqli_query($hotel, $sql);

  foreach ($hasil as $row) {
    echo '
    <option value = "'.$row['Id_kamar'].'">
    '.$row['Jenis_kamar'].'
    </option>
    ';
  }
  ?>

</select><br>

<label><b>Check In</b></label>
<input type="date" class="form-control" aria-label="Default select example" name="Check_in">
</input><br>


<label><b>Check Out</b></label>
<input type="date" class="form-control" aria-label="Default select example" name="Check_out">
</input><br>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="Jumlah_kamar" placeholder="Jumlah_kamar">
  <label for="floatingInput">Jumlah Kamar</label>
</div>
<br>
</div>
<center><button type="submit" class="btn btn-warning" name="tambah">Simpan Transaksi</button></center>
</div><br>

</form><br>
<div class="p-3 mb-2 bg-primary text-white"><b>XPRO</b>HOTEL</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>
