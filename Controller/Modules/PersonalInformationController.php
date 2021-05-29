<?php
require_once("Model/Modules/PersonalInformationModel.php");

class Personalinformationcontroller {

	private $PersonalInformationModel;

	public function __construct() {
		$this->PersonalInformationModel = new PersonalInformationModel();
	}

	public function readPersonalInformation() {
		return $this->PersonalInformationModel->readPersonalInformation();
	}
	
}