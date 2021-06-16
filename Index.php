<?php
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1;mode=block');
header_remove("X-Powered-By");
ini_set('date.timezone', 'America/Bogota');
require_once("Controller/IndexController.php");
session_start();
$indexController = new IndexController();
include_once($indexController->cargarTemplate());