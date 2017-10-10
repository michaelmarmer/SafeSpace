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
  $fields = array($username, $password);
  foreach ($fields as $fieldname) {
    if (!empty($fieldname)) {
      if (isset($username, $password)) {
      $sql = "SELECT username, password FROM CreateAccount WHERE username='".$username."' && password='".$password."'";
      $query = mysqli_query($conn,$sql);
      if ($query == TRUE) {
        echo "<h3>Account Loggin Success</h3>";
        $_SESSION["loggedin"] = $username;
      }
      header("Location: welcome.php");
      }
    } else {
      $_SESSION['errMsg'] = "Invalid login. Please try again";
    }
    header("Location: index.php");
  }
}
 ?>
