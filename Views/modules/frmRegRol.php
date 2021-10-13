<?php 

$rolControlador = new RolControlador();
$request = $rolControlador->registrarRolControlador();

if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>

<div class="row">
	<div class="col-lg-4 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Registrar Perfil</h2>
		<hr>
		<?php 
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok7') {
				print '<div class="alert alert-success" role="alert">
				Perfiles Registrados Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa7') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}
		?>
		<form class="form" method="post">
			<label for="" class="form-label">Nombre del perfil</label>
			<input type="text" name="nombrePerfil" class="form-control">
			<br>
			
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="regRol" class="btn btn-success">Registrar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConOpcionesMenu.php">Consultar Perfil</a>
			</div>
		</form>
	</div>
</div>
