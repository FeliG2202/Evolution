<?php 


class NavBarControlador {
	
	function __construct(){
		$this->menuControlador = new MenuControlador();
		$this->opcionMenuControlador = new OpcionesMenuControlador();
		$this->navBarModelo = new NavBarModelo();
	}


}