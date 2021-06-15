<?php 
require_once("Model/Conexion.php");

class CuestionarioFantasticoModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function readValidateFantasticoDB($data) {
		$sql = "SELECT count(*) AS files FROM evolution.cuestionario_fantastico WHERE cuestionario_fantastico_fecha_creacion=? AND idUsuario=?";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['fecha_creacion'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['idUsuarios'], PDO::PARAM_STR);
			return $this->conexion->getFetch($stmt, false);
		} catch (PDOException $e) {
			return false;
		}
	}

	public function CuestionarioFantasticoDB($data) {
		$sql = "INSERT INTO cuestionario_fantastico (cuestionario_fantastico_pregunta1, cuestionario_fantastico_pregunta2, cuestionario_fantastico_pregunta3, cuestionario_fantastico_pregunta4, cuestionario_fantastico_pregunta5, cuestionario_fantastico_pregunta6, cuestionario_fantastico_pregunta7, cuestionario_fantastico_pregunta8, cuestionario_fantastico_pregunta9, cuestionario_fantastico_pregunta10, cuestionario_fantastico_pregunta11, cuestionario_fantastico_pregunta12, cuestionario_fantastico_pregunta13, cuestionario_fantastico_pregunta14, cuestionario_fantastico_pregunta15, cuestionario_fantastico_pregunta16, cuestionario_fantastico_pregunta17, cuestionario_fantastico_pregunta18, cuestionario_fantastico_pregunta19, cuestionario_fantastico_pregunta20, cuestionario_fantastico_pregunta21, cuestionario_fantastico_pregunta22, cuestionario_fantastico_pregunta23, cuestionario_fantastico_pregunta24, cuestionario_fantastico_pregunta25, cuestionario_fantastico_pregunta26, cuestionario_fantastico_pregunta27, cuestionario_fantastico_pregunta28, cuestionario_fantastico_pregunta29, cuestionario_fantastico_pregunta30, cuestionario_fantastico_pregunta31, cuestionario_fantastico_pregunta32, cuestionario_fantastico_code, cuestionario_fantastico_fecha_creacion, idUsuario) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
			$stmt->bindValue(9, $data['pregunta9'], PDO::PARAM_STR);
			$stmt->bindValue(10, $data['pregunta10'], PDO::PARAM_STR);
			$stmt->bindValue(11, $data['pregunta11'], PDO::PARAM_STR);
			$stmt->bindValue(12, $data['pregunta12'], PDO::PARAM_STR);
			$stmt->bindValue(13, $data['pregunta13'], PDO::PARAM_STR);
			$stmt->bindValue(14, $data['pregunta14'], PDO::PARAM_STR);
			$stmt->bindValue(15, $data['pregunta15'], PDO::PARAM_STR);
			$stmt->bindValue(16, $data['pregunta16'], PDO::PARAM_STR);
			$stmt->bindValue(17, $data['pregunta17'], PDO::PARAM_STR);
			$stmt->bindValue(18, $data['pregunta18'], PDO::PARAM_STR);
			$stmt->bindValue(19, $data['pregunta19'], PDO::PARAM_STR);
			$stmt->bindValue(20, $data['pregunta20'], PDO::PARAM_STR);
			$stmt->bindValue(21, $data['pregunta21'], PDO::PARAM_STR);
			$stmt->bindValue(22, $data['pregunta22'], PDO::PARAM_STR);
			$stmt->bindValue(23, $data['pregunta23'], PDO::PARAM_STR);
			$stmt->bindValue(24, $data['pregunta24'], PDO::PARAM_STR);
			$stmt->bindValue(25, $data['pregunta25'], PDO::PARAM_STR);
			$stmt->bindValue(26, $data['pregunta26'], PDO::PARAM_STR);
			$stmt->bindValue(27, $data['pregunta27'], PDO::PARAM_STR);
			$stmt->bindValue(28, $data['pregunta28'], PDO::PARAM_STR);
			$stmt->bindValue(29, $data['pregunta29'], PDO::PARAM_STR);
			$stmt->bindValue(30, $data['pregunta30'], PDO::PARAM_STR);
			$stmt->bindValue(31, $data['pregunta31'], PDO::PARAM_STR);
			$stmt->bindValue(32, $data['pregunta32'], PDO::PARAM_STR);
			$stmt->bindValue(33, $data['code'], PDO::PARAM_STR);
			$stmt->bindValue(34, $data['fecha_creacion'], PDO::PARAM_STR);
			$stmt->bindValue(35, $data['idUsuarios'], PDO::PARAM_INT);
			return $stmt->execute();
		} catch (PDOException $e) {
			return false;
		}
	}
}
