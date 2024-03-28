<?php
session_start();
if(empty($_SESSION['email']))
{
  echo '<h1>Please Login To Order This Product.</h1>';
  echo '<a href="login.php">Go To Login</a>';
}
else {
  header('location: email.php');
}
?>