<?php 

class UsuarioRolesModelo extends Conexion {
	private $vista = "view_usuariosroles";

	public function consultarUsuarioIdRolesModelo($id) {
		$sql = "SELECT * FROM $this->vista WHERE idUsuario=?";
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