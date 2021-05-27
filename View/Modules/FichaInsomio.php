<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>

<div class="col-lg-10 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
	<div class="w-100 text-center">
		<img src="Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
		<h4 class="p-3">Cuestionario de insomio</h4>
	</div>
	<form>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>1. Inducción del dormir (tiempo que le toma quedarse dormido una vez acostado).</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Ningún problema</option>
								<option>Ligeramente retrasado</option>
								<option>Marcadamente retrasado</option>
								<option>Muy retrasado o no durmió en absoluto</option>
							</select>
						</div>
					</div>
				</div> 
			</div>


			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>2. Despertares durante la noche.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Ningún problema</option>
								<option>Problema menor</option>
								<option>Problema considerable</option>
								<option>Muy retrasado o no durmió en absoluto</option>
							</select>
						</div>
					</div> 
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>3. Despertar final más temprano de lo deseado.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>No más temprano</option>
								<option>Un poco más temprano</option>
								<option>Marcadamente más temprano</option>
								<option>Mucho más temprano o no durmió en lo absoluto</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>4. Duración total del dormir.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Suficiente</option>
								<option>Ligeramente insuficiente</option>
								<option>Marcadamente insuficiente</option>
								<option>Muy insuficiente o no durmió en lo absoluto</option>
							</select>
						</div>
					</div> 
				</div>	
			</div>	
		</div>

		<hr>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>5. Calidad general del dormir (no importa cuánto tiempo durmió usted).</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Satisfactoria</option>
								<option>Ligeramente insatisfactoria</option>
								<option>Marcadamente insatisfactoria</option>
								<option>Muy insatisfactoria o no durmió en lo absoluto</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>6. Sensación de bienestar durante el día.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Normal</option>
								<option>Ligeramente disminuida</option>
								<option>Marcadamente disminuida</option>
								<option>Muy disminuida</option>
							</select>
						</div>
					</div> 
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>7. Funcionamiento (físico y mental) durante el día.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Normal</option>
								<option>Ligeramente disminuida</option>
								<option>Marcadamente disminuida</option>
								<option>Muy disminuida</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>8. Somnolencia durante el día.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Ninguna</option>
								<option>Leve</option>
								<option>Considerable</option>
								<option>Intensa</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-group">
			<button type="submit" class="btn btn-success btn-block">Registar</button>
		</div>           
	</form>
</div>