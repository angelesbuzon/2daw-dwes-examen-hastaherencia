<?php

function getConexion(): PDO {
    try {
        $detalles = "
            host=localhost;
            port=3306;
            dbname=fruteria;
            charset=utf8mb4;
        ";
        
        $pdo = new PDO($detalles, "alumno", "alumno123");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conectado correctamente";

    } catch (Exception $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

    return $pdo;
}