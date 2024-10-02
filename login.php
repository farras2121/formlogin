<?php 
global $hotel;
include "koneksi.php";
session_start();
 


$login_message = "";

if (isset($_POST['login'])) {
  $username = $_POST['Username'];
  $password = $_POST['Password'];

  $sql = "SELECT * FROM admin where Username='$username' and Password='$password' ";

  
$hasil = $hotel->query($sql);
//eksekusi query

//untuk mengambil satu baris dari hasil queri database MySQL

$data = $hasil->fetch_assoc();
    $_SESSION['Username'] = $data['Username'];


  if($data) {
    
  header("location: beranda.php");
} else {
  $login_message = "akun tidak ditemukan";
}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
  <div class="row">
    <div class="col-6 mt-5" >
      <img src="valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg" class="col-11 mb-7" >
    </div>
    <div class="col-6 mt-5">
      <h2>Login</h2>
      <h5></h5>
      <hr><center><b>Masukan username Dan password</b></center><hr>
    <form action="login.php" method="POST">
      
      <div data-mdb-input-init class="form-outline mt-4 mb-4">
            <label class="form-label" for="form3Example3">username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            name="Username"
              placeholder="Enter a valid username" />
          </div>

          <div data-mdb-input-init class="form-outline mb-3">
           <label class="form-label" for="form3Example4">password</label> 
           <input type="password" id="form3Example4" class="form-control form-control-lg"
           name="Password"
              placeholder="Enter password" />
            
          </div>

          <!-- <div class="d-flex justify-content-between align-items-center">
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>
          <?php 
          echo $login_message;
          ?> -->

          <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" class="btn btn-success" name="login">LOGIN </button>
             </a>
          </div>
    </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

