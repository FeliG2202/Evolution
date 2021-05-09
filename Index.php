<?php
require_once("Controller/IndexController.php");
session_start();
$indexController = new IndexController();
$indexController->cargarTemplate();