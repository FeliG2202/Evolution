<?php 


class MenuModelo extends Conexion {
	
	function __construct()	{
		$this->conn = new Conexion();
		$this->tabla = 'menus';
	}


	public function registrarMenuModelo($menu) {
		$sql = "INSERT INTO $this->tabla(menuNombre) VALUES (?)";
		try {
			$stmt = $this->conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $menu, PDO::PARAM_STR);
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


	public function consultarMenuModelo($menuBuscado) {
		$menuBuscado = "%".$menuBuscado."%";
		$sql = "SELECT * FROM $this->tabla WHERE menuNombre LIKE ? ORDER BY menuNombre";
		try {
			$stmt = $this->conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $menuBuscado, PDO::PARAM_STR);
			return !$stmt->execute() ? [] : $stmt->fetchAll();
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}		
	}


	public function consultarMenuIdModelo($id) {
		$sql = "SELECT * FROM $this->tabla WHERE idMenu=?";
		try {
			$stmt = $this->conn->conectar()->prepare($sql);	
			$stmt->bindParam(1, $id, PDO::PARAM_INT);		
			if ($stmt->execute()) {
				return $stmt->fetchAll();
			}
			else{
				return [];
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}


	public function actualizarMenuModelo($datosMenu){
		$sql = "UPDATE $this->tabla SET menuNombre=?, menuEstado=? WHERE idMenu=?";
		try {
			$stmt = $this->conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datosMenu['menuNombre'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datosMenu['menuEstado'], PDO::PARAM_STR);
			$stmt->bindParam(3, $datosMenu['id'], PDO::PARAM_INT);
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

	public function eliminarMenuModelo($id) {
		$sql= "DELETE FROM $this->tabla WHERE idMenu = ?";
		try {
			$stmt = $this->conn->conectar()->prepare($sql);
			$stmt->bindParam(1,$id, PDO::PARAM_INT);
			if ($stmt->execute()) {
				return true;
			} else { 
				return false;
			}
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}
}