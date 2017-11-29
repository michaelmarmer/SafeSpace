<?php
session_start();
$_SESSION['username'];

include "database_connection.php";

if (isset($_POST['welcome'])) {
  echo "<script>window.location.replace('welcome.php')</script>";
}
if (isset($_POST['calendar'])) {
  echo "<script>window.location.replace('calendar.php')</script>";
}
if (isset($_POST['editaccount'])) {
  echo "<script>window.location.replace('edit_account.php')</script>";
}
if (isset($_POST['worrydiary'])) {
  echo "<script>window.location.replace('worry_diary.php')</script>";
}
if (isset($_POST['journalentry'])) {
  echo "<script>window.location.replace('joural_entry.php')</script>";
}

if (isset($_POST['logout'])) {
  $_SESSION["loggedin"] = "";
  session_destroy();
  echo "<script>window.location.replace('index.php')</script>";
}


?>
