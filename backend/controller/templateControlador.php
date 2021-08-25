<?php 

	class TemplateControlador {
		
		function cargarTemplate() {
			include 'view/template.php';
		}

		public function enlacesPaginaControlador() {
			if (empty($_GET['action'])) {
				$enlace = "Home";
			}
			else{
				$enlace = $_GET['action'];
			}

			$objEnlace = new ValidarEnlacesModelo();
			$ruta = $objEnlace->validarListaBlanca($enlace);
			return $ruta;
		}
	}
?>