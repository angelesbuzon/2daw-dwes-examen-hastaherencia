<?php

/**
 * **Credenciales:**
 * - Host: `localhost`
 * - Puerto: `3307` (Á: o bien 3306)
 * - BD: `biblioteca`
 * - Usuario: `estudiante`
 * - Password: `estudiante123`
 */

// PARTE A
conectar("127.0.0.1", 3306, "biblioteca", "estudiante", "estudiante123");

function conectar($host, $puerto, $nombre_db, $usuario, $contrasena) {
    try {
        $dsn = "mysql:host=$host;
            port=$puerto;
            dbname=$nombre_db;
            charset=utf8mb4;";
        
        $pdo = new PDO($dsn, $usuario, $contrasena);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo `Conexión correcta`;
    } catch (Exception $e) {
        echo `Error de conexión: ` . $e->getMessage();
        die();
    }
}

// PARTE B

class Libro {
    static public int $recuentoID = 0;
    public int $id {
        // Solo lectura
        set {
            throw new Exception("No se puede cambiar el ID del libro");
        }
    }
    public string $titulo;
    public int $autorID;
    public int $generoID;
    public string $isbn;
    public int $ejemplares; // WIP: mínimo 0
    public int $disponibles; // WIP: mínimo 0, máximo = ejemplares

    function __construct($titulo, $autorID, $generoID, $isbn, $ejemplares=1, $disponibles=1) {
        $this->id = $this->recuentoID;
        $this->recuentoID++;

        $this->titulo = trim($titulo); // Sin espacios inicio/fin

        $this->autorID = $autorID;
        $this->generoID = $generoID;
        $this->isbn = $isbn;
        $this->ejemplares = $ejemplares;
        $this->disponibles = $disponibles;
    }

    function estaDisponible(): bool {
        if ($this->disponibles > 0) return true;
        else return false;
    }

    function prestar(): bool {
        if ($this->disponibles >= 1) {
            $this->disponibles--;
            return true;
        } else {
            return false;
        }
    }

    function devolver(): bool {
        if ($this->disponibles + 1 <= $this->ejemplares) {
            $this->disponibles++;
            return true;
        } else {
            return false;
        }
    }

    function toArray(): array {
        // WIP Devolver array asociativo con todas las propiedades
        $nuevoArray = [
            "id" => $this->id,
            "titulo" => $this->titulo,
            "autorID" => $this->autorID,
            "generoID" => $this->generoID,
            "isbn" => $this->isbn
            // etc
        ];
        return $nuevoArray; 
    }

    static function buscarPorId(int $id): ?Libro {
        $libro = null;
        
        try {
            // Conectar y poner modo errores
            $pdo = new PDO(
                "mysql:host=localhost;
                    port=3307;
                    dbname=biblioteca
                ",
                "usuario",
                "contrasena");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Preparar consulta
            $sql = "
                SELECT * FROM biblioteca WHERE id = :$id
            ";
            $stmt = $pdo->prepare($sql);

            // Ejecutar
            $stmt->execute();

        } catch (Exception $e) {
            echo "Error al ejecutar el método buscarPorID(): " . $e->getMessage();
        }

        return $libro;
    }

    static function buscarTodos(): array {
        $arrayLibros = [];

        return $arrayLibros;
    }

}