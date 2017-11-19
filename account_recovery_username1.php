<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Account Recovery</title>
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
          <h3>Account Recovery</h3>
        </div>
        <div class="modal-body">
            <form action="account_recovery_username1_submit.php" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="securityquestion">Security Question 1</label>
                <ul class="nav nav-pills left">
                  <li class="dropdown active span8">
                    <div class="col-sm-8">
                      <a class="dropdown-toggle form-control" id="securityquestion1" name="securityquestion1" data-toggle="dropdown">
                        <i class="icon icon-envelope icon-white"></i><span class="pull-left" id="dropdown-one">Select a security question</span><span class="caret"></span></a>
                        <ul ID="questionlist1" class="dropdown-menu">
                          <li><a>What is your favorite book?</a></li>
                          <li><a>What is the name of the road you grew up on?</a></li>
                          <li><a>What is your mother’s maiden name?</a></li>
                          <li><a>What was the name of your first pet?</a></li>
                          <li><a>What was the first company that you worked for?</a></li>
                          <li><a>Where did you meet your spouse?</a></li>
                          <li><a>Where did you go to high school?</a></li>
                          <li><a>What is your favorite food?</a></li>
                          <li><a>What city were you born in?</a></li>
                          <li><a>Where is your favorite place to vacation?</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="answer">Answer</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="answer1" name="answer1" placeholder="enter an answer">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="securityquestion">Security Question 2</label>
                <ul class="nav nav-pills left">
                  <li class="dropdown active span8">
                    <div class="col-sm-8">
                      <a class="dropdown-toggle form-control" id="securityquestion2" name="securityquestion2" data-toggle="dropdown">
                        <i class="icon icon-envelope icon-white"></i><span class="pull-left" id="dropdown-two">Select a security question</span><span class="caret"></span></a>
                        <ul ID="questionlist2" class="dropdown-menu">
                          <li><a>What is your favorite book?</a></li>
                          <li><a>What is the name of the road you grew up on?</a></li>
                          <li><a>What is your mother’s maiden name?</a></li>
                          <li><a>What was the name of your first pet?</a></li>
                          <li><a>What was the first company that you worked for?</a></li>
                          <li><a>Where did you meet your spouse?</a></li>
                          <li><a>Where did you go to high school?</a></li>
                          <li><a>What is your favorite food?</a></li>
                          <li><a>What city were you born in?</a></li>
                          <li><a>Where is your favorite place to vacation?</a></li>
                        </ul>
                    </div>
                    </li>
                  </ul>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="answer">Answer</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="answer2" name="answer2" placeholder="enter an answer">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="securityquestion">Security Question 3</label>
                <ul class="nav nav-pills left">
                  <li class="dropdown active span8">
                    <div class="col-sm-8">
                      <a class="dropdown-toggle form-control" id="securityquestion3" name="securityquestion3" data-toggle="dropdown">
                        <i class="icon icon-envelope icon-white"></i><span class="pull-left" id="dropdown-three">Select a security question</span><span class="caret"></span></a>
                        <ul ID="questionlist3" class="dropdown-menu">
                          <li><a>What is your favorite book?</a></li>
                          <li><a>What is the name of the road you grew up on?</a></li>
                          <li><a>What is your mother’s maiden name?</a></li>
                          <li><a>What was the name of your first pet?</a></li>
                          <li><a>What was the first company that you worked for?</a></li>
                          <li><a>Where did you meet your spouse?</a></li>
                          <li><a>Where did you go to high school?</a></li>
                          <li><a>What is your favorite food?</a></li>
                          <li><a>What city were you born in?</a></li>
                          <li><a>Where is your favorite place to vacation?</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="answer">Answer</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="answer3" name="answer3" placeholder="enter an answer">
                </div>
              </div>
              <br>
              <div class="form-group" id="formbuttons">
                <button name="return" id="return" class="btn btn-primary">Back</button>
                <button name="next" id="next" class="btn btn-primary">Next</button>
              </div>
              <div class="text-danger lead text-center" style="color:red;" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
              <?php unset($_SESSION['errMsg']); ?>
              <div class="text-danger lead text-center" style="color:green;" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
              <?php unset($_SESSION['succMsg']); ?>
            </form>
          </div>
        </div>
      </div>
   </body>
   <style media="screen">
       #securityquestion1 {
          text-align: right;
          background-color: white;
          border-color: gray;
       }
       #securityquestion2 {
          text-align: right;
          background-color: white;
          border-color: gray;
       }
       #securityquestion3 {
          text-align: right;
          background-color: white;
          border-color: gray;
       }
       #caret {
         color: gray;
       }
       .modal-backdrop {
         background-image: url('clouds.jpg');
       }
       .modal-content{
         background-color: gray;
         margin-top: 7.5%;
         margin-bottom: 7.5%;
         margin-left: 7.5%;
         margin-right: 7.5%;
         opacity: 0.65;
       }
      .modal-header {
        color: white;
      }
      .modal-body {
        color: white;
      }
      #next {
        background-color: #4d88ff;
        border-color: white;
      }
      #return {
        background-color: #4d88ff;
        border-color: white;
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
        margin-left: 50px;
      }

   </style>
   <script type="text/javascript">
     $('#myModal').modal('show');

     $('#securityquestion1').dropdown();
     $('#questionlist1 li').on('click', function() {
       $('#dropdown-one').html($(this).find('a').html());
     });

     $('#securityquestion2').dropdown();
     $('#questionlist2 li').on('click', function() {
       $('#dropdown-two').html($(this).find('a').html());
     });

     $('#securityquestion3').dropdown();
     $('#questionlist3 li').on('click', function() {
       $('#dropdown-three').html($(this).find('a').html());
     });
   </script>
 </html>
