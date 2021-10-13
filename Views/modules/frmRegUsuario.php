<?php 
$usuarioControlador = new UsuarioControlador();
$registrarUsuario = $usuarioControlador->registrarUsuarioControlador();
$request = $usuarioControlador->registrarUsuarioControlador();

$listarPersonasControlador = new PersonaControlador();
$listarPersona = $listarPersonasControlador->listarPersonasControlador();
	
if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>
<div class="row">
	<div class="col-lg-4 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Registrar Usuarios</h2>
		<hr>
		<?php 
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok5') {
				print '<div class="alert alert-success" role="alert">
				Usuario Registrado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa5') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}
		?>
		<form class="form" method="post">
			<label for="" class="form-label">Nombre Usuario</label>
			<input type="text" class="form-control" name="usuario" placeholder="Nombre Usuario">
			<label for="" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Contraseña">
			<label>Persona</label>
			<select name="idPersonas" class="form-control">
				<option value="">Persona</option>
				<?php 
				foreach ($listarPersona as $key => $value) {
					print '
					<option value="'.$value['idPersona'].'">'.$value['personaNombres'].' '.$value['personaDocumento'].'</option>';
				}
				?>
			</select>
			<br>

			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="regUsuario" class="btn btn-success">Registrar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConUsuarios">Consultar Usuarios</a>
			</div>
		</form>
	</div>
</div>



