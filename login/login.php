<?php

include('logincon.php');


$db = new Database();

$data = $_POST;

if (empty($data['username']) || empty($data['email'])) {
    
    die('Please fill all required fields!');
}

if (isset($_POST['submit'])){

        $username = $_POST['username'];

        $email = $_POST['email'];

        $stmt = $db->getConnection() ->prepare("Select username,email from user where username = ? OR email = ?");
        $stmt->bind_param('ss',$username,$email);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $result = $stmt->store_result();
        if($stmt->num_rows == 1) 
        {
            while($stmt->fetch()) 

              {
               $_SESSION['Logged'] = 1;
               $_SESSION['username'] = $username;
               $_SESSION['email'] = $email;
               echo "Hi " .$username. "! You have logged in successfully!!";
               exit();
               }
        }
        else {
            echo "INVALID USERNAME/E-MAIL Combination!";
        }
        $stmt->close();
    }
    else 
    {   

    }
   
?>






   
