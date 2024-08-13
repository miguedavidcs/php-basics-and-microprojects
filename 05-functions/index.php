<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Centrados</title>
    <!-- Importar Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="index.css">
   
</head>
<body>
<div class="container">
        <!-- Formulario de dos variables -->
        <div class="formulario">
            <form action="numeros.php" method="post">
                <h2>Formulario de Dos Variables</h2>
                <label for="a">A:</label>
                <input type="number" id="a" name="a" required>

                <label for="b">B:</label>
                <input type="number" id="b" name="b" required>

                <label for="operacion">Operación:</label>
                <select id="operacion" name="operacion" required>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                    <option value="decremento">Decremento </option>
                    <option value="incremento">Incremento </option>
                </select>

                <input type="submit" value="Enviar">
            </form>
        </div>

        <!-- Resultado de la operación -->
        <div class="resultado">
            <?php
            if (isset($_GET['resultado'])) {
                echo "<h3>Resultado:</h3>";
                echo "<p>{$_GET['resultado']}</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
