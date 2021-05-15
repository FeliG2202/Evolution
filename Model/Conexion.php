<?php

class Conexion {
	
	private $host = "localhost";
	private $db_name = "evolution";
	private $user = "root";
	private $password = "";
	private $options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	];

	private $conexion = null;
	
	public function __construct() {
		try {			
			$this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db_name;charset=utf8", $this->user, $this->password, $this->options);
		} catch (PDOException $e) {
			$this->conexion = false;
		}
	}

	public function getPrepare($sql) {
		return $this->conexion->prepare($sql);
	}

	public function getFetch($PreparedStatement, $option) {
		return !$PreparedStatement->execute() ? false : (!$option ? $PreparedStatement->fetch() : $PreparedStatement->fetchAll());
	}

}