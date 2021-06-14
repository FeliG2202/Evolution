<?php 
require_once("Controller/Modules/GestionRolController.php");

if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} 

$gestionRolController = new GestionRolController();
?>

<h1 class="text-center">Gestion de roles</h1>

<div class="table-responsive-lg">
	<table class="table">
		<thead>
			<th>Id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Email</th>
			<th>Rol</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($gestionRolController->readUsers() as $key => $data) {
				echo("<tr>
					<td>" . ($i++) . "</td>
					<td>" . ($data['usuarios_nombres']) . "</td>
					<td>" . ($data['usuarios_apellidos']) . "</td>
					<td>" . ($data['usuarios_email']) . "</td>
					<td>" . ($data['roles_descripcion']) . "</td>
					<td><a href='index.php?action=GestionRol&del=" . ($data['usuarios_code']) . "'><i class='fad fa-trash-alt fa-lg text-danger'></i></a>
					<a>--</a>
					<a href='#' data-toggle='modal' data-target='#exampleModal'><i class='fad fa-edit fa-lg text-success'></i></a></td>
					</tr>");
			} 

			$request = $gestionRolController->deleteUsers();
			if ($request != null) {
				if ($request[0]) {
					echo('<script type="text/javascript">window.location.href="' . ($request[1]) . '";</script>');
				} elseif (!$request[0]) {
					echo($request[1]);
				}
			} 

			?>
		</tbody>
		<tfoot>
			<th>Id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Email</th>
			<th>Rol</th>
			<th>Opciones</th>
		</tfoot>
	</table>
</div>

<?php 
/*$data = $gestionRolController->readUserseCode();*/
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar Usuarios</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="nombreupdate" value="<?php echo($data['usuarios_nombres']); ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Apellido</label>
						<input type="text" name="apellidoupdate" value="<?php echo($data['usuarios_apellidos']); ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Gmail</label>
						<input type="text" name="gmailupdate" value="<?php echo($data['usuarios_email']); ?>" class="form-control">
					</div>

					<div class="form-group">
						<select class="custom-select">
							<option value="" selected>Seleccione</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</div>
</div>