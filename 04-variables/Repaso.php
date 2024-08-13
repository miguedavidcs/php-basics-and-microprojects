<?php
class Persona {
    public $id;
    public $name;
    public $edad;

    function __construct($id, $name, $edad) {
        $this->id = $id;
        $this->name = $name;
        $this->edad = $edad;
    }
}

function MostrarPersona($id = null, $data = []) {
    if ($id !== null) {
        // Mostrar la persona con el id especificado
        foreach ($data as $persona) {
            var_dump($persona);
            if ($persona->id == $id) {
                echo "ID: " . $persona->id . "<br>";
                echo "Nombre: " . $persona->name . "<br>";
                echo "Edad: " . $persona->edad . "<br>";
                return; // Salir de la función después de mostrar la persona
            }
        }
        echo "Persona con ID $id no encontrada.<br>";
    } else {
        // Mostrar todas las personas
        foreach ($data as $persona) {
            echo "ID: " . $persona->id . "<br>";
            echo "Nombre: " . $persona->name . "<br>";
            echo "Edad: " . $persona->edad . "<br><br>";
        }
    }
}

// Ejemplo de uso:
$personas = [
    new Persona(1, "Ana", 28),
    new Persona(2, "Luis", 35),
    new Persona(3, "Marta", 42)
];

// Mostrar todas las personas
//MostrarPersona(null, $personas);

// Mostrar una persona específica por ID (por ejemplo, la persona con ID 2)
MostrarPersona(2, $personas);
?>
