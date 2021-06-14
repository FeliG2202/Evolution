<?php 
require_once("Model/Modules/CuestionarioFantasticoModel.php");

class CuestionarioFantasticoController {

	private $cuestionarioFantasticoController;
	
	public function __construct() {
		$this->cuestionarioFantasticoModel = new CuestionarioFantasticoModel();
	}

	public function CuestionarioFantastico() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = [
				"code" => uniqid(),
				"idUsuarios" => $_SESSION['idUsuarios']
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

			if ($this->cuestionarioFantasticoModel->CuestionarioFantasticoDB($data)) {
				return [true, "index.php?action=ResultadosCuestionario&selected=fantastico"];
			} else {
				return [false, "Error, no se puedo Guardar el cuestionario."];
			}
		}
	}
	
}