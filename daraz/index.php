<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraz</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .card{
            display: flex;
            flex-direction: column;
            
        }
    </style>
</head>
<body>
    <h1>This is product page</h1>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "daraz");
    if(!$conn){
        die("Connection Failed");
    }

    $query = "SELECT * FROM `products`";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo "<div class='container'>";
        foreach($products as $product){
            echo "<div class='card'>";
            // echo $product["product_name"];
            // echo $product["price"];
            echo "<h1>". $product["product_name"]. "</h1>";
            echo "<p>". $product["price"]. "<p>";

            echo "</div>";
        }
        echo "</div>";
    }else{
        echo "No Data Found";
    }

    
    ?>
</body>
</html>
