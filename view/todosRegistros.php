<?php

function mostrarSmartphones($smartphones) {
    echo "<h1>Lista de Smartphones</h1>";
    echo "<ul>";
    foreach ($smartphones as $telefono) {
        echo "<li>" . $telefono->getMarca() . " " . $telefono->getModelo() . " - $" . $telefono->getPrecio() . "</li>";
    }
    echo "</ul>";
}

?>
