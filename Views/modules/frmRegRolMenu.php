<?php 
$rolMenuControlador = new RolMenuControlador();
$datosRoles = $rolMenuControlador->rolControlador->consultarRolControlador();
$datosMenu = $rolMenuControlador->menuControlador->consultarMenuControlador();
$request = $rolMenuControlador->registrarRolMenuControlador();

if (isset($_POST['idRol'])) {
	$datosRolMenu = $rolMenuControlador->consultarRolMenuIdControlador();
}
$checked = '';
$disabled = '';

if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>

<div class="row">
	<div class="col-lg-6 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Asignar Menu Principal a Perfiles</h2>
		<hr>
		<?php 
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok14') {
				print '<div class="alert alert-success" role="alert">
				Perfil Registrado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa14') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}
		?>
		<form class="form" method="post">
			<!--ZONA DE PERFILES O ROLES -->
			<label for="" class="form-label">Nombres del Perfil</label>
			<select name="idRol" onchange="this.form.submit()" id="" class="form-select">
				<option value="">Seleccione un Perfil</option>
				<?php 
				foreach ($datosRoles as $keyRol => $valueRol) {
					if (isset($_POST['idRol']) && $valueRol['idRol'] == $_POST['idRol']) {
						print '<option value="'.$valueRol['idRol'].'" selected>'.$valueRol['rolNombre'].'</option>';
					}
					else{
						print '<option value="'.$valueRol['idRol'].'">'.$valueRol['rolNombre'].'</option>';
					}					
				}

				?>
			</select>
			<br>

			<?php 
			foreach ($datosMenu as $keyMenu => $valueMenu) {
				if (isset($datosRolMenu)) {
					foreach ($datosRolMenu as $keyRolMenu => $valueRolMenu) {

						if ($valueMenu['idMenu'] == $valueRolMenu['idMenu'] && $valueRolMenu['rolMenuEstado'] == "activo") {
							$checked = ' checked';
							$disabled = ' disabled';
							break;
						}
						else{
							$checked = '';
							$disabled = '';
						}
					}
				}

				print '<div class="form-check form-switch">';
				print '<input name="idMenu[]" class="form-check-input" value="'.$valueMenu['idMenu'].'" type="checkbox" id="flexSwitchCheckDefault'.$valueMenu['idMenu'].'">';
				print '<label class="form-check-label" for="flexSwitchCheckDefault'.$valueMenu['idMenu'].'" '.$checked.$disabled.'>'.$valueMenu['menuNombre'].'</label>';
				print '</div>';
			}

			?>
			
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="regRolMenu" class="btn btn-success">Registrar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConRolUsuario">Consultar Perfiles Por Usuario</a>
			</div>
		</form>
	</div>
</div>

