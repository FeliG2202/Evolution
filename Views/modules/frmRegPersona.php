<?php 

$personaControlador = new PersonaControlador();
$request = $personaControlador->registrarPersonaControlador();

if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>

<div class="row">
	<div class="col-lg-4 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Registrar personas</h2>
		<hr>
		<?php 
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok1') {
				print '<div class="alert alert-success" role="alert">
				Personas Registrada Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa1') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}
		?>
		<form class="form " method="post" novalidate>
			<label for="validationCustom01" class="form-label">Nombre de la persona</label>
			<input type="text" name="nombre" id="validationCustom01" class="form-control" required>

			<label for="" class="form-label">Apellido de la persona</label>
			<input type="text" name="apellido" class="form-control">

			<label for="" class="form-label">Documento</label>
			<input type="number" name="documento" class="form-control">
			<br>

			<div class="fw-bolder text-start">
				Genero
			</div>
			<div class="form-check">
				<input type="radio" class="form-check-input" name="genero" value="Femenino" >
				<label for="" class="form-label">Femenino</label>
			</div>
			<div class="form-check">
				<input type="radio" class="form-check-input" name="genero" value="Masculino" >
				<label for="" class="form-label">Masculino</label>
			</div>
			
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="regPersona" class="btn btn-success">Registrar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConPersona">Consultar persona</a>
			</div>
		</form>
	</div>
</div>
