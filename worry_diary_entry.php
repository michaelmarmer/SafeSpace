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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="form-horizontal" role="form">
      <form action="worry_diary_entry_submit.php" method="post" role="form">
      <nav class="navbar navbar-inverse" id="menubar">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
              <button name="return" id="return" class="btn btn-primary navbar-brand"><i class="fa fa-arrow-circle-left"></i></button>
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
          <input type="text" class="form-control" id="text" name="worrying_thoughts" placeholder="List thoughts" value=<?php if(!empty($_SESSION['worrying_thoughts'])) { echo $_SESSION['worrying_thoughts']; } ?>>
          <input type="button" class="btn btn-primary" id="text_button" onclick="add_fields();" value="Add More"/>
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
                <th><label id="label">What are you predicting will happen?</label></th>
                <th>&nbsp &nbsp</th>
                <th><label id="label">On a Scale 1-10, how likely do you think this will happen?<br>(1 being the lowest and 10 being the highest)</label></th>
              </tr>
              <tr>
                <td><input type="text" class="form-control" id="text" name="prediction" placeholder="Write what you think will happen" value=<?php if(!empty($_SESSION['prediction'])) { echo $_SESSION['prediction']; } ?>></td>
                <td>&nbsp &nbsp</td>
                <td><input type="text" class="form-control" id="scale" name="prediction_scale" placeholder="Write Number" value=<?php if(!empty($_SESSION['prediction_scale'])) { echo $_SESSION['prediction_scale']; } ?>> <input type="button" class="btn btn-primary" id="text_button" onclick="add_table_fields();" value="Add More"/></td>
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
                <th><label id="label">What emotions are you feeling?</label></th>
                <th>&nbsp &nbsp</th>
                <th><label id="label">On a Scale 1-10, rate the intensity<br>(1 being the lowest and 10 being the highest)</label></th>
              </tr>
              <tr>
                <td><input type="text" class="form-control" id="text" name="emotion" placeholder="Write out each emotion" value=<?php if(!empty($_SESSION['emotion'])) { echo $_SESSION['emotion']; } ?>></td>
                <td>&nbsp &nbsp</td>
                <td><input type="text" class="form-control" id="scale" name="emotion_scale" placeholder="Write Number" value=<?php if(!empty($_SESSION['emotion_scale'])) { echo $_SESSION['emotion_scale']; } ?>> <input type="button" class="btn btn-primary" id="text_button" onclick="emotion_table_fields();" value="Add More"/></td>
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
            <input type="text" class="form-control" id="text" name="evidence_for" placeholder="Write your proof of prediction here" value=<?php if(!empty($_SESSION['evidence_for'])) { echo $_SESSION['evidence_for']; } ?>>
            <input type="button" class="btn btn-primary" id="text_button" onclick="pro_add_fields();" value="Add More"/>
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
            <input type="text" class="form-control" id="text" name="evidence_against" placeholder="Write the things against your prediciton" value=<?php if(!empty($_SESSION['evidence_against'])) { echo $_SESSION['evidence_against']; } ?>>
            <input type="button" class="btn btn-primary" id="text_button" onclick="con_add_fields();" value="Add More"/>
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
          <input type="text" class="form-control" id="scale" name="worry_prediction_scale" placeholder="Write Number" value=<?php if(!empty($_SESSION['worry_prediction_scale'])) { echo $_SESSION['worry_prediction_scale']; } ?>>
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">What is the worst that could happen?</label>
      <br>
     <div id="add_worst_fields">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="text" name="worst_case" placeholder="Write the worst case scenarios" value=<?php if(!empty($_SESSION['worst_case'])) { echo $_SESSION['worst_case']; } ?>>
            <input type="button" class="btn btn-primary" id="text_button" onclick="add_worst_fields();" value="Add More"/>
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
            <input type="text" class="form-control" id="text" name="best_case" placeholder="Write the best case scenarios" value=<?php if(!empty($_SESSION['best_case'])) { echo $_SESSION['best_case']; } ?>>
            <input type="button" class="btn btn-primary" id="text_button" onclick="add_best_fields();" value="Add More"/>
          </div>
         </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">What is the most likely thing to happen?</label>
      <br>
       <div>
        <div class="content">
          <input type="text" class="form-control" id="text" name="most_likely_to_happen" placeholder="Write the reality of the situation" value=<?php if(!empty($_SESSION['most_likely_to_happen'])) { echo $_SESSION['most_likely_to_happen']; } ?>>
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">How helpful is it for me to worry about this?</label>
      <br>
       <div>
        <div class="content">
          <input type="text" class="form-control" id="text" name="helpful_worry" placeholder="Write how helpful your worry is about the situation" value=<?php if(!empty($_SESSION['helpful_worry'])) { echo $_SESSION['helpful_worry']; } ?>>
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="control-label" id="label">If the worst did happen, what could I do to cope?</label>
      <br>
     <div id="worst_case_scenario">
         <div>
          <div class="content">
            <input type="text" class="form-control" id="text" name="cope_with_worst" placeholder="Write examples of what you can do to cope" value=<?php if(!empty($_SESSION['cope_with_worst'])) { echo $_SESSION['cope_with_worst']; } ?>>
            <input type="button" class="btn btn-primary" id="text_button" onclick="worst_case_scenario();" value="Add More"/>
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
            <input type="text" class="form-control" id="text" name="new_viewpoint" placeholder="Write other ways to view the situation" value=<?php if(!empty($_SESSION['new_viewpoint'])) { echo $_SESSION['new_viewpoint']; } ?>>
            <input type="button" class="btn btn-primary" id="text_button" onclick="different_viewpoint();" value="Add More"/>
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
            <input type="text" class="form-control" id="text" name="helpful_thoughts" placeholder="Write positive examples on how to view the situation" value=<?php if(!empty($_SESSION['helpful_thoughts'])) { echo $_SESSION['helpful_thoughts']; } ?>>
            <input type="button" class="btn btn-primary" id="text_button" onclick="replace_thought();" value="Add More"/>
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
          <input type="text" class="form-control" id="scale" name="new_prediction_scale" placeholder="Write Number" value=<?php if(!empty($_SESSION['new_prediction_scale'])) { echo $_SESSION['new_prediction_scale']; } ?>>
        </div>
       </div>
    </div>

    <div class="form-group">
     <div id="new_emotion_table">
         <div>
          <div class="content">
              <table id="table">
                <tr>
                  <th><label id="label">How intense are my emotions now?</label></th>
                  <th>&nbsp &nbsp</th>
                  <th><label id="label">On a Scale 1-10, rate the intensity<br>(1 being the lowest and 10 being the highest)</label></th>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" id="text" name="new_emotion" placeholder="Write out each emotion" value=<?php if(!empty($_SESSION['new_emotion'])) { echo $_SESSION['new_emotion']; } ?>></td>
                  <td>&nbsp &nbsp</td>
                  <td><input type="text" class="form-control" id="scale" name="new_emotion_scale" placeholder="Write Number" value=<?php if(!empty($_SESSION['new_emotion_scale'])) { echo $_SESSION['new_emotion_scale']; } ?>> <input type="button" class="btn btn-primary" id="text_button" onclick="new_emotion_table();" value="Add More"/></td>
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
    #header {
      font-size: 20px;
      color: white;
      background-color: #333333;
      border-color: #333333;
      margin-top: 3px;
      margin-left: 15px;
    }
    #label {
      color: white;
      margin-bottom: 2px;
    }
    #text {
      width: 500px;
      display: inline-block;
      margin-bottom: 3px;
    }
    #scale {
      width: 150px;
      display: inline-block;
      margin-bottom: 3px;
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
    #text_button {
      margin-top: -5px;
      margin-left: 5px;
      background-color: #4d88ff;
      border-color: white;
      border-width: thin;
    }
    #text_button:focus {
      outline: 0;
    }
    #text_button:hover {
      border-color:  #333333;
      color:  #333333;
    }
    #text_button:active {
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
    #remove {
      color: #a6a6a6;
      background-color: gray;
      border-color: gray;
    }
    #remove:focus {
      outline: 0;
    }
    #remove:hover {
      color:  white;
    }

  </style>
  <script type="text/javascript">
  function add_fields() {
    var objTo = document.getElementById('add_fields');
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_add_fields"><input type="text" class="form-control" id="text" name="worrying_thoughts" placeholder="List thoughts"><button class="btn btn-primary" id="remove" onclick="removeDiv_add_fields(); return false;">X</button><br><div>';
    objTo.appendChild(divtest);
  }

