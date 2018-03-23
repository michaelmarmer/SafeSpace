<?php
session_start();
$_SESSION['username'];

include "database_connection.php";

$username = $_SESSION['username'];
$worrying_thoughts = $_POST['worrying_thoughts'];
$prediction = $_POST['prediction'];
$prediction_scale = $_POST['prediction_scale'];
$emotion = $_POST['emotion'];
$emotion_scale = $_POST['emotion_scale'];
$evidence_for = $_POST['evidence_for'];
$evidence_against = $_POST['evidence_against'];
$worry_prediction_scale = $_POST['worry_prediction_scale'];
$worst_case = $_POST['worst_case'];
$best_case = $_POST['best_case'];
$most_likely_to_happen = $_POST['most_likely_to_happen'];
$helpful_worry = $_POST['helpful_worry'];
$cope_with_worst = $_POST['cope_with_worst'];
$new_viewpoint = $_POST['new_viewpoint'];
$helpful_thoughts = $_POST['helpful_thoughts'];
$new_prediction_scale = $_POST['new_prediction_scale'];
$new_emotion = $_POST['new_emotion'];
$new_emotion_scale = $_POST['new_emotion_scale'];

if (isset($_POST['return'])) {
  echo "<script>window.location.replace('worry_diary_log.php')</script>";
}

