<?php
require_once("Model/Conexion.php");

class PersonalInformationModel {

	private $conexion;
	
	public function __construct(){
		$this->conexion = new Conexion();
	}

	public function readPersonalInformationDB() {
		$sql = "SELECT * FROM evolution.datos_personales";

		try {
			$stmt = $this->conexion->getPrepare($sql);
			return $this->conexion->getFetch($stmt, true);
		} catch (PDOException $e){
			return false;
		}
	}
	
}