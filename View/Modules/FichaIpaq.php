<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>

<div class="col-lg-10 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
	<div class="w-100 text-center">
		<img src="View/Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
		<h4 class="p-3">Cuestionario IPAQ</h4>
	</div>
	<form>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>1. Durante los últimos 7 días, ¿Cuántos días realizó usted actividades físicas vigorosas como levantar objetos pesados, excavar, aeróbicos, o pedalear rápido en bicicleta?</label>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label>Dias por semana:</label>
							</div>

							<div class="form-group col-md-8">
								<select id="inputState" class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select>
							</div>
						</div>
					</div> 
				</div>
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>2. ¿Cuánto tiempo en total usualmente le tomó realizar actividades físicas vigorosas en uno de esos días que las realizó?</label>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label>Horas por dia:</label>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="number" class="form-control" placeholder="Horas">
							</div>

							<div class="form-group col-md-4">
								<input type="number" class="form-control" placeholder="Minutos">
							</div>
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
						<label>3. Durante los últimos 7 días, ¿Cuántos días hizo usted actividades físicas moderadas tal como cargar objetos livianos, pedalear en bicicleta a paso regular, o jugar dobles de tenis? No incluya caminatas.</label>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label>Dias por semana:</label>
							</div>

							<div class="form-group col-md-8">
								<select id="inputState" class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select>
							</div>
						</div>
					</div> 
				</div>
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>4. Usualmente, ¿Cuánto tiempo dedica usted en uno de esos días haciendo actividades físicas moderadas?</label>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label>Horas por dia:</label>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="number" class="form-control" placeholder="Horas">
							</div>

							<div class="form-group col-md-4">
								<input type="number" class="form-control" placeholder="Minutos">
							</div>
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
						<label>5. Durante los últimos 7 días, ¿Cuántos días caminó usted por al menos 10 minutos continuos?</label>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label>Dias por semana:</label>
							</div>

							<div class="form-group col-md-8">
								<select id="inputState" class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select>
							</div>
						</div>
					</div> 
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>6. Usualmente, ¿Cuánto tiempo gastó usted en uno de esos días caminando?</label>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label>Horas por dia:</label>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="number" class="form-control" placeholder="Horas">
							</div>

							<div class="form-group col-md-4">
								<input type="number" class="form-control" placeholder="Minutos">
							</div>
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
						<label>7. Durante los últimos 7 días, ¿Cuánto tiempo permaneció sentado(a) en un día en la semana? </label>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label>Dias por semana:</label>
							</div>

							<div class="form-group col-md-8">
								<select id="inputState" class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select>
							</div>
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