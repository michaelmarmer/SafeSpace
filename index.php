<?php
session_start();
$_SESSION['username'];

if ($_SESSION['username']) {
  echo "<script>window.location.replace('welcome.php')</script>";
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SafeSpace</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
   </head>
   <body>
     <div id="wrapper">
       <div class="modal fade"  data-backdrop="static"  id="myModal" role="dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h1>Welcome to SafeSpace</h1>
           </div>
           <div class="modal-body">
             <div class="login">
               <form action="index_submit.php" method="post" class="form-horizontal" role="form">
                 <div class="form-group">
                   <label class="control-label col-sm-1" for="username" id="label">Username</label>
                   <div class="col-sm-4">
                     <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="control-label col-sm-1" for="password" id="label">Password</label>
                   <div class="col-sm-4">
                     <input type="password" class="form-control" id="password" name="password" placeholder="enter password" data-toggle="password">
                   </div>
                 </div>
                 <button name="signin" id="signin" class="btn btn-primary">Login</button>
                 <div class="createaccount">
                   <br>
                   <a href="create_account.php">New User? Register Here</a>
                 </div>
                 <div class="accountrecovery">
                   <br>
                   <a href="account_recovery.php">Forgot Username or Password?</a>
                 </div>
                 <div class="text-danger lead text-center" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
                 <?php unset($_SESSION['errMsg']); ?>
                 <div class="text-danger lead text-center" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
                 <?php unset($_SESSION['succMsg']); ?>
               </form>
             </div>
           </div>
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
      a {
        color: #333333;
      }
      a:hover {
        color: white;
      }
      #signin{
        background-color: #4d88ff;
        border-color: white;
      }
      #signin:focus {
        outline: 0;
      }
      #signin:hover {
        border-color:  #333333;
        color:  #333333;
      }
      #signin:active {
        background-color: #4d88ff;
        border-color: white;
        color: white;
      }
      #errMsg {
        color: red;
        font-weight: 400;
      }
      #succMsg {
        color: green;
        font-weight: 400;
      }
      #label {
        margin-right: 20px;
      }
   </style>
   <script>
     $('#myModal').modal('show');
     $("#password").password('toggle');
   </script>
 </html>
