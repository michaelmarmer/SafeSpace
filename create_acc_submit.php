<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "safespace";
$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

$conn = mysqli_connect($host, $user, $pass, $db);
/*if ($conn){
  echo "<h3>Connection Established</h3>";
} else {
  echo "<h3>No Connection Established</h3>";
}*/

if (isset($_POST['createaccount'])){
  $fields = array($username, $firstname, $lastname, $email, $password, $confirmpassword);
  foreach ($fields as $fieldname) {
    if (!empty($fieldname)) {
        $sql = "INSERT INTO CreateAccount (username, firstname, lastname, email, password)
        VALUES ('".$username."', '".$firstname."', '".$lastname."', '".$email."', '".$password."')";
        $query = mysqli_query($conn,$sql);
        if ($query == TRUE) {
          echo "<h3>Account Created</h3>";
          echo "<script>window.location.replace('index.php')</script>";
        } 
    } else {
        $_SESSION['errMsg'] = "Missing fields";
    }
    header("Location: createaccount.php");
  }
  if ($password != $confirmpassword) {
    $_SESSION['errMsg'] = "Passwords did not match";
  }
}
 ?>
