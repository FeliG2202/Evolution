<?php 

class UsuarioRolesControlador {
	
	public function consultarUsuarioIdRolesControlador() {
		if(isset($_SESSION['idUsuario'])){
			$usuarioRolModelo = new UsuarioRolesModelo();
			$datos = $usuarioRolModelo->consultarUsuarioIdRolesModelo($_SESSION['idUsuario']);
			return $datos;
		}
	}


	public function cargarInicioRolControlador(){

		if(isset($_POST['idRol']) && $_POST['idRol'] > 0 ){
			$_SESSION['idRol'] = $_POST['idRol'];
			header("location:Home");
		}


	}

}

