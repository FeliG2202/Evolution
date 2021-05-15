<?php 
$sidebar_modulos = [
    [
        "idModulo" => 1, 
        "modulo_nombre" => "Home", 
        "modulo_icon" => "fa fa-home text-danger", 
        "modulo_type" => "link",
        "modulo_link" => "Home",
        "modulo_status" => "offline",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 2, 
        "modulo_nombre" => "Ficha", 
        "modulo_icon" => "fa fa-home text-primary", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 3, 
        "modulo_nombre" => "Dashboards", 
        "modulo_icon" => "fa fa-home text-warning", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 4, 
        "modulo_nombre" => "Soporte", 
        "modulo_icon" => "fa fa-home", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online/offline",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "SI"
    ], [
        "idModulo" => 5, 
        "modulo_nombre" => "Oculto", 
        "modulo_icon" => "fa fa-home", 
        "modulo_type" => "item", 
        "modulo_link" => "#",
        "modulo_status" => "online/offline",
        "modulo_permissions" => [1, 2, 3],
        "modulo_visibility" => "NO"
    ]
]; 

$sidebar_sub_modulos = [
    [
        "idSubModulo" => 1, 
        "sub_modulo_nombre" => "Dashboard", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "Dashboard",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 3
    ], [
        "idSubModulo" => 2, 
        "sub_modulo_nombre" => "Home", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "Home",
        "sub_modulo_status" => "online/offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 3
    ], [
        "idSubModulo" => 3, 
        "sub_modulo_nombre" => "Información", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "Infor",
        "sub_modulo_status" => "online/offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 4
    ], [
        "idSubModulo" => 4, 
        "sub_modulo_nombre" => "Ayuda", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "Ayuda",
        "sub_modulo_status" => "online/offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 4
    ], [
        "idSubModulo" => 5, 
        "sub_modulo_nombre" => "Salir", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "Salir",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 6, 
        "sub_modulo_nombre" => "Perfil", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "Perfil",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 7, 
        "sub_modulo_nombre" => "Registrar", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "SingUp",
        "sub_modulo_status" => "offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 8, 
        "sub_modulo_nombre" => "Ingresar", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "Login",
        "sub_modulo_status" => "offline",
        "sub_modulo_permissions" => [1, 2, 3],
        "idModulo" => 5
    ], [
        "idSubModulo" => 9, 
        "sub_modulo_nombre" => "Gestion de rol", 
        "sub_modulo_icon" => "fa fa-home", 
        "sub_modulo_link" => "GestionRol",
        "sub_modulo_status" => "online",
        "sub_modulo_permissions" => [1],
        "idModulo" => 2
    ]
];