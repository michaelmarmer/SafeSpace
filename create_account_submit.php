<?php
session_start();

include "database_connection.php";

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

if (isset($_POST['createaccount'])) {
  if (isset($email)) {
    if (empty($email)) {
      $_SESSION['errMsg'] = "Missing Email Field";
    } else {
      $sql = "SELECT email FROM create_account WHERE email='".$email."'";
      $query = mysqli_query($conn,$sql);
      $emailexist = mysqli_num_rows($query);
        if ($emailexist > 0) {
          $_SESSION['errMsg'] = "Email is already in use";
        } else {
          if (isset($username)) {
            if (empty($username)) {
              $_SESSION['errMsg'] = "Missing Username Field";
            } else {
              $sql = "SELECT username FROM create_account WHERE username='".$username."'";
              $query = mysqli_query($conn,$sql);
              $validuser = mysqli_num_rows($query);
                if ($validuser > 0) {
                  $_SESSION['errMsg'] = "Username is already in use";
                } else {
                  if (isset($firstname)) {
                    if (empty($firstname)) {
                      $_SESSION['errMsg'] = "Missing First Name Field";
                    } else {
                      if (isset($lastname)) {
                        if (empty($lastname)) {
                          $_SESSION['errMsg'] = "Missing Last Name Field";
                        } else {
                          if (isset($password)) {
                            if (empty($password)){
                              $_SESSION['errMsg'] = "Missing Password Field";
                            } else {
                              if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*-_]{8,30}$/', $password)) {
                                if (isset($confirmpassword)) {
                                  if (empty($confirmpassword)) {
                                    $_SESSION['errMsg'] = "Missing Confirm Password Field";
                                  } else {
                                    if ($password != $confirmpassword) {
                                      $_SESSION['errMsg'] = "Passwords did not match";
                                    } else {
                                      $sql = "INSERT INTO create_account (username, password)
                                      VALUES ('".$username."', '".$password."')";
                                      $query = mysqli_query($conn,$sql);
                                       if ($query) {
                                         $_SESSION['succMsg'] = "Success! Account Created";
                                       }
                                    }
                                  }
                                }
                              } else {
                                $_SESSION['errMsg'] = "Password does not meet the requirements";
                              }
                           }
                         }
                        }
                      }
                    }
                  }
               }
             }
           }
         }
       }
   echo "<script>window.location.replace('create_account.php')</script>";
  }
}

if (isset($_POST['return'])){
echo "<script>window.location.replace('index.php')</script>";
}
 ?>
