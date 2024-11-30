<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $nombre = '';
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    $id = '';
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="../css/register.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="title">Registro</h1>
      <form action="page/procesar.php" method="POST" id="registerForm">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required />

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required />

        <label for="confirmPassword">Confirmar Contraseña:</label>
        <input
          type="password"
          id="confirmPassword"
          name="confirmPassword"
          required
        />

        <!-- <button type="submit">Registrar</button> -->
        <input class="button_submit" type="submit" name="btnRegistrar" value="Registrar">

      </form>
      <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>.</p>
    </div>
  </body>
</html>
