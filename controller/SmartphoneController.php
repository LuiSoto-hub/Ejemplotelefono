<?php

require_once __DIR__ . "/../model/Smartphone.php";


class SmartphoneController {
    private $smartphones;
    
    public function __construct() {
        $this->smartphones = [
            new Smartphone(1, "Apple", "iPhone 15", 1200),
            new Smartphone(2, "Samsung", "Galaxy S23", 1000),
            new Smartphone(3, "Google", "Pixel 8", 900)
        ];
    }
    
    public function obtenerTodos() {
        return $this->smartphones;
    }
    
    public function obtenerPorId($id) {
        foreach ($this->smartphones as $telefono) {
            if ($telefono->getId() == $id) {
                return $telefono;
            }
        }
        return null;
    }
}

?>
