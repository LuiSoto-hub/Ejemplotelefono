<?php

class Smartphone {
    private $id;
    private $marca;
    private $modelo;
    private $precio;
    
    public function __construct($id, $marca, $modelo, $precio) {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getMarca() {
        return $this->marca;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function getPrecio() {
        return $this->precio;
    }
}

?>
