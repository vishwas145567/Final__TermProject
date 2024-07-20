<?php
session_start();
//$_SESSION['username'] = 'John';
   // echo $_SESSION["username"];
  //  echo "Session ID: " . session_id();


session_destroy();


setcookie(session_name(), '', 100); 


header('Location: loginform.php');
exit;
?>
