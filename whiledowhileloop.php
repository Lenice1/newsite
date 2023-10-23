<?php 
$title = "PHP Primer- While/Do While Loops";
include 'includes/header.php'; 
?>

</head>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        
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
  <?php 
        require 'includes/footer.php'
     ?>
