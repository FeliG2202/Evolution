<?php 
require_once("Model/Conexion.php");

class LoginModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function validateLoginDB(LoginClass $loginClass) {
		$sql = "SELECT count(*) AS files FROM evolution.usuarios WHERE usuarios_email=? AND usuarios_password=?";
		try {
			$stmt = $this->conexion->getPrepare($sql);
			$stmt->bindValue(1, $loginClass->getUsuariosEmail(), PDO::PARAM_STR);
			$stmt->bindValue(2, $loginClass->getUsuariosPassword(), PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch();
		} catch (PDOException $e) {
			return false;
		}
	}

	public function loginSessionDB(LoginClass $loginClass) {
		$sql = "SELECT idUsuarios, idRoles FROM evolution.usuarios WHERE usuarios_email=? AND usuarios_password=?";
		try {
			$stmt = $this->conexion->getPrepare($sql);
			$stmt->bindValue(1, $loginClass->getUsuariosEmail(), PDO::PARAM_STR);
			$stmt->bindValue(2, $loginClass->getUsuariosPassword(), PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch();
		} catch (PDOException $e) {
			return false;
		}
	}
	
}