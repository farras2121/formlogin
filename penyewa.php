<?php
include "koneksi.php";
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


<div class="container">
<hr>
    <center><h3>Data Penyewa</h3><center>
    <hr>

        <table class="table text-center">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>No Identitas</th>
                    <th>No Hp</th>
                    <th>Jenis Kamar</th>
                    <th>Check in</th>
                    <th>Check out</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT penyewa.Nama, penyewa.No_identitas, penyewa.No_hp, kamar.Jenis_kamar, kamar.Harga,
            penyewa.Checkin, penyewa.Checkout, penyewa.Jumlah, penyewa.Total
                        FROM penyewa INNER JOIN kamar
                        ON penyewa.Id_kamar = kamar.Id_kamar";
            $hasil = mysqli_query($hotel, $sql);
            $no = 1;

            foreach ($hasil as $row) {
            ?>
            
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['Nama']; ?></td>
                    <td><?php echo $row['No_identitas']; ?></td>
                    <td><?php echo $row['No_hp']; ?></td>
                    <td><?php echo $row['Jenis_kamar']; ?></td>
                    <td><?php echo $row['Checkin']; ?></td>
                    <td><?php echo $row['Checkout']; ?></td>
                    <td><?php echo $row['Jumlah']; ?></td>
                    <td><?php echo number_format($row['Total']); ?></td>

                </tr>

            <?php
            }
            ?>
    </div>
        </div><br>
        <div class="p-3 mb-2 bg-primary text-white"><b>XPRO</b>HOTEL</div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
