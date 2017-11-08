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
          <h1>Create an Account</h1>
        </div>
        <div class="modal-body">
          <div class="login">
            <form action="create_acc_submit.php" method="post" class="form-horizontal" role="form">
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
              <hr>
              <div class="form-group">
                <label class="control-label col-sm-2" for="securityquestion">Security Question 1</label>
              <div class="container">
                <div class="dropdown">
                  <div class="col-sm-10">
                    <button class="btn btn-primary dropdown-toggle; form-control" id="securityquestion" type="button" data-toggle="dropdown">
                    <span class="caret pull-right"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">What is your favorite book?</a></li>
                    <li><a href="#">What is the name of the road you grew up on?</a></li>
                    <li><a href="#">What is your mother’s maiden name?</a></li>
                    <li><a href="#">What was the name of your first/current/favorite pet?</a></li>
                    <li><a href="#">What was the first company that you worked for?</a></li>
                    <li><a href="#">Where did you meet your spouse?</a></li>
                    <li><a href="#">Where did you go to high school/college?</a></li>
                    <li><a href="#">What is your favorite food?</a></li>
                    <li><a href="#">What city were you born in?</a></li>
                    <li><a href="#">Where is your favorite place to vacation?</a></li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="answer">Answer</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="answer" name="answer" placeholder="enter an answer">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="securityquestion">Security Question 2</label>
              <div class="container">
                <div class="dropdown">
                  <div class="col-sm-10">
                    <button class="btn btn-primary dropdown-toggle; form-control" id="securityquestion" type="button" data-toggle="dropdown">
                    <span class="caret pull-right"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">What is your favorite book?</a></li>
                    <li><a href="#">What is the name of the road you grew up on?</a></li>
                    <li><a href="#">What is your mother’s maiden name?</a></li>
                    <li><a href="#">What was the name of your first/current/favorite pet?</a></li>
                    <li><a href="#">What was the first company that you worked for?</a></li>
                    <li><a href="#">Where did you meet your spouse?</a></li>
                    <li><a href="#">Where did you go to high school/college?</a></li>
                    <li><a href="#">What is your favorite food?</a></li>
                    <li><a href="#">What city were you born in?</a></li>
                    <li><a href="#">Where is your favorite place to vacation?</a></li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="answer">Answer</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="answer" name="answer" placeholder="enter an answer">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="securityquestion">Security Question 3</label>
              <div class="container">
                <div class="dropdown">
                  <div class="col-sm-10">
                    <button class="btn btn-primary dropdown-toggle; form-control" id="securityquestion" type="button" data-toggle="dropdown">
                    <span class="caret pull-right"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">What is your favorite book?</a></li>
                    <li><a href="#">What is the name of the road you grew up on?</a></li>
                    <li><a href="#">What is your mother’s maiden name?</a></li>
                    <li><a href="#">What was the name of your first/current/favorite pet?</a></li>
                    <li><a href="#">What was the first company that you worked for?</a></li>
                    <li><a href="#">Where did you meet your spouse?</a></li>
                    <li><a href="#">Where did you go to high school/college?</a></li>
                    <li><a href="#">What is your favorite food?</a></li>
                    <li><a href="#">What city were you born in?</a></li>
                    <li><a href="#">Where is your favorite place to vacation?</a></li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="answer">Answer</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="answer" name="answer" placeholder="enter an answer">
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="control-label col-sm-1" for=""></label>
                <button name="return" id="return" class="btn btn-primary">Back</button>
                <button name="createaccount" id="createaccount" class="btn btn-primary">Create</button>
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
       #securityquestion3 {
          text-align: right;
       }
       .modal-backdrop {
         background-image: url('clouds.jpg');
       }
       .modal-content{
         background-color: gray;
         margin-top: 2%;
         margin-bottom: 2%;
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
        background-color: #4d88ff;
        border-color: white;
        opacity: 0.8;
      }
      #return {
        background-color: #4d88ff;
        border-color: white;
        opacity: 0.8;
      }
      .dropbutton {
        background-color: #4d88ff;
        color: white;
        border-radius: 50%;
        font-size: 15px;
        cursor: pointer;
        margin-top: 2.5px;
        border-color: white;
      }
      .dropbutton:active {
        border-color: gray;
      }
      .dropbutton:focus {
        outline: 0;
      }
      .dropdown {
        position: relative;
        display: inline-block;
        width: 50%;
      }
      .dropdown-content{
        display: none;
        position: absolute;
        background-color: gray;
        color: white;
        z-index: 1;
        margin-top: -47.5px;
        margin-left: 40px;
        width: 400px;
      }
      .dropdown-content h5 {
        margin-left: 10px;
      }
      .show {
        display: block;
      }
      #securityquestion{
        background-color: white;
        color: gray;
        opacity: 0.8;
        border-color: white;
      }
      .dropdown-menu {
        margin-left: 12px;
        width: 450px;
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
