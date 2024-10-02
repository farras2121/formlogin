<?php
   include "koneksi.php";

?>

<html>
<body>
    <nav class="container navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>XPRO</b> HOTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="beranda.php">Admin</a>
        </li> -->

      

        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
        </li>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Admin</a>
        </li>  

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="kamar.php">Kamar</a>
        </li>

        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="penyewa.php">Penyewa</a>
        </li> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pemesanan.php">Transaksi</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">
        </li>
      </ul>

      
      <form role="search" method="POST">
        <a class="btn btn-outline-danger" name="logout" href="logout.php">logout</a>
      </form>


</div>
</body>
</html>