<?php
require_once("Model/Conexion.php");

class GestionRolModel {
	
	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function readUSersDB() {
		$sql = "SELECT * FROM evolution.usuarios AS usr INNER JOIN roles AS rol ON usr.idRoles=rol.idRoles";
		try {
			$stmt = $this->conexion->getPrepare($sql);
			return $this->conexion->getFetch($stmt, true);
		} catch (PDOException $e) {
			return false;
		}
	}

}