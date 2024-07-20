<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "client";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['Name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssss", $name, $username, $email, $hashed_password);
    
    if ($stmt->execute()) {
        header("Location: succes.php");
        exit();
    } else {
        echo "your signup is completed please login! " ;
    }
    
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
