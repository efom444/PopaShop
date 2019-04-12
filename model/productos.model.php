<?php 
class ModeloProductos{

	public function mdlMostrarProductos($tabla,$item){
		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{
		$consulta = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$consulta->execute();
		return $consulta->fetchAll();
		}
	}
}
?>