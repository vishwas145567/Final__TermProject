<?php 
    $title = "Received";
    require_once 'db/conn.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['Name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['Password'];


$name = mysqli_real_escape_string($conn, $name);
$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//Execute the query and check for success
// SQL - insert
 
$sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$hashedPassword')";

// Execute the query and check for success
if (mysqli_query($conn, $sql)) {
    header("Location:signup.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
    }
?>
	


 
