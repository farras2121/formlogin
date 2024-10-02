<?php
// ini_set('display_errors', 0);
include "koneksi.php";


// if (isset($_POST['tambah'])) {
//   $username = $_POST ['username'];
//   $password = $_POST ['password'];

//   //query disimpan dalam var $sql
//   $sql = "insert into login (username, password) 
//   values ('$username', '$password')";
  
//   //validasi
//   //jika query berhasil dieksekusi
//   if ($db->query($sql)) {
//       header("location: dashboard.php");
//       exit();
//   } else {
//     echo "data gagal";
//   }
// }

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM admin WHERE Id=$id";

//eksekusi
$hasil = $hotel->query($sql);

//untuk mwngambil baris data hasil query, yang nantinya akan ditampilkan di form
$data = mysqli_fetch_assoc($hasil);
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

  <form class="d-flex" role="search" method="POST">
        <button class="btn btn-outline-success"  type="submit" name="logout" >Logout</button>
      </form>
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
<b><h3 class= "p-5">Ubah Data Admin</h3></b>



<div class="form-floating mb-3">


</div>
<form method="POST" action="proses_edit.php">
<input type="hidden" name="id"
value="<?php echo $data['Id']?>">
<div class="form-floating mb-3">
<input type="text" class="form-control" id="floatingInput" name="nama" placeholder="name@example.com">
  <label for="floatingInput"></label><br>


  <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
  <label for="floatingInput">username</label>
</div>

<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password">
  <label for="floatingPassword">password</label>
</div><br>
<center><button type="submit" class="btn btn-warning" name="ubah">Ubah Data</button></center>
</div>
</div>

</form>
<div class="p-3 mb-2 bg-primary text-white"><b>XPRO</b>HOTEL</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>
