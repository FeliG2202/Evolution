<?php 

if(!isset($_SESSION['idUsuario'])){
	header('location:Login');
}

$tipoCuestionario = new TipoCuestionarioControlador();
$pregunta = new PreguntaControlador();
$cuestionario = new CuestionarioControlador();
$respuestaControlador = new RespuestaControlador();


$datosTipCuestionario = $tipoCuestionario->consultarTipoCuestionarioControlador();
$datosPregunta = $pregunta->consultarPreguntaControlador();
$cuestionario->cargarCuestionarioControlador();

?>

<div class="col-lg-10 mx-auto mt-5 mb-5 bg-white p-4 shadow-sm rounded">
	<h3 class="text-center">Registrar preguntas cuestionario</h3><br>
	<form method="POST">
		<div class="form-row">
			<div class="form-group col-md-12">
				<label>Cuestionario</label>
				<select name="tipoCuestionario" id="tipoCuestionario" required class="form-control">
					<option value="" selected>Seleccione tipo Cuestionario</option>
					<?php 
					foreach ($datosTipCuestionario as $key => $value) {
						print '<option value="'.$value['idtipo_cuestionario'].'">'.$value['tipo_cuestionario_detalle'].'</option>';
					}
					?>
				</select>
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label>pregunta</label>
				<input type="text"  name="pregunta" class="form-control" id="">
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Registrar Pregunta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div>

