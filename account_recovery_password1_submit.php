<?php
session_start();
$_SESSION["loggedin"] = "";

include "database_connection.php";

if (isset($_POST['next'])){
  echo "<script>window.location.replace('account_recovery_password2.php')</script>";
}

if (isset($_POST['return'])){
  echo "<script>window.location.replace('account_recovery.php')</script>";
}
 ?>
