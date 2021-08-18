<?php 

class RespuestaControlador {
	
	public function cargarRespuestasControlador($id) {
		$respuestaModelo = new RespuestaModelo();
		$datos = $respuestaModelo->cargarRespuestaModelo($id);
		return $datos;
	}
}