<?php 
	$usuarioRolControlador = new RolusuarioControlador();
	$datosUsuario = $usuarioRolControlador->usuarioControlador->consultarUsuarioControlador();
?>

<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">

	<table class="table table-hover table-sm">
		<h3 class="text-center">Consultar Perfiles de Usuarios</h3>
		<hr>

		<div class="row mt-4">
			<form action="" method="post" class="form">
				<div class="col-10">
					<input type="text" name="datoBusqueda" class="form-control">
				</div>
				<div class="col-2">
					<input type="submit" name="btnBuscar" value="Buscar" class=" btn btn-outline-success form-control">
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
						<th scope="col">Nombre del Usuario</th>
						<th scope="col">Estado del Usuario</th>
						<th colspan="">Opciones</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php 
					foreach ($datosUsuario as $keyUsuario => $valueUsuario) {
						$datosRolUsuario = $usuarioRolControlador->consultarRolesUsuarioIdUsuarioControlador($valueUsuario['idUsuario']);
						print '<tr>';
						print '<td>'.$valueUsuario['usuarioLogin'].'</td>';
						print '<td>'.$valueUsuario['usuarioEstado'].'</td>';
						print '<td><a href=index.php?action=frmEditRolUsuario&id='.$valueUsuario['idUsuario'].'><i class="fad fa-file-edit fa-lg text-success"></i></</td>';
						print '</tr>';
					}
					?>
				</tbody>
			</table>
		</form>
	</div>