<?php
  session_start();
  $_SESSION['username'];

  if (!$_SESSION['username']) {
    echo "<script>window.location.replace('index.php')</script>";
    $_SESSION['errMsg'] = "Please login";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Edit Personal Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form action="edit_personal_info_submit.php" method="post" class="form-horizontal" role="form">
      <nav class="navbar navbar-inverse" id="menubar">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
              <button name="return" id="return" class="btn btn-primary navbar-brand"><i class="fa fa-arrow-circle-left"></i></button>
              <a class="navbar-brand" id="editpersonal">Edit Personal Information</a>
            </ul>
          </div>
        </div>
      </nav>
      <div class="form-group">
        <h5 id="information">You can edit your First Name, Last Name, or both fields. Enter your current password to confirm changes.</h5>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="firstlabel">Update First Name</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter first name">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="lastlabel">Update Last Name</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="enter last name">
        </div>
      </div>
      <hr>
      <div class="form-group">
        <label class="control-label col-sm-2" id="confirmpassword">Password Confirm</label>
        <div class="col-sm-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="enter password" data-toggle="password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="update" id="update" class="btn btn-primary">Update</button>
      </div>

      <div class="text-danger lead text-center" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
      <?php unset($_SESSION['errMsg']); ?>
      <div class="text-danger lead text-center" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
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
      margin-left: -10px;
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
    #editpersonal {
      font-size: 20px;
      color: white;
      background-color: #333333;
      border-color: #333333;
      margin-top: 3px;
      margin-left: 15px;
    }
    #firstlabel {
      color: white;
    }
    #lastlabel {
      color: white;
    }
    #confirmpassword {
      color: white;
    }
    #update {
      margin-left: 60px;
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
    }
    hr {
      clear:both;
      display:block;
      width: 110%;
      margin-left: -20px;
      background-color: white;
      height: .5px;
    }
    body {
      background-color: gray;
    }
    #errMsg {
      color: red;
      font-weight: 400;
    }
    #succMsg {
      color: green;
      font-weight: 400;
    }
  </style>
  <script type="text/javascript">
  $("#password").password('toggle');
    $('.dropdown-toggle').dropdown();
    $('#dropdown-menu li').on('click', function() {
      $('#dropdown-list').html($(this).find('a').html());
    });
  </script>
</html>
