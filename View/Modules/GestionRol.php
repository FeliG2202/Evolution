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
					<td><a href='index.php?action=GestionRol&del=" . ($data['hospitales_code']) . "'>Eliminar</a></td>
					<td><a href='index.php?action=EditarGestionRol&id=" . ($data['hospitales_code']) . "'>Editar</a></td>
					</tr>");
			} 
			?>
		</tbody>
		<tfoot>
			<th>Id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Email</th>
			<th>Rol</th>
		</tfoot>
	</table>
</div>