<?php 

class PersonaControlador {
	
	public function registrarPersonaControlador() {
		if(isset($_POST['regPersona'])){
			$datosPersona = array('nombre' => $_POST['nombre'], 
				'apellido'=>$_POST['apellido'],
				'documento' => $_POST['documento'],
				'genero' => $_POST['genero']);

			$personaModelo = new PersonaModelo();
			return !$personaModelo->registrarPersonaModelo($datosPersona) ? [false, "index.php?action=fa1"] : [true, "index.php?action=ok1"];
		}
	}


	public function consultarPersonaControlador(){
		if (isset($_POST['btnBuscarPersona'])) {
			if (isset($_POST['datoBusqueda'])) {
				$datoBusqueda = $_POST['datoBusqueda'];
			}
		}
		else{
			$datoBusqueda = '';
		}

		$personaModelo = new PersonaModelo();
		return $personaModelo->consultarPersonaModelo($datoBusqueda);
	}


	public function consultarPersonaIdControlador(){
		if (isset($_GET['id'])) {
			$personaModelo = new PersonaModelo();
			return $personaModelo->consultarPersonaIdModelo($_GET['id']);
		}
	}

	public function consultarPersonasIdControlador($id){
		$persona = new PersonaModelo();
		$respuesta = $persona->consultarPersonasIdModelo($id);
		return $respuesta;
	}


	///////////////////////////

	public function listarPersonasControlador(){
		$personaModelo = new PersonaModelo();
		return $personaModelo->listarPersonasModelo();
	}


	public function actualizarPersonaControlador(){
		if (isset($_POST['updPersona'])) {
			$datosPersona = array('nombre'=>$_POST['nombre'],
				'apellido'=>$_POST['apellido'],
				'documento'=>$_POST['documento'],
				'genero'=>$_POST['genero'],
				'id'=>$_GET['id']);

			$personaModelo = new PersonaModelo();
			return !$personaModelo->actualizarPersonaModelo($datosPersona) ? [false, "index.php?action=fa2"] : [true, "index.php?action=ok2"];
		}
	}

	public function eliminarPersonaControlador() {
		if (isset($_GET['id'])) {
			$personaModelo = new PersonaModelo();
			return !$personaModelo->eliminarPersonaModelo($_GET['id']) ? [false, "index.php?action=fa3"] : [true, "index.php?action=ok3"];
		}
	}
}