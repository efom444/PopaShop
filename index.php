<?php 
//Controladores
require_once "controller/plantilla.controller.php";
require_once "controller/productos.controller.php";

//Modelos
require_once "model/productos.model.php";
require_once "model/conexion.php";

//Ejecución de plantilla
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

?>