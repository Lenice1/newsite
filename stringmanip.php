<?php 
 $title = "PHP Primer- String Manipulation";
include 'includes/header.php'; 
?>
</head>
<body>
<h1><?php echo $title ?></h1>
    <?php


        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "lenice brissett";
        echo $phrase1 .  ", named Tiffany, ". $phrase2;
        echo '<br/>';

        // String Transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Uppercase : ' . strtoupper($name).'<br/>';
        echo 'Lowercase : ' . strtolower("THIS WAS ALL UPPERCASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String:' .str_repeat('a', 10) .'<br/>';
        echo 'Repeat String:' .strtoupper(str_repeat('a', 10)) .'<br/>';
        echo 'Get a Substring:' .substr($name,3,5) .'<br/>';

        echo 'Get Position of String:' .strpos($name, 'b') .'<br/>';
        // Returns NULL
        // echo 'Get position of string: ' . strpos($combine,'z').'<br/>;
        echo 'Find Character "R":' .strchr($name, 'R') .'<br/>';
        echo 'Find Character "r":' .strchr($name, 'r') .'<br/>';
        echo 'Find Character "s":' .strchr($name, 's') .'<br/>';
        echo 'Find Character "e":' .strchr($name, 'e') .'<br/>';

        echo 'Find Length of String:' .strlen($name) .'<br/>';

        echo 'Without Trim:'. "A" . "B C D". "E" .'<br/>';
        echo 'Trim spaces on both sides:'. "A" . trim(" B C D "). "E" .'<br/>';
        echo 'Trim spaces to the left:'. "A" . ltrim(" B C D "). "E" .'<br/>';
        echo 'Trim spaces to the right:'. "A" . rtrim(" B C D "). "E" .'<br/>';

        echo 'Replace string with another:'. str_replace("stand", "sit", $phrase2) . '<br/>';
    ?>
  <?php 
        require 'includes/footer.php'
     ?>
