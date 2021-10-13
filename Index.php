<?php 
session_start();
///////CONTROLADORES /////////////////////
require_once("Controllers/TemplateControlador.php");
require_once("Controllers/PersonaControlador.php");
require_once("Controllers/usuarioControlador.php");
require_once("Controllers/rolControlador.php");
require_once("Controllers/rolUsuarioControlador.php");
require_once("Controllers/MenuControlador.php");
require_once("Controllers/RolMenuControlador.php");
require_once("Controllers/OpcionesMenuControlador.php");
require_once("Controllers/NavBarControlador.php");


///////////MODELOS ///////////////////////
require_once("Models/TemplateModelo.php");
require_once("Models/PersonaModelo.php");
require_once("Models/usuarioModelo.php");
require_once("Models/RolModelo.php");
require_once("Models/RolUsuarioModelo.php");
require_once("Models/MenuModelo.php");
require_once("Models/RolMenuModelo.php");
require_once("Models/OpcionesMenuModelo.php");
require_once("Models/NavBarModelo.php");

$saludo = "Hola felipe";

$templateControlador = new templateControlador();
include_once($templateControlador->cargarTemplate());