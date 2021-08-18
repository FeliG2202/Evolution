<?php 

$persona = new PersonaControlador();
$persona->registrarPersonaControlador();
$datosPersonas = $persona->consultarPersonasControlador();

$usuario = new UsuarioControlador();
$usuario->registrarUsuarioControlador();

?>
<div class="col-lg-7 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
	<div class="row">
		<div class="col">
			<h1 class="text-center">REGISTRAR USUARIOS</h1> 		
		</div>
	</div>
	<div class="w-100 text-center">
		<img src="View/Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
	</div>
	<form method="POST" class="needs-validation" novalidate>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Clientes Registrados</label>
				<select name="usuario" id="usuario" required class="form-control">
					<option value="">Seleccione</option>
					<?php 

					foreach ($datosPersonas as $key => $value) {
						print '<option value="'.$value['idpersona'].'">'.$value['nombre'].'</option>';
					}

					?>
				</select>
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">Debe Seleccionar Una Persona!</div>
			</div> 

			<div class="form-group col-md-6">
				<label>Login</label>
				<input type="text" name="login" id="login" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div> 
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Contraseña</label>
				<input type="password" name="clave" id="clave" required class="form-control" placeholder="">
				<div class="valid-feedback">la respuesta es correcta!</div>
				<div class="invalid-feedback">llenar el campo!</div>
			</div>  
			<div class="form-group col-md-6">
				
			</div> 
		</div>

		<div class="form-row">
			<div class="form-group">
				<button type="submit" name="btnRegUsuario" class="btn btn-success btn-block">Registrarme</button>
			</div>
		</div>

		<div class="form-row">
			<div class="mt-3">
				<?php
				if(isset($_GET['action'])){
					print "SIENTRO AQUI ESTOY --> ".$_GET['action'];
					if($_GET['action'] == "OkUsu"){
						print "Usuario Registrada Correctamente";
					}
				}
				?>
			</div>  			
		</div>
	</form>
</div>
