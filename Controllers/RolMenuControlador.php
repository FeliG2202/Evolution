<?php 

class RolMenuControlador {
	
	function __construct()	{
		$this->rolControlador = new RolControlador();
		$this->menuControlador = new MenuControlador();
		$this->rolMenuModelo = new RolMenuModelo();
	}


	public function consultarRolMenuControlador() {
		return $this->rolMenuModelo->consultarRolMenuModelo();
	}


	public function consultarRolMenuIdControlador()	{
		if (isset($_POST['idRol'])) {
			return $this->rolMenuModelo->consultarRolMenuIdModelo($_POST['idRol']);
		}
	}


	public function registrarRolMenuControlador() {
		if (isset($_POST['regRolMenu'])) {
			return !$this->rolMenuModelo->registrarRolMenuModelo($_POST['idMenu'],$_POST['idRol']) ? [false, "index.php?action=fa14"] : [true, "index.php?action=ok14"];
		}
	}

}