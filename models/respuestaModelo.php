<?php 


class RespuestaModelo extends Conexion {
	
	private $tabla = 'respuestas';

	function cargarRespuestaModelo($id) {
		$sql = "SELECT * FROM $this->tabla WHERE idpreguntas = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			if($stmt->execute()){
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