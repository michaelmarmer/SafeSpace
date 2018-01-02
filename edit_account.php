<?php
session_start();
$_SESSION['username'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <form action="edit_account_submit.php" method="post" class="form-horizontal" role="form">
      <nav class="navbar navbar-inverse" id="menubar">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
              <button name="return" id="return" class="btn btn-primary navbar-brand"><</button>
              <a class="navbar-brand" id="editaccount">Edit Account</a>
            </ul>
          </div>
        </div>
      </nav>
      <div class="form-group">
        <button name="personal" id="personal" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span><br>Edit Personal Information</button>
        <button name="account" id="account" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span><br>Edit Account Information</button>
      </div>
    </form>
  </body>

  <style media="screen">
    #personal {
      margin-left: 110px;
      margin-right: 10px;
      height: 685px;
      width: 600px;
      font-size: 30px;
      background-color: #99bbff;
      border-color: white;
      border-width: medium;
    }
    #personal:hover {
      color: #333333;
      border-color: #333333;
    }
    #personal:focus {
      outline: 0;
      color: #333333;
      border-color: #333333;
    }
    #personal:active {
      background-color: #99bbff;
      border-color: white;
      color: white;
    }
    #account {
      margin-right: 10px;
      height: 685px;
      width: 600px;
      font-size: 30px;
      background-color: #99bbff;
      border-color: white;
      border-width: medium;
    }
    #account:hover {
      color: #333333;
      border-color: #333333;
    }
    #account:focus {
      outline: 0;
      color: #333333;
      border-color: #333333;
    }
    #account:active {
      background-color: #99bbff;
      border-color: white;
      color: white;
    }
    #menubar {
      background-color: #333333;
      border-color: #333333;
    }
    #return {
      font-size: 25px;
      color: #a6a6a6;
      background-color: #333333;
      border-color: #333333;
    }
    #return:focus {
      outline: 0;
      border: none;
    }
    #return:hover {
      color: white;
    }
    #return:active {
      color: #a6a6a6;
    }
    #editaccount {
      font-size: 20px;
      color: white;
      background-color: #333333;
      border-color: #333333;
      margin-top: 3px;
      margin-left: 15px;
    }
    body {
      background-color: gray;
    }
  </style>
  <script type="text/javascript">

  </script>
</html>
