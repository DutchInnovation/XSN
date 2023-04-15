<?php
include("areas/controller/functions.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['request'])) {
    $request = $_POST['request'];
  } else {
    echo "ERROR: No request defined";
    exit();
  }
  
  switch ($request) {  
    case "register":
      $username = $_POST['username'];
      $password = $_POST['password'];
      $password_confirm = $_POST['password_confirm'];
      $email = $_POST['email'];
      $security_question_id = $_POST['security_question_id'];
      $security_question_answer = $_POST['security_question_answer'];
      echo register($username, $password, $password_confirm, $email, $security_question_id, $security_question_answer);
      break;
    case "login":
      $username = $_POST['username'];
      $password = $_POST['password'];
      echo login($username, $password);
      break;
  }

} else {
  header("Location: 404");
}
