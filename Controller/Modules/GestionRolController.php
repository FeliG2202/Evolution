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

}