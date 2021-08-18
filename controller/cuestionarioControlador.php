<?php 


class CuestionarioControlador {
	public function cargarCuestionarioControlador() {
		if (isset($_POST['verCuestionario'])) {
			$_SESSION['idTipoCuestionario'] = $_POST['idTipoCuestionario'];
			header('location:regCuestionario');
		}
	}
}