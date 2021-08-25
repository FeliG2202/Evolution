<?php 

class PreguntaControlador {
	
	public function consultarPreguntaControlador() {
		if (isset($_SESSION['idTipoCuestionario']) && $_SESSION['idTipoCuestionario'] > 0) {
			$preguntaModelo = new PreguntaModelo();
			$respuesta = $preguntaModelo->consultarPreguntaModelo($_SESSION['idTipoCuestionario']);
			return $respuesta;

		}
	}

	/*public function createPreguntaControlador() {
		if (
			isset($_POST['pregunta']) && 
			isset($_POST['estadoPregunta']) &&
			isset($_POST['tipoCuestionario'])
		) {
			if(
				!empty($_POST['pregunta']) && 
				!empty($_POST['estadoPregunta']) &&
				!empty($_POST['tipoCuestionario'])
			)
		}
	}*/
}