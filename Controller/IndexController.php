<?php
require_once("Model/IndexModel.php");

class IndexController {
	
	private $indexModel;

	public function __construct() {
		$this->indexModel = new IndexModel();
	}

	public function cargarTemplate() {
		include("View/Template.php");
	}

	public function actionListener() {
		if (isset($_GET['action'])) {
			$enlace = $_GET['action'];
		} else {
			$enlace = @$_SESSION['user_session'] ? "Dashboard" : "Home";
		}
		return $this->indexModel->actionPerformed($enlace);
	}

	public function getRequest($url) {
		echo('<script type="text/javascript">window.location.href = "' . ($url) . '";</script>');
	}

}