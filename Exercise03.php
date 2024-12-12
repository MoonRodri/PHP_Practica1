<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Declaración de variables
$number1 = 12; // Primera variable
$number2 = 15; // Segunda variable

// 2. Muestra la progresion numerica de los numeros pares desde 0 hasta el valor de la primera con un bucle for.
for ($i = 0; $i <= $number1; $i += 2) {
    echo $i . ", ";
}
echo "<br>";

// 3. Muestra la progresion numerica desde la segunda variable hasta 0 con un bucle while
while ($number2 >= 0) {
    echo $number2 . ", ";
    --$number2;
}
echo "<br>";

// 4. Muestra la progresion numerica desde la primera variable a la segunda con un bucle do/while
// a. Si la segunda variable es mas pequeña, solo queremos que imprima una vez el valor de la primera variable.

$number2=15;
do {
    # code...
    echo $number1 .", ";
    ++$number1;
} while ($number1 <= $number2);


?>

</body>
</html>
