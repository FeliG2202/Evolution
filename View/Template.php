<?php $indexController = new IndexController(); ?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php include("ReferenceLinks/LinksCss.php"); ?>

</head>
<body class="img">
	<?php include_once("Modules/Components/Navbar.php"); ?>
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

			<?php include_once("Modules/Components/Footer.php");
			?>
		</div>
	</div>
	
	<?php include("ReferenceLinks/LinksScripts.php"); ?>

</body>
</html>