<?php
require_once 'conexion.php';

class Cliente extends Usuario {
    public DateTime $fechaRegistro;

    function __construct($id, $nombre, $email) {
        parent::__construct($id, $nombre, $email);
        $this->fechaRegistro = DateTime::createFromTimestamp("d/m/y");
    }

    public function getTipo(): string {
        return "Cliente";
    }

    public function diasRegistrado(): int {
        $dias = 0;

        // metodo datetime que no esta en apuntes...

        return $dias;
    }

    public function getInfo(): string {
        return $this->getTipo() . " " . $this->nombre . " - " . $this->email;
    }

    public function guardar(): bool {
        $guardadoCorrecto = false;

        try {
            $pdo = getConexion();

            $sql = "SELECT * FROM clientes";
            $consulta = $pdo->prepare($sql);
            $consulta->execute();
            $listaClientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

            // Recorrer
            $yaExiste = false;
            foreach ($listaClientes as $c) {
                if ($c['id'] == $this->id) {
                    $yaExiste = true;
                    break;
                }
            }

            if ($yaExiste) {
                $sql = "UPDATE clientes SET id = ?, nombre = ?, email = ?, fechaRegistro = ?";
            } else {
                $sql = "INSERT INTO clientes (id, nombre, email, fechaRegistro) VALUES (?, ?, ?, ?)";
            }

            $consulta = $pdo->prepare($sql);
            $consulta->execute([$this->id, $this->nombre, $this->email, $this->fechaRegistro]);

            $guardadoCorrecto = true;

        } catch (Exception $e) {
            echo "Error en guardar(): " . $e->getMessage();
        }

        return $guardadoCorrecto;
    }

    static public function findById(int $id): ?Cliente {
        $cliente = null;

        try {
            $pdo = getConexion();

            $sql = "SELECT * FROM clientes WHERE id = ?";
            $consulta = $pdo->prepare($sql);
            $consulta->execute([$id]);

            $cliente = $consulta->fetch();
        } catch (Exception $e) {
            echo "Error en findById(): " . $e->getMessage();
        }

        return $cliente;
    }

}