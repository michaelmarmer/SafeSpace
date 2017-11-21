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
          <input type="text" class="form-control" id="password" name="password" placeholder="enter password">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="update" id="update" class="btn btn-primary">Update</button>
      </div>

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
      font-size: 20px;
      margin-left: 20px;
    }
    #firstname {
      margin-top: 5px;
      font-size: 15px;
    }
    #lastlabel {
      color: white;
      font-size: 20px;
      margin-left: 20px;
    }
    #lastname {
      margin-top: 5px;
      font-size: 15px;
    }
    #confirmpassword {
      color: white;
      font-size: 20px;
      margin-left: 20px;
    }
    #password {
      margin-top: 5px;
      font-size: 15px;
    }
    #update {
      margin-left: 65px;
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
  </style>
  <script type="text/javascript">
    $('.dropdown-toggle').dropdown();
    $('#dropdown-menu li').on('click', function() {
      $('#dropdown-list').html($(this).find('a').html());
    });
  </script>
</html>
