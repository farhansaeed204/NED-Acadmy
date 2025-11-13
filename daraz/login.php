<?php
$email = $_POST["email"];
$pass = $_POST["password"];

$conn = mysqli_connect("localhost", "root", "", "daraz");
if(!$conn){
    die("connection faild");
}

$query = "SELECT * FROM `customers` WHERE email='$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if($user && password_verify($pass, $user["password"])){
    echo "login successfully";
}else{
    echo "Incorrect Email or password";
    exit();
}
?>