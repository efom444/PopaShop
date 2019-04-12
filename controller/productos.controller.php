<?php 
/**
 * Productos
 */
class ControladorProductos{
	
	public function ctrMostrarProductos(){
		$item = null;
		$tabla = "producto";
		$respuesta = ModeloProductos::mdlMostrarProductos($tabla, $item);
		return $respuesta;
	}
}
?>