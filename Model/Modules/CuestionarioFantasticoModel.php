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

	public function createCuestionarioFantasticoDB($data) {
		$preguntas = null;
		for ($j = 1; $j <= 32; $j++) { 
			$preguntas.= $j != 32 ? ("cuestionario_fantastico_pregunta" . $j . ", ") : ("cuestionario_fantastico_pregunta" . $j);
		}
		$sql = "INSERT INTO cuestionario_fantastico (" . $preguntas . ", cuestionario_fantastico_code, cuestionario_fantastico_fecha_creacion, idUsuario, cuestionario_fantastico_resultado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		try {
			$stmt = $this->conexion->getprepare($sql);
			for ($i = 1; $i <= 32; $i++) { 
				$stmt->bindValue($i, $data['pregunta' . $i], PDO::PARAM_STR);
			}
			$stmt->bindValue(33, $data['code'], PDO::PARAM_STR);
			$stmt->bindValue(34, $data['fecha_creacion'], PDO::PARAM_STR);
			$stmt->bindValue(35, $data['idUsuarios'], PDO::PARAM_INT);
			$stmt->bindValue(36, $data['cuestionario_fantastico_resultado'], PDO::PARAM_INT);
			return $stmt->execute();
		} catch (PDOException $e) {
			echo($e);
			return false;
		}
	}

	public function ValideteFechaFantasticoDB() {
		$sql = "SELECT cuestionario_fantastico_fecha_creacion FROM cuestionario_fantastico GROUP BY cuestionario_fantastico_fecha_creacion ORDER BY cuestionario_fantastico_fecha_creacion DESC";
		try{
			$stmt = $this->conexion->getprepare($sql);
			return $this->conexion->getFetch($stmt, true);
		} catch (PDOException $e) {
			return false;
		}
	}

	public function readResultadoFantasticoDB($data) {
		$sql = "SELECT cuestionario_fantastico_resultado FROM cuestionario_fantastico  WHERE cuestionario_fantastico_fecha_creacion = '$data'";
		try{
			$stmt = $this->conexion->getprepare($sql);
			return $this->conexion->getFetch($stmt, false);
		} catch (PDOException $e) {
			return false;
		}
	}
}
