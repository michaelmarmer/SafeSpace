<?php
session_start();
$_SESSION["loggedin"] = "";

include "database_connection.php";

$account = $_POST["account"];
$email = $_POST["email"];

if (isset($_POST['next'])){
  if (empty($email) || empty($account)) {
    echo "<script>window.location.replace('account_recovery.php')</script>";
    $_SESSION['errMsg'] = "Missing Fields";
  } else {
    if (isset($account)) {
      if ($account == "username") {
        if (isset($email)) {
          $sql = "SELECT email FROM create_account WHERE email='".$email."'";
          $query = mysqli_query($conn,$sql);
          $validemail = mysqli_num_rows($query);
            if ($validemail > 0) {
              $_SESSION["loggedin"] = $email;
              echo "<script>window.location.replace('account_recovery_username1.php')</script>";
            } else {
              echo "<script>window.location.replace('account_recovery.php')</script>";
              $_SESSION['errMsg'] = "Email not found";
            }
          }
        }
      }
      if ($account == "password") {
        if (isset($email)) {
          $sql = "SELECT email FROM create_account WHERE email='".$email."'";
          $query = mysqli_query($conn,$sql);
          $validemail = mysqli_num_rows($query);
            if ($validemail > 0) {
              $_SESSION["loggedin"] = $email;
              echo "<script>window.location.replace('account_recovery_password1.php')</script>";
            } else {
              echo "<script>window.location.replace('account_recovery.php')</script>";
              $_SESSION['errMsg'] = "Email not found";
            }
          }
        }
      }
}

if (isset($_POST['return'])){
  echo "<script>window.location.replace('index.php')</script>";
}
 ?>
