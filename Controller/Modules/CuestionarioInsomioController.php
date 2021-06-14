<?php 
require_once("Model/Modules/CuestionarioInsomioModel.php");

class CuestionarioInsomioController {

	private $cuestionarioInsomioController;
	
	public function __construct() {
		$this->cuestionarioInsomioModel = new CuestionarioInsomioModel();
	}

	public function CuestionarioInsomio() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = [
				"code" => uniqid(),
				"idUsuarios" => $_SESSION['idUsuarios']
			];

			for($input = 1; $input <= 8; $input++) {
				if(isset($_POST['pregunta' . $input])) {
					if (!empty($_POST['pregunta' . $input])) {
						$data+= ["pregunta" . $input => $_POST['pregunta' . $input]];
					} else {
						return [false, "Error, todos los campos son obligatorios"];
					}
				}
			}

			if ($this->cuestionarioInsomioModel->CuestionarioInsomioDB($data)) {
				return [true, "index.php?action=ResultadosCuestionario&selected=insomio"];
			} else {
				return [false, "Error, no se puedo Guardar el cuestionario."];
			}
		}
	}
	
}