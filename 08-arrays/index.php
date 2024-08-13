<?php
// Crear un array
$frutas = ['banano', 'naranja', 'mango'];
// Imprimir array
echo "Array inicial:<br>";
foreach($frutas as $f){
    print_r(" " . $f);
}
echo "<br><br>";

// Obtener el valor de índices específicos del array
echo "Valor en el índice 0: {$frutas[0]}<br>"; // banano
echo "Valor en el índice 2: {$frutas[2]}<br>"; // mango

// Verificar si un índice existe en el array
if (isset($frutas[3])) {
    echo "El índice 3 existe<br>";
} else {
    echo "El índice 3 no existe<br>";
    echo "Solo existen elementos en posiciones desde 0 hasta " . (count($frutas) - 1) . "<br><br>";
}

// Agregar un elemento al final del array
$frutas[] = 'fresa';
echo "Array después de agregar 'fresa':<br>";
foreach($frutas as $f){
    print_r(" " . $f);
}
echo "<br><br>";

// Convertir todos los elementos del array a minúsculas
$minusFrutas = array_map('strtolower', $frutas);
echo "Array en minúsculas:<br>";
foreach($minusFrutas as $f){
    print_r(" " . $f);
}
echo "<br><br>";

// Convertir todos los elementos del array a mayúsculas
$mayusFrutas = array_map('strtoupper', $frutas);
echo "Array en mayúsculas:<br>";
foreach($mayusFrutas as $f){
    print_r(" " . $f);
}
echo "<br><br>";

// Reiniciar el array y usar array_push para agregar elementos
$frutas = ['banano', 'naranja', 'mango'];
array_push($frutas, 'fresa'); 
array_push($frutas, 'piña', 'uva');
$frutas[5] = 'fresa';

// Usar array_unshift para agregar elementos al principio del array
array_unshift($frutas, 'fresa'); // Agregar 'fresa' al principio
array_unshift($frutas, 'fresa'); // Agregar otra 'fresa' al principio

// Usar array_splice para insertar un elemento en la posición 4
array_splice($frutas, 4, 0, 'manzana');

echo "Array final después de todas las operaciones:<br>";
foreach($frutas as $f){
    print_r(" " . $f);
}
echo "<br><br>";

// Funciones adicionales
$array = ['a' => 'x', 'b' => 'y', 'c' => 'x'];
$keys = array_keys($array, 'x'); // ['a', 'c']
echo "Claves que corresponden al valor 'x':<br>";
print_r($keys);
echo "<br><br>";

$array = ['a' => 1, 'b' => 2];
$values = array_values($array); // [1, 2]
echo "Valores del array:<br>";
print_r($values);
echo "<br><br>";

$flipped = array_flip($array); // [1 => 'a', 2 => 'b']
echo "Array con claves y valores intercambiados:<br>";
print_r($flipped);
echo "<br><br>";

$array = ['a', 'b', 'c', 'd', 'e'];
$slice = array_slice($array, 1, 3); // ['b', 'c', 'd']
echo "Porción del array desde el índice 1 y con longitud 3:<br>";
print_r($slice);
echo "<br><br>";

$array = ['a', 'b', 'c', 'd'];
$removed = array_splice($array, 2, 1, ['x']); // $array: ['a', 'b', 'x', 'd'], $removed: ['c']
echo "Array después de usar array_splice:<br>";
print_r($array);
echo "<br>";
echo "Elementos removidos:<br>";
print_r($removed);
echo "<br><br>";

$array = [1, 2, 3];
$sum = array_sum($array); // 6
echo "Suma de los valores del array:<br>";
echo $sum;
?>
