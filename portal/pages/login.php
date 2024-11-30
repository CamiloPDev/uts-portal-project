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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="container_title">
        <h1 class="title">Login</h1>
      </div>
      <form action="page/procesar.php" method="POST" id="loginForm" class="form">
        <label class="label" for="username">Username:</label>
        <input class="input" type="text" id="username" required />
        <label class="label" for="password">Password:</label>
        <input class="input" type="password" id="password" required />
        <a class="redirect" href="../pages/register.php">Don't have an account? Register here</a>
        <!-- <button class="button_submit" type="submit">Login</button> -->
        <input class="button_submit" type="submit" name="btnConsultar" value="Enviar">

      </form>
      <p id="message" class="message"></p>
    </div>
  </body>
</html>
