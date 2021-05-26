<?php 
require_once("Model/Conexion.php");

class ProblemasModel {
	
	private $conexion;

	public function __construct(){
		$this->conexion = new Conexion();
	}

	public function readProblemasDB() {
		$sql = "SELECT * FROM evolution.problemas_usuarios ";

		try{
			$stmt = $this->conexion->getprepare($sql);
			return $this->conexion->getFetch($stmt, true);
		} catch (PDOException $e) {
			return false;
		}
	}
}