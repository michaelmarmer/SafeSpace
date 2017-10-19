<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Create Account</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
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
              <hr>
              <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="enter password" data-toggle="password">
                </div>
                <div class="dropdown">
                        <input type="button" value="?" onclick="dropDown()" class="dropbutton">
                        <div id="myDropdown" class="dropdown-content">
                            <h5>Password Requirements:</h5>
                            <ul>
                              <li>Must be 8-30 characters long</li>
                              <li>Must have 1 special character</li>
                              <li>Must have 1 number</li>
                            </ul>
                        </div>
                    </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="confirmpassword">Confirm Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="re-enter password" data-toggle="password">
                </div>
              </div>
              <div class="form-group">
                <div class="btn-group-horizontal btn-group-sm" role="group">
                    <button name="return" id="return" class="btn btn-primary">Back</button>
                    <button name="createaccount" id="createaccount" class="btn btn-primary">Create</button>
                </div>
              </div>
              <div class="text-danger lead text-center" style="color:red;" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
              <?php unset($_SESSION['errMsg']); ?>
              <div class="text-danger lead text-center" style="color:green;" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
              <?php unset($_SESSION['succMsg']); ?>
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
         opacity: 0.8;
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
        border-color: white;
      }
      #return {
        background-color: black;
        border-color: white;
      }
      .dropbutton {
        background-color: #01014d;
        color: white;
        border-radius: 50%;
        font-size: 12px;
        border-color: white;
        cursor: pointer;
      }
      .dropdown {
        position: relative;
        display: inline-block;
        width: 50%;
      }
      .dropdown-content{
        display: none;
        position: absolute;
        background-color: white;
        color: #01014d;
        box-shadow: 0px 8px 16px 0px;
        z-index: 1;
        margin-top: -30px;
        margin-left: 40px;
        width: 250px;
      }
      .dropdown-content h5 {
        margin-left: 10px;
      }
      .show {
        display: block;
      }
   </style>
   <script>
     $('#myModal').modal('show');
     $("#password").password('toggle');

     function dropDown() {
       document.getElementById("myDropdown").classList.toggle("show");
     }

     window.onclick = function(event) {
        if (!event.target.matches('.dropbutton')) {

          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
   </script>
 </html>
