<?php
require_once("Controller/IndexController.php");
session_start();
$indexController = new IndexController();
include_once($indexController->cargarTemplate());