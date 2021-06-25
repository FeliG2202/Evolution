<?php 
require_once("Model/Conexion.php");

class CuestionarioIpaqModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function readValidateIpaqDB($data) {
		$sql = "SELECT count(*) AS files FROM evolution.cuestionario_ipaq WHERE cuestionario_ipaq_fecha_creacion=? AND idUsuario=?";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['fecha_creacion'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['idUsuarios'], PDO::PARAM_STR);
			return $this->conexion->getFetch($stmt, false);
		} catch (PDOException $e) {
			return false;
		}
	}


	public function CuestionarioIpaqDB($data) {
		$sql = "INSERT INTO cuestionario_ipaq (ficha_ipaq_pregunta1, ficha_ipaq_pregunta2, ficha_ipaq_pregunta3, ficha_ipaq_pregunta4, ficha_ipaq_pregunta5, ficha_ipaq_pregunta6, ficha_ipaq_pregunta7, ficha_ipaq_code,cuestionario_ipaq_fecha_creacion, idUsuario) VALUES (?,?,?,?,?,?,?,?,?,?)";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['pregunta1'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['pregunta2'] . ':' . $data['pregunta3'], PDO::PARAM_STR);
			$stmt->bindValue(3, $data['pregunta4'], PDO::PARAM_STR);
			$stmt->bindValue(4, $data['pregunta5'] . ':' . $data['pregunta6'], PDO::PARAM_STR);
			$stmt->bindValue(5, $data['pregunta7'], PDO::PARAM_STR);
			$stmt->bindValue(6, $data['pregunta8'] . ':' . $data['pregunta9'], PDO::PARAM_STR);
			$stmt->bindValue(7, $data['pregunta10'], PDO::PARAM_STR);
			$stmt->bindValue(8, $data['code'], PDO::PARAM_STR);
			$stmt->bindValue(9, $data['fecha_creacion'], PDO::PARAM_STR);
			$stmt->bindValue(10, $data['idUsuarios'], PDO::PARAM_INT);
			return $stmt->execute();
		} catch (PDOException $e) {
			return false;
		}
	}

	public function ValideteFechaIpaqDB() {
		$sql = "SELECT cuestionario_ipaq_fecha_creacion FROM cuestionario_ipaq GROUP BY cuestionario_ipaq_fecha_creacion ORDER BY cuestionario_ipaq_fecha_creacion DESC";
		
		try{
			$stmt = $this->conexion->getprepare($sql);
			return $this->conexion->getFetch($stmt, true);
		} catch (PDOException $e) {
			return false;
		}
	}
	
}
