<?php 
$title = "PHP Primer- Date and Time Manipulation";
include 'includes/header.php'; 
?>
</head>
<body>
<h1><?php echo $title ?></h1>
    <?php


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
  <?php 
        require 'includes/footer.php'
     ?>
