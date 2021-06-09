<?php
require_once("Model/Conexion.php");

class GestionRolModel {
	
	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function readUSersDB(): array {
		$sql = "SELECT * FROM evolution.usuarios AS usr INNER JOIN roles AS rol ON usr.idRoles=rol.idRoles";
		try {
			return $this->conexion->getFetch($this->conexion->getPrepare($sql), true);
		} catch (PDOException $e) {
			return false;
		}
	}

	public function deleteUsersDB(array $data): bool {
		$sql = "DELETE FROM evolution.usuarios WHERE usuarios_code=?";

		try{
			return $this->conexion->getBindValue($this->conexion->getprepare($sql), [
				[$data['usuarios_code'], 'str']
			])->execute();
		}catch (PDOException $e){
			return false;
		}
	}

	public function updateUsersDB(array $data): bool {
		$sql = "UPDATE usuarios SET usuarios_nombres=?, usuarios_apellidos=?, usuarios_email=?,  WHERE usuarios_code=?";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['nombreupdate'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['apellidoupdate'], PDO::PARAM_STR);
			$stmt->bindValue(3, $data['gmailupdate'], PDO::PARAM_STR);
			$stmt->bindValue(4, $data['roles_descripcion'], PDO::PARAM_STR);
			$stmt->bindValue(3, $data['code'], PDO::PARAM_STR);
			return $stmt->execute();
		} catch (PDOException $e){
			return false;
		}
	}

	public function readUserseDB(array $data): array {
		$sql = "SELECT * FROM usuarios WHERE usuarios_code=?";
		try{
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['code'], PDO::PARAM_STR);
			return $this->conexion->getFetch($stmt, false);
		}catch (PDOException $e){
			return false;
		}
	}
}