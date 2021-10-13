<?php 

class MenuControlador {
	
	function __construct() {
		$this->MenuModelo = new MenuModelo();
	}

	public function registrarMenuControlador() {
		if (isset($_POST['regMenu'])) {
			return !$this->MenuModelo->registrarMenuModelo($_POST['nombreMenu']) ? [false, "index.php?action=fa12"] : [true, "index.php?action=ok12"];
		}
	}

	public function consultarMenuControlador(){
		if (isset($_POST['btnBuscarMenu'])) {
			if (isset($_POST['datoBusqueda'])) {
				$rolBuscado = $_POST['datoBusqueda'];
			}
		} else{
			$rolBuscado = '';
		}

		return $this->MenuModelo->consultarMenuModelo($rolBuscado);
	}

	public function consultarMenuIdControlador(){
		if (isset($_GET['id'])) {
			return $this->MenuModelo->consultarMenuIdModelo($_GET['id']);
		}
	}

	public function actualizarMenuControlador(){
		if(isset($_POST['updMenu'])){
			$datosMenu = [
				'menuNombre' => $_POST['menuNombre'], 
				'menuEstado' => $_POST['menuEstado'],
				'id' => $_GET['id']
			];
			return !$this->MenuModelo->actualizarMenuModelo($datosMenu) ? [false, "index.php?action=ok13&id" . $_GET['id']] : [true, "index.php?action=ok13&id" . $_GET['id']];
		}
	}

	public function eliminarMenuControlador(){
		if (isset($_GET['id'])) {
			return !$this->MenuModelo->eliminarMenuModelo($_GET['id']) ? [false, "index.php?action=ok14"] : [true, "index.php?action=ok14"];
		}
	}
}