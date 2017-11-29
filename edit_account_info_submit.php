<?php
session_start();
$_SESSION['username'];

include "database_connection.php";

$currentusername = $_POST['currentusername'];
$newusername = $_POST['newusername'];
$currentemail = $_POST['currentemail'];
$newemail = $_POST['newemail'];
$currentpassword = $_POST['currentpassword'];
$newpassword = $_POST['newpassword'];
$confirmpasswordu = $_POST['confirmpasswordu'];
$confirmpassworde = $_POST['confirmpassworde'];
$confirmnewpassword = $_POST['confirmnewpassword'];

if (isset($_POST['return'])) {
  echo "<script>window.location.replace('edit_account.php')</script>";
}

if (isset($_POST['updateusername'])) {
  if (isset($currentusername)) {
    if (empty($currentusername)) {
      $_SESSION['username_errMsg']="Missing Current Username field";
    } else {
      if($currentusername != $_SESSION['username']) {
        $_SESSION['username_errMsg']="Current Username did not match Logged in Username";
      } else {
        if (isset($newusername)) {
          if (empty($newusername)) {
            $_SESSION['username_errMsg']="Missing New Username field";
          } else {
            $sql = "SELECT username FROM create_account WHERE username='".$newusername."'";
            $query = mysqli_query($conn,$sql);
            $validuser = mysqli_num_rows($query);
            if ($validuser > 0) {
              $_SESSION['username_errMsg'] = "Username is already in use";
            } else {
              if (isset($confirmpasswordu)) {
                if (empty($confirmpasswordu)) {
                  $_SESSION['username_errMsg']="Missing Confirm Password field";
                } else {
                  $sql = "SELECT password FROM create_account WHERE username='".$currentusername."' AND password='".$confirmpasswordu."'";
                  $query = mysqli_query($conn,$sql);
                  $validpassword = mysqli_num_rows($query);
                  if ($validpassword > 0) {
                    $sql = "UPDATE create_account SET username='".$newusername."' WHERE username='".$currentusername."'";
                    $query = mysqli_query($conn,$sql);
                    if ($query) {
                      $_SESSION['username'] = $newusername;
                      $_SESSION['username_succMsg'] = "Username has been properly updated";
                    } else {
                      $_SESSION['username_errMsg'] = "Update failed";
                    }
                  } else {
                    $_SESSION['username_errMsg'] = "Password does not match account password";
                  }
                }
              }
            }
          }
        }
      }
    }
  }
  echo "<script>window.location.replace('edit_account_info.php')</script>";
}

if (isset($_POST['updateemail'])) {
  if (isset($currentemail)) {
    if (empty($currentemail)) {
      $_SESSION['email_errMsg']="Missing Current Email field";
    } else {
      if($currentemail != $_SESSION['email']) {
        $_SESSION['email_errMsg']="Current Email did not match Logged in Email";
      } else {
        if (isset($newemail)) {
          if (empty($newemail)) {
            $_SESSION['email_errMsg']="Missing New Email field";
          } else {
            $sql = "SELECT email FROM create_account WHERE email='".$newemail."'";
            $query = mysqli_query($conn,$sql);
            $validuser = mysqli_num_rows($query);
            if ($validuser > 0) {
              $_SESSION['email_errMsg'] = "Email is already in use";
            } else {
              if (isset($confirmpassworde)) {
                if (empty($confirmpassworde)) {
                  $_SESSION['email_errMsg']="Missing Confirm Password field";
                } else {
                  $sql = "SELECT password FROM create_account WHERE email='".$currentemail."' AND password='".$confirmpassworde."'";
                  $query = mysqli_query($conn,$sql);
                  $validpassword = mysqli_num_rows($query);
                  if ($validpassword > 0) {
                    $sql = "UPDATE create_account SET email='".$newemail."' WHERE email='".$currentemail."'";
                    $query = mysqli_query($conn,$sql);
                    if ($query) {
                      $_SESSION['email_succMsg'] = "Email has been properly updated";
                    } else {
                      $_SESSION['email_errMsg'] = "Update failed";
                    }
                  } else {
                    $_SESSION['email_errMsg'] = "Password does match account password";
                  }
                }
              }
            }
          }
        }
      }
    }
  }
  echo "<script>window.location.replace('edit_account_info.php')</script>";
}

if (isset($_POST['updatepassword'])) {
  if (isset($currentpassword)) {
    if (empty($currentpassword)) {
      $_SESSION['password_errMsg']="Missing Current Password field";
    } else {
      if($currentpassword != $_SESSION['username']) {
        $_SESSION['password_errMsg']="Current Password did not match Logged in Password";
      } else {
        if (isset($newpassword)) {
          if (empty($newpassword)) {
            $_SESSION['password_errMsg']="Missing New Password field";
          } else {
            if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*-_]{8,30}$/', $newpassword)) {
              if (isset($confirmnewpassword)) {
                if (empty($confirmnewpassword)) {
                  $_SESSION['password_errMsg'] = "Missing confirm password field";
                } else {
                  if ($newpassword == $confirmnewpassword) {
                    $sql = "UPDATE create_account SET password='".$newpassword."' WHERE password='".$currentpassword."'";
                    $query = mysqli_query($conn,$sql);
                    if ($query) {
                      $_SESSION['password_succMsg'] = "Password has been properly updated";
                    } else {
                      $_SESSION['password_errMsg'] = "Update failed";
                    }
                  } else {
                    $_SESSION['password_errMsg'] = "Password and Confirm Password do not match";
                  }
                }
              }
            } else {
              $_SESSION['password_errMsg'] = "Password does not meet the requirements";
            }
          }
        }
      }
    }
  }
  echo "<script>window.location.replace('edit_account_info.php')</script>";
}


?>
