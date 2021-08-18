<?php 


class UsuarioControlador {
	
	public function registrarUsuarioControlador() {
		if (isset($_POST['btnRegUsuario'])) {
			///AQUI DEBE IR LA ENCRIPTACION DE LA CLAVE Y VALIDACION DEL PATRON///
			$datos = array('usuario' => $_POST['usuario'],
				'login' => $_POST['login'],
				'clave' => $_POST['clave']
			);
			$usuario = new UsuarioModelo();
			$respuesta = $usuario->registrarUsuarioModelo($datos);
			if($respuesta){
				@header("location:index.php?action=OkUsu");
			}
		}
	}


	public function loginUsuarioControlador() {
		if(isset($_POST['regLogin'])){
			$datos = array('login' => $_POST['login'],
				'clave' => $_POST['clave']);
			$usuario = new UsuarioModelo();
			$respuesta = $usuario->loginUsuarioModelo($datos);

			if(count($respuesta) > 0 && $respuesta[0]['usuEstado'] == 'true'){
				session_start();
				$_SESSION['idUsuario'] = $respuesta[0]['idUsuario'];
				$_SESSION['usuLogin'] = $respuesta[0]['usuLogin'];
				$_SESSION['idpersona'] = $respuesta[0]['idpersona'];
				$_SESSION['idSession'] = true;

				$persona = new PersonaControlador();
				$datos = $persona->consultarPersonaIdControlador($respuesta[0]['idpersona']);

				$_SESSION['nombreUsuario'] = $datos[0]['persona_nombres']." ".$datos[0]['persona_apellidos'];

				header('location:home');
			}

		}
	}
}



