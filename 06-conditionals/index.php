<?php
$edad = 19;
$estatura = 1.90;

// Condiciones usando tanto edad como estatura
if ($edad >= 19 && $estatura >= 1.80) {
    echo "Es mayor de edad y tiene una estatura alta";
} elseif ($edad >= 70 || $estatura >= 1.80) {
    echo "Es pensionado o tiene una estatura alta";
} else {
    echo "Es menor de edad y tiene una estatura baja";
}
echo "<br><br>";

// Usar operador ternario para evaluar la edad
echo $edad >= 17 ? "Viejo" : "Joven";
echo "<br>";
// edad 18 imprime edad si no 18
$edad =$edad ? $edad:18;
echo $edad;
// es una variable nula no existe imprime mensaje 'Current Location', sie existe imprime su resultado
$myAddress = isset($address)?$address :'Current Location';
echo "<br> {$myAddress}";