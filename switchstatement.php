<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer- Switch Statements</title>
</head>
<body>
    <h1> Switch Statements</h1>
    <?php

        echo '<h2> Switch Statements</h2>';

        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green"> YOU ARE A SUPERSTAR!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue"> YOU DID WELL!</h2>';
                break;
            default:
                echo '<h2 style="color: red"> YOU HAVE FAILED....</h2>';
                break;


        }

    ?>
</body>
</html>