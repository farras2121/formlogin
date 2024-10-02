<?php
    include "koneksi.php";

    if (isset($_POST['ubah'])) {

    $id = $_POST['id'];
    $new_nama = $_POST['nama'];
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];

    $sql = "UPDATE `admin` SET `Nama` = '$new_nama', `Username` = '$new_username', `Password` = '$new_password' WHERE `admin`.`Id` = 9";
    $edit = $hotel ->query($sql);

    if($edit) {
        echo "<script> alert ('Ubah Data Berhasil');
        document.location='dashboard.php';</script>";
    } else {
        die('gagal');
    }

    }
?>