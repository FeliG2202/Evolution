<?php 
require_once("Model/Conexion.php");

class CuestionarioInsomioModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = new Conexion();
	}

	public function readValidateInsomioDB($data) {
		$sql = "SELECT count(*) AS files FROM cuestionario_insomio WHERE cuestionario_insomio_fecha_creacion=? AND idUsuario=?";
		try {
			$stmt = $this->conexion->getprepare($sql);
			$stmt->bindValue(1, $data['fecha_creacion'], PDO::PARAM_STR);
			$stmt->bindValue(2, $data['idUsuarios'], PDO::PARAM_INT);
			return $this->conexion->getFetch($stmt, false);
		} catch (PDOException $e) {
			return false;
		}
	}

	public function CuestionarioInsomioDB($data) {
		$preguntas = null;
		for ($j = 1; $j <= 8; $j++) { 
			$preguntas.= $j != 8 ? ("cuestionario_insomio_pregunta" . $j . ", ") : ("cuestionario_insomio_pregunta" . $j);
		}
		$sql = "INSERT INTO cuestionario_insomio (" . $preguntas . ", cuestionario_insomio_code, cuestionario_insomio_fecha_creacion, idUsuario) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		try {
			$stmt = $this->conexion->getprepare($sql);
			for ($i = 1; $i <= 8; $i++) { 
				$stmt->bindValue($i, $data['pregunta' . $i], PDO::PARAM_STR);
			}
			$stmt->bindValue(9, $data['code'], PDO::PARAM_STR);
			$stmt->bindValue(10, $data['fecha_creacion'], PDO::PARAM_STR);
			$stmt->bindValue(11, $data['idUsuarios'], PDO::PARAM_INT);
			return $stmt->execute();
		} catch (PDOException $e) {
			echo($e);
			return false;
		}
	}

	

	public function ValideteFechaInsomioDB() {
		$sql = "SELECT cuestionario_insomio_fecha_creacion FROM cuestionario_insomio GROUP BY cuestionario_insomio_fecha_creacion ORDER BY cuestionario_insomio_fecha_creacion DESC";
		
		try{
			$stmt = $this->conexion->getprepare($sql);
			return $this->conexion->getFetch($stmt, true);
		} catch (PDOException $e) {
			return false;
		}
	}

	
}