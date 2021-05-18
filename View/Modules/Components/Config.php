<?php 
$sidebar_modulos = [
    [
        "idModulo" => 1, 
        "modulo_nombre" => "Home", 
        "modulo_icon" => "fad fa-home fa-lg text-warning", 
        "modulo_type" => "link",
        "modulo_link" => "Home",
        "modulo_status" => "offline",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 2, 
        "modulo_nombre" => "Ficha", 
        "modulo_icon" => "fad fa-folder fa-lg text-warning", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 3, 
        "modulo_nombre" => "Dashboards", 
        "modulo_icon" => "fad fa-home fa-lg text-warning", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 4, 
        "modulo_nombre" => "Soporte", 
        "modulo_icon" => "fad fa-universal-access fa-lg text-warning", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online/offline",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 5, 
        "modulo_nombre" => "Oculto", 
        "modulo_icon" => "fad fa-home fa-lg", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online/offline",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "NO"
    ], [
        "idModulo" => 6, 
        "modulo_nombre" => "Ingresar", 
        "modulo_icon" => "fad fa-sign-in-alt fa-lg text-warning", 
        "modulo_type" => "link", 
        "modulo_link" => "Login",
        "modulo_status" => "offline",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 7, 
        "modulo_nombre" => "Salir", 
        "modulo_icon" => "fad fa-sign-out-alt fa-lg text-warning", 
        "modulo_type" => "link", 
        "modulo_link" => "Salir",
        "modulo_status" => "online",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ]
]; 

$sidebar_sub_modulos = [
    [
        "idSubModulo" => 1, 
        "sub_modulo_nombre" => "Dashboard", 
        "sub_modulo_icon" => "fad fa-home fa-lg", 
        "sub_modulo_link" => "Dashboard",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 3
    ], [
        "idSubModulo" => 2, 
        "sub_modulo_nombre" => "Home", 
        "sub_modulo_icon" => "fad fa-home fa-lg", 
        "sub_modulo_link" => "Home",
        "sub_modulo_status" => "online/offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 3
    ], [
        "idSubModulo" => 3, 
        "sub_modulo_nombre" => "Información", 
        "sub_modulo_icon" => "fad fa-info fa-lg text-warning", 
        "sub_modulo_link" => "Infor",
        "sub_modulo_status" => "online/offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 4
    ], [
        "idSubModulo" => 4, 
        "sub_modulo_nombre" => "Ayuda", 
        "sub_modulo_icon" => "fad fa-question fa-lg text-warning", 
        "sub_modulo_link" => "Ayuda",
        "sub_modulo_status" => "online/offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 4
    ], [
        "idSubModulo" => 5, 
        "sub_modulo_nombre" => "Salir", 
        "sub_modulo_icon" => "fad fa-home fa-lg", 
        "sub_modulo_link" => "Salir",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 6, 
        "sub_modulo_nombre" => "Perfil", 
        "sub_modulo_icon" => "fad fa-home fa-lg", 
        "sub_modulo_link" => "Perfil",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 7, 
        "sub_modulo_nombre" => "Registrar", 
        "sub_modulo_icon" => "fad fa-home fa-lg", 
        "sub_modulo_link" => "SingUp",
        "sub_modulo_status" => "offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 8, 
        "sub_modulo_nombre" => "Ingresar", 
        "sub_modulo_icon" => "fad fa-home fa-lg", 
        "sub_modulo_link" => "Login",
        "sub_modulo_status" => "offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 9, 
        "sub_modulo_nombre" => "Gestion de rol", 
        "sub_modulo_icon" => "fad fa-home fa-lg", 
        "sub_modulo_link" => "GestionRol",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1],
        "idModulo" => 2
    ], [
        "idSubModulo" => 10, 
        "sub_modulo_nombre" => "Ficha antropometrica", 
        "sub_modulo_icon" => "fad fa-file fa-lg text-warning", 
        "sub_modulo_link" => "FichaAntropometrica",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [2, 3],
        "idModulo" => 2
    ], [
        "idSubModulo" => 11, 
        "sub_modulo_nombre" => "Avances", 
        "sub_modulo_icon" => "fad fa-chart-line fa-lg text-warning", 
        "sub_modulo_link" => "EvolucionMes",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [2, 3],
        "idModulo" => 2
    ], [
        "idSubModulo" => 12, 
        "sub_modulo_nombre" => "Ejercicios diarios", 
        "sub_modulo_icon" => "fad fa-walking fa-lg text-warning", 
        "sub_modulo_link" => "EjerciciosDiarios",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [2, 3],
        "idModulo" => 2
    ]
];

usort($sidebar_modulos, function(array $elem1, $elem2) {
    return $elem1['modulo_nombre'] <=> $elem2['modulo_nombre'];
});

usort($sidebar_sub_modulos, function(array $elem1, $elem2) {
    return $elem1['sub_modulo_nombre'] <=> $elem2['sub_modulo_nombre'];
});