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

                <?php 

                foreach ($opciones as $key => $value) {
                    print '<a class="nav-link" href="'.$value['opcionesMenuEnlace'].'">
                    <div class="sb-nav-link-icon">
                    <i class="'.$value['opcionesMenuIcono'].'"></i>
                    </div>
                    '.$value['opcionesMenuNombre'].'
                    </a>';
                }

                ?>

            </div>
        </div>
    </nav>

    <?php } ?>