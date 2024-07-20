<?php

require_once 'db/conn.php';


$email = $_POST["email"];
$password = $_POST["password"];
$email = mysqli_real_escape_string($conn, $email);
    $password=mysqli_real_escape_string($conn, $password);


$sql = "SELECT password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($database_password);
$stmt->fetch();
    $stmt->close();

 

    
    if (password_verify($password,$database_password )) {
        // Login successful
          
        header("Location: training.php");  
    } else {
       // header("Location: index.html"); 
       echo $database_password;
       echo $password;
        
    }

$stmt->close();
$conn->close();

?>
