<?php
    include "koneksi.php";

    if (isset($_POST['ubah'])) {

    $id = $_POST['Id_kamar'];
    $new_jenis_kamar = $_POST['Jenis_kamar'];
    $new_harga = $_POST['Harga'];
    $new_keterangan = $_POST['Keterangan'];

    $sql = "UPDATE `kamar` SET `Jenis_kamar` = '$new_jenis_kamar', `Harga` = '$new_harga', `Keterangan` = '$new_keterangan' WHERE `kamar`.`Id_kamar` = 14";

    $edit = $hotel ->query($sql);

    if($edit) {
        echo "<script> alert ('Ubah Data Berhasil');
        document.location='kamar.php';</script>";
    } else {
        die('gagal');
    }

    }
?>