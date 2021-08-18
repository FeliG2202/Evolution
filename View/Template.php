<!DOCTYPE html>
<html lang="es">
<head>
	<title>Evolution</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- se llama los css al template -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="View/Assets/Css/style.css">
	<link rel="stylesheet" type="text/css" href="View/Assets/Css/sidebar.css">
	<link rel="stylesheet" href="View/Assets/fontawesome/css/all.min.css">


</head>
<!-- validacion para colocar el fondo de los modulos -->
<body>

	<!-- se llama el menu de navegación -->
	<?php include_once("Modules/Components/Navbar.php"); ?>

	<!-- se llama el sidebar -->
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<?php include_once("Modules/Components/Sidebar.php"); ?>
		</div>

		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<?php 
					$enlaceObj = new TemplateControlador();
					$pagina = $enlaceObj->enlacesPaginaControlador();
					include $pagina;
					?>
				</div>
			</main>

			<!-- se llama el footer -->
			<?php include_once("Modules/Components/Footer.php");
			?>
		</div>
	</div>
	
	<!-- se llama a los scripts "ReferenceLinks/LinksScripts.php-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<script src="View/Assets/fontawesome/js/all.min.js"></script>
	<script src="View/Assets/Js/sidebar.js"></script>
	<script src="View/Assets/Js/script.js"></script>
	<script src="View/Assets/Js/prueba.js"></script>

</body>
</html>