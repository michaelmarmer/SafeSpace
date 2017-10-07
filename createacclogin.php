<!DOCTYPE html>
 <html><head><title></title></head><body>Another test</body></html>

<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "safespace";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn){
  echo "<h3>Connection Established</h3>";
} else {
  echo "<h3>No Connection Established</h3>";
}

if (isset($_POST['createaccount'])){
$sql = "INSERT INTO CreateAccount (username, firstname, lastname, email, password)
VALUES ('".$_POST["username"]."', '".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["password"]."')";
$query = mysqli_query($conn,$sql);
if ($query == TRUE) {
  echo "<h3>Account Created</h3>";
} else {
  echo "<h3>Account Creation Failed</h3>";
}
}
 ?>
