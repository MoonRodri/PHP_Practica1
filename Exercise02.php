<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENTO2</title>
</head>
<body>
    <?php
    $Day=6;
    switch ($Day) {
        case '1':
            # code...
            echo "Today is Monday";
            break;
        
        case '2':
            # code...
            echo "Today is Tuesday";
            break;
            
        case '3':
            # code...
            echo "Today is Wednesday";
            break; 
        
        case '4':
            # code...
            echo "Today is Thursday";
            break;
        
        case '5':
            # code...
            echo "Today is Friday";
            break;
        
        case '6':
            # code..
            echo "Today is Saturday";
            break; 
        
        case '7':
            # code...
            echo "Today is Sunday";
            break;
        
        default:
            # code...
            echo "the value does not corresponding with any day";
            break;
    }    
    ?>
</body>
</html>