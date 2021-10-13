<?php 
require_once("Conexion.php");

class PersonaModelo extends Conexion {
	private $tabla = "personas";
	public function registrarPersonaModelo($datosPersona) {
		$sql = "INSERT INTO $this->tabla (personaNombres, personaApellidos, personaGenero, personaDocumento) VALUES (?,?,?,?)";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datosPersona['nombre'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datosPersona['apellido'], PDO::PARAM_STR);
			$stmt->bindParam(3, $datosPersona['genero'], PDO::PARAM_STR);
			$stmt->bindParam(4, $datosPersona['documento'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}


	public function consultarPersonaModelo($datoBusqueda){
		
		$datoBusqueda = '%'.$datoBusqueda.'%';

		$sql = "SELECT * FROM $this->tabla WHERE personaNombres LIKE ? OR personaApellidos LIKE ? or personaDocumento LIKE ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datoBusqueda, PDO::PARAM_STR);
			$stmt->bindParam(2, $datoBusqueda, PDO::PARAM_STR);
			$stmt->bindParam(3, $datoBusqueda, PDO::PARAM_STR);
			if ($stmt->execute()) {
				return $stmt->fetchAll();
			}
			else{
				[];
			}
			$stmt->close();

		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}


	public function consultarPersonaIdModelo($id){
		$sql = "SELECT * FROM $this->tabla WHERE idPersona = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
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

	public function consultarPersonasIdModelo($id){
		$sql = "SELECT * FROM $this->tabla WHERE idPersona = ?";
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

	////////////////////////

	public function listarPersonasModelo(){
		$sql = "SELECT * FROM $this->tabla WHERE 1";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}


	public function actualizarPersonaModelo($datosPersona){
		$sql = "UPDATE $this->tabla SET personaNombres=?,personaApellidos=?,personaGenero=?,personaDocumento=? WHERE idPersona=?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1,$datosPersona['nombre'],PDO::PARAM_STR);
			$stmt->bindParam(2,$datosPersona['apellido'],PDO::PARAM_STR);
			$stmt->bindParam(3,$datosPersona['genero'],PDO::PARAM_STR);
			$stmt->bindParam(4,$datosPersona['documento'],PDO::PARAM_INT);
			$stmt->bindParam(5,$datosPersona['id'],PDO::PARAM_INT);
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}


	public function eliminarPersonaModelo($id){
		$sql = "DELETE FROM $this->tabla WHERE idPersona = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}
}