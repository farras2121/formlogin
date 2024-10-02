<?php 
     include "header.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      a {
        text-decoration:none;
        color:white;
      }
    </style>
</head>

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-header">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
   

    </div>
  </div>
</nav>
<br><br>
<div class="container">

  <hr>
  <center><h1>Data Admin</h1></center>
  <hr>
  <br>
  <button type="button" class="btn btn-success"><a href="admin.php">tambahkan data admin</a></button><br>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
  
      <?php 
      $query = "SELECT * FROM admin";
      // Mengurutkan dari yang terbantu
      $hasil = $hotel->query($query);
      $no = 1;
  
      foreach ($hasil as $row) {
      ?>
  
      <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['Nama']; ?></td>
          <td><?php echo $row['Username']; ?></td>
          <td><?php echo $row['Password']; ?></td>
  
          <td> <a class="btn btn-info badge p-2"
          href="edit.php?id=<?php echo $row['Id']?>"><b>Edit</b></a>
  
               <a class="btn btn-danger" data-bs-toggle="modal" 
               data-bs-target="#exampleModal<?= $no?>"><b>Delete</b></a>
          </td>
      </tr>
  
  
      <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal<?= $no?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body">
         Apakah anda yakin akan menghapus data ini?
         <br>
         username: <a style="color: red"><?= $row["Username"]?></a>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form method="post" action="hapus.php">
            <input type="hidden" name="delete" value="<?php echo $row['Id']; ?>">
            <button type="submit" class="btn btn-danger" >Ya,Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
      <?php 
      }
      ?>
  
    
  </table>
</div><br>
<div class="p-3 mb-2 bg-primary text-white"><b>XPRO</b>HOTEL</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>