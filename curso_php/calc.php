<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora Simple</title>
</head>

<body>
  <form action="calc.php" method="post">
    <label for="num_1">Número 1</label>
    <input type="text" id="num_1" name="num_1">
    <br>
    <label for="num_2">Número 2</label>
    <input type="text" name="num_2">
    <br>
    <button type="submit" name="suma">Suma</button>
    <button type="submit" name="rest">Resta</button>
    <button type="submit" name="prod">Producto</button>
    <button type="submit" name="coci">Cociente</button>
  </form>

  <?php

  $resultado = 0;
  if (array_key_exists('suma', $_POST)) {
    $resultado = $_POST['num_1'] + $_POST['num_2'];
  } elseif (array_key_exists('rest', $_POST)) {
    $resultado = $_POST['num_1'] - $_POST['num_2'];
  } elseif (array_key_exists('prod', $_POST)) {
    $resultado = $_POST['num_1'] * $_POST['num_2'];
  } elseif (array_key_exists('coci', $_POST)) {
    if ($_POST['num_2'] != 0) {
      $resultado = $_POST['num_1'] / $_POST['num_2'];
    } else {
      $resultado = 'E';
    }
  }
  echo "<h2>Resultado " . $resultado . "</h2>";
  ?>
</body>

</html>