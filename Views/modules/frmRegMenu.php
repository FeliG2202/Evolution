<?php 
$menuControlador = new MenuControlador();
$request = $menuControlador->registrarMenuControlador();

if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>

<div class="row">
	<div class="col-lg-4 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Registrar Menu Principal</h2>
		<hr>
		<?php 
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok12') {
				print '<div class="alert alert-success" role="alert">
				Menu Registrado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa12') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}
		?>
		<form class="form" method="post">
			<div class="row mb-3">
				<label for="" class="form-label">Nombre del perfil</label>
				<input type="text" name="nombreMenu" class="form-control">
			</div>
			<br>
			
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="regMenu" class="btn btn-success">Registrar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConMenu">Consultar Menu Principal</a>
			</div>
		</form>
	</div>
</div>


