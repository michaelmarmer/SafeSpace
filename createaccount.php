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
            <form action="createaccount.php" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">First Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="enter first name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">Last Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="enter last name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="password">Email</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="enter email address">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">Password</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="enter password">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">Confirm Password</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="re-enter password">
                </div>
              </div>
            </form>
            <button id="createaccount" class="btn btn-primary" onclick="window.location.replace('index.php');">Create Account</button>
          </div>
          <br>
          <div class="modal-footer">
            <!-- add footer later -->
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
          text-align: center;
        }
        .modal-body {
          color: white;
        }
        a {
          color: black;
        }
        a:hover {
          color: #7585F0;
        }
        #createaccount {
          background-color: black;
        }

     </style>

     <script>
       $('#myModal').modal('show');
     </script>
   </body>
 </html>
