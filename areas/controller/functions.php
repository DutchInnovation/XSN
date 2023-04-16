<?php

function register($username, $password, $password_confirm, $email, $security_question_id, $security_question_answer) {
  $db = new SprintDB('XSN');

  // check if username is taken
  $sql = "SELECT count(*) FROM users WHERE username = '$username'";
  $result = $db->fetch($sql);
  if ($result['count(*)'] == 1) {
    return JSON_encode(array("state" => "error", "message" => "Username is taken"));
  }

  // check if email is taken
  $sql = "SELECT count(*) FROM users WHERE email = '$email'";
  $result = $db->fetch($sql);
  if ($result['count(*)'] == 1) {
    return JSON_encode(array("state" => "error", "message" => "Email is taken"));
  }

  // check if passwords match
  if ($password != $password_confirm) {
    return JSON_encode(array("state" => "error", "message" => "Passwords do not match"));
  }

  // create user
  $password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, password, email, security_question_id, security_question_answer) VALUES ('$username', '$password', '$email', '$security_question_id', '$security_question_answer')";
  $db->query($sql);

  $sql = "SELECT count(*) FROM users WHERE username = '$username'";
  $result = $db->fetch($sql);

  if ($result['count(*)'] == 1) {
    return JSON_encode(array("state" => "success"));
  } else {
    return JSON_encode(array("state" => "error", "message" => "Unknown error"));
  }
}

function login($username, $password) {
  $db = new SprintDB('XSN');

  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $db->fetch($sql);

  if (password_verify($password, $result['password'])) {
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['loggedin'] = true;
    return JSON_encode(array("state" => "success"));
  } else {
    return JSON_encode(array("state" => "error", "message" => "Incorrect username or password"));
  }
}

function update_profile($username, $full_name, $bio, $country) {
  $db = new SprintDB('XSN');
  $user_id = $_SESSION['user_id'];
  $sql = "UPDATE users SET username = '$username', full_name = '$full_name', bio = '$bio', country = '$country' WHERE id = $user_id";
  $db->query($sql);

  return JSON_encode(array("state" => "success"));
}

function update_pfp($profile_image) {
  $db = new SprintDB('XSN');
  $user_id = $_SESSION['user_id'];
  $sql = "UPDATE users SET profile_image = '$profile_image' WHERE id = $user_id";
  $db->query($sql);

  return JSON_encode(array("state" => "success"));
}

function pfp_upload() {
  $target_dir = "assets/uploads/profile-img/";
  $target_file_type = explode(".", basename($_FILES["profile_image"]["name"]))[1];
  $target_file = $target_dir . $_SESSION['user_id'] . "." . $target_file_type;
  $uploadOk = 1;
  $imageFileType = $_FILES["profile_image"]["type"];
  
  // Check file size
  if ($_FILES["profile_image"]["size"] > 500000) {
    return array("state" => "error", "message" => "Sorry, your file is too large.");
    exit;
  }
  
  // Allow certain file formats
  if($imageFileType != "image/jpg" && $imageFileType != "image/png" && $imageFileType != "image/jpeg"
  && $imageFileType != "image/gif" ) {
    return array("state" => "error", "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    exit;
  }
  

  if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
    return array(
      "state" => "success",
      "message" => "The file ". basename( $_FILES["profile_image"]["name"]). " has been uploaded.",
      "type" => $target_file_type
    );
  } else {
    return array("state" => "error", "message" => "Sorry, there was an error uploading your file.");
  }
}

function join_community($community_id) {
  $db = new SprintDB('XSN');
  $user_id = $_SESSION['user_id'];
  $sql = "INSERT INTO community_members (community_id, user_id) VALUES ($community_id, $user_id)";
  $db->query($sql);
  return JSON_encode(array("state" => "success"));
}

function leave_community($community_id) {
  $db = new SprintDB('XSN');
  $user_id = $_SESSION['user_id'];
  $sql = "DELETE FROM community_members WHERE community_id = $community_id AND user_id = $user_id";
  $db->query($sql);
  return JSON_encode(array("state" => "success"));
}

function is_member($community_id) {
  $db = new SprintDB('XSN');
  $user_id = $_SESSION['user_id'];
  $sql = "SELECT count(*) FROM community_members WHERE community_id = $community_id AND user_id = $user_id";
  $result = $db->fetch($sql);
  if ($result['count(*)'] == 1) {
    return true;
  } else {
    return false;
  }
}

function load_community($community_id) {
  $db = new SprintDB('XSN');
  $user_id = $_SESSION['user_id'];
  $sql = "SELECT * FROM communities WHERE id = $community_id LIMIT 1";
  $community = $db->fetch($sql);

  $sql = "SELECT * FROM activities WHERE community_id = $community_id";
  $activities = $db->fetch_multiple($sql);

  return JSON_encode(array(
    "state" => "success",
    "community" => $community,
    "activities" => $activities,
    "is_member" => is_member($community_id)
  ));
}