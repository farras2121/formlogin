<?php

if ($_SESSION['Username'] == null) {
    header('location: login.php');
    exit();
  }

session_start();
session_destroy();

echo "<script> alert ('berhasil logout');
    document.location='login.php';</script>";

   
    ?>