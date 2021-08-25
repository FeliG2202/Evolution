<?php 

class RolesOpcionesMenuModelo extends Conexion {
	
	private $vista = "view_rolesopcionesmenu";

	function consultarRolesOpcionesMenuModelo($idRol) {
		$sql = "SELECT * FROM $this->vista WHERE idRol = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $idRol, PDO::PARAM_INT);
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