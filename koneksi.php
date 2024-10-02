<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "hotel";

// hostname : alamat server database MySQL
// username : nama pengguna utk akses database. isinya default
// pass : kata sandi untuk mengakses database. isinya default
// database_name : nama database yang akan dikoneksikan
$hotel = mysqli_connect($hostname, $username,
 $password, $database_name);

// //validasi jika error 
if ($hotel->connect_error) {
    echo "Koneksi Gagal!";
}
else {

};
// ?>