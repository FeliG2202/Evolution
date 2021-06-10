<?php 
require_once("Model/Modules/CuestionarioIpaqModel.php");

class CuestionarioIpaqController {

	private $cuestionarioIpaqModel;
	
	public function __construct() {
		$this->cuestionarioIpaqModel = new CuestionarioIpaqModel();
	}

	public function CuestionarioIpaq() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (
				isset($_POST['pregunta1']) && 
				isset($_POST['pregunta2']) && 
				isset($_POST['pregunta3']) && 
				isset($_POST['pregunta4']) && 
				isset($_POST['pregunta5']) && 
				isset($_POST['pregunta6']) && 
				isset($_POST['pregunta7'])  
			) {
				if (
					!empty($_POST['pregunta1']) && 
					!empty($_POST['pregunta2']) && 
					!empty($_POST['pregunta3']) && 
					!empty($_POST['pregunta4']) && 
					!empty($_POST['pregunta5']) && 
					!empty($_POST['pregunta6']) && 
					!empty($_POST['pregunta7']) 
				) {
					$data = [
						"pregunta1" => $_POST['pregunta1'],
						"pregunta2" => $_POST['pregunta2'],
						"pregunta3" => $_POST['pregunta3'],
						"pregunta4" => $_POST['pregunta4'],
						"pregunta5" => $_POST['pregunta5'],
						"pregunta6" => $_POST['pregunta6'],
						"pregunta7" => $_POST['pregunta7'],
						"code" => uniqid(),
						"idUsuarios" => $_SESSION['idUsuarios']
					];
					if ($this->cuestionarioIpaqModel->CuestionarioIpaqDB($data)) {
						return [true, "ResultadosCuestionario"];
					} else {
						return [false, "Error, no se puedo Guardar el cuestionario."];
					}
				} else {
					return [false, "Error, todos los campos son obligatorios."];
				}
			}
		}
	}
}
	?>