<?php 

class PersonaControlador {
	
	function registrarPersonaControlador() {
		if (isset($_POST['btnRegistrar'])) {
			$datos = array('nombres' => $_POST['nombres'], 
							'apellidos' => $_POST['apellidos'],
							'documento' => $_POST['documento'],
							'fechanacimiento' => $_POST['fechanacimiento'],
							'genero' => $_POST['genero'],
							'tiposangre' => $_POST['tiposangre'],
							'estatura' => $_POST['estatura'],
							'peso' => $_POST['peso'],
							'email' => $_POST['email'],
							'discapacidad' => $_POST['discapacidad']
						);
			$persona = new PersonaModelo();
			$respuesta = $persona->registrarPersonaModelo($datos);
			if($respuesta){
				@header("location:index.php?action=OkSign");
			}
		}
	}

	public function consultarPersonasControlador(){
		$persona = new PersonaModelo();
		$datos = $persona->consultarPersonasModelo();
		return $datos;
	}


	public function consultarPersonaIdControlador($id){
		$persona = new PersonaModelo();
		$respuesta = $persona->consultarPersonaIdModelo($id);
		return $respuesta;
	}

}