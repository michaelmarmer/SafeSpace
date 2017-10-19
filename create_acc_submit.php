<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "safespace";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

if (isset($_POST['createaccount'])){
  $fields = array($username, $firstname, $lastname, $email, $password, $confirmpassword);
    if (!empty($fields)) {
      if (isset($username)) {
         $sql = "SELECT username FROM createaccount WHERE username='".$username."'";
         $query = mysqli_query($conn,$sql);
         $validuser = mysqli_num_rows($query);
       if ($validuser > 0) {
         $_SESSION['errMsg'] = "User already exists.";
         echo "<script>window.location.replace('createaccount.php')</script>";
       }
     } if (isset($password)) {
         if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*-_]{8,30}$/', $password)) {
           $_SESSION['errMsg'] = "Passwords does not meet the requirements";
           echo "<script>window.location.replace('createaccount.php')</script>";
         } else {
           if ($password != $confirmpassword) {
             $_SESSION['errMsg'] = "Passwords did not match";
             echo "<script>window.location.replace('createaccount.php')</script>";
           } elseif ($password == $confirmpassword) {
            $sql = "INSERT INTO CreateAccount (username, firstname, lastname, email, password)
            VALUES ('".$username."', '".$firstname."', '".$lastname."', '".$email."', '".$password."')";
            echo "$sql";
            $query = mysqli_query($conn,$sql);
             if ($query) {
               $_SESSION['succMsg'] = "Success! Account Created";
               echo "<script>window.location.replace('createaccount.php')</script>";
             }
           }
         }
       }
   } else {
       $_SESSION['errMsg'] = "Missing fields";
       echo "<script>window.location.replace('createaccount.php')</script>";
   }
}

if (isset($_POST['return'])){
echo "<script>window.location.replace('index.php')</script>";
}
 ?>
