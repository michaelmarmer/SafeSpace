<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SafeSpace</title>
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
          <h1>Welcome to SafeSpace</h1>
        </div>
        <div class="modal-body">
          <div class="login">
            <form action="index.php" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-1" for="username">Username</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="password">Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
                </div>
              </div>
              <button id="signin" class="btn btn-primary">Login</button>
            </form>
            <div class="createaccount">
              <br>
              <a href="createaccount.php">New User? Register Here</a>
            </div>
          </div>
          <br>
          <div class="modal-footer">
            <div class="form-group">
              <div class="checkbox col-sm-4">
                <!-- this is for the 'X' at the top right of the page. the '&nbsp' is code to create the 'X'-->
                <div class="text-danger lead text-center" style="color:red;" id="statusmsg">&nbsp;</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <style media="screen">
        .modal-backdrop{
          background-color: blue;
        }
        .modal-content {
          background-color: gray;
        }
        .modal-header {
          color: white;
        }
        .login {
          color: white;
        }
        a {
          color: black;
        }
        a:hover {
          color: #7585F0;
        }
        .modal-header {
          text-align: center;
        }
        #signin {
          background-color: black;
        }

     </style>

     <script>
       $('#myModal').modal('show');

       function validateLogin() {
         var x = $('#username').val();
         if (x === null || x === "") {
           $('#statusmsg').attr("class","errmsg").text("Username field is required.");
           return false;
         }
         x = $('#password').val();
         if (x === null || x === "") {
           $('#statusmsg').attr("class","errmsg").text("Password field is required.");
           return false;
         }
         return true;
       }

       $('#signin').click(function() {
         if (!validateLogin()) {
             return;
         }
       });
     </script>
   </body>
 </html>
