<?php

class Persona {
    private $nombre;
    private $edad;

    // Método mágico __construct: Se llama automáticamente al crear una instancia de la clase
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        echo "Persona creada: {$this->nombre}, {$this->edad} años.\n";
    }

    // Método mágico __toString: Se llama cuando se intenta convertir el objeto a string
    public function __toString() {
        return "Persona: {$this->nombre}, Edad: {$this->edad}";
    }

    // Método mágico __get: Se llama cuando se intenta acceder a una propiedad privada o inexistente
    public function __get($propiedad) {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        } else {
            return "Propiedad '{$propiedad}' no existe.";
        }
    }

    // Método para demostrar el uso
    public function saludar() {
        return "Hola, soy {$this->nombre}.";
    }
}

// Ejemplo de uso
$persona = new Persona("Juan", 30);
echo $persona . "\n";  // Usa __toString
echo $persona->nombre . "\n";  // Usa __get
echo $persona->saludar() . "\n";

?>
