<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>

<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">
	<form method="POST" class="needs-validation" novalidate>
		<table class="table table-hover table-sm">
			<h3 class="text-center">Cuestionario Insomio</h3><br>
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
						<select id="inputState" class="custom-select" required>
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
						<select id="inputState" class="custom-select" required>
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
						<select id="inputState" class="custom-select" required>
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
						<select id="inputState" class="custom-select" required>
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
						<select id="inputState" class="custom-select" required>
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
						<select id="inputState" class="custom-select" required>
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
						<select id="inputState" class="custom-select" required>
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
						<select id="inputState" class="custom-select" required>
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
