<?php

class IndexModel {
	
	public function __construct() {
		
	}

	public function actionPerformed($enlace, $modulo = null) {
		switch ($enlace) {
			case "Index":
			case 'Home':
			$modulo = "View/Modules/Home.php";
			break;

			case 'Perfil':
			case 'Dashboard':
			case 'Salir':
			case 'Login':
			$modulo = "View/Modules/" . ($enlace) . ".php";
			break;
			
			default:
			$modulo = "View/Modules/Home.php";
			break;
		}
		
		return $modulo;
	}

}