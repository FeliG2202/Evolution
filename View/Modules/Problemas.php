<?php 
require_once("Controller/Modules/ProblemasController.php");

if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} 

$problemasController = new ProblemasController();
?>

<h1 class="text-center">Problemas de los usuarios</h1>

<div class="table-responsive-lg">
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Mensaje</th>
		</thead>
		<tbody>
			<?php foreach ($problemasController->readProblemas() as $key => $data) {
				echo("<tr>
					<td>" . ($data['idproblemas_usuarios']) . "</td>
					<td>" . ($data['problemas_usuarios_nombre']) . "</td>
					<td>" . ($data['problemas_usuarios_email']) . "</td>
					<td>" . ($data['problemas_usuarios_mensaje']) . "</td>".
					"</tr>");
				} ?>
			</tbody>
			<tfoot>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Mensaje</th>
			</tfoot>
		</table>
	</div>