<?php
<?php

class DB {
	
	protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "php";
	
	public function connect() {
	
		$connect_db = new mysqli( $this->servername, $this->username, $this->password, $this->dbname );
		
		if($connect_db) {
            error_log("Failed to connect to database!", 0);
        } 
        else {
            error_log("Successfully connected", 1);
        } 
		
	}

}


$username = $_POST['username'];

$password = $_POST['password'];

$password = md5($password); 

$email = $_POST['email'];

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	
	echo '<script>alert("Please complete the registration form")</script>';
}

$stmt = $conn->prepare("insert into user (username,password,email) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $username,$password,$email);

echo "Signup successfully";

$stmt->execute();

$stmt->store_result();

?>