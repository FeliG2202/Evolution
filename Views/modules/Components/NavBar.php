<?php 
// ob_start();
// if(!isset($_SESSION)){
//   session_start();

// }
 ?>

<nav class="sb-topnav navbar navbar-expand navbar-light bg-yellow">
  
  <!-- Navbar Brand-->
  <a class="navbar-brand ps-3 text-white" href="inicio">Evolution</a>

  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
    <i class="fas fa-bars fa-lg text-white"></i>
  </button>

  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 w-100"> 
    <div class="input-group">
      <input class="form-control w-100 text-center me-3 ms-4" type="text" value="" readonly>
    </div>
  </form>

  <!-- Navbar-->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-user"></i>
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="login">iniciar sesión</a></li>
        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" href="salir">Salir</a></li>
      </ul>
    </li>
  </ul>
</nav>
