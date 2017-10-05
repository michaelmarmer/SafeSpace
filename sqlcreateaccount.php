<html>
 <head>
  <title>SQL Server</title>
 </head>
 <body>

<?php
session_start();

$servername = "Local instance 8889";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE SafeSpace";
if ($conn->query($sql) === TRUE) {
  $sql = "CREATE TABLE CreateAccount (
  userID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(30) NOT NULL,
  )";
} else {
    echo "Error creating database: " . $conn->error;
}

if (isset($_POST('createaccount'))) {
  $sql = "INSERT INTO CreateAccount (userID, username, firstname, lastname, email, password)
  VALUES ('', isset($_POST('username')), isset($_POST('firstname')), isset($_POST('lastname')), isset($_POST('email')), isset($_POST('password')))";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();

 ?>

 <script>location.href='http://localhost:8888/MAMP/';</script>

  </body>
 </html>
