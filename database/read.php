<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "new");

    if(!$conn){
        die("Connection faild"). "<br>";
    }else{
        echo "Connected". "<br>";
    }

    // 2nd step: query
    $readquery = "SELECT * FROM `students`";
    $result = mysqli_query($conn, $readquery);

    if(mysqli_num_rows($result) > 0){
        echo "yes". "<br>";
    }else{
        echo "no data found";
    }
    ?>
</body>
</html>
