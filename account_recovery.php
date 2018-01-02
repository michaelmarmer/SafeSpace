<?php
  session_start();
  require_once('database_connection.php');
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Account Recovery</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
   </head>
   <body>
    <div class="modal fade"  data-backdrop="static"  id="myModal" role="dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Account Recovery</h3>
        </div>
        <div class="modal-body">
            <form action="account_recovery_submit.php" method="post" class="form-horizontal" role="form">

              <div class="form-group">
                <label class="control-label col-sm-2" id="account" for="username">I Forgot My:</label>
                <div class="col-sm-4" id="radiobuttons">
                    <input type="radio" name="account" value="username"> Username &nbsp;
                    <input type="radio" name="account" value="password"> Password
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" id="account" for="email">Account Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" name="email" placeholder="enter email">
                </div>
              </div>

              <div class="form-group">
                <button name="return" id="return" class="btn btn-primary">Back</button>
                <button name="next" id="next" class="btn btn-primary">Next</button>
              </div>

              <div class="text-danger lead text-center" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
              <?php unset($_SESSION['errMsg']); ?>
              <div class="text-danger lead text-center" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
              <?php unset($_SESSION['succMsg']); ?>
          </form>
        </div>
      </div>
    </div>
   </body>
   <style media="screen">
      .modal-backdrop {
        background-image: url('clouds.jpg');
      }
      .modal-content{
        background-color: gray;
        margin-top: 15%;
        margin-bottom: 15%;
        margin-left: 15%;
        margin-right: 15%;
        opacity: 0.65;
      }
      .modal-header {
        color: white;
      }
      .login {
        color: white;
      }
      #radiobuttons {
        margin-top: 5px;
        font-size: 16px;
        color: white;
      }
      #return{
        background-color: #4d88ff;
        border-color: white;
        margin-left: 30px;
      }
      #return:focus {
        outline: 0;
      }
      #return:hover {
        border-color:  #333333;
        color:  #333333;
      }
      #return:active {
        background-color: #4d88ff;
        border-color: white;
        color: white;
      }
      #next{
        background-color: #4d88ff;
        border-color: white;
      }
      #next:focus {
        outline: 0;
      }
      #next:hover {
        border-color:  #333333;
        color:  #333333;
      }
      #next:active {
        background-color: #4d88ff;
        border-color: white;
        color: white;
      }
      #account {
        color: white;
      }
      input[type=radio] {
        border: 0px;
        width: 10%;
        height: 1.3em;
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
   <script>
     $('#myModal').modal('show');
     $("#password").password('toggle');
   </script>
 </html>
