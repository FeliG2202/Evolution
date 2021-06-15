<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>
<?php require_once("Controller/Modules/CuestionarioInsomioController.php") ?>
<?php $cuestionarioInsomioController = new CuestionarioInsomioController(); ?>


<?php $validate = $cuestionarioInsomioController->readValidateInsomio(); ?>
<?php if (!$validate) { ?>
	<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">
		<form method="POST" class="needs-validation" novalidate>
			<table class="table table-hover table-sm">
				<h3 class="text-center">Cuestionario Insomio</h3><br>

				<?php
				$request = $cuestionarioInsomioController->CuestionarioInsomio();
				if ($request != null) {
					if ($request[0]) {
						echo('<script type="text/javascript">window.location.href="' . ($request[1]) . '";</script>');
					} elseif (!$request[0]) {
						echo('<div class="alert alert-danger mt-3 mb-3" role="alert">' . ($request[1]) . '</div>');
					}
				} 
				?>
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Pregunta</th>
						<th scope="col">Respuesta</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td class="w-75">Inducción del dormir (tiempo que le toma quedarse dormido una vez acostado).</td>
						<td class="w-25">
							<select id="inputState" name="pregunta1" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>Ningún problema</option>
								<option>Ligeramente retrasado</option>
								<option>Marcadamente retrasado</option>
								<option>Muy retrasado o no durmió en absoluto</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Despertares durante la noche.</td>
						<td>
							<select id="inputState" name="pregunta2" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>Ningún problema</option>
								<option>Problema menor</option>
								<option>Problema considerable</option>
								<option>Muy retrasado o no durmió en absoluto</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Despertar final más temprano de lo deseado.</td>
						<td>
							<select id="inputState" name="pregunta3" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>No más temprano</option>
								<option>Un poco más temprano</option>
								<option>Marcadamente más temprano</option>
								<option>Mucho más temprano o no durmió en lo absoluto</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">4</th>
						<td>Duración total del dormir.</td>
						<td>
							<select id="inputState" name="pregunta4" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>Suficiente</option>
								<option>Ligeramente insuficiente</option>
								<option>Marcadamente insuficiente</option>
								<option>Muy insuficiente o no durmió en lo absoluto</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">5</th>
						<td>Calidad general del dormir (no importa cuánto tiempo durmió usted).</td>
						<td>
							<select id="inputState" name="pregunta5" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>Satisfactoria</option>
								<option>Ligeramente insatisfactoria</option>
								<option>Marcadamente insatisfactoria</option>
								<option>Muy insatisfactoria o no durmió en lo absoluto</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">6</th>
						<td>Sensación de bienestar durante el día.</td>
						<td>
							<select id="inputState" name="pregunta6" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>Normal</option>
								<option>Ligeramente disminuida</option>
								<option>Marcadamente disminuida</option>
								<option>Muy disminuida</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">7</th>
						<td>Funcionamiento (físico y mental) durante el día.</td>
						<td>
							<select id="inputState" name="pregunta7" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>Normal</option>
								<option>Ligeramente disminuida</option>
								<option>Marcadamente disminuida</option>
								<option>Muy disminuida</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">8</th>
						<td>Somnolencia durante el día.</td>
						<td>
							<select id="inputState" name="pregunta8" class="custom-select" required>
								<option value="" selected>Seleccione</option>
								<option>Ninguna</option>
								<option>Leve</option>
								<option>Considerable</option>
								<option>Intensa</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>
				</tbody>
			</table>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block">Registar</button>
			</div>            
		</form>
	</div>
<?php } else { ?>
	<div class="col-lg-10 mx-auto mt-5 mb-5 bg-white p-4 shadow-sm rounded">
		<form>
			<h3 class="text-center mt-3">Cuestionario Insomio</h3>

			<div class="input-group mb-3 mt-4">
				<select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
					<option selected>Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>

				<div class="input-group-append">
					<button class="btn btn-secondary" type="button">Button</button>
				</div>
			</div>

			<table class="table table-hover table-sm">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Pregunta</th>
						<th scope="col">Respuesta</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td class="w-75">Inducción del dormir (tiempo que le toma quedarse dormido una vez acostado).</td>
						<td class="w-25">
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Despertares durante la noche.</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Despertar final más temprano de lo deseado.</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
						</tr>

						<tr>
							<th scope="row">4</th>
							<td>Duración total del dormir.</td>
							<td>
								<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
							</td>
						</tr>

						<tr>
							<th scope="row">5</th>
							<td>Calidad general del dormir (no importa cuánto tiempo durmió usted).</td>
							<td>
								<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
							</td>
						</tr>

						<tr>
							<th scope="row">6</th>
							<td>Sensación de bienestar durante el día.</td>
							<td>
								<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
							</td>
						</tr>

						<tr>
							<th scope="row">7</th>
							<td>Funcionamiento (físico y mental) durante el día.</td>
							<td>
								<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
							</td>
						</tr>

						<tr>
							<th scope="row">8</th>
							<td>Somnolencia durante el día.</td>
							<td>
								<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly> 
							</td>
						</tr>
					</tbody>
				</table>

				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block">Registar</button>
				</div>           
			</form>
		</div>

	<?php } ?>
