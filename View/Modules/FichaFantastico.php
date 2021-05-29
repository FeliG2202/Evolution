<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>

<div class="col-lg-10 mt-5 mb-5 p-4 bg-white rounded shadow-sm mx-auto">
	<div class="w-100 text-center">
		<img src="Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
		<h4 class="p-3">Cuestionario Fantastico</h4>
	</div>
	<form>
		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>1. Tengo con quien hablar de las cosas que son importantes para mí.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veses</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>2. Yo doy y recibo cariño.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veses</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div> 
				</div>
			</div>
		</div>
		
		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>3. Soy integrante activo(a) de un grupo de apoyo a mi salud y calidad de vida (Organizaciones de autocuidado, clubes de enfermos crónicos, deportivos, religiosos, mujeres, adultos mayores, vecinales y otros). Yo participo.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>4. Yo realizo actividad fisica (caminar, subir escaleras, trabajo de casa, jardinear) o deporte durante 30 minutos cada vez.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div> 
				</div>	
			</div>
		</div>

		<hr>
		
		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>5. Deporte durante 30 minutos cada vez</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>3 o mas veces por semana</option>
								<option>1 vez por semana</option>
								<option>no hago nada</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>6. Yo camino al menos 30 minutos diariamente</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div> 
				</div>
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>7. Como 2 porciones de verduras y 3 frutas</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Todos los días</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>8. A menudo consumes mucha azúcar o sál o comida chatarra o con mucha grasa.</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Ninguna de éstas</option>
								<option>Algunas de éstas</option>
								<option>todas éstas</option>
							</select>
						</div>
					</div>
				</div> 
			</div> 
		</div>
		
		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>9. Como 2 porciones de verduras y 3 frutas</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Todos los días</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>10. Estoy pasado(a) en mi peso ídeal en</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>0 a 4 Kilos de más</option>
								<option>5 a 8 Kilos de más</option>
								<option>Más de 8 Kilos</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>11. Yo fumo cigarrillos</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>No, los últimos 5 años</option>
								<option>No, el último año</option>
								<option>sí, este año</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>12. Generalmente fumo ___ cigarrillos por dia</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Ninguno</option>
								<option>de 0 a 10</option>
								<option>Más de 10</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>	

		<hr>	
		
		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>13. Mi número promedio de tragos (botella de cerveza, vaso de vino, copita de trago fuerte) por semana es de</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>0 a 7 tragos</option>
								<option>8 a 12 tragos</option>
								<option>más de 12 tragos</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>14. bebo más de cuatro tragos en una misma ocasión</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Nunca</option>
								<option>Ocasionalmente</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>15. manejo el auto despues de beber alcohol</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Nunca</option>
								<option>sólo rara vez</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>16. Uso drogas como marihuana, cocaína o pasta base</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Nunca</option>
								<option>Ocasionalmente</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>	
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>17. Uso exsesivamente los remedios que me indicano los que puedo comprar sin receta </label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Nunca</option>
								<option>Ocasionalmente</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>18. Bebo café, té o bebidas cola que tienen cafeína</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Menos de 3 al día</option>
								<option>de 3 a 6 al día</option>
								<option>más de 6 al día</option>
							</select>
						</div>
					</div>
				</div> 
			</div>	
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>19. Duermo bien y me siento descanzado(a)</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>20. Yo me siento capaz de manejar el estrés o la tensión de mi vida</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>21. Yo me relajo y disfruto mi tiempo libre</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>22. parece que ando acelerado(a)</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi nunca</option>
								<option>Algunas Veces</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>23. Me siento enojado(a) o grasivo(a)</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi nunca</option>
								<option>Algunas veces</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>24. Yo me siento contento(a) con mi trabajo o mis actividades</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>		
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6 step">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>25. Yo soy un pensador positivo u optimista</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>26. Me siento tenso(a) o apretado(a)</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi nunca</option>
								<option>Algunas veces</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>27. Me siento deprimido(a) o triste</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi nunca</option>
								<option>Algunas veces</option>
								<option>A menudo</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>28. Me realizo controles de salud  en forma perdiodica</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>29. Converso con mi pareja o mi familia temas de sexualidad</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>30. En mi conducta sexual me preocupo del autocuidado y del cuidado de mi pareja</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Casi siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<hr>

		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>31. Como peatón, pasajero del trasporte público y/o automovilista, soy respetuoso(a) de las ordenanzas del tránsito</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
							</select>
						</div>
					</div>
				</div> 
			</div>

			<div class="col-lg-6">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>32. Uso cinturón de seguridad</label>

						<div class="form-group col-md-8">
							<select id="inputState" class="form-control">
								<option>Siempre</option>
								<option>A veces</option>
								<option>Casi nunca</option>
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