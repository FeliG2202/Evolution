<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>
<?php require_once("Controller/Modules/CuestionarioFantasticoController.php") ?>
<?php $cuestionarioFantasticoController = new CuestionarioFantasticoController(); ?>

<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">
	<form method="POST" class="needs-validation" novalidate>
		<table class="table table-hover table-sm">
			<h3 class="text-center">Cuestionario Fantastico</h3><br>
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
					<td class="w-75">Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí. Tengo con quien hablar de las cosas que son importantes para mí.</td>
					<td class="w-25">
						<select id="inputState" name="pregunta1" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">2</th>
					<td>Yo doy y recibo cariño.</td>
					<td>
						<select id="inputState" name="pregunta2" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">3</th>
					<td>Soy integrante activo(a) de un grupo de apoyo a mi salud y calidad de vida (Organizaciones de autocuidado, clubes de enfermos crónicos, deportivos, religiosos, mujeres, adultos mayores, vecinales y otros). Yo participo.</td>
					<td>
						<select id="inputState" name="pregunta3" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">4</th>
					<td>Yo realizo actividad fisica (caminar, subir escaleras, trabajo de casa, jardinear) o deporte durante 30 minutos cada vez.</td>
					<td>
						<select id="inputState" name="pregunta4" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">5</th>
					<td>Deporte durante 30 minutos cada vez.</td>
					<td>
						<select id="inputState" name="pregunta5" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>3 o mas veces por semana</option>
							<option>1 vez por semana</option>
							<option>no hago nada</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">6</th>
					<td>Yo camino al menos 30 minutos diariamente</td>
					<td>
						<select id="inputState" name="pregunta6" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">7</th>
					<td>Como 2 porciones de verduras y 3 frutas</td>
					<td>
						<select id="inputState" name="pregunta7" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Todos los días</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">8</th>
					<td>A menudo consumes mucha azúcar o sál o comida chatarra o con mucha grasa.</td>
					<td>
						<select id="inputState" name="pregunta8" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Ninguna de éstas</option>
							<option>Algunas de éstas</option>
							<option>todas éstas</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">9</th>
					<td>Como 2 porciones de verduras y 3 frutas</td>
					<td>
						<select id="inputState" name="pregunta9" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Todos los días</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">10</th>
					<td>Estoy pasado(a) en mi peso ídeal en</td>
					<td>
						<select id="inputState" name="pregunta10" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>0 a 4 Kilos de más</option>
							<option>5 a 8 Kilos de más</option>
							<option>Más de 8 Kilos</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">11</th>
					<td>Yo fumo cigarrillos</td>
					<td>
						<select id="inputState" name="pregunta11" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>No, los últimos 5 años</option>
							<option>No, el último año</option>
							<option>sí, este año</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">12</th>
					<td>Generalmente fumo ___ cigarrillos por dia</td>
					<td>
						<select id="inputState" name="pregunta12" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Ninguno</option>
							<option>de 0 a 10</option>
							<option>sí, este año</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">13</th>
					<td>Mi número promedio de tragos (botella de cerveza, vaso de vino, copita de trago fuerte) por semana es de</td>
					<td>
						<select id="inputState" name="pregunta13" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>0 a 7 tragos</option>
							<option>8 a 12 tragos</option>
							<option>más de 12 tragos</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">14</th>
					<td>bebo más de cuatro tragos en una misma ocasión</td>
					<td>
						<select id="inputState" name="pregunta14" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Nunca</option>
							<option>Ocasionalmente</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">15</th>
					<td>manejo el auto despues de beber alcohol</td>
					<td>
						<select id="inputState" name="pregunta15" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Nunca</option>
							<option>sólo rara vez</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">16</th>
					<td>Uso drogas como marihuana, cocaína o pasta base</td>
					<td>
						<select id="inputState" name="pregunta16" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Nunca</option>
							<option>Ocasionalmente</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">17</th>
					<td>Uso exsesivamente los remedios que me indicano los que puedo comprar sin receta</td>
					<td>
						<select id="inputState" name="pregunta17" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Nunca</option>
							<option>Ocasionalmente</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">18</th>
					<td>Bebo café, té o bebidas cola que tienen cafeína</td>
					<td>
						<select id="inputState" name="pregunta18" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Menos de 3 al día</option>
							<option>de 3 a 6 al día</option>
							<option>más de 6 al día</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">19</th>
					<td>Duermo bien y me siento descanzado(a)</td>
					<td>
						<select id="inputState" name="pregunta19" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">20</th>
					<td>Yo me siento capaz de manejar el estrés o la tensión de mi vida</td>
					<td>
						<select id="inputState" name="pregunta20" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">21</th>
					<td>Yo me relajo y disfruto mi tiempo libre</td>
					<td>
						<select id="inputState" name="pregunta21" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">22</th>
					<td>parece que ando acelerado(a)</td>
					<td>
						<select id="inputState" name="pregunta22" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi nunca</option>
							<option>Algunas Veces</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">23</th>
					<td>Me siento enojado(a) o grasivo(a)</td>
					<td>
						<select id="inputState" name="pregunta23" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi nunca</option>
							<option>Algunas Veces</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">24</th>
					<td>Yo me siento contento(a) con mi trabajo o mis actividades</td>
					<td>
						<select id="inputState" name="pregunta24" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">25</th>
					<td>Yo soy un pensador positivo u optimista</td>
					<td>
						<select id="inputState" name="pregunta25" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">26</th>
					<td>Me siento tenso(a) o apretado(a)</td>
					<td>
						<select id="inputState" name="pregunta26" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi nunca</option>
							<option>Algunas veces</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">27</th>
					<td>Me siento deprimido(a) o triste</td>
					<td>
						<select id="inputState" name="pregunta27" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi nunca</option>
							<option>Algunas veces</option>
							<option>A menudo</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">28</th>
					<td>Me realizo controles de salud  en forma perdiodica</td>
					<td>
						<select id="inputState" name="pregunta28" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">29</th>
					<td>Converso con mi pareja o mi familia temas de sexualidad</td>
					<td>
						<select id="inputState" name="pregunta29" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">30</th>
					<td>En mi conducta sexual me preocupo del autocuidado y del cuidado de mi pareja</td>
					<td>
						<select id="inputState" name="pregunta30" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>casi siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">31</th>
					<td>Como peatón, pasajero del trasporte público y/o automovilista, soy respetuoso(a) de las ordenanzas del tránsito</td>
					<td>
						<select id="inputState" name="pregunta31" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
						</select>
						<div class="valid-feedback">la respuesta es correcta!</div>
						<div class="invalid-feedback">llenar el campo!</div>
					</td>
				</tr>

				<tr>
					<th scope="row">32</th>
					<td>Uso cinturón de seguridad</td>
					<td>
						<select id="inputState" name="pregunta32" class="custom-select" required>
							<option value="" selected>Seleccione</option>
							<option>Siempre</option>
							<option>a veces</option>
							<option>casi nunca</option>
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
			$request = $cuestionarioFantasticoController->CuestionarioFantastico();
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


