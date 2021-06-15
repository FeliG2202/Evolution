<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>
<?php require_once("Controller/Modules/CuestionarioIpaqController.php") ?>
<?php $cuestionarioIpaqcontroller = new CuestionarioIpaqController(); ?>


<?php $validate = $cuestionarioIpaqcontroller->readValidateIpaq(); ?>
<?php if (!$validate) { ?>
	<div class="col-lg-10 mx-auto mt-5 mb-5 bg-white p-4 shadow-sm rounded">
		<form method="POST" class="needs-validation" novalidate>
			<table class="table table-hover table-sm">
				<h3 class="text-center">Cuestionario Ipaq</h3><br>

				<?php
				$request = $cuestionarioIpaqcontroller->CuestionarioIpaq();
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
						<td class="w-75">Durante los últimos 7 días, ¿Cuántos días realizó usted actividades físicas vigorosas como levantar objetos pesados, excavar, aeróbicos, o pedalear rápido en bicicleta?</td>
						<td class="w-25">
							<select id="inputState" name="pregunta1" class="custom-select" >
								<option value="" selected>Seleccione</option>
								<option value="0D">0</option>
								<option value="1D">1</option>
								<option value="2D">2</option>
								<option value="3D">3</option>
								<option value="4D">4</option>
								<option value="5D">5</option>
								<option value="6D">6</option>
								<option value="7D">7</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>¿Cuánto tiempo en total usualmente le tomó realizar actividades físicas vigorosas en uno de esos días que las realizó?</td>
						<td>
							<div class="form-row">
								<div class="form-group col-md-6">
									<input id="hours" name="pregunta2" type="number" class="form-control" placeholder="Horas"  >
								</div>
								<div class="form-group col-md-6">
									<input id="minutes" name="pregunta3" type="number" class="form-control" placeholder="Minutos" >
								</div>
								<div class="valid-feedback">la respuesta es correcta!</div>
								<div class="invalid-feedback">llenar el campo!</div>
							</div>
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Durante los últimos 7 días, ¿Cuántos días hizo usted actividades físicas moderadas tal como cargar objetos livianos, pedalear en bicicleta a paso regular, o jugar dobles de tenis? No incluya caminatas.</td>
						<td>
							<select id="inputState" name="pregunta4" class="custom-select" >
								<option value="" selected>Seleccione</option>
								<option value="0D">0</option>
								<option value="1D">1</option>
								<option value="2D">2</option>
								<option value="3D">3</option>
								<option value="4D">4</option>
								<option value="5D">5</option>
								<option value="6D">6</option>
								<option value="7D">7</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">4</th>
						<td>Usualmente, ¿Cuánto tiempo dedica usted en uno de esos días haciendo actividades físicas moderadas?</td>
						<td>
							<div class="form-row">
								<div class="form-group col-md-6">
									<input id="hours" name="pregunta5" type="number" class="form-control" placeholder="Horas" >
								</div>
								<div class="form-group col-md-6">
									<input id="minutes" name="pregunta6" type="number" class="form-control" placeholder="Minutos" >
								</div>
								<div class="valid-feedback">la respuesta es correcta!</div>
								<div class="invalid-feedback">llenar el campo!</div>
							</div>
						</td>
					</tr>

					<tr>
						<th scope="row">5</th>
						<td>Durante los últimos 7 días, ¿Cuántos días caminó usted por al menos 10 minutos continuos?</td>
						<td>
							<select id="inputState" name="pregunta7" class="custom-select" >
								<option value="" selected>Seleccione</option>
								<option value="0D">0</option>
								<option value="1D">1</option>
								<option value="2D">2</option>
								<option value="3D">3</option>
								<option value="4D">4</option>
								<option value="5D">5</option>
								<option value="6D">6</option>
								<option value="7D">7</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>

					<tr>
						<th scope="row">6</th>
						<td>Usualmente, ¿Cuánto tiempo gastó usted en uno de esos días caminando?</td>
						<td>
							<div class="form-row">
								<div class="form-group col-md-6">
									<input id="hours" name="pregunta8" type="number" class="form-control" placeholder="Horas" >
								</div>
								<div class="form-group col-md-6">
									<input id="minutes"	 name="pregunta9" type="number" class="form-control" placeholder="Minutos" >
								</div>
								<div class="valid-feedback">la respuesta es correcta!</div>
								<div class="invalid-feedback">llenar el campo!</div>
							</div>
						</td>
					</tr>

					<tr>
						<th scope="row">7</th>
						<td>Durante los últimos 7 días, ¿Cuánto tiempo permaneció sentado(a) en un día en la semana?</td>
						<td>
							<select id="inputState" name="pregunta10" class="custom-select" >
								<option value="" selected>Seleccione</option>
								<option value="0D">0</option>
								<option value="1D">1</option>
								<option value="2D">2</option>
								<option value="3D">3</option>
								<option value="4D">4</option>
								<option value="5D">5</option>
								<option value="6D">6</option>
								<option value="7D">7</option>
							</select>
							<div class="valid-feedback">la respuesta es correcta!</div>
							<div class="invalid-feedback">llenar el campo!</div>
						</td>
					</tr>
				</tbody>
			</table>

			<div class="form-group">
				<button type="submit" id="register" class="btn btn-success btn-block">Registar</button>
			</div>         
		</form>
	</div>
<?php } else { ?>
	<div class="col-lg-10 mx-auto mt-5 mb-5 bg-white p-4 shadow-sm rounded">
		<form>
			<h3 class="text-center mt-3">Cuestionario Ipaq</h3>

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
						<td class="w-75">Durante los últimos 7 días, ¿Cuántos días realizó usted actividades físicas vigorosas como levantar objetos pesados, excavar, aeróbicos, o pedalear rápido en bicicleta?</td>
						<td class="w-25">
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
						</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>¿Cuánto tiempo en total usualmente le tomó realizar actividades físicas vigorosas en uno de esos días que las realizó?</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
						</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Durante los últimos 7 días, ¿Cuántos días hizo usted actividades físicas moderadas tal como cargar objetos livianos, pedalear en bicicleta a paso regular, o jugar dobles de tenis? No incluya caminatas.</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
						</td>
					</tr>

					<tr>
						<th scope="row">4</th>
						<td>Usualmente, ¿Cuánto tiempo dedica usted en uno de esos días haciendo actividades físicas moderadas?</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
						</td>
					</tr>

					<tr>
						<th scope="row">5</th>
						<td>Durante los últimos 7 días, ¿Cuántos días caminó usted por al menos 10 minutos continuos?</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
						</td>
					</tr>

					<tr>
						<th scope="row">6</th>
						<td>Usualmente, ¿Cuánto tiempo gastó usted en uno de esos días caminando?</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
						</td>
					</tr>

					<tr>
						<th scope="row">7</th>
						<td>Durante los últimos 7 días, ¿Cuánto tiempo permaneció sentado(a) en un día en la semana?</td>
						<td>
							<input type="text" name="apellidoupdate" value="<?php //echo($data['usuarios_apellidos']); ?>" class="form-control" readonly>
						</td>
					</tr>
				</tbody>
			</table>          
		</form>
	</div>
	<?php } ?>