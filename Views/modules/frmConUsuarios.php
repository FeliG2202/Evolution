<?php 
$usuarioControlador = new UsuarioControlador();
$datosusuario = $usuarioControlador->consultarUsuarioControlador();
$request = $usuarioControlador->consultarUsuarioControlador();

if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>

<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">

	<table class="table table-hover table-sm">
		<h3 class="text-center">Consultar Usuarios</h3>
		<hr>

		<div class="row mt-4">
			<form action="" method="post" class="form">
				<div class="col-10">
					<input type="text" name="datoBusqueda" class="form-control">
				</div>
				<div class="col-2">
					<input type="submit" name="btnBuscarusuario" value="Buscar" class=" btn btn-outline-success form-control">
				</div>
			</form>
		</div>
		<br>
		<?php
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok4') {
				print '<div class="alert alert-success" role="alert">
				Usuario Actualizado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa4') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		}

		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok5') {
				print '<div class="alert alert-success" role="alert">
				Usuario Eliminado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa5') {
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
						<th scope="col">Nombre de usuario</th>
						<th scope="col">Estado de la usuario</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php 
					foreach ($datosusuario as $keyusuario => $valueusuario) {
						print '<tr>';
						print '<td>'.$valueusuario['usuarioLogin'].'</td>';
						print '<td>'.$valueusuario['usuarioEstado'].'</td>';

						print '<td><a href="index.php?action=frmEditUsuario&id='.$valueusuario['idUsuario'].'"><i class="fad fa-file-edit fa-lg text-success"></i></a></td>';
						print '<td><a href="index.php?action=frmDeleteusuario&id='.$valueusuario['idUsuario'].'"><i class="fad fa-file-times fa-lg text-danger"></i></a></td>';
						print "</tr>";
					}
					?>	
				</tbody>
			</table>
		</form>
	</div>
