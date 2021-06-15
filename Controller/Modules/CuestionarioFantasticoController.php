<?php 
require_once("Model/Modules/CuestionarioFantasticoModel.php");

class CuestionarioFantasticoController {

	private $cuestionarioFantasticoController;
	
	public function __construct() {
		$this->cuestionarioFantasticoModel = new CuestionarioFantasticoModel();
	}

	public function readValidateFantastico(): bool {
		return $this->cuestionarioFantasticoModel->readValidateFantasticoDB([
			"idUsuarios" => $_SESSION['idUsuarios'],
			"fecha_creacion" => date('Y-m-d')
		])['files'] > 0 ? true : false;
	}

	public function CuestionarioFantastico() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = [
				"code" => uniqid(),
				"idUsuarios" => $_SESSION['idUsuarios'],
				"fecha_creacion" => date('Y-m-d')
			];

			for($input = 1; $input <= 32; $input++) {
				if(isset($_POST['pregunta' . $input])) {
					if (!empty($_POST['pregunta' . $input])) {
						$data+= ["pregunta" . $input => $_POST['pregunta' . $input]];
					} else {
						return [false, "Error, todos los campos son obligatorios"];
					}
				}
			}

			return !$this->cuestionarioFantasticoModel->CuestionarioFantasticoDB($data) ? [false, "Error, no se puedo Guardar el cuestionario."] : [true, "index.php?action=CuestionarioFantastico"];
		}
	}
	
}