<?php 
require_once("Model/Modules/CuestionarioInsomioModel.php");

class CuestionarioInsomioController {

	private $cuestionarioInsomioController;
	
	public function __construct() {
		$this->cuestionarioInsomioModel = new CuestionarioInsomioModel();
	}

	public function readValidateInsomio(): bool {
		return $this->cuestionarioInsomioModel->readValidateInsomioDB([
			"idUsuarios" => $_SESSION['idUsuarios'],
			"fecha_creacion" => date('Y-m-d')
		])['files'] > 0 ? true : false;
	}

	public function CuestionarioInsomio() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = [
				"code" => uniqid(),
				"idUsuarios" => $_SESSION['idUsuarios'],
				"fecha_creacion" => date('Y-m-d')
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

			return !$this->cuestionarioInsomioModel->CuestionarioInsomioDB($data) ? [false, "Error, no se puedo Guardar el cuestionario."] : [true, "index.php?action=CuestionarioInsomio"];
		}
	}

	public function ValideteFechaInsomio() {
		return $this->cuestionarioInsomioModel->ValideteFechaInsomioDB();
	}

	
	
}