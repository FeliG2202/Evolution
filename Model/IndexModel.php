<?php

class IndexModel {
	
	public function __construct() {
		
	}

	//this method is used to charge all views
	public function actionPerformed($enlace) {
		$modulo = null;

		switch ($enlace) {
			case 'Home':
			case 'Perfil':
			case 'Dashboard':
			case 'Salir':
			case 'Login':
			case 'SignUp':
			case 'Infor':
			case 'Ayuda':
			case 'EvolucionMes':
			case 'EjerciciosDiarios':
			case 'FichaAntropometrica':
			case 'GestionRol';
			$modulo = "View/Modules/" . ($enlace) . ".php";
			break;
			
			default:
			$modulo = "View/Modules/Home.php";
			break;
		}
		
		return $modulo;
	}

}