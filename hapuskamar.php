<?php
include "koneksi.php";

// query string : ?id=1. query string ini akan tersimpan dalam var _GET

if(isset($_POST['delete'])) {
    $id = $_POST['delete'];


    // buat query hapus
    $sql = "DELETE FROM kamar WHERE Id_kamar=$id";
    $hasil = $hotel->query($sql);

    // apakah query hapus berhasil?
    if ($hasil) {
        echo "<script> alert ('Hapus Data Berhasil');
        document.location='kamar.php';</script>";
    } else {
        die("gagal menghapus...");
    }

}

?>