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
	<h3 class="text-center">Bienvenido al Cuestionario</h3><br>
	<form method="POST">
		<select name="idTipoCuestionario" id="idTipoCuestionario" class="form-control">
			<option value="0">Seleccione tipo Cuestionario</option>
			<?php 
			foreach ($datosTipCuestionario as $key => $value) {
				print '<option value="'.$value['idtipo_cuestionario'].'">'.$value['tipo_cuestionario_detalle'].'</option>';
			}
			?>
		</select>
		<input type="submit" name="verCuestionario" value="Ver Cuestionario" class="btn btn-success">
	</form>
</div>


<?php 

if (isset($_SESSION['idTipoCuestionario'])) {
?>
<div class="col-lg-10 mx-auto mt-5 mb-5 bg-white p-4 shadow-sm rounded">
	<form method="POST" class="form">
		<!--<input type="text" name="id" value="<?php print $_GET['id']; ?>"> -->
		<table class="table table-hover table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Pregunta</th>
					<th scope="col">Respuesta</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				$fila = 1;

				foreach ($datosPregunta as $key => $value) {
					print '					
					<tr>
					<th scope="row">'.$fila.'</th>
					<td class="w-75">'.$value["preguntadetalle"].'<input type="text" name="idPregunta[]" value="'.$value['idpreguntas'].'">
					</td>
					<td class="w-25">
					<select id="inputState" name="idRespuesta[]" class="custom-select" >
					<option value="" selected>Seleccione</option>';
					$respuesta = $respuestaControlador->cargarRespuestasControlador($value['idpreguntas']);

					foreach ($respuesta as $key2 => $value2) {
						print '
						<option value="'.$value2['idrespuestas'].'">'.$value2['respuestadetalle'].'</option>';
					}

					print '							
					</select>
					<div class="valid-feedback">la respuesta es correcta!</div>
					<div class="invalid-feedback">llenar el campo!</div>
					</td>
					</tr>';
					$fila++;
				}

				?>
			</tbody>
		</table>

		<div class="form-group">
			<button type="submit" name="regCuestionario" id="register" class="btn btn-success btn-block">Registar Cuestionario</button>
		</div>         
	</form>
</div>
<?php 

} ?>