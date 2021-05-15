<?php 
require_once("Controller/LoginController.php"); 
$controller = new LoginController();

if (@$_SESSION['user_session']) {
  $indexController->getRequest("Dashboard");
}
?>

  <div class="col-lg-5 mx-auto mt-5 mb-5 p-4 bg-white rounded shadow-sm">
    <div class="w-100 text-center">
      <img src="View/Assets/Img/logos/logoEvolutionBackground.png" class="img-fluid w-25 h-25">
    </div>
    <form method="POST">
      <div class="form-group">
        <label>Correo</label>
        <input type="email" name="usuarios_email_l" placeholder="Ingrese su Correo" class="form-control">
      </div>

      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="usuarios_password_l" placeholder="Ingrese su Contraseña" class="form-control">
      </div>

      <button type="submit" class="btn btn-success">Ingresar</button>
    </form>
  </div>


<?php if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $request = $controller->validateLogin();

  if(!$request[0]) {
    echo($request[1]);
  } elseif ($request[0]) {
    $indexController->getRequest($request[1]);
  }
}