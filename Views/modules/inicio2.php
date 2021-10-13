<?php 
if(!isset($_SESSION['idUsuario'])){
	header('location:Login');
}

$rolUsuarioControlador = new RolUsuarioControlador();
$roles = $rolUsuarioControlador->consultarRolesUsuariosIdUsuarioControlador();
$rolUsuarioControlador->cargarInicioRolControlador();
?>

<?php 
if (!isset($_SESSION['idRol'])) {

	?>
	<div class="row">
		<div class="col">
			<h1>Home</h1>				
		</div>
	</div>
	<div class="row">
		<div class="col">
			<?php 
			print "<h3>Bienvenido Usuario: ".ucfirst($_SESSION['nombreUsuario']).", al Sistema de Informacion Evolution </h3>";
			?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="col-lg-5 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
				<div class="w-100 text-center">
					<img src="Views/assets/img/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
				</div>

				<form method="POST">
					<div class="form-group mb-3">
						<label>Seleccione el Perfil de Usuario</label>
						<select name="idRol" id="idRol" class="form-control">
							<option value="0">Seleccione un Perfil</option>
							<?php 

							foreach ($roles as $key => $value) {
								print '<option value="'.$value['idRol'].'">'.$value['rolNombre'].'</option>';
							}

							?>
						</select>
					</div>

					<button type="submit" name="regPerfil" class="btn btn-success">Continuar</button>

				</form>
			</div>
		</div>
	</div>
	<?php 
}
else{

	?>
	<div class="row">
		<div class="col">
			<div class="col-lg-5 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
				<div class="w-100 text-center">
					<img src="View/Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
				</div>
				<hr>
				<div class="w-100 text-center">
					<?php 
					print "<h3>Bienvenido Usuario: ".ucfirst($_SESSION['nombreUsuario']).", al Sistema de Informacion Evolution </h3>";
					print "<p>Ahora Puede Seleccionar Una Opcion del Menu Principal</p>";
					?>
				</div>
			</div>
		</div>
	</div>
	<?php 
}

?>
