<?php 


class UsuarioModelo extends Conexion {
	private $tabla = 'usuarios';

	function registrarUsuarioModelo($datos) {
		$sql = "INSERT INTO $this->tabla (usuLogin, usuPassword, idpersona) VALUES (?,?,?)";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1,$datos['login'], PDO::PARAM_STR);
			$stmt->bindParam(2,$datos['clave'], PDO::PARAM_STR);
			$stmt->bindParam(3,$datos['usuario'], PDO::PARAM_INT);

			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
			$stmt->close();
			
		} catch (PDOException $e) {
			print($e->getMessage());
		}
	}


	public function loginUsuarioModelo($datos){
		$sql = "SELECT idUsuario, usuLogin, usuEstado, idpersona FROM $this->tabla WHERE usuLogin=? AND usuPassword=?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datos['login'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datos['clave'], PDO::PARAM_STR);
			if($stmt->execute()){
				return $stmt->fetchAll();
			}
			else
				return [];
			$stmt->close();
			
		} catch (PDOException $e) {
			print($e->getMessage());
		}
	}
}

