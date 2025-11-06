<?php
// empty string check
// this all value ans is true
// $name = "";
// $name = 0;
// $name = "0";
// $name = null;
// $name = false;
// $name = [];
// echo empty($name);       // answer is 1 its mean true in php or ans is empty its mean false


// check email format 
// $email = "farhansaeed@gmail.com";
// echo filter_var($email, FILTER_VALIDATE_EMAIL);  // ans return email means email format is correct or ans is empty means format is worng


// HTML special charac
// echo htmlspecialchars($_POST["username"]);   // remove html tags when user type html any tag in input field and return same code as text data


// Trim() this function remove extra spaces from left or right
// echo $_POST["username"];
// echo "<br>";
// echo trim($_POST["username"]);  


// stripsslashesh() this function remove backslashs (\)
// $name = "\ farhan";
// echo stripslashes($name);


// form validation
$name = $_POST["name"];
$email = $_POST["email"];
$phone_num = $_POST["Phone_number"];
$nameError=$emailError=$phoneError ="";

function test_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};
if (empty($name)){
    $nameError = "Name Field is Empty please fill it";
    echo $nameError. "<br>";
    echo "<a href='index.html'><button>go back</button></a>";
    exit();
}else{
    $name = test_data($name);
    echo $name. "<br>";
}
if(empty($email)){
    $emailError = "Email Field is Empty please fill it";
    echo $emailError. "<br>";
    echo "<a href='index.html'><button>go back</button></a>";
    exit();
}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
    $emailError= "email format not valid";
    echo $emailError. "<br>";
    echo "<a href='index.html'><button>go back</button></a>";
    exit();
}else{
    $email = test_data($email);
    echo $email. "<br>";
}
if (empty($phone_num)){
    $phoneError = "Phone field is empty Please fil it";
    echo $phoneError. "<br>";
    echo "<a href='index.html'><button>go back</button></a>";
    exit();
}else{
    $phone_num = test_data($phone_num);
    echo $phone_num. "<br>";
}


echo "Form Submit Successfully";
?>
