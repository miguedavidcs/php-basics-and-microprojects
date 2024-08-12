<?php
// Definición de variables
$name = 'Miguel';
$_profesion = "Ingeniero de Sistemas";
$year_exp = 5;
$genero = "Masculino";
$is_mayor = true;
$altura = 1.9;
$colores = array("rojo", "verde", "azul");
$usuario = array("nombre" => "Miguel", "edad" => 28);
$variable = "123";
$entero = (int)$variable;
$variable = "123.45";
$flotante = (float)$variable;
$variable = 123;
$cadena = (string)$variable;
$variable = "texto";
$booleano = (bool)$variable;
$array = (array)$variable;
$objeto = (object)$variable;

// Definición de funciones
function FrutaFavorita($posicion) {
    $fruta = array(
        0 => 'Manzana',
        1 => 'Pera',
        2 => 'Mango',
        3 => 'Corozo'
    );
    // Verificamos si la posición existe en el array
    if (isset($fruta[$posicion])) {
        return $fruta[$posicion];
    } else {
        return "No hay frutas";
    }
}

function QuienSoy($name, $_profesion) {
    if ($name == 'Miguel') {
        if ($_profesion != 'Enfermero') {
            return "Yes, I'm";
        } else {
            return "En otro multiverso";
        }
    }
    return "Yes, I'm the Profe";
}

// Imprimir resultados de funciones
echo "<h2>Resultados de Funciones</h2>";
echo "Fruta Favorita (posición 0): " . FrutaFavorita(0) . "<br>"; // Imprime 'Manzana'
echo "Fruta Favorita (posición 3): " . FrutaFavorita(3) . "<br>"; // Imprime 'Corozo'
echo "Quien Soy (Miguel, Ingeniero de Sistemas): " . QuienSoy($name, $_profesion) . "<br>"; // Imprime 'Yes, I'm'
echo "Quien Soy (Miguel, Enfermero): " . QuienSoy('Miguel', 'Enfermero') . "<br>"; // Imprime 'En otro multiverso'

// Imprimir tipos de variables
echo "<h2>Tipos de Variables</h2>";
echo "Altura: " . gettype($altura) . "<br>";
echo "Name: " . gettype($name) . "<br>";
echo "Mayor de edad: " . ($is_mayor ? 'Sí' : 'No') . "<br>";
echo "Mayor de edad (tipo): " . gettype($is_mayor) . "<br>";

// Imprimir valores de variables
echo "<h2>Contenido de Variables</h2>";
echo "Tipo | Tamaño | Valor<br>";
var_dump($name);
echo "<br>";
var_dump($is_mayor, $year_exp);

// Imprimir arrays usando var_dump
echo "<h2>Contenido de Arrays</h2>";
echo "Contenido de \$colores:<br>";
echo "<pre>";
var_dump($colores);
echo "</pre>";
echo "Contenido de \$usuario:<br>";
echo "<pre>";
var_dump($usuario);
echo "</pre>";

// Cambiar y mostrar valores de variables
echo "<h2>Cambio de Valor de Variables</h2>";
echo "Nombre original: ";
var_dump($name);
echo "<br>";
$name = 45;
echo "Nombre cambiado: ";
var_dump($name);

// Casteo de variables
echo "<h2>Casteo de Variables</h2>";
echo "Casteo a entero: " . $entero . "<br>"; // Imprime 123
echo "Casteo a flotante: " . $flotante . "<br>"; // Imprime 123.45
echo "Casteo a cadena: " . $cadena . "<br>"; // Imprime '123'
echo "Casteo a booleano: " . ($booleano ? 'true' : 'false') . "<br>"; // Imprime 'true'
echo "Casteo a array: ";
print_r($array); // Imprime Array ( [0] => texto )
echo "<br>";
echo "Casteo a objeto: ";
print_r($objeto); // Imprime stdClass Object ( [scalar] => texto )
echo "<br>";

// Definición y uso de constantes
define('PI', 3.145);
echo "<h2>Constantes</h2>";
echo "Constante PI: " . PI . "<br>";
echo "Valor máximo de entero: " . PHP_INT_MAX . "<br>";
echo "Valor mínimo de entero: " . PHP_INT_MIN . "<br>";
?>
