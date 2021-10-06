<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$stmt = $conn->prepare("INSERT INTO user ($usename,md5($password),$email) VALUES (?, ?, ?)");

if($conn) {
        echo "successfully signup"; 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
$stmt->close();
$conn->close();

?>