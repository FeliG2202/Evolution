<?php 

$menuControlador = new MenuControlador();
$datosMenu = $menuControlador->consultarMenuIdControlador();

$request = $menuControlador->actualizarMenuControlador();
if (isset($request)) { ?>
	<script type="text/javascript">window.location.href="<?php echo($request); ?>";</script>
<?php }

if ($datosMenu[0]['menuEstado'] == "true") {
	$checkedTrue = 'checked';
	$checkedFalse = '';
}
else{
	$checkedTrue = '';
	$checkedFalse = 'checked';
}

?>

<div class="row">
	<div class="col-lg-6 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Editar Menu Principal</h2>
		<hr>
		<?php
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok13') {
				print '<div class="alert alert-success" role="alert">
				Menu Actualizado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa13') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		} ?>
		<form class="form" method="post">
			<label for="" class="form-label">Nombres del Perfil</label>
			<input type="text" name="menuNombre"  value="<?php print $datosMenu[0]['menuNombre'] ?>"  class="form-control">
			<br>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="menuEstado" id="menuEstado1" value="true" <?php print $checkedTrue ?>>
				<label class="form-check-label" for="menuEstado1">Activo</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="menuEstado" id="menuEstado2" value="false" <?php print $checkedFalse ?>>
				<label class="form-check-label" for="menuEstado2">Inactivo</label>
			</div>


			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="updMenu" class="btn btn-success">Actualizar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConMenu">Consultar Menu Principal</a>
			</div>
		</form>
	</div>
</div>

