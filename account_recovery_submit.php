<?php
session_start();
$_SESSION['email'];

include "database_connection.php";

$account = $_POST["account"];
$email = $_POST["email"];

if (isset($_POST['next'])){
  if (empty($email) || empty($account)) {
    echo "<script>window.location.replace('account_recovery.php')</script>";
    $_SESSION['errMsg'] = "Missing Fields";
  } else {
    if (isset($account)) {
      if ($account == "username") {
        if (isset($email)) {
          if(isset($_POST) & !empty($_POST)){
            $sql = "SELECT email FROM create_account WHERE email='".$email."'";
            $query = mysqli_query($conn,$sql);
            $validuser = mysqli_num_rows($query);
             if($validuser > 0){
	               echo "Send email to user with username";
                 $r = mysqli_fetch_assoc($query);
                 $username = $r['username'];
                 $to = $r['email'];
                 $subject = "Your Recovered Username";
                 $message = "Please use this username to login " . $username;
                 $headers = "From : support@safespace.com";
                 if(mail($to, $subject, $message, $headers)){
   	               $_SESSION['succMsg'] = "An email has been sent to your registered email address";
                  }else{
                    $_SESSION['errMsg'] = "Failed to recover your username, try again";
                  }
             } else {
               $_SESSION['succMsg'] = "An email has been sent to your registered email address";
             }
           }
         }
       }
       if ($account == "password") {
         if (isset($email)) {
           if(isset($_POST) & !empty($_POST)){
             $sql = "SELECT email FROM create_account WHERE email='".$email."'";
             $query = mysqli_query($conn,$sql);
             $validuser = mysqli_num_rows($query);
              if($validuser > 0){
 	               echo "Send email to user with password";
                  $r = mysqli_fetch_assoc($query);
                  $password = $r['password'];
                  $to = $r['email'];
                  $subject = "Your Recovered Password";
                  $message = "Please use this password to login " . $password;
                  $headers = "From : support@safespace.com";
                  if(mail($to, $subject, $message, $headers)){
    	               $_SESSION['succMsg'] = "An email has been sent to your registered email address";
                   }else{
                     $_SESSION['errMsg'] = "Failed to recover your password, try again";
                   }
              } else {
                $_SESSION['succMsg'] = "An email has been sent to your registered email address";
              }
            }
          }
        }
     }
   }
    echo "<script>window.location.replace('account_recovery.php')</script>";
 }

if (isset($_POST['return'])){
  echo "<script>window.location.replace('index.php')</script>";
}
 ?>
