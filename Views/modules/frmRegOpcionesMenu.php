<?php 
$opcionMenuControlador = new OpcionesMenuControlador();
$datosMenu = $opcionMenuControlador->menuControlador->consultarMenuControlador();
$request = $opcionMenuControlador->registrarOpcionMenuControlador();

if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>



<div class="row">
	<div class="col-lg-6 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Registrar Opciones Menu</h2>
		<hr>
		<?php 
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok15') {
				print '<div class="alert alert-success" role="alert">
				Opcion de Menu Registrada Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa15') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}
		?>
		<form class="form" method="post">

			<div class="row mb-3">
				<label>Menu Principal</label>
				<select name="idMenu" id="" class="form-control">
					<option value="0">Seleccione un Menu</option>
					<?php 
					foreach ($datosMenu as $keyMenu => $valueMenu) {
						print '<option value="'.$valueMenu['idMenu'].'">'.$valueMenu['menuNombre'].'</option>';
					}
					?>

				</select>
			</div>

			<div class="row mb-3">
				<label for="" class="form-label">Nombre Opcion Menu</label>
				<input type="text" name="opcionMenuNombre" placeholder="Nombre Opcion Menu" class="form-control">
			</div>
			
			<div class="row mb-3">
				<label for="" class="form-label">Enlace</label>
				<input type="text" name="opcionMenuEnlace" placeholder="Enlace Menu" class="form-control">
			</div>
			<br>
			
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="regOpcionMenu" class="btn btn-success">Registrar Menu</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConMenus">Consultar Menus</a>
			</div>
		</form>
	</div>
</div>

