<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST['name'];

    $conn = mysqli_connect("localhost", "root", "", "new");

    if(!$conn){
        die ("cannection not be made!");
        echo "<br>";
    }else{
        echo "connection made" . "<br>";
    }
    $qury="INSERT INTO `courses` (name) VALUE ('$name');";
        
    if(mysqli_query($conn,$qury)){
        echo "data save";
    }else{
        echo "error";
    }
    echo "<br>";
    echo "<a href='index2.html'>go back</a>";
    ?>