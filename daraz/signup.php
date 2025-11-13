<?php
$email = $_POST["email"];
$pass = $_POST["password"];

$conn = mysqli_connect("localhost", "root", "", "daraz");
if(!$conn){
    die("connection not made");
}
if(empty($email)){
    echo "emial is required";
    exit();
}
if(empty($pass)){
    echo "password is required";
    exit();
}else{
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
}
$query = "INSERT INTO `customers` (email, password) VALUES ('$email', '$pass')";

if(mysqli_query($conn, $query)){
    echo "<h1>Signup Successfully</h1>";
}else{
    echo "Could not Signup";
}

mysqli_close($conn);
?>