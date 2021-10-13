<?php 

class OpcionesMenuControlador {
	
	function __construct()	{
		$this->menuControlador = new MenuControlador();
		$this->opcionMenuModelo = new OpcionesMenuModelo();
	}


	public function registrarOpcionMenuControlador() {
		if (isset($_POST['regOpcionMenu'])) {
			$datoOpcionMenu = array('idMenu' => $_POST['idMenu'],
				'opcionMenuNombre' => $_POST['opcionMenuNombre'], 
				'opcionMenuEnlace' => $_POST['opcionMenuEnlace']);

			return !$this->opcionMenuModelo->registrarOpcionMenuModelo($datoOpcionMenu) ? [false, "index.php?action=fa15"] : [true, "index.php?action=ok15"];
		}
	}

	public function consultarOpcionesMenuIdControlador($idMenu){
		return $this->opcionMenuModelo->consultarOpcionesMenuIdModelo($idMenu);
	}
}