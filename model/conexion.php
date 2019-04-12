<?php 
/**
 * Conexion a la base de datos
 */
class Conexion
{
    
public function conectar()
    {
        $conn = new PDO('mysql:host=localhost;dbname=popashop','root','');
        return $conn;
    }
}
?>