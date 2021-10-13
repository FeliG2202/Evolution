<?php 


class Conexion {
	
	public function conectar()	{
		return new PDO("mysql:dbname=rolesusuarios;host=localhost", 'root', '', [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}
}
