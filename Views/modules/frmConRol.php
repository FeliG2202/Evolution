<?php 
$rolControlador = new RolControlador();
$datosRoles = $rolControlador->consultarRolControlador();
?>

<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">
	<h3 class="text-center">Consultar Menu Principal</h3>

	<hr>

	<div class="row mt-4">
		<form method="POST" class="form">
			<div class="input-group mb-3">
				<input type="text" name="datoBusqueda" class="form-control" autocomplete="off">
				<button type="submit" name="btnBuscarRol" class="btn btn-outline-success">Buscar</button>
			</div>
		</form>
	</div>

	<?php if (isset($_GET['action'])) {
		if ($_GET['action'] == 'ok8') {
			print '<div class="alert alert-success" role="alert">
			Perfil Actualizado Correctamente
			</div>';
		} elseif ($_GET['action'] == 'fa8') {
			print '<div class="alert alert-danger" role="alert">
			Ocurrio un error, Intentelo de nuevo
			</div>';
		}
	} ?>

	<?php if (isset($_GET['action'])) {
		if ($_GET['action'] == 'ok9') {
			print '<div class="alert alert-success" role="alert">
			Perfil Eliminado Correctamente
			</div>';
		} elseif ($_GET['action'] == 'fa9') {
			print '<div class="alert alert-danger" role="alert">
			Ocurrio un error, Intentelo de nuevo
			</div>';
		}
	} ?>

	<div class="table-responsive">
		<table class="table table-sm text-center align-middle">
			<thead>
				<tr>
					<th scope="col">Nombre del Perfi</th>
					<th scope="col">Estado del Perfil</th>
					<th colspan="2">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($datosRoles as $keyRol => $valueRol) {
					print '<tr>';
					print '<td>'.$valueRol['rolNombre'].'</td>';
					print '<td><a href="index.php?action=frmEditRol&id='.$valueRol['idRol'].'">Editar</a></td>';
					print '<td><a href="index.php?action=frmDelRol&id='.$valueRol['idRol'].'">Eliminar</a></td>';
					print "</tr>";
				} ?>
			</tbody>
		</table>
	</div>
</div>
