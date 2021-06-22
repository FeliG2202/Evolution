<?php include_once("Config.php"); ?>

<nav class="sb-sidenav accordion sb-sidenav-light border-right" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Opciones Evolution</div>
            <?php $i = 0; $link_sidebar = null;

            do {
                if ($sidebar_modulos[$i]['modulo_type'] === "link" && $sidebar_modulos[$i]['modulo_visibility'] === "SI") {
                    if (@$_SESSION['user_session']) {
                        if ($sidebar_modulos[$i]['modulo_status'] === "online" || $sidebar_modulos[$i]['modulo_status'] === "online/offline") {
                            for ($x = 0; $x < count($sidebar_modulos[$i]['modulo_permissions']); $x++) { 
                                if (@$_SESSION['idRoles'] == $sidebar_modulos[$i]['modulo_permissions'][$x]) {
                                    echo("<a href='" . ($sidebar_modulos[$i]['modulo_link']) . "' class='nav-link'>");
                                    echo("<div class='sb-nav-link-icon'><i class='" . ($sidebar_modulos[$i]['modulo_icon']) . "'></i></div>");
                                    echo($sidebar_modulos[$i]['modulo_nombre']);
                                    echo("</a>");
                                }
                            }
                        }
                    } elseif (@!$_SESSION['user_session']) {
                        if ($sidebar_modulos[$i]['modulo_status'] === "offline" || $sidebar_modulos[$i]['modulo_status'] === "online/offline") {
                            echo("<a href='" . ($sidebar_modulos[$i]['modulo_link']) . "' class='nav-link'>");
                            echo("<div class='sb-nav-link-icon'><i class='" . ($sidebar_modulos[$i]['modulo_icon']) . "'></i></div>");
                            echo($sidebar_modulos[$i]['modulo_nombre']);
                            echo("</a>");
                        }
                    }
                } elseif ($sidebar_modulos[$i]['modulo_type'] === "item" && $sidebar_modulos[$i]['modulo_visibility'] === "SI") {
                    //Link item
                    for ($j = 0; $j < count($sidebar_sub_modulos); $j++) {
                        if (@$_SESSION['user_session']) {
                            if ($sidebar_sub_modulos[$j]['idModulo'] === $sidebar_modulos[$i]['idModulo']) {
                                for ($q = 0; $q < count($sidebar_sub_modulos[$j]['sub_modulo_permissions']); $q++) { 
                                    if (@$_SESSION['idRoles'] == $sidebar_sub_modulos[$j]['sub_modulo_permissions'][$q]) {
                                        $link_sidebar.= "<a href='" . ($sidebar_sub_modulos[$j]['sub_modulo_link']) . "' class='nav-link'><div class='sb-nav-link-icon'><i class='" . ($sidebar_sub_modulos[$j]['sub_modulo_icon']) . "'></i></div>" . ($sidebar_sub_modulos[$j]['sub_modulo_nombre']) . "</a>";
                                    }
                                }
                            }
                        } elseif (@!$_SESSION['user_session']) {
                            if ($sidebar_sub_modulos[$j]['idModulo'] === $sidebar_modulos[$i]['idModulo']) {
                                $link_sidebar.= "<a href='" . ($sidebar_sub_modulos[$j]['sub_modulo_link']) . "' class='nav-link'><div class='sb-nav-link-icon'><i class='" . ($sidebar_sub_modulos[$j]['sub_modulo_icon']) . "'></i></div>" . ($sidebar_sub_modulos[$j]['sub_modulo_nombre']) . "</a>";
                            }
                        }
                    }

                    //Contenedor item
                    if (@$_SESSION['user_session']) {
                        if ($sidebar_modulos[$i]['modulo_status'] === "online" || $sidebar_modulos[$i]['modulo_status'] === "online/offline") {
                            for ($k = 0; $k < count($sidebar_modulos[$i]['modulo_permissions']); $k++) { 
                                if (@$_SESSION['idRoles'] == $sidebar_modulos[$i]['modulo_permissions'][$k]) {
                                    echo("<a href='#' class='nav-link collapsed' data-toggle='collapse' data-target='#" . (strtolower($sidebar_modulos[$i]['modulo_nombre'])) . "' aria-expanded='false' aria-controls='" . (strtolower($sidebar_modulos[$i]['modulo_nombre'])) . "'>");
                                    echo("<div class='sb-nav-link-icon'><i class='" . ($sidebar_modulos[$i]['modulo_icon']) . "'></i></div>");
                                    echo($sidebar_modulos[$i]['modulo_nombre']);
                                    echo('<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>');
                                    echo("</a>");

                                    echo("<div class='collapse' id='" . (strtolower($sidebar_modulos[$i]['modulo_nombre'])) . "' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>");
                                    echo("<nav class='sb-sidenav-menu-nested nav'>" . ($link_sidebar) . "</nav>");
                                    echo("</div>");
                                }
                            }
                        }
                    } elseif (@!$_SESSION['user_session']) {
                        if ($sidebar_modulos[$i]['modulo_status'] === "offline" || $sidebar_modulos[$i]['modulo_status'] === "online/offline") {
                            echo("<a href='#' class='nav-link collapsed' data-toggle='collapse' data-target='#" . (strtolower($sidebar_modulos[$i]['modulo_nombre'])) . "' aria-expanded='false' aria-controls='" . (strtolower($sidebar_modulos[$i]['modulo_nombre'])) . "'>");
                            echo("<div class='sb-nav-link-icon'><i class='" . ($sidebar_modulos[$i]['modulo_icon']) . "'></i></div>");
                            echo($sidebar_modulos[$i]['modulo_nombre']);
                            echo('<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>');
                            echo("</a>");

                            echo("<div class='collapse' id='" . (strtolower($sidebar_modulos[$i]['modulo_nombre'])) . "' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>");
                            echo("<nav class='sb-sidenav-menu-nested nav'>" . ($link_sidebar) . "</nav>");
                            echo("</div>");
                        }
                    }

                    $link_sidebar = null;
                }
                $i++;
            } while ($i < count($sidebar_modulos)); ?>
        </div>
    </div>

    <div class="sb-sidenav-footer">
        <img src="View/Assets/Img/logos/30_aventura.png" width="190" height="75" class="d-inline-block align-top">
    </div>
</nav>