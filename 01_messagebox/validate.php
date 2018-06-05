<?php
include 'db.php';

if (isset($_POST['submit'])) {
  $user = mysqli_real_escape_string($connection, $_POST['user_name']);
  $message = mysqli_real_escape_string($connection, $_POST['user_message']);

  date_default_timezone_set("Bangladesh/Dhaka");
  $time = date('h:i:s a', time());

  if(!isset($user) || $user == '' || !isset($message) || $message == ''){

  }
  else {
    $query = "insert into messages (name, message, time) values ('$user', '$message', '$time')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("faile to insert new data");
    }
    else {
      header('Location: index.php');
      exit();
    }
  }
}
