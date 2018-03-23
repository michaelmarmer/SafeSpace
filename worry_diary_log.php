<?php
session_start();
$_SESSION['username'];

if (!$_SESSION['username']) {
  echo "<script>window.location.replace('index.php')</script>";
  $_SESSION['errMsg'] = "Please login";
}

?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Worry Diary Log</title>
 </head>
 <body>
   <nav class="navbar navbar-default" id="menubar">
     <form action="worry_diary_log_submit.php" method="post" class="form-horizontal navbar-form navbar-left" role="form">
       <button name="return" id="return" class="btn btn-primary navbar-brand"><i class="fa fa-arrow-circle-left"></i></button>
       <a class="navbar-brand" id="worrydiarylog" >Worry Diary Log</a>
       <div class="input-group" id="search">
         <input type="text" class="form-control" placeholder="Search">
         <div class="input-group-btn">
           <button class="btn btn-default" type="submit">
             <i class="glyphicon glyphicon-search"></i>
           </button>
         </div>
       </div>
       <button name="newentry" id="newentry" class="btn btn-primary">New Entry</button>
     </form>
   </nav>

  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col" >#</th>
      <th scope="col">Last Saved</th>
    </tr>
  </thead>
  <tbody >
    <tr>
      <td id="width"><?php
        include 'database_connection.php';
        $sql = "SELECT worry_diary_id FROM worry_diary_entry WHERE username='".$_SESSION['username']."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $index = 1;
            while($row = $result->fetch_assoc()) {
              $worry_diary_entry = $row["worry_diary_id"];
              echo "<a name='worry_diary_entry' id='worry_diary_entry' onclick='newPage(\"$worry_diary_entry\")'>Worry Diary Entry ".$index."</a><br>";
              //storing session issue here
              $index = $index + 1;
            }
        }
       ?></td>
       <td><?php
         include 'database_connection.php';
         $sql = "SELECT dates FROM worry_diary_entry WHERE username='".$_SESSION['username']."'";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
               $timestamp = $row["dates"];
               echo "<p id='date'>".$timestamp."</p>";
               //storing session issue here
             }
         }
        ?></td>
    </tr>
  </tbody>
</table>

   <div class="text-danger lead text-center" style="color:green;" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
   <?php unset($_SESSION['succMsg']); ?>

 </body>
 <style media="screen">
    #menubar {
      background-color: #333333;
      border-color: #333333;
      margin-bottom: -10px;
    }
    body {
      background-color: gray;
    }
    #worrydiarylog {
      font-size: 20px;
      color: white;
    }
    #return {
      font-size: 25px;
      color: #a6a6a6;
      background-color: #333333;
      border-color: #333333;
      margin-left: -10px;
    }
    #return:focus {
      outline: 0;
      border: none;
    }
    #return:hover {
      color: white;
    }
    #return:active {
      color: #a6a6a6;
    }
    #search {
      margin-left: 813px;
      margin-right: 20px;
      margin-top: 7.5px;
    }
    #newentry {
      background-color: #4d88ff;
      border-color: white;
      border-width: thin;
      margin-top: 7px;
    }
    #newentry:focus {
      outline: 0;
    }
    #newentry:hover {
      border-color:  #333333;
      color:  #333333;
    }
    #newentry:active {
      background-color: #4d88ff;
      border-color: white;
      color: white;
    }

    #date {
      color: white;
      margin-bottom: -2px;
    }

    #worry_diary_entry {
      color: white;
      cursor: pointer;
      margin-bottom: -2px;
    }

    table {
      margin-top: 30px;
      border-color: white;
      color: #4d88ff;
      background-color: black;
      font-size: 18px;
    }

    #width {
      width: 45%;
    }

 </style>
</html>
