<?php 

class TipoCuestionarioModelo extends Conexion {

	private $tabla = "tipo_cuestionario";
	
	public function consultarTipoCuestionarioModelo() {
		$sql = "SELECT * FROM $this->tabla";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
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


