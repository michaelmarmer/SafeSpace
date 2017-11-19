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
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

   </head>
   <body>
    <div class="modal fade"  data-backdrop="static"  id="myModal" role="dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Account Setup</h3>
        </div>
        <div class="modal-body">
          <form action="account_question1_submit.php" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-5" id="question">About what time do you wake up in the morning?</label>
                <div class="col-sm-2">
                      <input type="text" class="form-control" name="wakeup-time" placeholder="12:00">
                </div>
                  <ul class="nav nav-pills left">
                    <li class="dropdown">
                        <a class="dropdown-toggle form-control" id="wakeup" name="wakeup" data-toggle="dropdown">
                          <i class="icon icon-envelope icon-white"></i><span id="wakeup-dropdown" class="pull-left">AM</span><span class="caret"></span></a>
                          <ul ID="wakeup-menu" class="dropdown-menu">
                            <li><a>AM</a></li>
                            <li><a>PM</a></li>
                          </ul>
                      </li>
                    </ul>
                </div>
              <div class="form-group">
                <label class="control-label col-sm-5" id="question">About what time do you go to bed at night?</label>
                <div class="col-sm-2">
                      <input type="text" class="form-control" name="sleep-time" placeholder="12:00">
                </div>
                  <ul class="nav nav-pills left">
                    <li class="dropdown">
                        <a class="dropdown-toggle form-control" id="sleep" name="sleep" data-toggle="dropdown">
                          <i class="icon icon-envelope icon-white"></i><span id="sleep-dropdown">AM</span><span class="caret"></span></a>
                          <ul ID="sleep-menu" class="dropdown-menu">
                            <li><a>AM</a></li>
                            <li><a>PM</a></li>
                          </ul>
                      </li>
                    </ul>
                </div>

              <button name="next" id="next" class="btn btn-primary">Next</button>
              <div class="text-danger lead text-center" style="color:red;" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
              <?php unset($_SESSION['errMsg']); ?>
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
      #next{
        background-color: #4d88ff;
        border-color: white;
      }
      #question {
        color: white;
      }
   </style>
   <script>
     $('#myModal').modal('show');

     $('#sleep').dropdown();
     $('#sleep-menu li').on('click', function() {
       $('#sleep-dropdown').html($(this).find('a').html());
     });

     $('#wakeup').dropdown();
     $('#wakeup-menu li').on('click', function() {
       $('#wakeup-dropdown').html($(this).find('a').html());
     });
   </script>
 </html>
