<?php 

class TipoCuestionarioControlador
{
	
	function consultarTipoCuestionarioControlador()	{
		$tipoCuestionario = new TipoCuestionarioModelo();
		$respuesta = $tipoCuestionario->consultarTipoCuestionarioModelo();
		return $respuesta;
	}
}