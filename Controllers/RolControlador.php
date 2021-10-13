<?php 

class RolControlador {
	
	function __construct() {
		$this->rolModelo = new RolModelo();
	}


	public function registrarRolControlador(){
		if (isset($_POST['regRol'])) {
			return !$this->rolModelo->registrarRolModelo($_POST['nombrePerfil']) ? [false, "index.php?action=fa7"] : [true, "index.php?action=ok7"];
		}
	}


	public function consultarRolControlador(){
		if (isset($_POST['btnBuscarRol'])) {
			if (isset($_POST['datoBusqueda'])) {
				$rolBuscado = $_POST['datoBusqueda'];
			}
		} else{
			$rolBuscado = '';
		}
		return $this->rolModelo->consultarRolModelo($rolBuscado);
	}


	public function consultarRolIdControlador(){
		if (isset($_GET['id'])) {
			return $this->rolModelo->consultarRolIdModelo($_GET['id']);
		}
	}


	public function actualizarRolControlador(){
		if(isset($_POST['updRol'])){
			$datosRol = array('nombrePerfil' => $_POST['nombrePerfil'], 
				'id' => $_GET['id']);
			return !$this->rolModelo->actualizarRolModelo($datosRol) ? [false, "index.php?action=fa8"] : [true, "index.php?action=ok8"];
		}
	}


	public function eliminarRolControlador(){
		if (isset($_GET['id'])) {

			return ! $this->rolModelo->eliminarRolModelo($_GET['id']) ? [false, "index.php?action=fa9"] : [true, "index.php?action=ok9"];
		}
	}
}