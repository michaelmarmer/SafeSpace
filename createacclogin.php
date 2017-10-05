 <!DOCTYPE html>
<?php
if ($_POST('createaccount')) {
  $username = $_POST('username');
  $firstname = $_POST('firstname');
  $lastname = $_POST('lastname');
  $email = $_POST('email');
  $password = $_POST('password');

  $servername = "Local instance 8889";
  $username = "root";
  $password = "root";
  $db = "safespace";

  $conn = mysqli_connect($servername, $username, $password, $db);
  if($conn){
    echo 'connected successfully';
  }

  $sql = "INSERT INTO CreateAccount (username, firstname, lastname, email, password)
  VALUES ('$username', '$firstname', '$lastname', '$email', '$password')";
  $query = mysqli_query($conn, $sql)
  if ($query){
    echo 'data inserted successfully';
  }
  header("refresh:2; url=index.php");
}
 ?>
