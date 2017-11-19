<?php
session_start();
$_SESSION["loggedin"] = "";

include "database_connection.php";

if (isset($_POST['save'])){
    echo "<script>window.location.replace('index.php')</script>";
}

if (isset($_POST['return'])){
  echo "<script>window.location.replace('account_recovery_username1.php')</script>";
}
 ?>
