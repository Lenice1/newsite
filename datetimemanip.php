<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer- DAte and Time Manipulation</title>
</head>
<body>
    <h1>Date and Time Manipulation</h1>
    <?php
        echo '<h2>Date and Time Manipulation</h2>';

        $datenow = getdate();
        echo "Todays's Date <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Todays's Date:" . $datenow['mon'] . '/' .  $datenow['mday'] . '/' . $datenow['year']. '<br/>';
        
        echo time() . '<br/>';

        echo date("m/d/y G.i:s<br>", time()) . '<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());

        
    ?>
</body>
</html>