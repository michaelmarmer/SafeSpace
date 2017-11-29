<?php
session_start();
$_SESSION['username'];

include "database_connection.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];


if (isset($_POST['return'])) {
  echo "<script>window.location.replace('edit_account.php')</script>";
}

if (isset($_POST['update'])) {
  if (isset($firstname)) {
    if (empty($firstname)) {
      $_SESSION['errMsg']="Missing first name field";
    } else {
      if (isset($password)) {
        if (empty($password)) {
          $_SESSION['errMsg']="Missing password field";
        } else {
          if ($password != $_SESSION['username']) {
            $_SESSION['errMsg']="Current Password did not match Logged in Password";
          } else {
            $sql = "UPDATE create_account SET firstname='".$firstname."' WHERE password='".$password."'";
            $query = mysqli_query($conn,$sql);
            if ($query) {
              $_SESSION['succMsg'] = "First Name has been properly updated";
            } else {
              $_SESSION['errMsg'] = "Update failed";
            }
          }
        }
      }
    }
  }
  echo "<script>window.location.replace('edit_personal_info.php')</script>";
}

?>
