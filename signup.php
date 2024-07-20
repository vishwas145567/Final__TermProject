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
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$hashedPassword')";
$stmt = $conn->prepare($sql);
$stmt->bind_param($name, $username, $email, $hashed_password);


if ($stmt->execute()) {
    header("Location: succes.php");  
    exit();  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;  
}

$stmt->close();
$conn->close();

?>
