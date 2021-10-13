<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn) {
        error_log("Failed to connect to database!", 0);
    } 
    else {
        error_log("Successfully connected", 1);
    } 


$username = $_POST['username'];

$password = $_POST['password'];

$password = md5($password); 

$email = $_POST['email'];

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	
	echo '<script>alert("Please complete the registration form")</script>';
}

$stmt = $conn->prepare("SELECT * FROM user WHERE username ='$username' && email='$email'");
if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
}
if($num_rows > 0){
    echo "Successfully Login";
}else{
    echo "Invalid username or email" ;
}
?>