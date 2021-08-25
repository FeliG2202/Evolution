<?php 

/**
 * LA LISTA BLANCA PARA VALIDAR PAGINAS DEL SITIO
 */
class ValidarEnlacesModelo {
	
	public function validarListaBlanca($archivo) {
		$ruta = 'view/modules/'.$archivo.'.php';

		if(!file_exists($ruta)){
			$ruta = 'view/modules/Dashboard.php';
		}

		if($archivo == 'OkSign'){
			$ruta = 'view/modules/SignUP.php';
		}
		if($archivo == 'OkUsu'){
			$ruta = 'view/modules/regUsuarios.php?action=OkUsu';
		}
		if($archivo == 'ok3'){
			$ruta = 'view/modules/listaMedico.php';
		}
		return $ruta;
	}
}

?>