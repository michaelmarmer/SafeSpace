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
    <form action="welcome_submit.php" method="post" class="form-horizontal" role="form">
      <nav class="navbar navbar-inverse" id="menubar">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
              <a id="welcome" class="navbar-brand" href="">Welcome <?php echo $_SESSION['username']; ?></a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <a class="dropdown-toggle form-control" id="dropdown" name="dropdown" data-toggle="dropdown">
                <i class="icon icon-envelope icon-white"></i><span class="glyphicon glyphicon-align-justify" id="dropdown-menu"></span></a>
                <ul ID="dropdown-list" class="dropdown-menu">
                  <li><button name="logout" id="logout" class="btn btn-primary">logout</button></li>
                </ul>
            </ul>
          </div>
        </div>
      </nav>
      <div class="form-group">
        <button name="calendar" id="calendar" class="btn btn-primary"><span class="glyphicon glyphicon-calendar"></span><br>Calendar</button>
        <button name="editaccount" id="editaccount" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span><br>Edit Account</button>
      </div>

      <div class="form-group">
        <button name="worrydiary" id="worrydiary" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span><br>Worry Diary</button>
        <button name="journalentry" id="journalentry" class="btn btn-primary"><span class="glyphicon glyphicon-book"></span><br>Journal Entry</button>
      </div>
    </form>
  </body>

  <style media="screen">
    #calendar {
      margin-top: -10px;
      margin-left: 100px;
      height: 350px;
      width: 600px;
      font-size: 40px;
      background-color: #99bbff;
      border-color: white;
      border-width: medium;
      color: white;
    }
    #calendar:hover {
      color: #333333;
      border-color: #333333;
    }
    #calendar:focus {
      outline: 0;
      color: #333333;
      border-color: #333333;
    }
    #calendar:active {
      background-color: #99bbff;
      border-color: white;
      color: white;
    }
    #editaccount {
      margin-top: -10px;
      height: 350px;
      width: 600px;
      font-size: 40px;
      background-color: #99bbff;
      border-color: white;
      border-width: medium;
    }
    #editaccount:hover {
      color: #333333;
      border-color: #333333;
    }
    #editaccount:focus {
      outline: 0;
      color: #333333;
      border-color: #333333;
    }
    #editaccount:active {
      background-color: #99bbff;
      border-color: white;
      color: white;
    }
    #worrydiary {
      margin-top: -10px;
      margin-left: 100px;
      height: 350px;
      width: 600px;
      font-size: 40px;
      background-color: #99bbff;
      border-color: white;
      border-width: medium;
    }
    #worrydiary:hover {
      color: #333333;
      border-color: #333333;
    }
    #worrydiary:focus {
      outline: 0;
      color: #333333;
      border-color: #333333;
    }
    #worrydiary:active {
      background-color: #99bbff;
      border-color: white;
      color: white;
    }
    #journalentry {
      margin-top: -10px;
      height: 350px;
      width: 600px;
      font-size: 40px;
      background-color: #99bbff;
      border-color: white;
      border-width: medium;
    }
    #journalentry:hover {
      color: #333333;
      border-color: #333333;
    }
    #journalentry:focus {
      outline: 0;
      color: #333333;
      border-color: #333333;
    }
    #journalentry:active {
      background-color: #99bbff;
      border-color: white;
      color: white;
    }
    #menubar {
      background-color: #333333;
      border-color: #333333;
    }
    #welcome {
      font-size: 20px;
      color: #a6a6a6;
      background-color: #333333;
      border-color: #333333;
      margin-top: 3px;
    }
    #welcome:focus {
      outline: 0;
      border: none;
    }
    #welcome:hover {
      color: white;
    }
    body {
      background-color: gray;
    }
    #dropdown-menu {
      background-color: #333333;
      color: #a6a6a6;
      font-size: 20px;
      margin-top: 6px;
      margin-right: 20px;
    }
    #dropdown-menu:hover {
      color: white;
    }
    #dropdown {
      background-color: #333333;
      border-color: #333333;
    }
    #dropdown-list {
      background-color: #333333;
      border-color: #333333;
      margin-top: 1.8px;
    }
    #logout {
      color: white;
      margin-left: 10px;
      font-size: 18px;
      background-color: #333333;
      border-color: #333333;
    }
    #logout:hover {
      color: gray;
    }
    #logout:focus {
      outline: 0;
      border: none;
    }
    #logout:active {
      color: white;
    }
    .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
      background-color: #333333;
    }
    #dropdown {
      margin-top: 2.5px;
    }
  </style>
  <script type="text/javascript">
    $('.dropdown-toggle').dropdown();
    $('#dropdown-menu li').on('click', function() {
      $('#dropdown-list').html($(this).find('a').html());
    });
  </script>
</html>
