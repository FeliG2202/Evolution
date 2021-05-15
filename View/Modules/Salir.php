<?php 
session_unset();
session_destroy();
$indexController->getRequest("Home");