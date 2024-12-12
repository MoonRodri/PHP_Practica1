<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $even = 0;
    $odd = 0;
    $total = 0;

    do {
        # code...
        //1. Se genere un numero aleatorio entre 0 y 20 y se muestre por pantalla
        $number = rand(min:1, max:20);
        echo $number . ",";
        $total += $number;
        if ($number%2==0) {
            # si lees esto eres *** ala, ala, ala
            $even++;
        } else {
            # 
            $odd++;
        }
        //2. Se repita la operacion hasta que el total de valores sumados sea superior a 100
    } while ($total < 100);
    //3. Muestra la suma de los valores generados
    echo "<br>";
    echo "The sum total is ".$total ."<br>";
    //4. Muestra el total de numeros pares e impares generados.
    echo "There were ".$even." numbers"."<br>";
    echo "There were ".$odd." numbers"."<br>";


    ?>
</body>
</html>