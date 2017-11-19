<?php
session_start();

include "database_connection.php";

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
//need to add to code below
$securityquestion1 = $_POST["securityquestion1"];
$answer1 = $_POST["answer1"];
$securityquestion2 = $_POST["securityquestion2"];
$answer2 = $_POST["answer2"];
$securityquestion3 = $_POST["securityquestion3"];
$answer3 = $_POST["answer3"];
//add to SQL statements
//add to SQL SQL server
//add conditional statements (if 1 question is selected, remove it from other question lists)

if (isset($_POST['createaccount'])) {
  $fields = array($username, $firstname, $lastname, $email, $password, $confirmpassword);
    if (!empty($fields)) {
      if (isset($username)) {
         $sql = "SELECT username FROM create_account WHERE username='".$username."'";
         $query = mysqli_query($conn,$sql);
         $validuser = mysqli_num_rows($query);
       if ($validuser > 0) {
         $_SESSION['errMsg'] = "User '".$username."' already exists.";
       }
     } if (isset($email)) {
        $sql = "SELECT email FROM create_account WHERE email='".$email."'";
        $query = mysqli_query($conn,$sql);
        $validemail = mysqli_num_rows($query);
      if ($validemail > 0) {
        $_SESSION['errMsg'] = "Account with '".$email."' already exists.";
      }
     } if (isset($password)) {
       if (empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)
       || empty($securityquestion1) || empty($securityquestion2) || empty($securityquestion3) || empty($answer1) || empty($answer2) || empty($answer3)) {
         $_SESSION['errMsg'] = "Missing fields";
       } else {
         if ($password != $confirmpassword) {
           $_SESSION['errMsg'] = "Passwords did not match";
         } else {
           if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*-_]{8,30}$/', $password)) {
              $sql = "INSERT INTO create_account (username, first_name, last_name, email, password)
              VALUES ('".$username."', '".$firstname."', '".$lastname."', '".$email."', '".$password."')";
              $query = mysqli_query($conn,$sql);
               if ($query) {
                 $_SESSION['succMsg'] = "Success! Account Created";
               }
           } else {
             $_SESSION['errMsg'] = "Password does not meet the requirements";
           }
         }
       }
     }
   }
   echo "<script>window.location.replace('create_account.php')</script>";
}

if (isset($_POST['return'])){
echo "<script>window.location.replace('index.php')</script>";
}
 ?>
