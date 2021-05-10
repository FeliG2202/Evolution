<?php if (@!$_SESSION['user_session']) {
	$indexController->getRequest("Home");
} ?>

<h1>Dashboard</h1>

<h1> Rol: <?php echo($_SESSION['idRoles']); ?>
	<?php if ($_SESSION['idRoles'] == 1) {
		echo("Admin");
	} elseif ($_SESSION['idRoles'] == 2) {
		echo("Instructor");
	} elseif ($_SESSION['idRoles'] == 3) {
		echo("Usuario");
	} ?>
</h1>