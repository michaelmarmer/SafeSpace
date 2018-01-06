<?php
  session_start();
  $_SESSION["loggedin"] = $username;

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Worry Diary Entry</title>
    <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
  </head>
  <body>
    <div class="form-horizontal" role="form">
      <form action="worry_diary_entry_submit.php" method="post" role="form">
      <nav class="navbar navbar-inverse" id="menubar">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
              <button name="return" id="return" class="btn btn-primary navbar-brand"><</button>
              <a class="navbar-brand" id="header">Worry Diary Entry</a>
            </ul>
          </div>
        </div>
      </nav>

<div id="page_information">
  <div class="form-group">
    <label class="control-label" id="label">What are you worrying about?</label>
    <br>
   <div id="add_fields">
       <div>
        <div class="content">
          <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
          <input type="button" class="btn btn-primary" id="more_fields" onclick="add_fields();" value="Add More"/>
        </div>
       </div>
    </div>
  </div>

  <div class="form-group">
   <div id="add_table_fields">
       <div>
        <div class="content">
            <table id="table">
              <tr>
                <th><label id="table_header">What are you predicting will happen?</label></th>
                <th>&nbsp &nbsp</th>
                <th><label id="table_header">On a Scale 1-10, how likely do you think this will happen?<br>(1 being the lowest and 10 being the highest)</label></th>
              </tr>
              <tr>
                <td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write what you think will happen"></td>
                <td>&nbsp &nbsp</td>
                <td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write Percentage Number"></td>
                <td>&nbsp &nbsp</td>
                <td><input type="button" class="btn btn-primary" id="more_fields" onclick="add_table_fields();" value="Add More"/></td>
              </tr>
            </table>
          </div>
        </div>
       </div>
    </div>

  <div class="form-group">
   <div id="emotion_table_fields">
       <div>
        <div class="content">
            <table id="table">
              <tr>
                <th><label id="table_header">What emotions are you feeling?</label></th>
                <th>&nbsp &nbsp</th>
                <th><label id="table_header">On a Scale 1-10, rate the intensity<br>(1 being the lowest and 10 being the highest)</label></th>
              </tr>
              <tr>
                <td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write what you think will happen"></td>
                <td>&nbsp &nbsp</td>
                <td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write Percentage Number"></td>
                <td>&nbsp &nbsp</td>
                <td><input type="button" class="btn btn-primary" id="more_fields" onclick="emotion_table_fields();" value="Add More"/></td>
              </tr>
            </table>
          </div>
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">What is the evidence for my prediction?</label>
      <br>
     <div id="pro_add_fields">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
            <input type="button" class="btn btn-primary" id="more_fields" onclick="pro_add_fields();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">What is the evidence against my prediction?</label>
      <br>
     <div id="con_add_fields">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
            <input type="button" class="btn btn-primary" id="more_fields" onclick="con_add_fields();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">On a Scale 1-10, How likely is what I'm predicting going to happen?</label>
      <br>
      <label class="control-label" id="label">(1 being the lowest and 10 being the highest)</label>
      <br>
       <div>
        <div class="content">
          <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">What is the worst that could happen?</label>
      <br>
     <div id="add_worst_fields">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
            <input type="button" class="btn btn-primary" id="more_fields" onclick="add_worst_fields();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">What is the best that could happen?</label>
      <br>
     <div id="add_best_fields">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
            <input type="button" class="btn btn-primary" id="more_fields" onclick="add_best_fields();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">What is the most likely thing to happen?</label>
      <br>
       <div>
        <div class="content">
          <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">How helpful is it for me to worry about this?</label>
      <br>
       <div>
        <div class="content">
          <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">If the worst did happen, what could I do to cope?</label>
      <br>
     <div id="worst_case_scenario">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
            <input type="button" class="btn btn-primary" id="more_fields" onclick="worst_case_scenario();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">How else can I view the situation?</label>
      <br>
     <div id="different_viewpoint">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
            <input type="button" class="btn btn-primary" id="more_fields" onclick="different_viewpoint();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">A more balanced and helpful thought to replace the worry is:</label>
      <br>
     <div id="replace_thought">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
            <input type="button" class="btn btn-primary" id="more_fields" onclick="replace_thought();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">On a Scale 1-10, How much do I believe my prediction now?</label>
      <br>
      <label class="control-label" id="label">(1 being the lowest and 10 being the highest)</label>
       <div>
        <div class="content">
          <input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts">
        </div>
       </div>
    </div>

    <div class="form-group">
     <div id="new_emotion_table">
         <div>
          <div class="content">
              <table id="table">
                <tr>
                  <th><label id="table_header">How intense are my emotions now?</label></th>
                  <th>&nbsp &nbsp</th>
                  <th><label id="table_header">On a Scale 1-10, rate the intensity<br>(1 being the lowest and 10 being the highest)</label></th>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write what you think will happen"></td>
                  <td>&nbsp &nbsp</td>
                  <td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write Percentage Number"></td>
                  <td>&nbsp &nbsp</td>
                  <td><input type="button" class="btn btn-primary" id="more_fields" onclick="new_emotion_table();" value="Add More"/></td>
                </tr>
              </table>
            </div>
          </div>
         </div>
      </div>

      <div class="form-group">
        <button name="addentry" id="addentry" class="btn btn-primary">Add Entry</button>
      </div>

      <div class="text-danger lead text-center" id="errMsg"> <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?> </div>
      <?php unset($_SESSION['errMsg']); ?>

      <div class="text-danger lead text-center" id="succMsg"> <?php if(!empty($_SESSION['succMsg'])) { echo $_SESSION['succMsg']; } ?> </div>
      <?php unset($_SESSION['succMsg']); ?>
      </div>
      </form>
    </div>
  </body>

  <style media="screen">
    body {
      background-color: gray;
    }
    #menubar {
      background-color: #333333;
      border-color: #333333;
    }
    #return {
      font-size: 25px;
      color: #a6a6a6;
      background-color: #333333;
      border-color: #333333;
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
    #header {
      font-size: 20px;
      color: white;
      background-color: #333333;
      border-color: #333333;
      margin-top: 3px;
      margin-left: 15px;
    }
    #thoughts {
      width: 500px;
      display: inline-block;
    }
    #page_information {
      margin-left: 40px;
    }
    #addentry {
      background-color: #4d88ff;
      border-color: white;
      border-width: thin;
    }
    #addentry:focus {
      outline: 0;
    }
    #addentry:hover {
      border-color:  #333333;
      color:  #333333;
    }
    #addentry:active {
      background-color: #4d88ff;
      border-color: white;
      color: white;
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
  function add_fields() {
    var objTo = document.getElementById('add_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function add_table_fields() {
    var objTo = document.getElementById('add_table_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML =
    '<table><tr><td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write what you think will happen"></td><td>&nbsp &nbsp</td><td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write Percentage Number"></td></tr></table>';
    objTo.appendChild(divtest)
  }

  function emotion_table_fields() {
    var objTo = document.getElementById('emotion_table_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML =
    '<table><tr><td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write what you think will happen"></td><td>&nbsp &nbsp</td><td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write Percentage Number"></td></tr></table>';
    objTo.appendChild(divtest)
  }

  function pro_add_fields() {
    var objTo = document.getElementById('pro_add_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function con_add_fields() {
    var objTo = document.getElementById('con_add_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function add_worst_fields() {
    var objTo = document.getElementById('add_worst_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function add_best_fields() {
    var objTo = document.getElementById('add_best_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function worst_case_scenario() {
    var objTo = document.getElementById('worst_case_scenario')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function different_viewpoint() {
    var objTo = document.getElementById('different_viewpoint')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function replace_thought() {
    var objTo = document.getElementById('replace_thought')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="List thoughts"><br>';
    objTo.appendChild(divtest)
  }

  function new_emotion_table() {
    var objTo = document.getElementById('new_emotion_table')
    var divtest = document.createElement("div");
    divtest.innerHTML =
    '<table><tr><td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write what you think will happen"></td><td>&nbsp &nbsp</td><td><input type="text" class="form-control" id="thoughts" name="thoughts" placeholder="Write Percentage Number"></td></tr></table>';
    objTo.appendChild(divtest)
  }
  </script>
</html>
