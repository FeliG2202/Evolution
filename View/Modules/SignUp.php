<?php require_once("Controller/Modules/SingUpController.php") ?>
<?php $controller = new SingUpController(); ?>

<div class="col-lg-7 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
	<div class="w-100 text-center">
		<img src="View/Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
	</div>
	<form method="POST" class="needs-validation" novalidate>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Nombre</label>
				<input type="text" name="nombresession" id="inputState" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 

			<div class="form-group col-md-6">
				<label>Apellido</label>
				<input type="text" name="apellidosession" id="inputState" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Documento de identidad</label>
				<input type="number" name="documentosession" id="inputState" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 

			<div class="form-group col-md-6">
				<label>Fecha de nacimiento</label>
				<input type="date" name="fechanacimientosession" id="inputState" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Genero</label>
				<select  name="generosession" id="inputState" required class="form-control">
					<option value="" selected>Seleccione</option>
					<option>Masculino</option>
					<option>Fememnino</option>
					<option>Otro</option>
				</select>
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div>

			<div class="form-group col-md-6">
				<label>Tipo de sangre</label>
				<select name="sangresession" id="inputState" required class="form-control">
					<option value="" selected>Seleccione</option>
					<option>O+</option>
					<option>O-</option>
					<option>B+</option>
					<option>B-</option>
					<option>A+</option>
					<option>A-</option>
					<option>AB+</option>
					<option>AB-</option>
				</select>
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Altura (Cm)</label>
				<input type="number" name="alturasession" id="inputState" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 

			<div class="form-group col-md-6">
				<label>Peso (Kg)</label>
				<input type="number" name="pesosession" id="inputState" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Correo</label>
				<input type="email" name="correosession" id="inputState" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 
			
			<div class="form-group col-md-6">
				<label>Contraseña</label>
				<input name="contrasenasession" id="inputState" required class="form-control" type="password">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 
		</div>

		<div class="form-group">
			<textarea name="problemasession" id="inputState" required class="form-control" rows="3" placeholder="¿Tiene algun tipo de dificultad que le impida hacer ejercicio o algun tipo de deporte?"></textarea>
			<div class="valid-feedback">la respuesta es correcta!</div>
			<div class="invalid-feedback">llenar el campo!</div>
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
