<?php
session_start();
//need to close session out of email

$_SESSION['email'];
include "database_connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

if (isset($_POST['update'])){
  if (isset($email)) {
    if (empty($email)) {
      $_SESSION['errMsg'] = "Missing email field";
    } else {
      $sql = "SELECT email FROM create_account WHERE email='".$email."'";
      $query = mysqli_query($conn,$sql);
      $validuser = mysqli_num_rows($query);
        if ($validuser > 0) {
          if (isset($password)) {
            if (empty($password)) {
              $_SESSION['errMsg'] = "Missing password field";
            } else {
              if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*-_]{8,30}$/', $password)) {
                if (isset($confirmpassword)) {
                  if (empty($confirmpassword)) {
                    $_SESSION['errMsg'] = "Missing confirm username field";
                  } else {
                    if ($password == $confirmpassword) {
                      $sql = "UPDATE create_account SET password='".$password."' WHERE email='".$email."'";
                      $query = mysqli_query($conn,$sql);
                      if ($query) {
                        echo "<script>window.location.replace('index.php')</script>";
                        $_SESSION['succMsg'] = "Password has been properly updated";
                      } else {
                        $_SESSION['errMsg'] = "Update failed";
                      }
                    } else {
                      $_SESSION['errMsg'] = "Password and Confirm Password do not match";
                    }
                  }
                }
              } else {
                $_SESSION['errMsg'] = "Password does not meet the requirements";
              }
            }
          }
        } else {
          $_SESSION['errMsg'] = "Email not found.";
        }
      }
    }
  echo "<script>window.location.replace('account_recovery_password.php')</script>";
}
 ?>
