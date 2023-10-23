<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer- While/Do While Loops</title>
</head>
<body>
    <h1> While Loops</h1>
    <?php
        echo '<h2> While/Do While Loops</h2>';
         // Infinite Loop
         // $grade = 0;
         //while($grade < 10){
         //echo '<p> I AM LESS THAN 10!</p>';
         //}
            //Pre-Condition Loop
         while($grade < 10){
            echo '<p> I AM LESS  THAN 10!</p>';
            $grade++;
         }

            echo 'EXIT LOOP!';
    ?>
    <h1> Do While Loops</h1>

    <?php
    // Post-Condition Loop
    $grade = 0;
        do{
            echo '<p> I AM WHILE LOOP</p>';
            $grade++;
        }while ($grade < 10);
        echo 'EXIT LOOP!';
    ?>
</body>
</html>