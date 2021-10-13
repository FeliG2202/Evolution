<?php 


class TemplateControlador {
	////CARGAR EL TEMPLATE EN EL INDEX /////
	function cargarTemplate(): string {
		return "Views/template.php";
	}

	////CARGAR LAS PAGINAS AL TEMPLATE////
	public function cargarPaginaAlTemplate(): string {
		$templateModelo = new TemplateModelo();
		return $templateModelo->validarEnlacesModelo(isset($_GET['action']) ? $_GET['action'] : 'inicio');
	}

}