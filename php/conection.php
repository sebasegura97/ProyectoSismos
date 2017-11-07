<?php
    $connectionInfo = array("UID" => "proyectosismos@proyectosismos", "pwd" => "Waxelrose23", "Database" => "proyectosismos", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:proyectosismos.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "No conectado";
    }
    echo "Connected successfully <br>";

    echo "<br>";
    var_dump($formulario);
    $formulario = $_COOKIE['formulario'];

?>
