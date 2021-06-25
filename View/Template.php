<!-- llama al index contoller -->
<?php $indexController = new IndexController(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Evolution</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- se llama los css al template -->
	<?php include("ReferenceLinks/LinksCss.php"); ?>

</head>
<!-- validacion para colocar el fondo de los modulos -->
<body class="<?php echo(isset($_GET['action']) ? ($_GET['action'] === "Dashboard" ? 'img' : 'bg-light') : ''); ?>">

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
					<?php include_once($indexController->actionListener()); ?>
				</div>
			</main>

			<!-- se llama el footer -->
			<?php include_once("Modules/Components/Footer.php");
			?>
		</div>
	</div>
	
	<!-- se llama a los scripts -->
	<?php include("ReferenceLinks/LinksScripts.php"); ?>

</body>
</html>