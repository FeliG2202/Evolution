<?php

class Conexion {
	
	private $host = "localhost";
	private $db_name = "evolution";
	private $user = "root";
	private $pass = "";
	private $options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	];

	private $conexion = null;
	
	public function __construct() {
		try {
			$this->conexion = new PDO("mysql:host=$this->host;evolution=$this->db_name;charset=utf8", $this->user, $this->pass, $this->options);
		} catch (PDOException $e) {
			echo ("Error: " . $e);
		}
	}

	public function getPrepare($sql) {
		return $this->conexion->prepare($sql);
	}
}