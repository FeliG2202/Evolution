<?php 
require_once("Model/Modules/CuestionarioIpaqModel.php");

class CuestionarioIpaqController {

	private $cuestionarioIpaqModel;
	
	public function __construct() {
		$this->cuestionarioIpaqModel = new CuestionarioIpaqModel();
	}

	public function CuestionarioIpaq() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = [
				"code" => uniqid(),
				"idUsuarios" => $_SESSION['idUsuarios']
			];

			for($input = 1; $input <= 10; $input++) {
				if(isset($_POST['pregunta' . $input])) {
					if (!empty($_POST['pregunta' . $input])) {
						$data+= ["pregunta" . $input => $_POST['pregunta' . $input]];
					} else {
						return [false, "Error, todos los campos son obligatorios"];
					}
				}
			}

			if ($this->cuestionarioIpaqModel->CuestionarioIpaqDB($data)) {
				return [true, "index.php?action=ResultadosCuestionario&selected=ipaq"];
			} else {
				return [false, "Error, no se puedo Guardar el cuestionario."];
			}
		}
	}
	
}
