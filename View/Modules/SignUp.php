<?php require_once("Controller/LoginController.php") ?>
<?php $controller = new LoginController(); ?>

<div class="col-lg-7 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
	<div class="w-100 text-center">
		<img src="View/Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
	</div>
	<form method="POST">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Nombre</label>
				<input type="text" name="nombresession" class="form-control" placeholder="">
			</div> 

			<div class="form-group col-md-6">
				<label>Apellido</label>
				<input type="text" name="apellidosession" class="form-control" placeholder="">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Documento de identidad</label>
				<input type="number" name="documentosession" class="form-control" placeholder="">
			</div> 

			<div class="form-group col-md-6">
				<label>Fecha de nacimiento</label>
				<input type="date" name="fechanacimientosession" class="form-control" placeholder="">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Genero</label>
				<select id="inputState" name="generosession" class="form-control">
					<option>Masculino</option>
					<option>Fememnino</option>
					<option>Otros</option>
				</select>
			</div>

			<div class="form-group col-md-6">
				<label>Tipo de sangre</label>
				<select id="inputState" name="sangresession" class="form-control">
					<option>O+</option>
					<option>O-</option>
					<option>B+</option>
					<option>B-</option>
					<option>A+</option>
					<option>A-</option>
					<option>AB+</option>
					<option>AB-</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Altura (Cm)</label>
				<input type="number" name="alturasession" class="form-control" placeholder="">
			</div> 

			<div class="form-group col-md-6">
				<label>Peso (Kg)</label>
				<input type="number" name="pesosession" class="form-control" placeholder="">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Contraseña</label>
				<input name="contrasenasession" class="form-control" type="password">
			</div> 

			<div class="form-group col-md-6">
				<label>Correo</label>
				<input type="email" name="correosession" class="form-control" placeholder="">
			</div> 
		</div>

		<div class="form-group">
			<textarea name="problemasession" class="form-control" rows="3" placeholder="¿Tiene algun tipo de dificultad que le impida hacer ejercicio o algun tipo de deporte?"></textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success btn-block">Registrarme</button>
		</div>

		<div class="form-group"> 
			<label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label">Estoy de acuerdo con <a href="#">términos y condiciones</a>  </div> </label>
		</div>  

		<div class="mt-3">
			<?php
			$request = $controller->createUser();
			if ($request != null) {
				if ($request[0]) {
					echo('<script type="text/javascript">window.location.href="' . ($request[1]) . '";</script>');
				} elseif (!$request[0]) {
					echo($request[1]);
				}
			} 
			?>
		</div>         
	</form>

</div>
