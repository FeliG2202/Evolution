<?php 


class Conexion {
	
	public function conectar()	{
		return new PDO("mysql:dbname=evolution;host=localhost", 'root', '', [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}
}
