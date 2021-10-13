<?php 
$usuarioControlador = new UsuarioControlador();
$request = $usuarioControlador->validateSession();
if (isset($request)) { ?>
  <script type="text/javascript">window.location.href="<?php echo($request); ?>";</script>
<?php }
?>

<!-- FORMULARIO PARA INGRESAR EL LOGIN -->
<div class="col-lg-5 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
  <div class="w-100 text-center">
    <img src="Views/assets/img/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
  </div>
  <form method="POST">
    <div class="form-group mb-3">
      <label>Nombre de Usuario</label>
      <input type="text" name="login" placeholder="Ingrese su Usuario" class="form-control">
    </div>

    <div class="form-group mb-3">
      <label>Contraseña</label>
      <input type="password" name="password" placeholder="Ingrese su Contraseña" class="form-control">
    </div>

    <button type="submit" name="regLogin" class="btn btn-success">Ingresar</button>
  </form>
</div>