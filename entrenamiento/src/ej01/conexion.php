<?php

function conectar($host_puerto, $nombre_db, $usuario, $contrasena) {
    $dsn = "mysql:host=$host_puerto;port=$host_puerto;dbname=$nombre_db;";
    $pdo = new PDO($dsn, $usuario, $contrasena);

    try {

    } catch (Exception $e) {

    }

    return $pdo;
}

?>