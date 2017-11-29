<?php
session_start();
//need to close session out of email

$_SESSION['email'];
include "database_connection.php";

$email = $_POST['email'];
$username = $_POST['username'];
$confirmusername = $_POST['confirmusername'];

if (isset($_POST['update'])){
  if (isset($email)) {
    if (empty($email)) {
      $_SESSION['errMsg'] = "Missing email field";
    } else {
      $sql = "SELECT email FROM create_account WHERE email='".$email."'";
      $query = mysqli_query($conn,$sql);
      $validuser = mysqli_num_rows($query);
        if ($validuser > 0) {
          if (isset($username)) {
            if (empty($username)) {
              $_SESSION['errMsg'] = "Missing username field";
            } else {
              $sql = "SELECT username FROM create_account WHERE username='".$username."'";
              $query = mysqli_query($conn,$sql);
              $validuser = mysqli_num_rows($query);
              if ($validuser > 0) {
                $_SESSION['errMsg'] = "Username is already in use";
              } else {
                if (isset($confirmusername)) {
                  if (empty($confirmusername)) {
                    $_SESSION['errMsg'] = "Missing confirm username field";
                  } else {
                    if ($username == $confirmusername) {
                      $sql = "UPDATE create_account SET username='".$username."' WHERE email='".$email."'";
                      $query = mysqli_query($conn,$sql);
                      if ($query) {
                        echo "<script>window.location.replace('index.php')</script>";
                        $_SESSION['succMsg'] = "Username has been properly updated";
                      } else {
                        $_SESSION['errMsg'] = "Update failed";
                      }
                    }
                    else {
                      $_SESSION['errMsg'] = "Password and Confirm Password do not match";
                    }
                  }
                }
              }
            }
          }
        } else {
          $_SESSION['errMsg'] = "Email not found.";
        }
    }
  }
  echo "<script>window.location.replace('account_recovery_username.php')</script>";
}
 ?>
