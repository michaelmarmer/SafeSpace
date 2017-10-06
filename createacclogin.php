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
echo "<h3>Button Test</h3>";
$username = $_POST('username');
$firstname = $_POST('firstname');
$lastname = $_POST('lastname');
$email = $_POST('email');
$password = $_POST('password');

$sql = "INSERT INTO CreateAccount (username, firstname, lastname, email, password)
VALUES ('$username', '$firstname', '$lastname', '$email', '$password')";
if ($conn->query($sql) == TRUE) {
  echo "<h3>Data inserted succesfully</h3>";
} else {
  echo "<h3>Data not inserted succesfully</h3>";
}
$conn->close();
}
 ?>
