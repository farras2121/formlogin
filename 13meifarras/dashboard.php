<?php 
include "koneksi.php";
session_start();

if (isset($_POST['logout'])) {
    session_destroy(); //menghapus sesi
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD DATA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Admin</a>
        </li>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beasiswa</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex" role="search" method="POST">
        
      <h5 class="mt-1 me-3">Selamat Datang</h5>
             <?=$_SESSION["username"] ?>

        <button class="btn btn-outline-success" type="submit" name="logout">Logout</button>
      </form>
    </div>
  </div>
</nav>
<br><br>
<center><h1>Data Admin</h1></center>
<hr>

<button type="button" class="btn btn-success"><a href="admin.php">tambahkan data admin</a></button><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">waktu</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>

    <?php 
    $query = "SELECT * FROM login";
    // Mengurutkan dari yang terbantu
    $hasil = $db->query($query);
    $no = 1;

    foreach ($hasil as $row) {
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['waktu']; ?></td>
        <td> <a class="btn btn-info badge p-2"
        href="edit.php?id=<?php echo $row['id']?>"> Edit</a>

             <a class="btn btn-danger badge p-2"
             href="hapus.php?id=<?php echo $row['id']; ?>"> Delete</a>
        </td>
    </tr>

    <?php 
    }
    ?>

  
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>