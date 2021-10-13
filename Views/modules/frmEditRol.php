<?php 

$rolControlador = new RolControlador();
$rolControlador->actualizarRolControlador();
$datosRol = $rolControlador->consultarRolIdControlador();

?>

<div class="row">
	<div class="col-lg-6 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Editar Perfil</h2>
		<hr>
		<form class="form" method="post">
			<label for="" class="form-label">Nombres del Perfil</label>
			<input type="text" name="nombre"  value="<?php print $datosRol[0]['rolNombre'] ?>"  class="form-control">
			<br>

			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="updRol" class="btn btn-success">Actualizar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConRol">Consultar Perfiles</a>
			</div>
		</form>
	</div>
</div>
