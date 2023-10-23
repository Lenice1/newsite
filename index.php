<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h2> Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Simple Array and Printouts</a></li>
        <li><a href="forloop.php">Simple For Loop</a></li>
        <li><a href="whiledowhileloop.php">Simple While/Do While Loop</a></li>
        <li><a href="ifstatement.php">Simple If Statement</a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a></li>
        <li><a href="stringmanip.php">Simple String Manipulation</a></li>
        <li><a href="datetimemanip.php">Simple Date and Time  Manipulation</a></li>
    </ul>
    <!-- Basic HTNL -->
    <h1> Hello World - PHP Primer</h1>
    <br/>
    <?php 
    //Printing to HTML using echo
        echo 'Hello PHP!';
        echo'<br/>';
        echo 'Second Line';
        echo'<br/>';
    ?>

    <?php
        //declear variable
        $name = 'Lenice Brissett';
        $age = '26';
        //echo variable
        echo $name;
        echo '<h1>My Name is: '.$name.'</h1>';
        echo '<h1>My Age is: '.$age.'</h1>'
    ?>

</body>
</html>