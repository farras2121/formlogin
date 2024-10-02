<?php 
include "koneksi.php";
//session_start();

$login_message = "";

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM login where username='$username' and password='$password' ";

  
$hasil = $db->query($sql);
//eksekusi query

//untuk mengambil satu baris dari hasil queri database MySQL



  if ($hasil -> num_rows > 0) {
    $data = $hasil->fetch_assoc();
    $_SESSION["username"] = $data["username"];
  header("location: dashboard.php");
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
      <img src="trbl.png" >
    </div>
    <div class="col-6 mt-5">
      <h2>Login </h2>
      <h5>Please login to use this site!</h5>
    <form action="login.php" method="POST">
      <div data-mdb-input-init class="form-outline mt-4 mb-4">
            <label class="form-label" for="form3Example3">username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            name="username"
              placeholder="Enter a valid username" />
          </div>

          <div data-mdb-input-init class="form-outline mb-3">
           <label class="form-label" for="form3Example4">password</label> 
           <input type="password" id="form3Example4" class="form-control form-control-lg"
           name="password"
              placeholder="Enter password" />
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
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
          ?>

          <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" class="btn btn-danger" name="login">LOGIN </button>
             </a>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-primary">Register</a></p>
          </div>
    </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

