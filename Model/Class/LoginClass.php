<?php 

class LoginClass {

	private $idUsuarios;
	private $usuarios_nombres;
	private $usuarios_email;
	private $usuarios_password;

	public function __construct($idUsuarios, $usuarios_nombres, $usuarios_email, $usuarios_password) {
		$this->idUsuarios = $idUsuarios;
		$this->usuarios_nombres = $usuarios_nombres;
		$this->usuarios_email = $usuarios_email;
		$this->usuarios_password = $usuarios_password;
	}

    public function getIdUsuarios() {
        return $this->idUsuarios;
    }

    public function setIdUsuarios($idUsuarios) {
        $this->idUsuarios = $idUsuarios;
        return $this;
    }

    public function getUsuariosNombres() {
        return $this->usuarios_nombres;
    }

    public function setUsuariosNombres($usuarios_nombres) {
        $this->usuarios_nombres = $usuarios_nombres;
        return $this;
    }

    public function getUsuariosEmail() {
        return $this->usuarios_email;
    }

    public function setUsuariosEmail($usuarios_email) {
        $this->usuarios_email = $usuarios_email;
        return $this;
    }

    public function getUsuariosPassword() {
        return $this->usuarios_password;
    }

    public function setUsuariosPassword($usuarios_password) {
        $this->usuarios_password = $usuarios_password;
        return $this;
    }

}