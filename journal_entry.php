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
    <title>Journal Entry</title>
    <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="form-horizontal" role="form">
      <form action="journal_entry_submit.php" method="post" role="form">
      <nav class="navbar navbar-inverse" id="menubar">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
              <button name="return" id="return" class="btn btn-primary navbar-brand"><i class="fa fa-arrow-circle-left"></i></button>
              <a class="navbar-brand" id="header">Journal Entry</a>
            </ul>
          </div>
        </div>
      </nav>


      <div class="form-group">
        <label class="control-label col-sm-1" id="label">Title:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="title" name="title" placeholder="enter journal title">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-1" id="label">Date:</label>
        <div class="col-sm-3">
         <div class="input-group">
          <div class="input-group-addon">
           <i class="fa fa-calendar">
           </i>
          </div>
          <input class="form-control" id="date" name="dates" placeholder="YYYY-MM-DD" type="text"/>
         </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" id="journalentry">Tell us about your day:</label>
      </div>

      <div class="form-group">
        <div class="col-sm-5">
          <textarea name="entry" id="entry" placeholder="write here" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <button name="addentry" id="addentry" class="btn btn-primary">Add Entry</button>
      </div>

      <div class="text-danger lead text-center" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
      <?php unset($_SESSION['errMsg']); ?>

      <div class="text-danger lead text-center" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
      <?php unset($_SESSION['succMsg']); ?>

      </form>
    </div>
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
    #header {
      font-size: 20px;
      color: white;
      background-color: #333333;
      border-color: #333333;
      margin-top: 3px;
      margin-left: 15px;
    }
    #addentry {
      margin-left: 60px;
      background-color: #4d88ff;
      border-color: white;
      border-width: thin;
    }
    #addentry:focus {
      outline: 0;
    }
    #addentry:hover {
      border-color:  #333333;
      color:  #333333;
    }
    #addentry:active {
      background-color: #4d88ff;
      border-color: white;
      color: white;
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
    #journalentry {
      margin-left: 27.5px;
      color: white;
    }
    #entry {
      margin-left: 45px;
      height: 300px;
      width: 800px;
    }
    #myModal {
      margin-top: 10%;
    }
    .modal-content {
      background-color: gray;
    }
    #close {
      color: white;
      border-color: white;
    }
    #close:focus {
      outline: 0;
    }
    #button {
      background-color: #4d88ff;
      border-color: white;
      border-width: thin;
    }
    #button:focus {
      outline: 0;
    }
    #button:hover {
      border-color:  #333333;
      color:  #333333;
    }
    #button:active {
      background-color: #4d88ff;
      border-color: white;
      color: white;
    }
    #label {
      color: white;
    }
    form {
      display: inline;
    }

  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      var date_input=$('input[name="dates"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      })
    })

  </script>
</html>
