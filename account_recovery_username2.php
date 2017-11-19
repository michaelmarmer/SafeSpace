<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Account Recovery</title>
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
          <h3>Account Recovery</h3>
        </div>
        <div class="modal-body">
            <form action="account_recovery_username2_submit.php" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-2" id="labels" for="username">New Username</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" id="labels" for="confirmusername">Confirm Username</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="confirmusername" name="confirmusername" placeholder="re-enter username">
                </div>
              </div>

              <div class="form-group" id="buttons">
                <button name="return" id="return" class="btn btn-primary">Back</button>
                <button name="save" id="save" class="btn btn-primary">Save</button>
              </div>

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
      .login {
        color: white;
      }
      #save{
        background-color: #4d88ff;
        border-color: white;
      }
      #return{
        background-color: #4d88ff;
        border-color: white;
      }
      #buttons {
        margin-left: 20px;
      }
      #labels {
        color: white;
      }
   </style>
   <script>
     $('#myModal').modal('show');
     $("#password").password('toggle');
   </script>
 </html>
