<?php 

class Conexion {
	
	public function conectar()	{
		$pdo = new PDO("mysql:dbname=evolution2;host=localhost:3306", 'root', '');
		return $pdo;
	}
}

?>