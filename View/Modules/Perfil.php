<?php 
	if (!$_SESSION['user']) {
		header("location: Dashboard");
	}
?>

<h1>Perfil</h1>