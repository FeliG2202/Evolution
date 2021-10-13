<?php 
$personaControlador = new PersonaControlador();
$datosPersona = $personaControlador->consultarPersonaControlador();
?>

<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">

	<table class="table table-hover table-sm">
		<h3 class="text-center">Consultar Personas</h3>
		<hr>

		<div class="row mt-4">
			<form action="" method="post" class="form">
				<div class="col-10">
					<input type="text" name="datoBusqueda" class="form-control">
				</div>
				<div class="col-2">
					<input type="submit" name="btnBuscarPersona" value="Buscar" class=" btn btn-outline-success form-control">
				</div>
			</form>
		</div>
		<br>
		<?php
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok8') {
				print '<div class="alert alert-success" role="alert">
				Perfil Actualizado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa8') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}

		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok9') {
				print '<div class="alert alert-success" role="alert">
				Perfil Eliminado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa9') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}
		?>

		<form method="POST" class="needs-validation" novalidate>
			<table class="table">
				<thead>
					<tr class="text-center">
						<th scope="col">Nombre de la Persona</th>
						<th scope="col">Apellidos de la Persona</th>
						<th scope="col">Genero</th>
						<th scope="col">Documento</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php 
					foreach ($datosPersona as $keyPersona => $valuePersona) {
						print '<tr>';
						print '<td>'.$valuePersona['personaNombres'].'</td>';
						print '<td>'.$valuePersona['personaApellidos'].'</td>';
						print '<td>'.$valuePersona['personaGenero'].'</td>';
						print '<td>'.$valuePersona['personaDocumento'].'</td>';

						print '<td><a href="index.php?action=frmEditPersona&id='.$valuePersona['idPersona'].'"><i class="fad fa-file-edit fa-lg text-success"></i></a></td>';
						print '<td><a href="index.php?action=frmDelPersona&id='.$valuePersona['idPersona'].'"><i class="fad fa-file-times fa-lg text-danger"></i></a></td>';
						print "</tr>";
					}
					?>
				</tbody>
			</table>
		</form>
	</div>

