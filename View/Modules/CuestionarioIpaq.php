<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>
<?php require_once("Controller/Modules/CuestionarioIpaqController.php") ?>
<?php $cuestionarioIpaqcontroller = new CuestionarioIpaqController(); ?>


<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">
	<form method="POST" class="needs-validation" novalidate>
		<table class="table table-hover table-sm">
			<h3 class="text-center">Cuestionario Ipaq</h3><br>
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
						<select id="inputState" name="pregunta1" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
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
								<input id="inputState" name="pregunta" type="number" class="form-control" placeholder="Horas" required>
							</div>
							<div class="form-group col-md-6">
								<input id="inputState" name="pregunta" type="number" class="form-control" placeholder="Minutos" required>
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
						<select id="inputState" name="pregunta3" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
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
								<input id="inputState" name="pregunta" type="number" class="form-control" placeholder="Horas" required>
							</div>
							<div class="form-group col-md-6">
								<input id="inputState" name="pregunta" type="number" class="form-control" placeholder="Minutos" required>
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
						<select id="inputState" name="pregunta4" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
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
								<input id="inputState" name="pregunta" type="number" class="form-control" placeholder="Horas" required>
							</div>
							<div class="form-group col-md-6">
								<input id="inputState" name="pregunta" type="number" class="form-control" placeholder="Minutos" required>
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
						<select id="inputState" name="pregunta5" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
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

		<div class="mt-3">
			<?php
			$request = $cuestionarioIpaqcontroller->CuestionarioIpaq();
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
