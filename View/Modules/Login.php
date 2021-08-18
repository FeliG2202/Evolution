<?php 

$usuario = new UsuarioControlador();
$usuario->loginUsuarioControlador();

?>

<!-- FORMULARIO PARA INGRESAR EL LOGIN -->
<div class="col-lg-5 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
  <div class="w-100 text-center">
    <img src="View/Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
  </div>
  <form method="POST">
    <div class="form-group">
      <label>Correo</label>
      <input type="text" name="login" placeholder="Ingrese su Correo" class="form-control">
    </div>

    <div class="form-group">
      <label>Contraseña</label>
      <input type="password" name="clave" placeholder="Ingrese su Contraseña" class="form-control">
    </div>

    <button type="submit" name="regLogin" class="btn btn-success">Ingresar</button>

    <div class="mt-3">
      <?php 
      ?>
    </div>
  </form>
</div>

