<?php 

class UsuarioModelo extends Conexion{
	private $tabla = 'usuarios';
	function registrarUsuarioModelo($datosUsuario) {
		$sql = "INSERT INTO $this->tabla(usuarioLogin, usuarioPassword, usuarioEstado, idPersonas) VALUES (?,?,?,?)";
		try {
			$conn = new Conexion();
			$stmt = $conn ->conectar()->prepare($sql);
			$stmt->bindParam(1, $datosUsuario['usuario'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datosUsuario['password'], PDO::PARAM_STR);
			$stmt->bindParam(3, $datosUsuario['estado'], PDO::PARAM_STR);
			$stmt->bindParam(4, $datosUsuario['idPersona'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return true;
			}else{
				return false;
			}
			$stmt->close();

		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}

	public function validateSessionModelo($data) {
		$sql = "SELECT count(*) AS files FROM rolesusuarios.usuarios WHERE usuarioLogin=? AND usuarioPassword=?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $data['login'], PDO::PARAM_STR);
			$stmt->bindParam(2, $data['password'], PDO::PARAM_STR);
			return !$stmt->execute() ? [] : $stmt->fetch();
		} catch (PDOException $e) {
			print($e->getMessage());
		}
	}

	public function loginSessionModelo(array $data) {
		$sql = "SELECT idUsuario FROM rolesusuarios.usuarios WHERE usuarioLogin=? AND usuarioPassword=?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $data['login'], PDO::PARAM_STR);
			$stmt->bindParam(2, $data['password'], PDO::PARAM_STR);
			return !$stmt->execute() ? [] : $stmt->fetch();
		} catch (PDOException $e) {
			print($e->getMessage());
		}
	}

	public function consultarUsuarioModelo($datosUsuario) {

		$datosUsuario = '%'.$datosUsuario.'%';


		$sql = "SELECT * FROM $this->tabla WHERE usuarioLogin LIKE ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datosUsuario, PDO::PARAM_STR);
			if ($stmt->execute()) {
				return $stmt->fetchAll();
			} else {
				return [];
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}

	public function actualizarUsuarioModelo($datosUsuario){
		$sql = "UPDATE $this->tabla SET usuarioLogin=?, usuarioPassword=?, usuarioEstado=? WHERE idUsuario = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1,$datosUsuario['login'],PDO::PARAM_STR);
			$stmt->bindParam(2,$datosUsuario['password'],PDO::PARAM_STR);
			$stmt->bindParam(3,$datosUsuario['estado'],PDO::PARAM_STR);
			$stmt->bindParam(4,$datosUsuario['id'],PDO::PARAM_INT);
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

	public function eliminarUsuarioModelo($id){

		$sql= "DELETE FROM $this->tabla WHERE idUsuario = ?";

		try {
			$conn = new conexion();
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