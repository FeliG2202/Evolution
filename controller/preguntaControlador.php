<?php 

class PreguntaControlador {
	
	public function consultarPreguntaControlador() {
		if (isset($_SESSION['idTipoCuestionario']) && $_SESSION['idTipoCuestionario'] > 0) {
			$preguntaModelo = new PreguntaModelo();
			$respuesta = $preguntaModelo->consultarPreguntaModelo($_SESSION['idTipoCuestionario']);
			return $respuesta;

		}
	}
}