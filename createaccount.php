<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Create Account</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
    <div class="modal fade"  data-backdrop="static"  id="myModal" role="dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1>Create an Account</h1>
        </div>
        <div class="modal-body">
          <div class="login">
            <form action="create_acc_submit.php" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="firstname">First Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter first name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="lastname">Last Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="enter last name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" name="email" placeholder="enter email address">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="confirmpassword">Confirm Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="re-enter password">
                </div>
              </div>
              <input type="submit" id="createaccount" name="createaccount" value="Create Account" onclick="window.location.replace('index.php');">
                <div class="text-danger lead text-center" style="color:red;" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
                <?php unset($_SESSION['errMsg']); ?>
            </form>
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
         margin-top: 5%;
       }
      .modal-header {
        color: white;
        text-align: center;
      }
      .modal-body {
        color: white;
      }
      #createaccount {
        background-color: black;
      }
   </style>
   <script>
     $('#myModal').modal('show');
   </script>
 </html>
