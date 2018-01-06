<?php
session_start();
$_SESSION['username'];

include "database_connection.php";

if (isset($_POST['return'])) {
  echo "<script>window.location.replace('welcome.php')</script>";
}
if (isset($_POST['newentry'])) {
  echo "<script>window.location.replace('journal_entry.php')</script>";
}

?>
