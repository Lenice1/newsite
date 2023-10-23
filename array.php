<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer- Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        echo '<h2>Array</h2>';

        // A Variable
        $num = 3;
        // An Array
        //Only One Datatype 
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18);
        // You can access the value in a subscript of the array using the index.
        echo $numbers [5];
        echo "<p>$numbers[9]</p>";
        $size = count($numbers);
        echo "<p>Array Number is Size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }


        
    ?>
</body>
</html>