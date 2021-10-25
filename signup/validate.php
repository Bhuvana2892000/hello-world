<?

//validate username

$username = $_POST['username'];

if (empty($_POST["username"])) { 
            echo "Name is required";  
        } else {  
           $username = $_POST["username"];  
               if (!preg_match("/^[a-zA-Z ]*$/",$username)) {  
                   echo "Only alphabets and white space are allowed";  
               }  
        }          


//validate password

$password = $_POST['password'];
        
if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
            echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
           } else {
            echo "Your password is strong.";
           }
       

//validate email

$email = $_POST ["Email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    echo "Your valid email address is: " .$email;  
}  


?>

        
       

        