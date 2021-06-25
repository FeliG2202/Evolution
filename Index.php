<?php

//formato de fecha de bogota.
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1;mode=block');
header_remove("X-Powered-By");
ini_set('date.timezone', 'America/Bogota');

//llama al index controller.
require_once("Controller/IndexController.php");
session_start();
$indexController = new IndexController();

// llama al el template.
include_once($indexController->cargarTemplate());