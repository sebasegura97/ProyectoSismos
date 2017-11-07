<!DOCTYPE html>
<?
  var_dump($_COOKIE);

?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Relevamiento de sismos</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/nico.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>

    <header class="cabecera" >
      <h1 class="cabeceraTitulo">
        Formulario de evaluacion rapida de la seguridad.
      </h1>
    </header>
    <!-- <img src="images/portadaBackground.png" alt="Imagen de fondo" class="backgroundImage"> -->
    <section class="portada">
      <!-- ID INSPECTOR -->
      <div class="inputContenedor shadow">
        <div class="icon">
          <i class="material-icons md24">face</i>
        </div>
        <input type="text" name="textIdInspector" placeholder="Id Inspector">
      </div>
      <!-- AFILIACION -->
      <div class="inputContenedor shadow">
        <div class="icon">
          <i class="material-icons md24">people</i>
        </div>
        <input type="text" name="textAfiliacion" placeholder="Afiliacion">
      </div>
      <!-- FECHA -->
      <div class="inputContenedor shadow">
        <div class="icon">
          <i class="material-icons md24">date_range</i>
        </div>
        <input type="date" name="portadaFecha" placeholder="Fecha" id="fecha">
      </div>
      <!-- HORA -->
      <div class="inputContenedor shadow">
        <div class="icon">
          <i class="material-icons md24">alarm_on</i>
        </div>
        <input type="time" name="portadaTime" placeholder="Hora" id="hora">
      </div>
      <!-- AREA -->

      <div class="desplegableContainer">
        <div class="inputContenedor shadow">
          <div class="icon">
            <i class="material-icons md24">content_paste</i>
          </div>
          <div class="label">
            <p>Area de inspeccion</p>
            <i class="material-icons md24">keyboard_arrow_down</i>
          </div>
        </div>
        <form class="dropdown-content shadow">
          <input type="radio" name="areaInspeccion" value="Interior">Interior<br>
          <input type="radio" name="areaInspeccion" value="Exterior">Exterior<br>
        </form>
      </div>


      <button type="button" name="buttonSiguiente"  class="buttonSiguiente shadow" ><a href="form12.php" >Siguiente</a>
      </button>
    </section>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
  </body>
</html>