//need more of these and need to fix divtest.innerHTML divs
  function removeDiv_add_fields() {
     $("#child_add_fields").remove();
  }

  function add_table_fields() {
    var objTo = document.getElementById('add_table_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML =
    '<div id="child_add_table_fields"><table><tr><td><input type="text" class="form-control" id="text" name="prediction" placeholder="Write what you think will happen"></td><td>&nbsp &nbsp</td><td><input type="text" class="form-control" id="scale" name="prediction_scale" placeholder="Write Number"><button class="btn btn-primary" id="remove" onclick="removeDiv_add_table_fields(); return false;">X</button></td></tr></table></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_add_table_fields() {
     $("#child_add_table_fields").remove();
  }

  function emotion_table_fields() {
    var objTo = document.getElementById('emotion_table_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML =
    '<div id="child_emotion_table_fields"><table><tr><td><input type="text" class="form-control" id="text" name="emotion" placeholder="Write out each emotion"></td><td>&nbsp &nbsp</td><td><input type="text" class="form-control" id="scale" name="emotion_scale" placeholder="Write Number"><button class="btn btn-primary" id="remove" onclick="removeDiv_emotion_table_fields(); return false;">X</button></td></tr></table></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_emotion_table_fields() {
     $("#child_emotion_table_fields").remove();
  }

  function pro_add_fields() {
    var objTo = document.getElementById('pro_add_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_pro_add_fields"><input type="text" class="form-control" id="text" name="evidence_for" placeholder="Write your proof of prediction here"><button class="btn btn-primary" id="remove" onclick="removeDiv_pro_add_fields(); return false;">X</button><br></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_pro_add_fields() {
     $("#child_pro_add_fields").remove();
  }

  function con_add_fields() {
    var objTo = document.getElementById('con_add_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_con_add_fields"><input type="text" class="form-control" id="text" name="evidence_against" placeholder="Write the things against your prediciton"><button class="btn btn-primary" id="remove" onclick="removeDiv_con_add_fields(); return false;">X</button><br></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_con_add_fields() {
     $("#child_con_add_fields").remove();
  }

  function add_worst_fields() {
    var objTo = document.getElementById('add_worst_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_add_worst_fields"><input type="text" class="form-control" id="text" name="worst_case" placeholder="Write the worst case scenarios"><button class="btn btn-primary" id="remove" onclick="removeDiv_add_worst_fields(); return false;">X</button><br></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_add_worst_fields() {
     $("#child_add_worst_fields").remove();
  }

  function add_best_fields() {
    var objTo = document.getElementById('add_best_fields')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_add_best_fields"><input type="text" class="form-control" id="text" name="best_case" placeholder="Write the best case scenarios"><button class="btn btn-primary" id="remove" onclick="removeDiv_add_best_fields(); return false;">X</button><br></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_add_best_fields() {
     $("#child_add_best_fields").remove();
  }

  function worst_case_scenario() {
    var objTo = document.getElementById('worst_case_scenario')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_worst_case_scenario"><input type="text" class="form-control" id="text" name="cope_with_worst" placeholder="Write examples of what you can do to cope"><button class="btn btn-primary" id="remove" onclick="removeDiv_worst_case_scenario(); return false;">X</button><br></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_worst_case_scenario() {
     $("#child_worst_case_scenario").remove();
  }

  function different_viewpoint() {
    var objTo = document.getElementById('different_viewpoint')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_different_viewpoint"><input type="text" class="form-control" id="text" name="new_viewpoint" placeholder="Write other ways to view the situation"><button class="btn btn-primary" id="remove" onclick="removeDiv_different_viewpoint(); return false;">X</button><br></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_different_viewpoint() {
     $("#child_different_viewpoint").remove();
  }

  function replace_thought() {
    var objTo = document.getElementById('replace_thought')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div id="child_replace_thought"><input type="text" class="form-control" id="text" name="helpful_thoughts" placeholder="Write positive examples on how to view the situation"><button class="btn btn-primary" id="remove" onclick="removeDiv_replace_thought(); return false;">X</button><br></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_replace_thought() {
     $("#child_replace_thought").remove();
  }

  function new_emotion_table() {
    var objTo = document.getElementById('new_emotion_table')
    var divtest = document.createElement("div");
    divtest.innerHTML =
    '<div id="child_new_emotion_table"><table><tr><td><input type="text" class="form-control" id="text" name="new_emotion" placeholder="Write out each emotion"></td><td>&nbsp &nbsp</td><td><input type="text" class="form-control" id="scale" name="new_emotion_scale" placeholder="Write Number"><button class="btn btn-primary" id="remove" onclick="removeDiv_new_emotion_table(); return false;">X</button></td></tr></table></div>';
    objTo.appendChild(divtest)
  }

  function removeDiv_new_emotion_table() {
     $("#child_new_emotion_table").remove();
  }
  </script>
</html>
