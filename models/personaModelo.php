<?php 

require_once("conexion.php");

class PersonaModelo extends Conexion {
	private $tabla = "persona";

	public function registrarPersonaModelo($datos) {
		$sql = "INSERT INTO $this->tabla (persona_nombres, persona_apellidos, persona_documento, persona_fecha_nacimineto, persona_email, persona_genero, persona_tipo_sangre, persona_problema) VALUES (?,?,?,?,?,?,?,?)";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datos['nombres'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datos['apellidos'], PDO::PARAM_STR);
			$stmt->bindParam(3, $datos['documento'], PDO::PARAM_STR);
			$stmt->bindParam(4, $datos['fechanacimiento'], PDO::PARAM_STR);
			$stmt->bindParam(5, $datos['email'], PDO::PARAM_STR);
			$stmt->bindParam(6, $datos['genero'], PDO::PARAM_STR);
			$stmt->bindParam(7, $datos['tiposangre'], PDO::PARAM_STR);
			$stmt->bindParam(8, $datos['discapacidad'], PDO::PARAM_STR);
			if($stmt->execute()){
				return true;
			}
			else{
				return false;
			}
		} catch (PDOException $e) {
			print($e->getMessage());
		}
		$stmt->close();
	}


	public function consultarPersonasModelo(){
		$sql = "SELECT idpersona, concat(persona_documento, ' - ', persona_nombres,' ', persona_apellidos) as nombre FROM $this->tabla";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			if ($stmt->execute()) {
				return $stmt->fetchAll();
			}
			else{
				return [];
			}
		} catch (PDOException $e) {
			print($e->getMessage());
		}
		$stmt->close();
	}



	public function consultarPersonaIdModelo($id){
		$sql = "SELECT * FROM $this->tabla WHERE idpersona = ?";
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