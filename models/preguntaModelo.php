<?php 

class PreguntaModelo extends Conexion {
	
	private $tabla = 'preguntas';

	function consultarPreguntaModelo($idCuestionario) {
		$sql = "SELECT * FROM $this->tabla WHERE idtipocuestionario=?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $idCuestionario, PDO::PARAM_INT);
			if ($stmt->execute()) {
				return $stmt->fetchAll();
			}
			else{
				return [];
			}
			$stmt->close();
		} catch (PDOException $e) {
			print($e->getMessage());
		}
	}
}