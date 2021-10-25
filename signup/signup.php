<?php

include('signup2con.php');


$db = new Database();

$data = $_POST;

if (empty($data['username']) || empty($data['passsword']) || empty($data['email'])) {
    
    die('Please fill all required fields!');
}

if (isset($_POST['submit'])){

        $username = $_POST['username'];

        $password = $_POST['password'];
       
        $email = $_POST['email'];

        $stmt = $db->getConnection() ->prepare("insert into user (username,password,email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username,$password,$email);
        $stmt->execute();
        if($stmt==true) {
        echo "You are registered successfully";
        }
        
   }
        
?>






   
