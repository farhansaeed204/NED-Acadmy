<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // for loop
        // for($i=1; $i<=5; $i++){
        //     echo $i. "<br>";
        // }
    // array in forloop
        $colors = ["purple", "blue", "green"];
    // first method 
        // for($i=0; $i<count($colors); $i++){
        //     echo $array[$i]. "<br>";
        // }        
    // seconds method using foreach
        foreach ($colors as $color){
            echo $color. "<br>";
        }
    
    // while loop
        // $i = 1;
        // while($i <=8 ){
        //     echo $i. "<br>";
        //     $i++;
        // }
    ?>
</body>
</html>