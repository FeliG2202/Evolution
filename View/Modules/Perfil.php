<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>

<div class="border col-lg-6 mx-auto mt-5 mb-5 p-4 bg-white rounded">
	<form>
		<h6>Información básica</h6>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Nombres</label>
				<input class="form-control" value="Felipe">
			</div> 

			<div class="form-group col-md-6">
				<label>Apellidos</label>
				<input class="form-control" value="Gavilan">
			</div> 
		</div> 

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Celular</label>
				<input class="form-control" value="3156078058">
			</div> 

			<div class="form-group col-md-6">
				<label>N° Identificación</label>
				<input class="form-control" value="1005958885">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Genero</label>
				<select id="inputState" class="form-control">
					<option>Fememnino</option>
					<option>Masculino</option>
					<option>Otros</option>
				</select>
			</div> 

			<div class="form-group col-md-6">
				<label>Rol</label>
				<input class="form-control" value="Administración" readonly>
			</div> 

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block">Modificar</button>
			</div>
		</div>
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
