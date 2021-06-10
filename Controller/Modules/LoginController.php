<?php 
require_once("Model/Modules/LoginModel.php");
require_once("Model/Class/LoginClass.php");

class LoginController {

	private $loginModel;
	private $loginClass;
	
	public function __construct() {
		$this->loginModel = new LoginModel();
	}

	public function validateLogin($request = null) {
		if (isset($_POST['usuarios_email_l']) && isset($_POST['usuarios_password_l'])) {
			if (!empty($_POST['usuarios_email_l']) && !empty($_POST['usuarios_password_l'])) {
				$this->loginClass = new LoginClass(null, null, strtolower($_POST['usuarios_email_l']), $_POST['usuarios_password_l']);
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