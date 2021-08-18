
<h1>Dashboard</h1>
<h1>Id: <?php echo($_SESSION['idUsuarios']); ?></h1>
<h1> Rol: <?php echo($_SESSION['idRoles']); ?>
	<?php if ($_SESSION['idRoles'] == 1) {
		echo("Admin");
	} elseif ($_SESSION['idRoles'] == 2) {
		echo("Instructor");
	} elseif ($_SESSION['idRoles'] == 3) {
		echo("Usuario");
	} ?>
</h1>