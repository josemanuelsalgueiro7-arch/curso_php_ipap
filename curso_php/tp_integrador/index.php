<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Formulario de Contacto</title>
  <link rel="stylesheet" href="styles/styles.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100..900&display=swap"
    rel="stylesheet">
<body>

  <?php

  $nombre = '';
  $correo = '';
  $telefono = '';

  // Estructura de Datos de los Campos de Formulario
  $camposFormulario = [
    'nombre'  => [
      'etiqueta'  =>  'Nombre y Apellido',
      'nameFor'   =>  'nombre',
      'tipo'      =>  'text',
      'ayuda'     =>  'Ingrese su nombre completo',
    ],
    'correo'  => [
      'etiqueta'  =>  'Correo Electrónico',
      'nameFor'   =>  'correo',
      'tipo'      =>  'email',
      'ayuda'     =>  'Ingrese su correo electrónico',
    ],
    'tel'  => [
      'etiqueta'  =>  'Teléfono',
      'nameFor'   =>  'tel',
      'tipo'      =>  'tel',
      'ayuda'     =>  'Ingrese su número de teléfono',
    ],
    'mensaje' =>  [
      'etiqueta' =>   'Mensaje',
      'nameFor'   =>  'mensaje',
      'tipo'      =>  'textarea',
      'ayuda'     =>  'Escriba su mensaje en este cuadro',
    ],
    'enviar'  =>  [
      'etiqueta'  =>   'Enviar Datos',
      'tipo'      =>  'submit'
    ]
  ];

  function dibujarCamposForm($camposRequeridos)
  {
    // Itera sobre los distintos campos de formulario
    $contenidoForm = '';

    foreach ($camposRequeridos as $clave => $valor) {

      if ($clave == 'enviar') {

        $contenidoForm .=
            "\n\t<input type='" . $valor['tipo']
            . "' value='"       . $valor['etiqueta']
            . "' required>";

      } else {

        $contenidoForm .=
          "\t<label for=" . $valor['nameFor'] . ">"
          . $valor['etiqueta']
          . "</label>\n";

        if ($clave == 'mensaje') {

          $contenidoForm .=
            "\t<br><textarea"
            . " name='"         . $valor['nameFor']
            . "' placeholder='" . $valor['ayuda']
            . "' rows='5' cols='33'>"
            . "</textarea required><br>\n";

        } else {

          $contenidoForm .=
          "\t<input type='"   . $valor['tipo']
          . " name='"         . $valor['nameFor']
          . "' placeholder='" . $valor['ayuda']
          . "' required><br>\n";

        } // cierre if textarea
      }   // cierre if submit
    }     // cierre foreach

    return $contenidoForm;
  }

  $contenidoFooter = '';
  // todo: iterar enlaces footer
  ?>


  <!-- Contenido Principal Página Web -->
   
  <header class="encabezadoPagina">
    <img
      src='img/logo_gba_footer_blanco.svg'
      alt='Logo del Gobierno de la Provincia de Buenos Aires'
    >
  </header>

  <main class="contenidoPrincipal">
    <h1>Formulario de Contacto</h1>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
      <?= dibujarCamposForm($camposFormulario) ?>
    </form>
  </main>

  <img
    src="img/imagen_paisaje_footer_2024.jpg"
    alt="Imagen paisaje de la Provincia de Buenos Aires."
  >
  
  <footer class="pieDePagina">
    <ul class="enlacesPieDePagina">
      <li>
        <a href="https://mapadelestado.gba.gob.ar/">
          Mapa del Estado
        </a>
      </li>
      <li>|</li>
      <li>
        <a href="https://www.gba.gob.ar/Politicasdeprivacidad">
          Política de Privacidad
        </a>
      </li>
    </ul>
  </footer>
</body>

</html>