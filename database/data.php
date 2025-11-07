<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserting data into backend</h1>
    <?php
    // inserting data into backend using php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pitp";

    $conn=mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Connection not be made!");
    }else{
        echo "Connection made";
    }

    ?>
</body>
</html>