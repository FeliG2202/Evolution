<?php 

$usuarioControlador = new usuarioControlador();
$usuarioControlador->actualizarUsuarioControlador();
$datosUsuario = $usuarioControlador->consultarUsuarioIdControlador();
$estadoActivo = '';
$estadoInactivo = '';

if ($datosUsuario[0]['usuarioEstado'] == 'Activo') {
	$estadoActivo = "checked";
}
else{
	$estadoInactivo = "checked";
}

?>

<div class="row">
	<div class="col-lg-6 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Editar personas</h2>
		<hr>
		<form class="form" method="post">
			<label for="" class="form-label">Login</label>
			<input type="text" name="login"  value="<?php print $datosUsuario[0]['usuarioLogin'] ?>"  class="form-control">

			<label for="" class="form-label">pasword</label>
			<input type="text" name="password" value="<?php print $datosUsuario[0]['usuarioPassword'] ?>" class="form-control">
			<br>

			<label for="" class="form-label">Estado</label>
			<input type="radio" name="estado" value="Inactivo" <?php print $estadoInactivo ?>>
			<label for="" class="form-label">Inactivo</label>
			<input type="radio" name="estado" value="Activo" <?php print $estadoActivo ?>>
			<label for="" class="form-label">Activo</label>
			
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="updusuario" class="btn btn-success">Actualizar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConUsuarios">Consultar persona</a>
			</div>
		</form>
	</div>
</div>

