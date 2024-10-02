<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "db_beasiswa";

// hostname : alamat server database MySQL
// username : nama pengguna utk akses database. isinya default
// pass : kata sandi untuk mengakses database. isinya default
// database_name : nama database yang akan dikoneksikan
$db = mysqli_connect($hostname, $username,
 $password, $database_name);

// //validasi jika error 
// if ($db->connect_error) {
//     echo "Koneksi Gagal!";
// }
// else {
// echo "Koneksi berhasil";
// };
// ?>