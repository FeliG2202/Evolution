<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>

<div class="col-lg-6 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
	<div class="w-100 text-center">
		<img src="Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
	</div>
	<form>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Fecha</label>
				<input type="date" class="form-control" placeholder="">
			</div>  

			<div class="form-group col-md-6">
				<label>Altura</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Peso</label>
				<input type="number" class="form-control" placeholder="Kg">
			</div>

			<div class="form-group col-md-6">
				<label>Perimetro Craneal</label>
				<input type="number5" class="form-control" placeholder="Cm">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Perimetro bicep Derecho</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 

			<div class="form-group col-md-6">
				<label>Perimetro bicep Izquierdo</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Diametro biacromial Derecho</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 

			<div class="form-group col-md-6">
				<label>Diametro biacromial Izquierdo</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Perimetro de cintura Derecho</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 

			<div class="form-group col-md-6">
				<label>Perimetro de cintura Izquierdo</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Porcentaje glicometrica</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 

			<div class="form-group col-md-6">
				<label>Pliegues</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label>dencidad Corporal</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 

			<div class="form-group col-md-6">
				<label>Indice de masa corporal</label>
				<input type="number" class="form-control" placeholder="Cm">
			</div> 
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success btn-block">Registar</button>
		</div>           
	</form>
</div>