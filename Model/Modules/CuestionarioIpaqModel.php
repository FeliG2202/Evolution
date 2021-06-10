<?php 
require_once("Model/Conexion.php");

class CuestionarioIpaqModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function CuestionarioIpaqDB($data) {
		$sql = "INSERT INTO cuestionario_ipaq (ficha_ipaq_pregunta1, ficha_ipaq_pregunta2, ficha_ipaq_pregunta3, ficha_ipaq_pregunta4, ficha_ipaq_pregunta5, ficha_ipaq_pregunta6, ficha_ipaq_pregunta7, ficha_ipaq_code, idUsuario) VALUES (?,?,?,?,?,?,?,?,?)";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['pregunta1'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['pregunta2'], PDO::PARAM_STR);
			$stmt->bindValue(3, $data['pregunta3'], PDO::PARAM_INT);
			$stmt->bindValue(4, $data['pregunta4'], PDO::PARAM_STR);
			$stmt->bindValue(5, $data['pregunta5'], PDO::PARAM_STR);
			$stmt->bindValue(6, $data['pregunta6'], PDO::PARAM_STR);
			$stmt->bindValue(7, $data['pregunta7'], PDO::PARAM_STR);
			$stmt->bindValue(8, $data['code'], PDO::PARAM_STR);
			$stmt->bindValue(9, $data['idUsuarios'], PDO::PARAM_INT);
			return $stmt->execute();
		} catch (PDOException $e) {
			return false;
		}
	}
}
