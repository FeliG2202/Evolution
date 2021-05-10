<?php 
require_once("Controller/LoginController.php"); 
$controller = new LoginController();

if (@$_SESSION['user_session']) {
  $indexController->getRequest("Dashboard");
}
?>

<div class="container">
  <div class="col-lg-5 mx-auto mt-5 mb-5 p-4 bg-white">
    <form method="POST">
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="usuarios_email_l" placeholder="Ingrese su email" class="form-control">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="usuarios_password_l" placeholder="Ingrese su password" class="form-control">
      </div>

      <button type="submit" class="btn btn-success">Ingresar</button>
    </form>
  </div>
</div>

<?php if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $request = $controller->validateLogin();

  if(!$request[0]) {
    echo($request[1]);
  } elseif ($request[0]) {
    $indexController->getRequest($request[1]);
  }
}