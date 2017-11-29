<?php
session_start();
$_SESSION['username'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Edit Account Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
  </head>
  <body>
    <form action="edit_account_info_submit.php" method="post" class="form-horizontal" role="form">
      <nav class="navbar navbar-inverse" id="menubar">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
              <button name="return" id="return" class="btn btn-primary navbar-brand"><</button>
              <a class="navbar-brand" id="editaccount">Edit Account Information</a>
            </ul>
          </div>
        </div>
      </nav>
      <div class="form-group">
        <h5 id="information">Update Username</h5>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="current-username">Current Username</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="currentusername" name="currentusername" placeholder="enter current userame">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="new-username">New Username</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="newusername" name="newusername" placeholder="enter new username">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="confirmpassword">Password Confirm</label>
        <div class="col-sm-3">
          <input type="password" class="form-control" id="password" name="confirmpasswordu" placeholder="enter password" data-toggle="password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="updateusername" id="update" class="btn btn-primary">Update</button>
      </div>


      <div class="text-danger lead text-center" id="username_errMsg"> <?php if(!empty($_SESSION['username_errMsg'])) { echo $_SESSION['username_errMsg']; } ?> </div>
      <?php unset($_SESSION['username_errMsg']); ?>
      <div class="text-danger lead text-center" id="username_succMsg"> <?php if(!empty($_SESSION['username_succMsg'])) { echo $_SESSION['username_succMsg']; } ?> </div>
      <?php unset($_SESSION['username_succMsg']); ?>

      <hr>

      <div class="form-group">
        <h5 id="information">Update Email</h5>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="current-email">Current Email</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="currentemail" name="currentemail" placeholder="enter current email">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="new-email">New Email</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="newemail" name="newemail" placeholder="enter new email">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="confirmpassword">Password Confirm</label>
        <div class="col-sm-3">
          <input type="password" class="form-control" id="password" name="confirmpassworde" placeholder="enter password" data-toggle="password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="updateemail" id="update" class="btn btn-primary">Update</button>
      </div>

      <div class="text-danger lead text-center" id="email_errMsg"> <?php if(!empty($_SESSION['email_errMsg'])) { echo $_SESSION['email_errMsg']; } ?> </div>
      <?php unset($_SESSION['email_errMsg']); ?>
      <div class="text-danger lead text-center" id="email_succMsg"> <?php if(!empty($_SESSION['email_succMsg'])) { echo $_SESSION['email_succMsg']; } ?> </div>
      <?php unset($_SESSION['email_succMsg']); ?>

      <hr>

      <div class="form-group">
        <h5 id="information">Update Password</h5>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="current-password">Current Password</label>
        <div class="col-sm-3">
          <input type="password" class="form-control" id="currentpassword" name="currentpassword" placeholder="enter current password" data-toggle="password">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="new-password">New Password</label>
        <div class="col-sm-3">
          <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="enter new password" data-toggle="password">
        </div>
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="helpbutton">?
          <span></span></button>
            <ul class="dropdown-menu" id="help">
              <h6>Password Requirements:</h6>
              <li><a>Must be 8-30 characters long</a></li>
              <li><a>Must have 1 special character</a></li>
              <li><a>Must have 1 number</a></li>
            </ul>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="confirmpassword">Password Confirm</label>
        <div class="col-sm-3">
          <input type="password" class="form-control" id="password" name="confirmnewpassword" placeholder="re-enter new password" data-toggle="password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="updatepassword" id="update" class="btn btn-primary">Update</button>
      </div>

      <div class="text-danger lead text-center" id="password_errMsg"> <?php if(!empty($_SESSION['password_errMsg'])) { echo $_SESSION['password_errMsg']; } ?> </div>
      <?php unset($_SESSION['password_errMsg']); ?>
      <div class="text-danger lead text-center" id="password_succMsg"> <?php if(!empty($_SESSION['password_succMsg'])) { echo $_SESSION['password_succMsg']; } ?> </div>
      <?php unset($_SESSION['password_succMsg']); ?>

    </form>
  </body>

  <style media="screen">
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
    #current-username {
      color: white;
      margin-left: 20px;
    }
    #new-username {
      color: white;
      margin-left: 20px;
    }
    #current-email {
      color: white;
      margin-left: 20px;
    }
    #new-email {
      color: white;
      margin-left: 20px;
    }
    #current-password {
      color: white;
      margin-left: 20px;
    }
    #new-password {
      color: white;
      margin-left: 20px;
    }

    #confirmpassword {
      color: white;
      margin-left: 20px;
    }

    #update {
      margin-left: 80px;
      background-color: #4d88ff;
      border-color: white;
      border-width: thin;
    }
    #update:focus {
      outline: 0;
    }
    #update:hover {
      border-color:  #333333;
      color:  #333333;
    }
    #update:active {
      background-color: #4d88ff;
      border-color: white;
      color: white;
    }
    #information {
      margin-left: 40px;
      color: #333333;
      font-size: 20px;
      margin-top: -2.5px;
      margin-bottom: -2.5px;
    }
    body {
      background-color: gray;
    }
    hr {
      clear:both;
      display:block;
      width: 110%;
      margin-left: -20px;
      background-color: white;
      height: .5px;
    }
    #editaccount {
      font-size: 20px;
      color: white;
      background-color: #333333;
      border-color: #333333;
      margin-top: 3px;
      margin-left: 15px;
    }
    #username_errMsg {
      color: red;
      font-weight: 400;
    }
    #username_succMsg {
      color: green;
      font-weight: 400;
    }
    #email_errMsg {
      color: red;
      font-weight: 400;
    }
    #email_succMsg {
      color: green;
      font-weight: 400;
    }
    #password_errMsg {
      color: red;
      font-weight: 400;
    }
    #password_succMsg {
      color: green;
      font-weight: 400;
    }
    #helpbutton {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 2px 0;
      font-size: 15px;
      line-height: 1.428571429;
      border-radius: 15px;
      background-color: gray;
      border-color: white;
      margin-top: 2px;
    }
    #helpbutton:focus {
      outline: 0;
    }
    #helpbutton:active {
      border-color:  #333333;
      color:  #333333;
    }
    #help {
      padding-left: 10px;
      margin-left: 650px;
      margin-top: -150px;
      width: 300px;
      background-color: gray;
      color: white;
      border: 0;
    }
    #help > li > a {
      color: white;
    }
    .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
      background-color:gray;
    }
  </style>
  <script type="text/javascript">
    $("#password").password('toggle');

    $('.dropdown-toggle').dropdown();
    $('#help li').on('click', function() {
      $('#dropdown_title').html($(this).find('a').html());
    });
  </script>
</html>
