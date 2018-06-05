<?php
  $connection = mysqli_connect('localhost', 'root', '', 'messagebox');
  if(mysqli_connect_errno()) {
    die('Falied to connect with database'. mysqli_connect_error());
  }
?>
