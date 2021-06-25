<?php 
require_once("Model/Modules/CuestionarioIpaqModel.php");

class CuestionarioIpaqController {

	private $cuestionarioIpaqModel;
	
	public function __construct() {
		$this->cuestionarioIpaqModel = new CuestionarioIpaqModel();
	}

	public function readValidateIpaq(): bool {
		return $this->cuestionarioIpaqModel->readValidateIpaqDB([
			"idUsuarios" => $_SESSION['idUsuarios'],
			"fecha_creacion" => date('Y-m-d')
		])['files'] > 0 ? true : false;
	}

	public function CuestionarioIpaq() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = [
				"code" => uniqid(),
				"idUsuarios" => $_SESSION['idUsuarios'],
				"fecha_creacion" => date('Y-m-d')
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

			return !$this->cuestionarioIpaqModel->CuestionarioIpaqDB($data) ? [false, "Error, no se puedo Guardar el cuestionario."] : [true, "index.php?action=CuestionarioIpaq"];
		}
	}

	public function ValideteFechaIpaq() {
		return $this->cuestionarioIpaqModel->ValideteFechaIpaqDB();
	}
	
}
