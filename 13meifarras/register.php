

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
      <h2>Register </h2>
      <h5>Please Register to use this site!</h5>
    <form action="" method="POST">
      <div data-mdb-input-init class="form-outline mt-4 mb-4">
            <label class="form-label" for="form3Example3">Username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            name="Username"
              placeholder="Enter a valid Username" />
            
          </div>

          <div data-mdb-input-init class="form-outline mb-3">
           <label class="form-label" for="form3Example4">Password</label> 
           <input type="password" id="form3Example4" class="form-control form-control-lg"
           name="Password"
              placeholder="Enter password" />
            
          </div>

          <div data-mdb-input-init class="form-outline mt-4 mb-4">
            <label class="form-label" for="form3Example3">Nama Lengkap</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            name="NamaLengkap"
              placeholder="Write Your Full Name" />
            
          </div>

          <div data-mdb-input-init class="form-outline mt-4 mb-4">
            <label class="form-label" for="form3Example3">Email</label>
            <input type="Email" id="form3Example3" class="form-control form-control-lg"
            name="Email"
              placeholder="Enter a valid Email" />
            
          </div>

          

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-danger" name="register">Register</button>
          </div>
    </form>
    </div>
  </div>
</div>
<?php 
include "koneksi.php";
//session start();

if (isset($_POST['register'])) {
    $username = $_POST ['Username'];
    $password = $_POST ['Password'];
    $namalengkap = $_POST ['NamaLengkap'];
    $email = $_POST ['Email'];

    //query disimpan dalam var $sql
    $sql = "insert into login (Username, Password, NamaLengkap, Email) 
    values ('$username', '$password', '$namalengkap', '$email')";
    
    //validasi
    //jika query berhasil dieksekusi
    if ($db->query($sql)) {
        header("location: login.php");
    }else{
        echo "data gagal";
    }
}



?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

