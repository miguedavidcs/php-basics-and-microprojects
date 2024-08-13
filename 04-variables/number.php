<?php
// Declaración de números
$a = 5;
$b = -4;

// Mostrar las variables $a y $b
echo "<div style='text-align: center;'>";
echo "<h1>Valores de las Variables</h1>";
echo "<p><b>Valor de \$a:</b> " . $a . "</p>";
echo "<p><b>Valor de \$b:</b> " . $b . "</p>";
echo "<br>";
echo "<h1>Operaciones con \$a y \$b</h1>";
echo "<p><b>Suma:</b> " . ($a + $b) . "</p>";
echo "<p><b>División:</b> " . ($a / $b) . "</p>";
echo "<p><b>Resta:</b> " . ($a - $b) . "</p>";
echo "<p><b>Multiplicación:</b> " . ($a * $b) . "</p>";
echo "<p><b>Resto (Módulo):</b> " . ($a % $b) . "</p>";

// Asignación con Operaciones Matemáticas
echo "<h1>Operaciones Matemáticas con Asignación</h1>";
echo "<p><b>Suma Asignada:</b> " . ($a += $b) . "</p>";
echo "<p><b>División Asignada:</b> " . ($a /= $b) . "</p>";
echo "<p><b>Resta Asignada:</b> " . ($a -= $b) . "</p>";
echo "<p><b>Multiplicación Asignada:</b> " . ($a *= $b) . "</p>";
echo "<p><b>Resto Asignado (Módulo):</b> " . ($a %= $b) . "</p>";

// Incremento y Decremento Pre y Post
echo "<h1>Operadores Incrementales y Decrementales</h1>";
$a =5;
$b = -4;
echo "<p><b>Incremento Pre (antes):</b> " . (++$a) . "</p>"; // Incremento antes de usar
echo "<p><b>Incremento Post (después):</b> " . ($a++) . " (después: " . $a . ")</p>"; // Incremento después de usar

// Decremento Pre y Post
echo "<p><b>Decremento Pre (antes):</b> " . (--$b) . "</p>"; // Decremento antes de usar
echo "<p><b>Decremento Post (después):</b> " . ($b--) . " (después: " . $b . ")</p>"; // Decremento después de usar

// Operadores Incrementales y Decrementales con Combinación (sólo ejemplos ilustrativos)
$incremental = 10;
$incremental += 3; // Simula el operador ++ en combinación
$decremental = 10;
$decremental -= 2; // Simula el operador -- en combinación

echo "<p><b>Incremento combinado:</b> " . $incremental . "</p>";
echo "<p><b>Decremento combinado:</b> " . $decremental . "</p>";
echo "</div>";
// Declaración de números
$a = 5.7;
$b = -3.4;
$c = 16;
$d = 2.3;

// Funciones Matemáticas
echo "<div style='text-align: center;'>";

// | Absoluto (abs)
echo "<h1>Función abs()</h1>";
echo "<p><b>Valor absoluto de \$b:</b> " . abs($b) . "</p>"; // Imprime 3.4

// | Potencia (pow)
echo "<h1>Función pow()</h1>";
echo "<p><b>\$a elevado a la 2:</b> " . pow($a, 2) . "</p>"; // Imprime 32.49
echo "<p><b>\$d elevado a la 3:</b> " . pow($d, 3) . "</p>"; // Imprime 12.167

// | Raíz cuadrada (sqrt)
echo "<h1>Función sqrt()</h1>";
echo "<p><b>Raíz cuadrada de \$c:</b> " . sqrt($c) . "</p>"; // Imprime 4

// | Máximo (max)
echo "<h1>Función max()</h1>";
echo "<p><b>Máximo entre \$a y \$b:</b> " . max($a, $b) . "</p>"; // Imprime 5.7
echo "<p><b>Máximo entre \$a, \$b y \$c:</b> " . max($a, $b, $c) . "</p>"; // Imprime 16

// | Mínimo (min)
echo "<h1>Función min()</h1>";
echo "<p><b>Mínimo entre \$a y \$b:</b> " . min($a, $b) . "</p>"; // Imprime -3.4
echo "<p><b>Mínimo entre \$a, \$b y \$c:</b> " . min($a, $b, $c) . "</p>"; // Imprime -3.4

// | Redondeo (round)
echo "<h1>Función round()</h1>";
echo "<p><b>Redondeo de \$a:</b> " . round($a) . "</p>"; // Imprime 6
echo "<p><b>Redondeo de \$d a 1 decimal:</b> " . round($d, 1) . "</p>"; // Imprime 2.3

// | Redondeo hacia abajo (floor)
echo "<h1>Función floor()</h1>";
echo "<p><b>Redondeo hacia abajo de \$a:</b> " . floor($a) . "</p>"; // Imprime 5
echo "<p><b>Redondeo hacia abajo de \$d:</b> " . floor($d) . "</p>"; // Imprime 2

// | Redondeo hacia arriba (ceil)
echo "<h1>Función ceil()</h1>";
echo "<p><b>Redondeo hacia arriba de \$a:</b> " . ceil($a) . "</p>"; // Imprime 6
echo "<p><b>Redondeo hacia arriba de \$d:</b> " . ceil($d) . "</p>"; // Imprime 3

echo "</div>";

$numero = 12345.6789;
$fecha = new DateTime();
$nombre = "Miguel";
$edad = 28;

// Formateo de número
$numeroFormateado = number_format($numero, 2, ',', '.');

// Formateo de fecha
$fechaFormateada = $fecha->format('d/m/Y H:i:s');

// Formateo de texto
$texto = sprintf("Hola, mi nombre es %s y tengo %d años. <br> Hoy es %s y el número formateado es %s.", $nombre, $edad, $fechaFormateada, $numeroFormateado);

echo "<h2>Ejemplo de Formateo Combinado</h2>";
echo "<p>" . $texto . "</p>";
echo "<h2>Botón de Redirección</h2>";
echo '<form method="get" action="string.php">';
echo '<input type="submit" value="Ir a string.php">';
echo '</form>';;
echo "<h2>Botón de Redirección</h2>";
echo '<form method="get" action="index.php">';
echo '<input type="submit" value="Ir a index.php">';
echo '</form>';;



