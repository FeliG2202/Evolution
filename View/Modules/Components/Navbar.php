<?php /*foreach($controller->read($_SESSION['idUsuarios']) as $key => $dataUser) {

}*/ ?>

<nav class="sb-topnav navbar navbar-expand navbar-light bg-orange shadow-sm">
  <a class="navbar-brand text-white" href="home">Evolution</a>

  <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!">
    <i class="fas fa-bars fa-lg text-white"></i>
  </button>

  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 w-100">
    <?php if (@$_SESSION['user_session']) { ?>
      <input class="form-control w-100 text-center mr-3 ml-3" type="text" value="<?php //echo($dataUser['usuarios_nombres']); ?>" readonly>
    <?php } ?>
  </form>
  
  <!-- Navbar-->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <?php if (@!$_SESSION['user_session']) { ?>
          <a class="dropdown-item" href="Login">Iniciar sesión</a>
          <a class="dropdown-item" href="SignUp">Registrarse</a>
        <?php } ?>

        <?php if (@$_SESSION['user_session']) { ?> 
          <a class="dropdown-item" href="Perfil">Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Salir">Salir</a>   
        <?php } ?>
      </div>
    </li>
  </ul>
</nav>