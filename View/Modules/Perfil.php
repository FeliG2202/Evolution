<?php 
require_once("Controller/Modules/PersonalInformationController.php");

if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} 

$PersonalInformationModel = new PersonalInformationModel();
?>

<div class="border col-lg-6 mx-auto mt-5 mb-5 p-4 bg-white rounded">
	<form>
		<h6>Información básica</h6>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Nombres</label>
				<input value="<?php echo($data['usuarios_nombres']); ?>" class="form-control" readonly>
			</div> 

			<div class="form-group col-md-6">
				<label>Apellidos</label>
				<input value="<?php echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
			</div> 
		</div> 

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>N° Identificación</label>
				<input value="<?php echo($data['usuarios_documento']); ?>" class="form-control" readonly>
			</div> 

			<div class="form-group col-md-6">
				<label>Genero</label>
				<input value="<?php echo($data['usuarios_genero']); ?>" class="form-control" readonly>
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Rol</label>
				<input class="form-control" value="Administración" readonly>
			</div> 
		</div>


		<button type="submit" class="btn btn-success btn-block">Modificar</button>
	</form>
</div>

<div class="border col-lg-6 mx-auto mt-5 mb-5 p-4 bg-white rounded">
	<form>
		<h6>Cambiar tu contraseña</h6>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Crontraseña Actual</label>
				<input class="form-control" type="password">
			</div>

			<div class="form-group col-md-6">
				<label>Nueva Contraseña</label>
				<input class="form-control" type="password">
			</div> 

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block">Modificar</button>
			</div>
		</div>
	</form>
</div>
