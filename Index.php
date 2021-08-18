<?php 

///INCLUIR CONTROLADORES
require_once("controller/templateControlador.php");
require_once("controller/personaControlador.php");
require_once("controller/usuarioControlador.php");
require_once("controller/usuarioRolesControlador.php");
require_once("controller/rolesOpcionesMenuControlador.php");
require_once("controller/tipoCuestionarioControlador.php");
require_once("controller/cuestionarioControlador.php");
require_once("controller/preguntaControlador.php");
require_once("controller/respuestaControlador.php");




///INCLUIR MODELOS
require_once("models/validarEnlacesModelo.php");
require_once("models/personaModelo.php");
require_once("models/usuarioModelo.php");
require_once("models/usuarioRolesModelo.php");
require_once("models/rolesOpcionesMenuModelo.php");
require_once("models/tipoCuestionarioModelo.php");
require_once("models/preguntaModelo.php");
require_once("models/respuestaModelo.php");




$template = new TemplateControlador();
$template->cargarTemplate();