if (isset($_POST['addentry'])) {
  if (isset($worrying_thoughts)) {
    if (empty($worrying_thoughts)) {
      $_SESSION['errMsg'] = "Missing worrying thoughts field.";
    } else {
      $sql = "SELECT worrying_thoughts FROM worrying_thoughts WHERE worrying_thoughts='".$worrying_thoughts."'";
      $query = mysqli_query($conn,$sql);
        if ($query) {
        $worrying_thought_exists = mysqli_num_rows($query);
        if ($worrying_thought_exists == 0) {
          $sql = "INSERT INTO worrying_thoughts (worrying_thoughts) VALUES ('".$worrying_thoughts."')";
          $query = mysqli_query($conn,$sql);
          $_SESSION['worrying_thoughts'] = $worrying_thoughts;
        } else {
          $_SESSION['worrying_thoughts'] = $worrying_thoughts;
        }
            if (isset($prediction)) {
              if (empty($prediction)) {
                $_SESSION['errMsg'] = "Missing prediction field.";
              } else {
                $_SESSION['prediction'] = $prediction;
                if (isset($prediction_scale)) {
                  if (empty($prediction_scale)) {
                    $_SESSION['errMsg'] = "Missing prediction scale field.";
                  } else {
                    $sql = "SELECT prediction, prediction_scale FROM prediction WHERE prediction='".$prediction."' AND prediction_scale='".$prediction_scale."'";
                    $query = mysqli_query($conn,$sql);
                    if ($query) {
                    $prediction_exists = mysqli_num_rows($query);
                    if ($prediction_exists == 0) {
                      $sql = "INSERT INTO prediction (prediction, prediction_scale) VALUES ('".$prediction."', '".$prediction_scale."')";
                      $query = mysqli_query($conn,$sql);
                      $_SESSION['prediction_scale'] = $prediction_scale;
                    } else {
                      $_SESSION['prediction_scale'] = $prediction_scale;
                    }
                      if (isset($emotion)) {
                        if (empty($emotion)) {
                          $_SESSION['errMsg'] = "Missing emotion field.";
                        } else {
                          $_SESSION['emotion'] = $emotion;
                          if (isset($emotion_scale)) {
                            if (empty($emotion_scale)) {
                              $_SESSION['errMsg'] = "Missing emotion scale field.";
                            } else {
                              $sql = "SELECT emotion, emotion_scale FROM emotions WHERE emotion='".$emotion."' AND emotion_scale='".$emotion_scale."'";
                              $query = mysqli_query($conn,$sql);
                              if ($query) {
                              $emotion_exists = mysqli_num_rows($query);
                              if ($emotion_exists == 0) {
                                $sql = "INSERT INTO emotions (emotion, emotion_scale) VALUES ('".$emotion."', '".$emotion_scale."')";
                                $query = mysqli_query($conn,$sql);
                                $_SESSION['emotion_scale'] = $emotion_scale;
                              } else {
                                $_SESSION['emotion_scale'] = $emotion_scale;
                              }
                                if (isset($evidence_for)) {
                                  if (empty($evidence_for)) {
                                    $_SESSION['errMsg'] = "Missing evidence for field.";
                                  } else {
                                    $sql = "SELECT evidence_for FROM evidence_for_prediction WHERE evidence_for='".$evidence_for."'";
                                    $query = mysqli_query($conn,$sql);
                                    if ($query) {
                                    $evidence_for_exists = mysqli_num_rows($query);
                                      if ($evidence_for_exists == 0) {
                                        $sql = "INSERT INTO evidence_for_prediction (evidence_for) VALUES ('".$evidence_for."')";
                                        $query = mysqli_query($conn,$sql);
                                        $_SESSION['evidence_for'] = $evidence_for;
                                      } else {
                                        $_SESSION['evidence_for'] = $evidence_for;
                                      }
                                          if (isset($evidence_against)) {
                                            if (empty($evidence_against)) {
                                              $_SESSION['errMsg'] = "Missing evidence against field.";
                                            } else {
                                              $sql = "SELECT evidence_against FROM evidence_against_prediction WHERE evidence_against='".$evidence_against."'";
                                              $query = mysqli_query($conn,$sql);
                                              if ($query) {
                                              $evidence_against_exists = mysqli_num_rows($query);
                                                if ($evidence_against_exists == 0) {
                                                  $sql = "INSERT INTO evidence_against_prediction (evidence_against) VALUES ('".$evidence_against."')";
                                                  $query = mysqli_query($conn,$sql);
                                                  $_SESSION['evidence_against'] = $evidence_against;
                                                } else {
                                                  $_SESSION['evidence_against'] = $evidence_against;
                                                }
                                                    if (isset($worry_prediction_scale)) {
                                                      if (empty($worry_prediction_scale)) {
                                                        $_SESSION['errMsg'] = "Missing worry prediction scale field.";
                                                      } else {
                                                        $_SESSION['worry_prediction_scale'] = $worry_prediction_scale;
                                                        if (isset($worst_case)) {
                                                          if (empty($worst_case)) {
                                                            $_SESSION['errMsg'] = "Missing worst case field.";
                                                          } else {
                                                            $sql = "SELECT worst_case FROM worst_case WHERE worst_case='".$worst_case."'";
                                                            $query = mysqli_query($conn,$sql);
                                                            if ($query) {
                                                            $worst_case_exists = mysqli_num_rows($query);
                                                              if ($worst_case_exists == 0) {
                                                                $sql = "INSERT INTO worst_case (worst_case) VALUES ('".$worst_case."')";
                                                                $query = mysqli_query($conn,$sql);
                                                                $_SESSION['worst_case'] = $worst_case;
                                                              } else {
                                                                $_SESSION['worst_case'] = $worst_case;
                                                              }
                                                                  if (isset($best_case)) {
                                                                    if (empty($best_case)) {
                                                                      $_SESSION['errMsg'] = "Missing best case field.";
                                                                    } else {
                                                                      $sql = "SELECT best_case FROM best_case WHERE best_case='".$best_case."'";
                                                                      $query = mysqli_query($conn,$sql);
                                                                      if ($query) {
                                                                      $best_case_exists = mysqli_num_rows($query);
                                                                        if ($best_case_exists == 0) {
                                                                          $sql = "INSERT INTO best_case (best_case) VALUES ('".$best_case."')";
                                                                          $query = mysqli_query($conn,$sql);
                                                                          $_SESSION['best_case'] = $best_case;
                                                                        } else {
                                                                          $_SESSION['best_case'] = $best_case;
                                                                        }
                                                                            if (isset($most_likely_to_happen)) {
                                                                              if (empty($most_likely_to_happen)) {
                                                                                $_SESSION['errMsg'] = "Missing most likely to happen field.";
                                                                              } else {
                                                                                $_SESSION['most_likely_to_happen'] = $most_likely_to_happen;
                                                                                if (isset($helpful_worry)) {
                                                                                  if (empty($helpful_worry)) {
                                                                                    $_SESSION['errMsg'] = "Missing helpful worry field.";
                                                                                  } else {
                                                                                    $_SESSION['helpful_worry'] = $helpful_worry;
                                                                                    if (isset($cope_with_worst)) {
                                                                                      if (empty($cope_with_worst)) {
                                                                                        $_SESSION['errMsg'] = "Missing cope with worst field.";
                                                                                      } else {
                                                                                        $sql = "SELECT cope_with_worst FROM cope_with_worst WHERE cope_with_worst='".$cope_with_worst."'";
                                                                                        $query = mysqli_query($conn,$sql);
                                                                                        if ($query) {
                                                                                        $cope_with_worst_exists = mysqli_num_rows($query);
                                                                                          if ($cope_with_worst_exists == 0) {
                                                                                            $sql = "INSERT INTO cope_with_worst (cope_with_worst) VALUES ('".$cope_with_worst."')";
                                                                                            $query = mysqli_query($conn,$sql);
                                                                                            $_SESSION['cope_with_worst'] = $cope_with_worst;
                                                                                          } else {
                                                                                            $_SESSION['cope_with_worst'] = $cope_with_worst;
                                                                                          }
                                                                                              if (isset($new_viewpoint)) {
                                                                                                if (empty($new_viewpoint)) {
                                                                                                  $_SESSION['errMsg'] = "Missing new viewpoint field.";
                                                                                                } else {
                                                                                                  $sql = "SELECT new_viewpoint FROM new_viewpoint WHERE new_viewpoint='".$new_viewpoint."'";
                                                                                                  $query = mysqli_query($conn,$sql);
                                                                                                  if ($query) {
                                                                                                  $new_viewpoint_exists = mysqli_num_rows($query);
                                                                                                    if ($new_viewpoint_exists == 0) {
                                                                                                      $sql = "INSERT INTO new_viewpoint (new_viewpoint) VALUES ('".$new_viewpoint."')";
                                                                                                      $query = mysqli_query($conn,$sql);
                                                                                                      $_SESSION['new_viewpoint'] = $new_viewpoint;
                                                                                                    } else {
                                                                                                      $_SESSION['new_viewpoint'] = $new_viewpoint;
                                                                                                    }
                                                                                                        if (isset($helpful_thoughts)) {
                                                                                                          if (empty($helpful_thoughts)) {
                                                                                                            $_SESSION['errMsg'] = "Missing helpful thoughts field.";
                                                                                                          } else {
                                                                                                            $sql = "SELECT helpful_thoughts FROM helpful_thoughts WHERE helpful_thoughts='".$helpful_thoughts."'";
                                                                                                            $query = mysqli_query($conn,$sql);
                                                                                                            if ($query) {
                                                                                                            $helpful_thoughts_exists = mysqli_num_rows($query);
                                                                                                              if ($helpful_thoughts_exists == 0) {
                                                                                                                $sql = "INSERT INTO helpful_thoughts (helpful_thoughts) VALUES ('".$helpful_thoughts."')";
                                                                                                                $query = mysqli_query($conn,$sql);
                                                                                                              } else {
                                                                                                                $_SESSION['helpful_thoughts'] = $helpful_thoughts;
                                                                                                              }
                                                                                                                  if (isset($new_prediction_scale)) {
                                                                                                                    if (empty($new_prediction_scale)) {
                                                                                                                      $_SESSION['errMsg'] = "Missing new prediction scale field.";
                                                                                                                    } else {
                                                                                                                      $_SESSION['new_prediction_scale'] = $new_prediction_scale;
                                                                                                                      if (isset($new_emotion)) {
                                                                                                                        if (empty($new_emotion)) {
                                                                                                                          $_SESSION['errMsg'] = "Missing new emotion field.";
                                                                                                                        } else {
                                                                                                                          $_SESSION['new_emotion'] = $new_emotion;
                                                                                                                          if (isset($new_emotion_scale)) {
                                                                                                                            if (empty($new_emotion_scale)) {
                                                                                                                              $_SESSION['errMsg'] = "Missing new emotion scale field.";
                                                                                                                            } else {
                                                                                                                              $sql = "SELECT new_emotion, new_emotion_scale FROM new_emotion WHERE new_emotion='".$new_emotion."' AND new_emotion_scale='".$new_emotion_scale."'";
                                                                                                                              $query = mysqli_query($conn,$sql);
                                                                                                                              if ($query) {
                                                                                                                              $emotion_exists = mysqli_num_rows($query);
                                                                                                                              if ($emotion_exists == 0) {
                                                                                                                                $sql = "INSERT INTO new_emotion (new_emotion, new_emotion_scale) VALUES ('".$new_emotion."', '".$new_emotion_scale."')";
                                                                                                                                $query = mysqli_query($conn,$sql);
                                                                                                                                $_SESSION['new_emotion_scale'] = $new_emotion_scale;
                                                                                                                              } else {
                                                                                                                                $_SESSION['new_emotion_scale'] = $new_emotion_scale;
                                                                                                                              }
                                                                                                                                $sql = "INSERT INTO worry_diary_entry (username, dates, worrying_thoughts_id, prediction_id, emotion_id, evidence_for_id,
                                                                                                                                  evidence_against_id, worry_prediction_scale, worst_case_id, best_case_id, most_likely_to_happen, helpful_worry,
                                                                                                                                  cope_with_worst_id, new_viewpoint_id, helpful_thoughts_id, new_prediction_scale, new_emotion_id)
                                                                                                                                  VALUES ('".$username."', NOW(), (SELECT worrying_thoughts_id FROM worrying_thoughts WHERE worrying_thoughts='".$worrying_thoughts."'),
                                                                                                                                  (SELECT prediction_id FROM prediction WHERE prediction='".$prediction."' AND prediction_scale='".$prediction_scale."'),
                                                                                                                                  (SELECT emotion_id FROM emotions WHERE emotion='".$emotion."' AND emotion_scale='".$emotion_scale."'),
                                                                                                                                  (SELECT evidence_for_id FROM evidence_for_prediction WHERE evidence_for='".$evidence_for."'),
                                                                                                                                  (SELECT evidence_against_id FROM evidence_against_prediction WHERE evidence_against='".$evidence_against."'),
                                                                                                                                  '".$worry_prediction_scale."',
                                                                                                                                  (SELECT worst_case_id FROM worst_case WHERE worst_case='".$worst_case."'),
                                                                                                                                  (SELECT best_case_id FROM best_case WHERE best_case='".$best_case."'),
                                                                                                                                  '".$most_likely_to_happen."',
                                                                                                                                  '".$helpful_worry."',
                                                                                                                                  (SELECT cope_with_worst_id FROM cope_with_worst WHERE cope_with_worst='".$cope_with_worst."'),
                                                                                                                                  (SELECT new_viewpoint_id FROM new_viewpoint WHERE new_viewpoint='".$new_viewpoint."'),
                                                                                                                                  (SELECT helpful_thoughts_id FROM helpful_thoughts WHERE helpful_thoughts='".$helpful_thoughts."'),
                                                                                                                                  '".$new_prediction_scale."',
                                                                                                                                  (SELECT new_emotion_id FROM new_emotion WHERE new_emotion='".$new_emotion."' AND new_emotion_scale='".$new_emotion_scale."'))";
                                                                                                                                  echo $sql;
                                                                                                                                  $query = mysqli_query($conn,$sql);
                                                                                                                                  if ($query) {
                                                                                                                                    unset($_SESSION['worrying_thoughts']);
                                                                                                                                    unset($_SESSION['prediction']);
                                                                                                                                    unset($_SESSION['prediction_scale']);
                                                                                                                                    unset($_SESSION['emotion']);
                                                                                                                                    unset($_SESSION['emotion_scale']);
                                                                                                                                    unset($_SESSION['evidence_for']);
                                                                                                                                    unset($_SESSION['evidence_against']);
                                                                                                                                    unset($_SESSION['worry_prediction_scale']);
                                                                                                                                    unset($_SESSION['worst_case']);
                                                                                                                                    unset($_SESSION['best_case']);
                                                                                                                                    unset($_SESSION['most_likely_to_happen']);
                                                                                                                                    unset($_SESSION['helpful_worry']);
                                                                                                                                    unset($_SESSION['cope_with_worst']);
                                                                                                                                    unset($_SESSION['new_viewpoint']);
                                                                                                                                    unset($_SESSION['helpful_thoughts']);
                                                                                                                                    unset($_SESSION['new_prediction_scale']);
                                                                                                                                    unset($_SESSION['new_emotion']);
                                                                                                                                    unset($_SESSION['new_emotion_scale']);
                                                                                                                                    $_SESSION['succMsg'] = "Worry diary entry created!";
                                                                                                                                  }
                                                                                                                                }
                                                                                                                              }
                                                                                                                            }
                                                                                                                          }
                                                                                                                        }
                                                                                                                      }
                                                                                                                    }
                                                                                                                  }
                                                                                                                }
                                                                                                              }
                                                                                                            }
                                                                                                          }
                                                                                                        }
                                                                                                      }
                                                                                                    }
                                                                                                  }
                                                                                                }
                                                                                              }
                                                                                            }
                                                                                          }
                                                                                        }
                                                                                      }
                                                                                    }
                                                                                  }
                                                                                }
                                                                              }
                                                                            }
                                                                          }
                                                                        }
                                                                      }
                                                                    }
                                                                  }
                                                                }
                                                              }
                                                            }
                                                          }
                                                        }
                                                      }
                                                    }
                                                  }
                                                }
                                              }
                                            }
                                          }
                                        }
                                      }
                                    }


              echo "<script>window.location.replace('worry_diary_entry.php')</script>";
            }
