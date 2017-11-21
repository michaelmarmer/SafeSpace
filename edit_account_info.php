<?php
  session_start();
  $_SESSION["loggedin"] = $username;

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
    <form action="edit_personal_info_submit.php" method="post" class="form-horizontal" role="form">
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
          <input type="text" class="form-control" id="password" name="password" placeholder="enter password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="update" id="update" class="btn btn-primary">Update</button>
      </div>

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
          <input type="text" class="form-control" id="password" name="password" placeholder="enter password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="update" id="update" class="btn btn-primary">Update</button>
      </div>

      <hr>

      <div class="form-group">
        <h5 id="information">Update Password</h5>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="current-password">Current Password</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="currentpassword" name="currentpassword" placeholder="enter current password">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="new-password">New Password</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="newpassword" name="newpassword" placeholder="enter new password">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="confirmpassword">Password Confirm</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="password" name="password" placeholder="re-enter new password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="update" id="update" class="btn btn-primary">Update</button>
      </div>

      <br>
      <br>

      <div class="text-danger lead text-center" style="color:red;" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
      <?php unset($_SESSION['errMsg']); ?>
      <div class="text-danger lead text-center" style="color:green;" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
      <?php unset($_SESSION['succMsg']); ?>
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
      font-size: 18px;
      color: white;
      margin-top: 3px;
      margin-left: 15px;
    }
    #currentusername {
      color: white;
      font-size: 15px;
      margin-left: 20px;
      margin-top: 5px;
    }
    #new-username {
      font-size: 18px;
      color: white;
      margin-top: 3px;
      margin-left: 15px;
    }
    #newusername {
      color: white;
      font-size: 15px;
      margin-left: 20px;
      margin-top: 5px;
    }
    #current-email {
      font-size: 18px;
      color: white;
      margin-top: 3px;
      margin-left: 15px;
    }
    #currentemail {
      color: white;
      font-size: 15px;
      margin-left: 20px;
      margin-top: 5px;
    }
    #new-email {
      font-size: 18px;
      color: white;
      margin-top: 3px;
      margin-left: 15px;
    }
    #newemail {
      color: white;
      font-size: 15px;
      margin-left: 20px;
      margin-top: 5px;
    }
    #current-password {
      font-size: 18px;
      color: white;
      margin-top: 3px;
      margin-left: 15px;
    }
    #currentpassword {
      color: white;
      font-size: 15px;
      margin-left: 20px;
      margin-top: 5px;
    }
    #new-password {
      font-size: 18px;
      color: white;
      margin-top: 3px;
      margin-left: 15px;
    }
    #newpassword {
      color: white;
      font-size: 15px;
      margin-left: 20px;
      margin-top: 5px;
    }
    #confirmpassword {
      color: white;
      font-size: 18px;
      margin-left: 20px;
    }
    #password {
      font-size: 15px;
      color: white;
      margin-top: 5px;
      margin-left: 15px;
    }
    #update {
      margin-left: 80px;
      background-color: #4d88ff;
      border-color: white;
      border-width: thin;
    }
    #update:hover {
      color: #333333;
      border-color: #333333;
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
  </style>
  <script type="text/javascript">
    $('.dropdown-toggle').dropdown();
    $('#dropdown-menu li').on('click', function() {
      $('#dropdown-list').html($(this).find('a').html());
    });
  </script>
</html>
