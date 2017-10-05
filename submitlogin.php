<?php
  session_start();

  $usererror = echo "Please enter a valid username";
  $userpassword = echo "Please enter a valid password";

  $username = $_POST('username');
  $password = $_POST('password');

  if (empty($username)) {
    $('#statusmsg') = echo $usererror;
  } elseif (empty($password)) {
    $('#statusmsg') = echo $userpassword;
  }
 ?>
