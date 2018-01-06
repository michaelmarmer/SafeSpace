<?php
session_start();
$_SESSION['username'];

include "database_connection.php";

$username = $_SESSION['username'];
//need names for post values

if (isset($_POST['return'])) {
  echo "<script>window.location.replace('worry_diary_log.php')</script>";
}

if (isset($_POST['addentry'])) {
  //need functionality
  echo "<script>window.location.replace('worry_diary_log.php')</script>";
}
