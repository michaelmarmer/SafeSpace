<?php
session_start();
$_SESSION['username'];

include "database_connection.php";

$username = $_SESSION['username'];
$title = $_POST["title"];
$dates = $_POST["dates"];
$entry = $_POST["entry"];

if (isset($_POST['return'])) {
  echo "<script>window.location.replace('welcome.php')</script>";
}

//functions dont exist in yes post, need to find a way to store it first
if (isset($_POST['addentry'])) {
  if (isset($title)) {
    if (empty($title)) {
      $_SESSION['errMsg'] = "Please enter a title name";
    } else {
      if (isset($dates)) {
        if (empty($dates)) {
          $_SESSION['errMsg'] = "Please enter a date";
        } else {
          if (isset($entry)) {
            if (empty($entry)) {
              $_SESSION['errMsg'] = "Please enter an entry in the textbox provided";
            } else {
              $sql = "SELECT username FROM create_account WHERE username = $username";
              $query = mysqli_query($conn,$sql);
              if ($query) {
                $sql = "INSERT INTO journal_entry (username, journal_title, dates, entry)
                VALUES ('".$username."', '".$title."', '".$dates."', '".$entry."')";
                $query = mysqli_query($conn,$sql);
                 if ($query) {
                   $_SESSION['succMsg'] = "Success! Entry Added";
                 } else {
                   $_SESSION['errMsg'] = "Failed to add entry";
                 }
              }
            }
          }
        }
      }
    }
  }
  echo "<script>window.location.replace('journal_entry.php')</script>";
}

?>
