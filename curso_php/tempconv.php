<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Convertidor de Temperaturas</title>
</head>

<body>
  <?php
  if ((array_key_exists('conv', $_POST)) && ($_POST['celcius'] != '')) {
    $fahr = $_POST['celcius'] * (9 / 5) + 32.0;
  }
  ?>

  <h1>Convertidor de Temperaturas</h1>
  <p>Ingrese la temperatura en grados Celcius (ºC), se convertirá dicha cantidad a grados Fahrenheit (ºF)</p>

  <form action="tempconv.php" method="POST">
    <label for="celcius">Temp en Celcius</label>
    <input type="text" name="celcius" id="celcius" value="<?= $_POST['celcius'] ?>">
    <button type="submit" name="conv">Convertir</button>
    <label for="fahr">Temp en Fahrenheit</label>
    <input type="text" name="fahr" disabled value="<?= $fahr ?>">
  </form>

</body>

</html>