<?php
// Definimos las variables
$saludo = "Hola Mundo";
$name = "Miguel Castaño Salgado";

// 1. Imprimir las cadenas originales
echo "Saludo Original: " . $saludo . "<br>";
echo "Nombre Original: " . $name . "<br>";

// 2. Convertir las cadenas a mayúsculas
echo "Saludo en Mayúsculas: " . strtoupper($saludo) . "<br>";
echo "Nombre en Mayúsculas: " . strtoupper($name) . "<br>";

// 3. Convertir las cadenas a minúsculas
echo "Saludo en Minúsculas: " . strtolower($saludo) . "<br>";
echo "Nombre en Minúsculas: " . strtolower($name) . "<br>";

// 4. Reemplazar parte de las cadenas
$saludo_modificado = str_replace("Mundo", "PHP", $saludo);
echo "Saludo Modificado: " . $saludo_modificado . "<br>";

// 5. Extraer una subcadena
$nombre_subcadena = substr($name, 7, 7); // Extrae "Castaño"
echo "Subcadena del Nombre: " . $nombre_subcadena . "<br>";

// 6. Buscar una subcadena
$posicion = strpos($name, "Castaño");
if ($posicion !== false) {
    echo "La subcadena 'Castaño' se encuentra en la posición: " . $posicion . "<br>";
} else {
    echo "La subcadena 'Castaño' no se encontró en el nombre.<br>";
}

// 7. Dividir una cadena en un array
$nombre_array = explode(" ", $name);
echo "Nombre Dividido en Array:<br>";
print_r($nombre_array); // Salida: Array ( [0] => Miguel [1] => Castaño [2] => Salgado )
echo "<br>";

// 8. Unir un array en una cadena
$nombre_unido = implode(" ", $nombre_array);
echo "Nombre Unido: " . $nombre_unido . "<br>";

// 9. Eliminar espacios en blanco
$saludo_espacios = "   Hola Mundo   ";
echo "Saludo con Espacios Eliminados: '" . trim($saludo_espacios) . "'<br>";

// 10. Mostrar el nombre con un formato específico
$nombre_formateado = sprintf("Nombre: %s", $name);
echo $nombre_formateado . "<br>";
function sumar($a, $b, $c) {
    return $a + $b + $c;
}

$numeros = [1, 2, 3];

// Usando el operador spread para pasar el array como argumentos
echo sumar(...$numeros); // Salida: 6



