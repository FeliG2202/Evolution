<?php 
require_once("Model/Modules/SingUpModel.php");

class SingUpController {

	private $singUpModel;
	
	public function __construct() {
		$this->singUpModel = new SingUpModel();
	}

	public function createUser() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (
				isset($_POST['nombresession']) && 
				isset($_POST['apellidosession']) && 
				isset($_POST['documentosession']) && 
				isset($_POST['fechanacimientosession']) && 
				isset($_POST['correosession']) && 
				isset($_POST['contrasenasession']) && 
				isset($_POST['generosession']) && 
				isset($_POST['pesosession']) && 
				isset($_POST['alturasession']) && 
				isset($_POST['sangresession']) && 
				isset($_POST['problemasession'])
			) {
				if (
					!empty($_POST['nombresession']) && 
					!empty($_POST['apellidosession']) && 
					!empty($_POST['documentosession']) && 
					!empty($_POST['fechanacimientosession']) && 
					!empty($_POST['correosession']) && 
					!empty($_POST['contrasenasession']) && 
					!empty($_POST['generosession']) && 
					!empty($_POST['pesosession']) && 
					!empty($_POST['alturasession']) && 
					!empty($_POST['sangresession']) && 
					!empty($_POST['problemasession'])
				) {
					$data = [
						"nombresession" => $_POST['nombresession'],
						"apellidosession" => $_POST['apellidosession'],
						"documentosession" => $_POST['documentosession'],
						"fechanacimientosession" => $_POST['fechanacimientosession'],
						"correosession" => $_POST['correosession'],
						"contrasenasession" => $_POST['contrasenasession'],
						"generosession" => $_POST['generosession'],
						"pesosession" => $_POST['pesosession'],
						"alturasession" => $_POST['alturasession'],
						"sangresession" => $_POST['sangresession'],
						"problemasession" => $_POST['problemasession'],
						"code" => uniqid(),
						"rol" => 3
					];
					if ($this->singUpModel->createUserDB($data)) {
						return [true, "Login"];
					} else {
						return [false, "Error, no se registró el hospital."];
					}
				} else {
					return [false, "Error, todos los campos son obligatorios"];
				}
			}
		}
	}
}

?>