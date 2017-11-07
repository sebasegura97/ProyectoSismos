
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Relevamiento de sismos</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/nico.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="bodyPortada">

    <header class="cabecera" >
      <h1 class="cabeceraTitulo">
        Formulario Cargado exitosamente!
      </h1>
    </header>

    <div class="finalBotonera">
        <a href="../index.html" class="shadow" id="buttonFinal" onclick="toggle()" >
          <div class="formulario">
            <i class="material-icons md72">add</i>
            <h3>Nuevo formulario</h3>
          </div>
        </a>
    </div>




    <script>

    function toggle() {
        var button = document.getElementById('buttonFinal');
        button.classList.toggle("shadow");
      }



    </script>
    <script type="../text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="../text/javascript" src="js/index.js"></script>
  </body>
</html>


<?php

// CONEXION

  $connectionInfo = array("UID" => "proyectosismos@proyectosismos", "pwd" => "Waxelrose23", "Database" => "proyectosismos", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:proyectosismos.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "No conectado";
  }


    // //CARGA DE DATOS - UN ADMINISTRADOR QUE PERMITA CONTINUAR CON EL RESTO DE LA CARGA
    // //Se ejecuto una sola vez la consulta, utilizaremos este administrador para poder mostrar el  prototipo
    // $params = array('sebasegura97', 'proyectosismos', 'Sebastian', 'Segura');
    //
    //
    // $tsql =
    // "INSERT INTO Administrador
    // (usuario, clave, nombre, apellido)
    // VALUES
    // (?, ?, ?, ?)";
    //
    // $getResults= sqlsrv_query($conn, $tsql, $params);
    //
    // if( $getResults === false ) {
    //    die( print_r( sqlsrv_errors(), true));
    // }
    //
    // //CARGA DE DATOS - UN INSPECTOR QUE PERMITA CONTINUAR CON EL RESTO DE LA CARGA
    // //Se ejecuto una sola vez la consulta, utilizaremos este inspector para poder mostrar el  prototipo
    // $params = array(40149184, 5);
    //
    //
    // $tsql =
    // "INSERT INTO Inspector
    // (dni, id_adm)
    // VALUES
    // (?, ?)";
    //
    // $getResults= sqlsrv_query($conn, $tsql, $params);
    //
    // if( $getResults === false ) {
    //    die( print_r( sqlsrv_errors(), true));
    // }



    // CARGA DE DATOS - TABLA EvaluacionRapida - form 13

    $params = array(
              $_COOKIE['EvaluacionRapida_colapso'],
              $_COOKIE['EvaluacionRapida_inclinacion'],
              $_COOKIE['EvaluacionRapida_peligro'],
              $_COOKIE['EvaluacionRapida_movimiento'],
              $_COOKIE['EvaluacionRapida_comentarios']);


    $tsql =
    "INSERT INTO EvaluacionRapida
    (colapso, inclinacion, peligro, movimiento, comentarios)
    VALUES
    (?, ?, ?, ?, ?)";

    $getResults= sqlsrv_query($conn, $tsql, $params);

    if( $getResults === false ) {
       die( print_r( sqlsrv_errors(), true));
    }

    // CARGA DE DATOS - TABLA AccionesAdicionales FORM 15

    $params = array(
              $_COOKIE['aa_req_Barricada'],
              $_COOKIE['aa_req_EvalEst'],
              $_COOKIE['aa_req_EvalGeo'],
              $_COOKIE['aa_req_otro'],
              $_COOKIE['aa_req_comentarios']);


    $tsql =
    "INSERT INTO AccionesAdicionales
    (aa_req_Barricada, aa_req_EvalEst, aa_req_EvalGeo, aa_req_otro, aa_comentarios)
    VALUES
    (?, ?, ?, ?, ?)";

    $getResults= sqlsrv_query($conn, $tsql, $params);

    if( $getResults === false ) {
       die( print_r( sqlsrv_errors(), true));
    }

    // CARGA DE DATOS - TABLA INSPECCION - form12
    // No funciona, pide un valor para id inspeccion rapida y otro para id inspeccion detallada. Si o si en ambos.
    // Para mostrar el prototipo se creo una evaluacon rapida y una evaluacion detallada, cuyos ids fueron asignados en esta carga.

    $params = array(
              $_COOKIE['Inspeccion_municipio'],
              $_COOKIE['Inspeccion_domicilio'],
              $_COOKIE['Inspeccion_telefono'],
              $_COOKIE['Inspeccion_num_pisos'],
              $_COOKIE['Inspeccion_num_sotanos'],
              $_COOKIE['Inspeccion_area_planta'],
              40149184,
              2,
              1);


    $tsql =
    "INSERT INTO INSPECCION
    (municipio, domicilio, telefono, num_pisos, num_sotanos, area_planta, dni_inspec, id_eval_rap,id_eval_det)
    VALUES
    (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $getResults= sqlsrv_query($conn, $tsql, $params);

    if( $getResults === false ) {
       die( print_r( sqlsrv_errors(), true));
    }

 ?>
