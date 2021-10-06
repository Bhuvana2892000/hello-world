<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];



$stmt = $conn->prepare("select * from user ($usename,md5($password),$email) VALUES (?, ?, ?)");

if($conn) {
        echo "successfully login"; 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 


?>