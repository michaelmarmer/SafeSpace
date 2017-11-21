<?php
session_start();
$_SESSION["loggedin"] = $username;

include "database_connection.php";

if (isset($_POST['return'])) {
  echo "<script>window.location.replace('welcome.php')</script>";
}
if (isset($_POST['personal'])) {
  echo "<script>window.location.replace('edit_personal_info.php')</script>";
}
if (isset($_POST['account'])) {
  echo "<script>window.location.replace('edit_account_info.php')</script>";
}
if (isset($_POST['security'])) {
  echo "<script>window.location.replace('edit_security_info.php')</script>";
}


?>
