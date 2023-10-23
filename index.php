<?php 
$title = "Home";
include 'includes/header.php'; 
?>
<h1><?php echo $title ?></h1>
    <!-- Basic HTNL -->
    <h1> Hello World - PHP Primer</h1>
    <br/>
    <?php 
    //Printing to HTML using echo
        echo 'Hello PHP!';
        echo'<br/>';
        echo 'Second Line';
        echo'<br/>';
        //declear variable
        $name = 'Lenice Brissett';
        $age = '26';
        //echo variable
        echo $name;
        echo '<h1>My Name is: '.$name.'</h1>';
        echo '<h1>My Age is: '.$age.'</h1>'

    ?>

    <button type="button" class="btn btn-dark"> Click Me!</button>
 
    <?php 
        require 'includes/footer.php'
     ?>