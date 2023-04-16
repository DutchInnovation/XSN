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
    case "update_profile":
      $username = $_POST['username'];
      $full_name = $_POST['full_name'];
      $bio = $_POST['bio'];
      $country = $_POST['country'];

      $username = filter_var($username, FILTER_SANITIZE_STRING);
      $full_name = filter_var($full_name, FILTER_SANITIZE_STRING);
      $bio = filter_var($bio, FILTER_SANITIZE_STRING);
      $country = filter_var($country, FILTER_SANITIZE_STRING);

      if ($_FILES["profile_image"]["name"] != "") {
        $pfp_upload = pfp_upload();

        if ($pfp_upload['state'] == "success") {
          $profile_image = $pfp_upload['type'];
          
          update_pfp($profile_image);
          update_profile($username, $full_name, $bio, $country);
        }
      } else {
        echo update_profile($username, $full_name, $bio, $country);
      }

      break;
  }

} else {
  header("Location: 404");
}
