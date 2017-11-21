<?php
session_start();
$_SESSION["loggedin"] = "";

include "database_connection.php";

$username = $_POST["username"];
$password = $_POST["password"];

if (isset($_POST['signin'])){
  $fields = array($username, $password);
  foreach ($fields as $fieldname) {
    if (!empty($fieldname)) {
      if (isset($username, $password)) {
      $sql = "SELECT username, password FROM create_account WHERE username='".$username."' AND password='".$password."'";
      $query = mysqli_query($conn,$sql);
      $validuser = mysqli_num_rows($query);
        if ($validuser > 0) {
          $_SESSION["loggedin"] = $username;
          echo "<script>window.location.replace('welcome.php')</script>";
        } else {
          $_SESSION['errMsg'] = "User not found.";
          echo "<script>window.location.replace('index.php')</script>";
        }
      }
    } else {
      $_SESSION['errMsg'] = "Invalid login. Please try again";
      echo "<script>window.location.replace('index.php')</script>";
    }
  }
}
 ?>
