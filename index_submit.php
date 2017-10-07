<?php
session_start();
$_SESSION["loggedin"] = "";

$host = "localhost";
$user = "root";
$pass = "root";
$db = "safespace";
$username = $_POST["username"];
$password = $_POST["password"];

$conn = mysqli_connect($host, $user, $pass, $db);

if (isset($_POST['signin'])){
  if (empty($username) || empty($password)) {
    echo "<p style=color:red;>Invalid username or password</p>";
    echo "<script>window.location.replace('index.php')</script>";
  } elseif(!empty($username) || !empty($password)) {
    if (isset($username, $password)) {
      $sql = "SELECT username, password FROM CreateAccount WHERE username='".$username."' && password='".$password."'";
      $query = mysqli_query($conn,$sql);
      if ($query == TRUE) {
        echo "<h3>Account Loggin Success</h3>";
        $_SESSION["loggedin"] = $username;
        //echo "<script>window.location.replace('welcome.php')</script>";
      } else {
        echo "<h3>Account Login Fail</h3>";
        echo "<script>window.location.replace('index.php')</script>";
      }
    }
  }
}

 ?>
