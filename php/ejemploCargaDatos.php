<?php
//EJEMPLO DE CARGA DE DATOS

    $usuario = 'sebasegura97';
    $clave = 'proyectosismos';
    $nombre = 'Sebastian';
    $apellido = 'Segura';
    $params = array($usuario, $clave, $nombre, $apellido);


    $tsql =
    "INSERT INTO Administrador
    (usuario, clave, nombre, apellido)
    VALUES
    (?, ?, ?, ?)";

    $getResults= sqlsrv_query($conn, $tsql, $params);

    //$stmt = sqlsrv_query( $conn, $tsql);


    if( $getResults === false ) {
       die( print_r( sqlsrv_errors(), true));
    }

 ?>
