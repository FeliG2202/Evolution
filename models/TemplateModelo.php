<?php 


class TemplateModelo {
	
	public function validarEnlacesModelo($archivo) {
		$enlace = "Views/modules/".$archivo.".php";
		if (!file_exists($enlace)) {
			$enlace = "Views/modules/inicio.php";
		}

		///////// VALIDACION DE PERSONAS //////
		if ($archivo == 'ok1' || $archivo == 'fa1') {
			$enlace = "Views/modules/frmRegPersona.php";
		}
		elseif ($archivo == 'ok2' || $archivo == 'fa2') {
			$enlace = "Views/modules/frmConPersona.php";
		}
		elseif ($archivo == 'ok3' || $archivo == 'fa3') {
			$enlace = "Views/modules/frmConPersona.php";
		}

		///VALIDACION DE USUARIOS///
		elseif ($archivo == 'ok4' || $archivo == 'fa4') {
			$enlace = "Views/modules/frmConUsuarios.php";
		}
		elseif ($archivo == 'ok5' || $archivo == 'fa5') {
			$enlace = "Views/modules/frmRegUsuario.php";
		}
		elseif ($archivo == 'ok6' || $archivo == 'fa6') {
			$enlace = "Views/modules/frmConUsuarios.php";
		}

		///VALIDACION DE ROLES///
		elseif ($archivo == 'ok7' || $archivo == 'fa7') {
			$enlace = "Views/modules/frmRegRol.php";
		}
		elseif ($archivo == 'ok8' || $archivo == 'fa8') {
			$enlace = "Views/modules/frmConRol.php";
		}
		elseif ($archivo == 'ok9' || $archivo == 'fa9') {
			$enlace = "Views/modules/frmConRol.php";
		}

		///VALIDACION DE ROL USUARIO///
		elseif ($archivo == 'ok10' || $archivo == 'fa10') {
			$enlace = "Views/modules/frmRegRolUsuario.php";
		}
		elseif ($archivo == 'ok11' || $archivo == 'fa11') {
			$enlace = "Views/modules/frmEditRolUsuario.php";
		}
		elseif ($archivo == 'ok12' || $archivo == 'fa12') {
			$enlace = "Views/modules/frmEditRolUsuario.php";
		}

		///VALIDACIOIN DE LOS MENUS PRINCIPAL///
		elseif ($archivo == 'ok13' || $archivo == 'fa13') {
			$enlace = "Views/modules/frmRegMenu.php";
		}
		elseif ($archivo == 'ok14' || $archivo == 'fa14') {
			$enlace = "Views/modules/frmConMenu.php";
		}
		elseif ($archivo == 'ok15' || $archivo == 'fa15') {
			$enlace = "Views/modules/frmEditMenu.php";
		}

		///VALIDAR OPCIONES MENU///
		elseif ($archivo == 'ok16' || $archivo == 'fa16') {
			$enlace = "Views/modules/frmRegOpcionesMenu.php";
		}
		elseif ($archivo == 'ok17' || $archivo == 'fa17') {
			$enlace = "Views/modules/frmRegOpcionesMenu.php";
		}
		elseif ($archivo == 'ok18' || $archivo == 'fa18') {
			$enlace = "Views/modules/frmRegOpcionesMenu.php";
		}

		///VALIDACION DEL ROLES MENU///
		elseif ($archivo == 'ok19' || $archivo == 'fa19') {
			$enlace = "Views/modules/frmRegRolMenu.php";
		}
		elseif ($archivo == 'ok20' || $archivo == 'fa20') {
			$enlace = "Views/modules/frmRegOpcionesMenu.php";
		}
		elseif ($archivo == 'ok21' || $archivo == 'fa21') {
			$enlace = "Views/modules/frmRegOpcionesMenu.php";
		}


		elseif ($archivo == 'ok22' || $archivo == 'fa22') {
			$enlace = "Views/modules/inicio2.php";
		}




		return $enlace;

	}
}