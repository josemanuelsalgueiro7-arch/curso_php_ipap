<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ingreso de Usuarios</title>
</head>

<body>
  <h1>Sistema Interno</h1>
  <p>Ingrese usuario y contraseña para acceder al sistema.</p>

  <?php

  // Toma las credenciales (usuario y contraseña), las compara con las
  // existentes en la base de datos y da acceso o avisa al usuario que
  // no posee las credenciales.

  $nom_usuario = $_GET['usuario'];
  $pass_ingresado = $_GET['pass'];
  $msj_usuario = '';

  if (array_key_exists('ingresar', $_POST)) {
    if (($nom_usuario == null) && ($pass_ingresado == '')) {
      $msj_usuario = 'Usted no ha ingresado las credenciales necesarias.';
    }
  }
  ?>

  <form action="login.php" method="post">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" />

    <label for="pass">Contraseña</label>
    <input type="password" name="pass" />

    <button type="submit" name="ingresar">Ingresar</button>
  </form>
  <?= $msj_usuario ?>
</body>

</html>