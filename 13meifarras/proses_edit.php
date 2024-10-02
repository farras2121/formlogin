<?php
    include "koneksi.php";

    if (isset($_POST['ubah'])) {

    $id = $_POST['id'];
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];

    $sql = "UPDATE `login` SET `username` = '$new_username', `password` = '$new_password' WHERE `login`.`id` = $id";

    $edit = $db ->query($sql);

    if($edit) {
        header ("location: dashboard.php");
    } else {
        die('gagal');
    }

    }
?>