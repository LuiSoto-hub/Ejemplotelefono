<?php

require_once "controller/SmartphoneController.php";
require_once "view/todosRegistros.php";

// Punto de entrada de la aplicación
$controller = new SmartphoneController();
$smartphones = $controller->obtenerTodos();
mostrarSmartphones($smartphones);

?>
