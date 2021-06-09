<?php
require_once("Model/Modules/GestionRolModel.php");

class GestionRolController {
	
	private $gestionRolModel;
	
	public function __construct() {
		$this->gestionRolModel = new GestionRolModel();
	}

	public function readUsers() {
		return $this->gestionRolModel->readUSersDB();
	}

	public function deleteUsers() {
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			if (isset($_GET['del'])) {
				if ($this->gestionRolModel->deleteUsersDB(["usuarios_code" => $_GET['del']])) {
					return [true, "GestionRol"];
				} else {
					return [false, "no se eliminó."];
				}
			}
		}
	}

	public function updateUsers() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (isset($_POST['nombreupdate']) && 
				isset($_POST['apellidoupdate']) && 
				isset($_POST['usuarios_email']) && 
				isset($_POST['idRoles']) && 
				isset($_POST['usuarios_code'])) {
				if (!empty($_POST['nombreupdate']) && 
					!empty($_POST['apellidoupdate']) && 
					!empty($_POST['usuarios_email']) && 
					!empty($_POST['idRoles']) &&
					!empty($_POST['usuarios_code'])) {
					$data = [
						"nombresession" => $_POST['nombreupdate'],
						"apellidosession" => $_POST['apellidoupdate'],
						"correosession" => $_POST['usuarios_email'],
						"idRoles" => $_POST['idRoles'],
						"code" => $_POST['usuarios_code']
					];

					if ($this->gestionRolModel->readUsersDB($data)) {
						return [true, "GestionRol"];
					} else {
						return [false, "Error, no se registró la impresora."];
					}
				} else {
					return [false, "Error, todos los campos son obligatorios"];
				}
			}
		}
	}

	public function readUsersCode() {
		return $this->gestionRolModel->readUserseDB(['code' => $_GET['id']]);
	}

}