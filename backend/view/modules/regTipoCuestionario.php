<?php 

if(!isset($_SESSION['idUsuario'])){
	header('location:Login');
}


?>

<div class="col-lg-12 mx-auto mt-5 mb-5 bg-white p-4 shadow-sm rounded">
	<h3 class="text-center">Registrar cuestionario</h3><br>
	<form method="POST">

		<div class="form-row">
			<div class="form-group col-md-12">
				<label>Nombre del Cuestionario</label>
				<input type="text"  name="cuestionario" class="form-control" id="">
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label>estado de la pregunta</label>
				<select name="estadoPregunta" id="estadoPregunta" required class="form-control">
					<option value="">Seleccione el estado de la pregunta</option>
					<option value="true">Activa</option>
					<option value="false">Inactiva</option>
				</select>
			</div> 
		</div>

		<button type="submit" class="btn btn-info">Guardar pregunta</button>
	</div>
	
</form>
</div>




