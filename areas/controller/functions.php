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