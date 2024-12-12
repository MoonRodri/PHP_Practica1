<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php

    $number1 = 4; 
    $number2 = 5;
    echo "the numbers are ".$number1." and ".$number2."<br>"; 
    echo "the sum of ".$number1." + ".$number2." = ".($number1+$number2)."<br>";
    echo "the substraction of ".$number1." - ".$number2." = ".($number1-$number2)."<br>";
    echo "the division of  ".$number1." / ".$number2." = ".($number1/$number2)."<br>";
    if($number2>$number1){echo $number2." is the greatest number"."<br>";}
    echo "the triangle area is ".(($number1*$number2)/2)."<br>";
    ?>
</body>
</html> 