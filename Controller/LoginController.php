<?php 
require_once("Model/Modules/LoginModel.php");
require_once("Model/Class/LoginClass.php");

class LoginController {

	private $loginModel;
	private $loginClass;
	
	public function __construct() {
		$this->loginModel = new LoginModel();
	}

	public function createUser() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (
				isset($_POST['nombresession']) && 
				isset($_POST['apellidosession']) && 
				isset($_POST['documentosession']) && 
				isset($_POST['fechanacimientosession']) && 
				isset($_POST['correosession']) && 
				isset($_POST['contrasenasession']) && 
				isset($_POST['generosession']) && 
				isset($_POST['pesosession']) && 
				isset($_POST['alturasession']) && 
				isset($_POST['sangresession']) && 
				isset($_POST['problemasession'])
			) {
				if (
					!empty($_POST['nombresession']) && 
					!empty($_POST['apellidosession']) && 
					!empty($_POST['documentosession']) && 
					!empty($_POST['fechanacimientosession']) && 
					!empty($_POST['correosession']) && 
					!empty($_POST['contrasenasession']) && 
					!empty($_POST['generosession']) && 
					!empty($_POST['pesosession']) && 
					!empty($_POST['alturasession']) && 
					!empty($_POST['sangresession']) && 
					!empty($_POST['problemasession'])
				) {
					$data = [
						"nombresession" => $_POST['nombresession'],
						"apellidosession" => $_POST['apellidosession'],
						"documentosession" => $_POST['documentosession'],
						"fechanacimientosession" => $_POST['fechanacimientosession'],
						"correosession" => $_POST['correosession'],
						"contrasenasession" => $_POST['contrasenasession'],
						"generosession" => $_POST['generosession'],
						"pesosession" => $_POST['pesosession'],
						"alturasession" => $_POST['alturasession'],
						"sangresession" => $_POST['sangresession'],
						"problemasession" => $_POST['problemasession'],
						"code" => uniqid(),
						"rol" => 3
					];
					if ($this->loginModel->createUserDB($data)) {
						return [true, "Login"];
					} else {
						return [false, "Error, no se registró el hospital."];
					}
				} else {
					return [false, "Error, todos los campos son obligatorios"];
				}
			}
		}
	}


	public function validateLogin($request = null) {
		if (isset($_POST['usuarios_email_l']) && isset($_POST['usuarios_password_l'])) {
			if (!empty($_POST['usuarios_email_l']) && !empty($_POST['usuarios_password_l'])) {
				$this->loginClass = new LoginClass(null, null, $_POST['usuarios_email_l'], $_POST['usuarios_password_l']);
				$files = $this->loginModel->validateLoginDB($this->loginClass);

				if ($files['files'] > 0) {
					if ($this->loginSession($this->loginClass)) {
						$request = [true, "Dashboard"];
					} else {
						$request = [false, "Error al ingresar."];
					}
				} else {
					$request = [false, "Correo o password incorrectos."];
				}
			} else {
				$request = [false, "Los campos son obligatorios."];
			}
		}

		return $request;
	}

	private function loginSession(LoginClass $loginClass, $request = null) {
		$data = $this->loginModel->loginSessionDB($loginClass);

		if ($data != null) {
			$_SESSION['user_session'] = true;
			$_SESSION['idUsuarios'] = $data['idUsuarios'];
			$_SESSION['idRoles'] = $data['idRoles'];

			$request = true;
		} else {
			$request = false;
		}

		return $request;
	}

}