<?php 
require_once("Model/Conexion.php");

class LoginModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function createUserDB($data) {
		$sql = "INSERT INTO usuarios (usuarios_nombres, usuarios_apellidos, usuarios_documento, usuarios_fecha_nacimineto, usuarios_email, usuarios_password, usuarios_genero, usuarios_peso_inicial, usuarios_altura_inicial, usuarios_tipo_sangre, idRoles, usuarios_code, usuarios_problema) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['nombresession'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['apellidosession'], PDO::PARAM_STR);
			$stmt->bindValue(3, $data['documentosession'], PDO::PARAM_INT);
			$stmt->bindValue(4, $data['fechanacimientosession'], PDO::PARAM_STR);
			$stmt->bindValue(5, $data['correosession'], PDO::PARAM_STR);
			$stmt->bindValue(6, $data['contrasenasession'], PDO::PARAM_STR);
			$stmt->bindValue(7, $data['generosession'], PDO::PARAM_STR);
			$stmt->bindValue(8, $data['pesosession'], PDO::PARAM_STR);
			$stmt->bindValue(9, $data['alturasession'], PDO::PARAM_STR);
			$stmt->bindValue(10, $data['sangresession'], PDO::PARAM_STR);
			$stmt->bindValue(11, $data['rol'], PDO::PARAM_INT);
			$stmt->bindValue(12, $data['code'], PDO::PARAM_STR);
			$stmt->bindValue(13, $data['problemasession'], PDO::PARAM_STR);
			return $stmt->execute();
		} catch (PDOException $e) {
			return false;
		}
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