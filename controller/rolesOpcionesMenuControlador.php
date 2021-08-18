<?php 

class RolesOpcionesMenuControlador {
	
	public function consultarRolesOpcionesMenuControlador() {
		if(isset($_SESSION['idRol'])){
			$opcionMenu = new RolesOpcionesMenuModelo();
			$opciones = $opcionMenu->consultarRolesOpcionesMenuModelo($_SESSION['idRol']);
			return $opciones;			
		}
	}
}