<?php 
class ModeloProductos{

	public function mdlMostrarProductos($tabla,$item){
		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{
		$consulta = Conexion::conectar()->prepare("select * from $tabla");
		//$consulta->bindParam(1, $tabla, PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetchAll();
		}
	}
}
?>