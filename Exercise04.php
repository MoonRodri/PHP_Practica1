<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //1. Genere un numero aleatorio entre el 1 y el 6 usando la funcion rand()
    $number = rand(min:1,max:6);
    //2. Calcula la raiz cuadrada usando la funcion sqrt()
    echo "The square root of ".$number." is ".sqrt(num:$number)

    ?>
</body>
</html>