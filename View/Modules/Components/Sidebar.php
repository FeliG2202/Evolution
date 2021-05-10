<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="<?php  echo(@$_SESSION['user_session'] ? "Dashboard" : "Home");  ?>">
                <div class="sb-nav-link-icon"><i class="fa fa-home text-yellow"></i></div>
                <?php  echo(@$_SESSION['user_session'] ? "Dashboard" : "Home");  ?>
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-user-circle text-yellow"></i></div>
                Perfil
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Evolucion del mes</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ejercicios diarios</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Ficha antropometrica</a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="Infor">
                <div class="sb-nav-link-icon"><i class="fas fa-info-circle text-yellow"></i></div>
                Informacion
            </a>
            <a class="nav-link" href="Ayuda">
                <div class="sb-nav-link-icon"><i class="fas fa-question-circle text-yellow"></i></div>
                Ayuda
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>