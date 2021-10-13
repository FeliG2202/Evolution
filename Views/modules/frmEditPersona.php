<?php 

$personaControlador = new PersonaControlador();
$personaControlador->actualizarPersonaControlador();
$datosPersona = $personaControlador->consultarPersonaIdControlador();

$estadoMasculino = '';
$estadoFemenino = '';

if ($datosPersona[0]['personaGenero'] == 'Masculino') {
	$estadoMasculino = "checked";
}
else{
	$estadoFemenino = "checked";
}

?>

<div class="row">
	<div class="col-lg-6 mx-auto mt-5 mb-5 p-4 shadow-sm rounded">
		<h2 class="text-center">Nombres de la Persona</h2>
		<hr>
		<form class="form" method="post">
			<label for="" class="form-label">Nombres de la Persona</label>
			<input type="text" name="nombre"  value="<?php print $datosPersona[0]['personaNombres'] ?>"  class="form-control">

			<label for="" class="form-label">Apellidos de la Persona</label>
			<input type="text" name="apellido"  value="<?php print $datosPersona[0]['personaApellidos'] ?>"  class="form-control">

			<label for="" class="form-label">Documento de Identidad</label>
			<input type="number" name="documento"  value="<?php print $datosPersona[0]['personaDocumento'] ?>"  class="form-control">
			<br>

			<div class="form-check">
				<label class="form-check-label" for="menuEstado1">Genero</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="genero"  value="Femenino" <?php print $estadoFemenino ?>>
				<label class="form-check-label" for="menuEstado1">Femenino</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="genero" value="Masculino" <?php print $estadoMasculino ?>>
				<label class="form-check-label" for="menuEstado2">Masculino</label>
			</div>


			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" name="updPersona" class="btn btn-success">Actualizar</button>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
				<a href="frmConPersona">Consultar Personas</a>
			</div>
		</form>
	</div>
</div>

