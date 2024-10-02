<?php
// ini_set('display_errors', 0);
include "koneksi.php";


// if (isset($_POST['tambah'])) {
//   $username = $_POST ['username'];
//   $password = $_POST ['password'];

//   //query disimpan dalam var $sql
//   $sql = "insert into login (username, password) 
//   values ('$username', '$password')";
  
  //validasi
  //jika query berhasil dieksekusi
  // if ($db->query($sql)) {
  //     header("location: dashboard.php");
  //     exit();
  // } else {
  //   echo "data gagal";
  // }


//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM kamar WHERE Id_kamar=$id";

//eksekusi
$hasil = $hotel->query($sql);

//untuk mwngambil baris data hasil query, yang nantinya akan ditampilkan di form
$data = mysqli_fetch_assoc($hasil);
?>

<!doctype html>

<form class="d-flex" role="search" method="POST">
        <!-- <button class="btn btn-outline-success"  type="submit" name="logout" >Logout</button> -->
      </form>
    </div>
  </div>
</nav>
<br><br>

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
  </div>
</nav>



<div class="container">
<br><br>
<b><h3 class= "p-5">Ubah Data Kamar</h3></b>



<div class="form-floating mb-3">


</div>
<form method="POST" action="proses_editkamar.php">
<input type="hidden" name="Id_kamar"
value="<?php echo $data['Id_kamar']?>">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" value="<?php echo $data['Jenis_kamar']?>" name="Jenis_kamar" placeholder="name@example.com">
  <label for="floatingInput">jenis kamar</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingInput" name="Harga" value="<?php echo $data['Harga']?>" placeholder="name@example.com">
  <label for="floatingInput">harga</label>
</div><br>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingInput" name="Keterangan" value="<?php echo $data['Keterangan']?>" placeholder="name@example.com">
  <label for="floatingInput">keterangan</label>
</div><br>
<center><button type="submit" class="btn btn-warning" name="ubah">Ubah Data</button></center>
</div>

</form><br>
<div class="p-3 mb-2 bg-primary text-white"><b>XPRO</b>HOTEL</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>
