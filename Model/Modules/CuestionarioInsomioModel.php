<?php 
require_once("Model/Conexion.php");

class CuestionarioInsomioModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function CuestionarioInsomioDB($data) {
		$sql = "INSERT INTO cuestionario_insomio (cuestionario_insomio_pregunta1, cuestionario_insomio_pregunta2, cuestionario_insomio_pregunta3, cuestionario_insomio_pregunta4, cuestionario_insomio_pregunta5, cuestionario_insomio_pregunta6, cuestionario_insomio_pregunta7, cuestionario_insomio_pregunta8, cuestionario_insomio_code, idUsuario) VALUES (?,?,?,?,?,?,?,?,?,?)";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['pregunta1'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['pregunta2'], PDO::PARAM_STR);
			$stmt->bindValue(3, $data['pregunta3'], PDO::PARAM_STR);
			$stmt->bindValue(4, $data['pregunta4'], PDO::PARAM_STR);
			$stmt->bindValue(5, $data['pregunta5'], PDO::PARAM_STR);
			$stmt->bindValue(6, $data['pregunta6'], PDO::PARAM_STR);
			$stmt->bindValue(7, $data['pregunta7'], PDO::PARAM_STR);
			$stmt->bindValue(8, $data['pregunta8'], PDO::PARAM_STR);
			$stmt->bindValue(9, $data['code'], PDO::PARAM_STR);
			$stmt->bindValue(10, $data['idUsuarios'], PDO::PARAM_INT);
			return $stmt->execute();
		} catch (PDOException $e) {
			return false;
		}
	}
}
