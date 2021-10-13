<?php 
$menuControlador = new MenuControlador();
$request = $menuControlador->eliminarMenuControlador();
$datosMenu = $menuControlador->consultarMenuControlador();

if (isset($request)) { ?>
	<script type="text/javascript">window.location.href = "<?php echo(!$request[0] ? $request[1] : $request[1]); ?>";</script>
<?php } ?>


<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">

	<table class="table table-hover table-sm">
		<h3 class="text-center">Consultar Menu Principal</h3>
		<hr>

		<div class="row mt-4">
			<form action="" method="post" class="form">
				<div class="input-group mb-3">
					<input type="text" name="datoBusqueda" class="form-control" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit" name="btnBuscarMenu">Buscar</button>
					</div>
				</div>
			</form>
		</div>
		<br>
		<?php  if (isset($_GET['action'])) {
			if ($_GET['action'] == 'ok14') {
				print '<div class="alert alert-success" role="alert">
				Menu Eliminado Correctamente
				</div>';
			} elseif ($_GET['action'] == 'fa14') {
				print '<div class="alert alert-danger" role="alert">
				Ocurrio un error, Intentelo de nuevo
				</div>';
			}
		} ?>

		<form method="POST" class="needs-validation" novalidate>
			<table class="table">
				<thead>
					<tr class="text-center">
						<th scope="col">Nombre del Perfi</th>
						<th scope="col">Estado del Perfil</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php 
					foreach ($datosMenu as $keyRol => $valueRol) {
						if ($valueRol['menuEstado'] == 'true') {
							$estadoMenu = "Activo";
						}
						else{
							$estadoMenu = "Inactivo";
						}
						print '<tr>';
						print '<td>'.$valueRol['menuNombre'].'</td>';
						print '<td>'.$estadoMenu.'</td>';
						print '<td><a href="index.php?action=frmEditMenu&id='.$valueRol['idMenu'].'"><i class="fad fa-file-edit fa-lg text-success"></i></a></td>';
						print '<td><a href="index.php?action=frmDelMenu&id='.$valueRol['idMenu'].'"><i class="fad fa-file-times fa-lg text-danger"></i></a></td>';
						print "</tr>";
					}
					?>
				</tbody>
			</table>
		</form>
	</div>