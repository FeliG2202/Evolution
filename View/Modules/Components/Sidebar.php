<?php 
ob_start(); 
if(!isset($_SESSION['idRol']) > 0){
?>

<nav class="sb-sidenav accordion sb-sidenav-light border-right" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">
                Opciones Evolution
            </div>

            <!-- Dashboard o Home --> 
            <a class="nav-link" href="Home">
                <div class="sb-nav-link-icon">
                    <i class="fad fa-home fa-lg text-warning"></i>
                </div>
                Home
            </a>
        </div>
    </div>
</nav>

<?php 
}
else{
$opcionesMenu = new RolesOpcionesMenuControlador();
$opciones = $opcionesMenu->consultarRolesOpcionesMenuControlador($_SESSION['idRol']);

?>
<nav class="sb-sidenav accordion sb-sidenav-light border-right" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">
                Opciones Evolution
            </div>

            <!-- Dashboard o Home --> 
            <a class="nav-link" href="Home">
                <div class="sb-nav-link-icon">
                    <i class="fad fa-home fa-lg text-warning"></i>
                </div>
                Home
            </a>

            <?php 

            foreach ($opciones as $key => $value) {
                print '<a class="nav-link" href="'.$value['opcionesMenuEnlace'].'">
                <div class="sb-nav-link-icon">
                    <i class="fad fa-home fa-lg text-warning"></i>
                </div>
                '.$value['opcionesMenuNombre'].'
            </a>';
            }

            ?>

            <!-- Cuestionario -->
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                <div class="sb-nav-link-icon">
                    <i class="fad fa-folder fa-lg text-warning"></i>
                </div>
                Cuestionarios
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Evolucion del mes</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ejercicios diarios</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ficha antropometrica</a>
                </nav>
            </div>

            <!-- Test -->
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                <div class="sb-nav-link-icon">
                    <i class="fad fa-folder fa-lg text-warning"></i>
                </div>
                Test
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="EvolucionMes">Avances</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ejercicios diarios</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ficha antropometrica</a>
                </nav>
            </div>

            <!-- Soporte -->
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                <div class="sb-nav-link-icon">
                    <i class="fad fa-universal-access fa-lg text-warning"></i>
                </div>
                Soporte
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="Informacion">
                        <div class="sb-nav-link-icon">
                            <i class="fad fa-info fa-lg text-warning"></i>
                        </div>
                        Informacion
                    </a>
                    <a class="nav-link" href="Ayuda">
                        <div class="sb-nav-link-icon">
                            <i class="fad fa-question fa-lg text-warning"></i>
                        </div>
                        Ayuda
                    </a>
                </nav>
            </div>

            <!--  LOS MIOS ------------------->

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#nuevos" aria-expanded="false" aria-controls="nuevos">
                <div class="sb-nav-link-icon">
                    <i class="fad fa-folder fa-lg text-warning"></i>
                </div>
                Los nuevos items
                <div class="sb-sidenav-collapse-arrow">
                    <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div class="collapse" id="nuevos" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="regUsuarios">Registrar Usuarios</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ejercicios diarios</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ficha antropometrica</a>
                </nav>
            </div>

        </div>
    </div>
</nav>
<?php } ?>