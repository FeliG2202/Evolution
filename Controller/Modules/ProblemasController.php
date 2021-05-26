<?php 
require_once("Model/Modules/ProblemasModel.php");

class ProblemasController {

	private $problemasModel;
	
	public function __construct(){
		$this->problemasModel = new ProblemasModel();
	}

	public function readProblemas() {
		return $this->problemasModel->readProblemasDB();
	}
}