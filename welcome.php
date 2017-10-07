<?php
  session_start();
  $username = $_POST["username"];
  $_SESSION['loggedin'] == $username;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
    <h1>Welcome! <?php echo $username; ?></h1>
  </body>
</html>
