<?php 
require_once("Model/Modules/CuestionarioFantasticoModel.php");

class CuestionarioFantasticoController {

	private $cuestionarioFantasticoController;
	
	public function __construct() {
		$this->cuestionarioFantasticoModel = new CuestionarioFantasticoModel();
	}

	public function CuestionarioFantastico() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (
				isset($_POST['pregunta1']) && 
				isset($_POST['pregunta2']) && 
				isset($_POST['pregunta3']) && 
				isset($_POST['pregunta4']) && 
				isset($_POST['pregunta5']) && 
				isset($_POST['pregunta6']) && 
				isset($_POST['pregunta7']) && 
				isset($_POST['pregunta8']) && 
				isset($_POST['pregunta9']) && 
				isset($_POST['pregunta10']) && 
				isset($_POST['pregunta11']) && 
				isset($_POST['pregunta12']) && 
				isset($_POST['pregunta13']) && 
				isset($_POST['pregunta14']) &&
				isset($_POST['pregunta15']) && 
				isset($_POST['pregunta16']) && 
				isset($_POST['pregunta17']) && 
				isset($_POST['pregunta18']) && 
				isset($_POST['pregunta19']) && 
				isset($_POST['pregunta20']) && 
				isset($_POST['pregunta21']) &&
				isset($_POST['pregunta22']) && 
				isset($_POST['pregunta23']) && 
				isset($_POST['pregunta24']) && 
				isset($_POST['pregunta25']) && 
				isset($_POST['pregunta26']) && 
				isset($_POST['pregunta27']) && 
				isset($_POST['pregunta28']) &&
				isset($_POST['pregunta29']) && 
				isset($_POST['pregunta30']) && 
				isset($_POST['pregunta31']) && 
				isset($_POST['pregunta32']) 
			) {
				if (
					!empty($_POST['pregunta1']) && 
					!empty($_POST['pregunta2']) && 
					!empty($_POST['pregunta3']) && 
					!empty($_POST['pregunta4']) && 
					!empty($_POST['pregunta5']) && 
					!empty($_POST['pregunta6']) && 
					!empty($_POST['pregunta7']) && 
					!empty($_POST['pregunta8']) && 
					!empty($_POST['pregunta9']) && 
					!empty($_POST['pregunta10']) && 
					!empty($_POST['pregunta11']) && 
					!empty($_POST['pregunta12']) && 
					!empty($_POST['pregunta13']) && 
					!empty($_POST['pregunta14']) &&
					!empty($_POST['pregunta15']) && 
					!empty($_POST['pregunta16']) && 
					!empty($_POST['pregunta17']) && 
					!empty($_POST['pregunta18']) && 
					!empty($_POST['pregunta19']) && 
					!empty($_POST['pregunta20']) && 
					!empty($_POST['pregunta21']) &&
					!empty($_POST['pregunta22']) && 
					!empty($_POST['pregunta23']) && 
					!empty($_POST['pregunta24']) && 
					!empty($_POST['pregunta25']) && 
					!empty($_POST['pregunta26']) && 
					!empty($_POST['pregunta27']) && 
					!empty($_POST['pregunta28']) &&
					!empty($_POST['pregunta29']) && 
					!empty($_POST['pregunta30']) && 
					!empty($_POST['pregunta31']) && 
					!empty($_POST['pregunta32'])  
				) {
					$data = [
						"pregunta1" => $_POST['pregunta1'],
						"pregunta2" => $_POST['pregunta2'],
						"pregunta3" => $_POST['pregunta3'],
						"pregunta4" => $_POST['pregunta4'],
						"pregunta5" => $_POST['pregunta5'],
						"pregunta6" => $_POST['pregunta6'],
						"pregunta7" => $_POST['pregunta7'],
						"pregunta8" => $_POST['pregunta8'],
						"pregunta9" => $_POST['pregunta9'],
						"pregunta10" => $_POST['pregunta10'],
						"pregunta11" => $_POST['pregunta11'],
						"pregunta12" => $_POST['pregunta12'],
						"pregunta13" => $_POST['pregunta13'],
						"pregunta14" => $_POST['pregunta14'],
						"pregunta15" => $_POST['pregunta15'],
						"pregunta16" => $_POST['pregunta16'],
						"pregunta17" => $_POST['pregunta17'],
						"pregunta18" => $_POST['pregunta18'],
						"pregunta19" => $_POST['pregunta19'],
						"pregunta20" => $_POST['pregunta20'],
						"pregunta21" => $_POST['pregunta21'],
						"pregunta22" => $_POST['pregunta22'],
						"pregunta23" => $_POST['pregunta23'],
						"pregunta24" => $_POST['pregunta24'],
						"pregunta25" => $_POST['pregunta25'],
						"pregunta26" => $_POST['pregunta26'],
						"pregunta27" => $_POST['pregunta27'],
						"pregunta28" => $_POST['pregunta28'],
						"pregunta29" => $_POST['pregunta29'],
						"pregunta30" => $_POST['pregunta30'],
						"pregunta31" => $_POST['pregunta31'],
						"pregunta32" => $_POST['pregunta32'],
						"code" => uniqid(),
						"idUsuarios" => $_SESSION['idUsuarios']
					];
					if ($this->cuestionarioFantasticoModel->CuestionarioFantasticoDB($data)) {
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