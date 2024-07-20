<?php
    session_start();
    $_SESSION['username'] = 'John';
    echo $_SESSION["username"];
    echo "Session ID: " . session_id();
?>
