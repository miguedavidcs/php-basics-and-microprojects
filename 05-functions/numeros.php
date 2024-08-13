<?php

function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero";
    }
    return $a / $b;
}

function decremento($a, $b) {
    $a = $a - 1;
    $b = $b - 1; 
    return "a: " .$a . " y  b: " . $b;
}

function incremento($a, $b) {
    $a = $a + 1;
    $b = $b + 1;
    return "a: " .$a . " y  b: " . $b;
}

if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operacion'])) {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $operacion = $_POST['operacion'];
    $resultado = "";

    switch ($operacion) {
        case "suma":
            $resultado = suma($a, $b);
            break;
        case "resta":
            $resultado = resta($a, $b);
            break;
        case "multiplicacion":
            $resultado = multiplicacion($a, $b);
            break;
        case "division":
            $resultado = division($a, $b);
            break;
        case "decremento":
            $resultado = decremento($a, $b);
            break;
        case "incremento":
            $resultado = incremento($a, $b);
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }

    header("Location: index.php?resultado=" . urlencode("$operacion: $a y $b = $resultado"));
    exit();
} else {
    header("Location: index.php");
    exit();
}
