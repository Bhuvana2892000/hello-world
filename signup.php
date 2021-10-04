<?php
//Start with the MySQL connection as in the previous example

$mysqli = new mysqli("localhost","user","password","db");


$username = $_POST['username'];
$password = $_POST['password'];

$result = $mysqli->query("insert into users WHERE login='".$user."' AND password='".md5($password)."'");

if($result->num_rows) {
   //user match
}
else {
   //error, incorrect user or password
}