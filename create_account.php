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
          <h3>Create an Account</h3>
        </div>
        <div class="modal-body">
            <form action="create_account_submit.php" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" name="email" placeholder="enter email address">
                </div>
              </div>
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
              <hr>
              <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" name="password" placeholder="enter password" data-toggle="password">
                </div>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="helpbutton">?
                  <span></span></button>
                    <ul class="dropdown-menu" id="help">
                      <h6>Password Requirements:</h6>
                      <li><a>Must be 8-30 characters long</a></li>
                      <li><a>Must have 1 special character</a></li>
                      <li><a>Must have 1 number</a></li>
                    </ul>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="confirmpassword">Confirm Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="re-enter password" data-toggle="password">
                </div>
              </div>
              <br>
              <div class="form-group" id="formbuttons">
                <label></label>
                <button name="return" id="return" class="btn btn-primary">Back</button>
                <button name="createaccount" id="createaccount" class="btn btn-primary">Create</button>
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
         margin-top: 8%;
         margin-bottom: 8%;
         margin-left: 10%;
         margin-right: 10%;
         opacity: 0.65;
       }
       .modal-body{
         background-color: #01014d;
         color: white;
       }
       .modal-header{
         color: #01014d;
       }
      #createaccount {
        background-color: #4d88ff;
        border-color: white;
      }
      #createaccount:focus {
        outline: 0;
      }
      #createaccount:hover {
        border-color:  #333333;
        color:  #333333;
      }
      #createaccount:active {
        background-color: #4d88ff;
        border-color: white;
        color: white;
      }
      #return {
        background-color: #4d88ff;
        border-color: white;
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
      .dropdown {
        position: relative;
        display: inline-block;
        width: 50%;
      }
      .dropdown-menu {
        margin-left: 12px;
        width: 450px;
        color: gray;
      }
      #helpbutton {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 2px 0;
        font-size: 15px;
        line-height: 1.428571429;
        border-radius: 15px;
        background-color: gray;
        border-color: white;
        margin-top: 2px;
      }
      #helpbutton:focus {
        outline: 0;
      }
      #helpbutton:active {
        border-color:  #333333;
        color:  #333333;
      }
      #help {
        padding-left: 10px;
        margin-left: 40px;
        margin-top: -51px;
        width: 300px;
        background-color: gray;
        color: white;
        border: 0;
      }
      #help > li > a {
        color: white;
      }
      .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-color:gray;
      }
      hr {
        clear:both;
        display:block;
        width: 110%;
        margin-left: -20px;
        background-color: white;
        height: .5px;
      }
      #formbuttons {
        margin-left: 18px;
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
     $('#myModal').modal('show');
     $("#password").password('toggle');

     $('.dropdown-toggle').dropdown();
     $('#help li').on('click', function() {
       $('#dropdown_title').html($(this).find('a').html());
     });
   </script>
 </html>
