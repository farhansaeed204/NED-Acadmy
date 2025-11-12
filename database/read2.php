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
        die("not connect"). "<br>";
    }else{
        echo "connected";
    }

    $read = "SELECT * FROM `courses`";
    $result = mysqli_query($conn, $read);

    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($data as $row){
                echo "<br>";
                print_r($row);
        }
    }else{
        echo "no data found";
    }
    ?>
</body>
</html>